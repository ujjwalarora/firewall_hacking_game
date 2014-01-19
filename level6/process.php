<?php
require_once("../include/membersite_config.php");
session_start();
$pass=$_POST['url'];
if(!$fgmembersite->StoreAns($pass))
{
}

if(($_POST['url']=='auth.php?passed=true')&&($_POST['setting']=='register_globals'))
{
	$_SESSION['level'] = 7;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level7/index.php");
	}
}
else
{
	header("Location:./index.php?answer=notcorrect");
}
?>