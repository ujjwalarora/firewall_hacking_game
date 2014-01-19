<?php
require_once("../include/membersite_config.php");
session_start();
$pass = $_POST['pass'];
if(!$fgmembersite->StoreAns($pass))
{
}

if($pass=="#000")
{
	$_SESSION['level'] = 2;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level2/index.php");
	}
}
else{
		header("Location:./index.php?answer=notcorrect");
}

?>