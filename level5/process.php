<?php
require_once("../include/membersite_config.php");
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];
if(!$fgmembersite->StoreAns($pass))
{
}

if($user=="csiphoenix12" and $pass=="firewall2012hack")
{
	 $_SESSION['level'] = 6;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level6/index.php");
	}
}
else
{
	header("Location:./index.php?answer=notcorrect");
}
?>