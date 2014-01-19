<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login-main.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FIREWALL '12</title>

<link rel="stylesheet" type="text/css" href="./style/css1.css" />
<link rel="stylesheet" type="text/css" href="./style/css2.css" />
<script src="./js/js1.js" type="text/javascript"></script>
<script src="./js/js2.js" type="text/javascript"></script>
<script src="./js/js3.js" type="text/javascript"></script>

</head>

<body>

<div id="wrapper">

<div id="navigation">

<a href="" id="logotype">

</a>

<ul class="level_0">
<li class="home"><a href="/" class="main"><span>Home</span></a></li>

<li class="services stingray">
	<a href="instructions.php" class="main"><span>Instructions</span></a>
</li>

<li class="portfolio stingray">
	<a href="leaderboard.php" class="main"><span>Leaderboard</span></a>
</li>

<li class="about stingray">
	<a href="forum.php" target="_blank" class="main"><span>Forum</span></a></li>

<li class="contact"><a href="contact.php" class="main"><span>Contact</span></a></li>

</ul>

</div>

<!--
<div id="sideblade">

<ul id="subnavigation">
	<li class="identity"><a href="/services/identity/">
		<small>Identity</small>
		<small>Logos, business cards, wallpapers, banner ads, print design...</small>
	</a></li>
	<li class="design"><a href="/services/design/">
		<small>Design</small>
		<small>Websites, User Interfaces, Icons, Web Applications, Typography...</small>
	</a></li>
	<li class="code"><a href="/services/code/">
		<small>Code</small>
		<small>XHTML/CSS templates, AJAX, Javascript, Special Effects...</small>
	</a></li>
</ul>

</div>
-->


<div id="interior">

<div class="section topped">



<h1 style="color:#3F0">Welcome back <?= $fgmembersite->UserFullName(); ?>!</h1>
<br /><br />


<?php 
$username=$fgmembersite->UserUsername();
$level=$fgmembersite->level();
$_SESSION['level']=$level;
$levelsha256=sha1(sha1(md5(md5($level))));
echo"<div style=margin-left:80px><a href='home.php?shav1=$levelsha256'><img src=img/hacker10.gif /></a></div> "
?>
<br>
<p><a href='change-pwd.php'>Change password</a></p>
<p><a href='logout.php'>Logout</a></p>



</div>




<div class="clear"></div>
</div></div>

<div class="clear"></div>
</div>
</div>


</body>
</html>
