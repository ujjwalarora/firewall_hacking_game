<?php
session_start();
require_once("../include/membersite_config.php");
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("../login-main.php");
    exit;
}
if($_SESSION['level']!=11)
{
	die("Good...! But not GREAT <a href='../index.php'>Go Back</a> first!");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Level 11</title>

<link rel="stylesheet" type="text/css" href="../style/css1.css" />
<link rel="stylesheet" type="text/css" href="../style/css2.css" />
<script src="../js/js1.js" type="text/javascript"></script>
<script src="../js/js2.js" type="text/javascript"></script>
<script src="../js/js3.js" type="text/javascript"></script>
<script src="val.js" type="text/javascript"></script>

</head>

<body>

<div id="wrapper">

<div id="navigation">

<a href="" id="logotype">

</a>

<ul class="level_0">
<li class="home"><a href="../index.php" class="main"><span>Home</span></a></li>

<li class="services stingray">
	<a href="../instructions.php" class="main"><span>Instructions</span></a>
</li>

<li class="portfolio stingray">
	<a href="../leaderboard.php" class="main"><span>Leaderboard</span></a>
</li>

<li class="about stingray">
	<a href="../forum.php" target="_blank" class="main"><span>Forum</span></a></li>

<li class="contact"><a href="../contact.php" class="main"><span>Contact</span></a></li>

</ul>

<div style="float:right; margin-top:15px; margin-right:15px">
<font color="#FFFFFF" size=4px><a href="../logout.php">LOGOUT</a></font>
</div>

</div>





<div id="interior">

<div class="section topped">


<h1 style="color:#CCC">Level 11 </h1><br />
<?php if(isset($_GET['answer']))
{
	if($_GET['answer']==notcorrect)
	{
	echo '<h5 style="color:#fff">failed...</h5>';	
	}
	}?>
<center>
<form action="process.php" method="post">
<h3 style="color:#CCC">Username:
<br /><input type="text" name="user" /><br />
Password:<br /></h3>
<input type="password" name="pass"  /><br /><br />
<input type="submit" /></form>
<br>
<br>
</center>

</div>
<ul class="features">
<li><a href="../forum.php" target="_blank" class="labs tip"><span class="tt">DISCUSSION FORUM</span></a></li>
</ul>

<div class="clear"></div>
</div></div>

<div class="clear"></div>

<hr>
</body>
</html>
//md5