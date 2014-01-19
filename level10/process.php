<?php
require_once("../include/membersite_config.php");
session_start();
if(!$fgmembersite->StoreAns($pass))
{
}

if($_COOKIE['auth']=='a6105c0a611b41b08f1209506350279e')
{
	$_SESSION['level'] = 11;
	if($fgmembersite->IncrementLevel())
	{	header("Location: ../level11/index.php");
	}
	else
		echo "level not incremented";
}
else
{
	header("Location:./index.php?answer=notcorrect");
}

?>