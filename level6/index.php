<?php
session_start();
require_once("../include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("../login-main.php");
    exit;
}
if($_SESSION['level']!=6)
{
	die("Good...! But not GREAT <a href='../index.php'>Go Back</a> first!");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FIREWALL '12</title>

<link rel="stylesheet" type="text/css" href="../style/css1.css" />
<link rel="stylesheet" type="text/css" href="../style/css2.css" />
<script src="../js/js1.js" type="text/javascript"></script>
<script src="../js/js2.js" type="text/javascript"></script>
<script src="../js/js3.js" type="text/javascript"></script>

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
<h1 style="color:#CCC">Level 6 </h1><br />
<br /><br />
<?php
if(isset($_GET['answer']))
{
	if($_GET['answer']=='notcorrect')
	{
		echo '<h3 style="color:#ccc">Try....Until you SUCCEED</h3>';
	}
}
?>
<h4 style="color:#FFF">A novice system administrator first installed an old version of
php on his server and then made this stupid program to get the
authentication of users.You are the lead developer for the system so
instead of dealing with the sys admin you decide yourself to hack the
system .So what relative url you need to hit in the browser and also which
setting you must change so that others do not hack the system in a
similar fashion.Comment on that.The file name is auth.php 
</h4>
<p style="color:#FFF">PHP code 
<p style="color:#FFF"> $user = $_GET['user'];
<p style="color:#FFF">$pass = $_GET['pass'];
  <p style="color:#FFF">      if (isAuthed($user,$pass))
        {
                $passed=TRUE;
        }
        if ($passed==TRUE)
        {
                echo 'you win';
        }
</p>
<p style="color:#FFF">
function isAuthed($a,$b)
        {
                return FALSE;
        }
</p>
</p>
</body>
<form action="process.php" method="POST"><br><br>
       <input type="text" name="url" /><br>
 <input type="text" name="setting" /><br>
 <input type="submit" value="Hack it!!" />
        </form>
        <br>
</div>
        <ul class="features">
<li><a href="../forum.php" target="_blank" class="labs tip"><span class="tt">DISCUSSION FORUM</span></a></li>
</ul><br></div></div>
</body>
</html>