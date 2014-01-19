<?php
require_once("../include/membersite_config.php");
session_start();
if(!$fgmembersite->StoreAns($pass))
{
}

if($_POST['pass']=="66")
{
	$_SESSION['level'] = 12;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level12/index.php");
	}
	else
		echo "level not incremented";
}
else
{
	header("Location:./index.php?answer=notcorrect");
}

?>