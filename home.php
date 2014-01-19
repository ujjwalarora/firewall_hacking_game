<?php
require_once("./include/membersite_config.php");
session_start();

$useremail=$fgmembersite->UserEmail();
$_SESSION['email']=$useremail;

//TWO MAIN SESSIONS - LEVEL,,USERNAME
$level=$fgmembersite->level();
$_SESSION['level']=$level;
$_SESSION['uname']=$fgmembersite->UserUsername();
$shav1=$_GET['shav1'];

//REDIRECT TO RESPECTIVE LEVEL
$fgmembersite->redirect($shav1);
?>