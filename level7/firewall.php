<?php
require_once("../include/membersite_config.php");
session_start();

$password=$_POST['password(alphanumeric)'];
if(!$fgmembersite->StoreAns($password))
{
}

$key="7324687";
if($password==$key)
{
	 $_SESSION['level'] = 8;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level8/index.php");
	}
}
else
{
	header("Location:./index.php?answer=notcorrect");
}
?>