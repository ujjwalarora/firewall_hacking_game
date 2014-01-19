<?php
require_once("../include/membersite_config.php");
session_start();
$pass = $_GET['shva1'];
if(!$fgmembersite->StoreAns($pass))
{
}

if($pass==$_SERVER['REMOTE_ADDR'])
{
	$_SESSION['level'] = 10;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level10/index.php");
	}
	else
		echo "level not incremented";
}
else
{
	header("Location:./index.php?answer=notcorrect");
}

?>