<?php
require_once("../include/membersite_config.php");
session_start();
$pass = $_POST['pass'];
if(!$fgmembersite->StoreAns($pass))
{
}

if($pass=="phoenixfirewall12")
{
	$_SESSION['level'] = 3;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level3/index.php");
	}
	else
		echo "level not incremented";
}
else
{
	header("Location:./index.php?answer=notcorrect");
}

?>