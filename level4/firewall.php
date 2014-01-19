<?php
require_once("../include/membersite_config.php");
session_start();
$password=$_POST['password'];
if(!$fgmembersite->StoreAns($password))
{
}
$key="wsproads";


if($password==$key){
	$_SESSION['level'] = 5;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level5/index.php");
	}
	else
		echo "level not incremented";
}
else
{
	header("Location:./index.php?answer=notcorrect");
}

?>
