<?php
require_once("../include/membersite_config.php");
session_start();
$pass = $_POST['pass'];
if(!$fgmembersite->StoreAns($pass))
{
}

if($pass=="121295")
{
	$_SESSION['level'] = 9;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level9/index.php");
	}
	else
		echo "level not incremented";
}
else
{
	header("Location:./index.php?answer=notcorrect");
}

?>