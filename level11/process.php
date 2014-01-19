<?php
require_once("../include/membersite_config.php");
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
if(!$fgmembersite->StoreAns($user))
{
}
if(!$fgmembersite->StoreAns($pass))
{
}

if($user=='facebook' && $pass='slope')
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