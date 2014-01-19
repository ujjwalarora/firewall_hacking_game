<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
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
	<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>    

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


<h3>You have been ~~HACKED!~~</h3>


<!-- Form Code Start -->
<div id='fg_membersite' style="float:left">
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='institution' >Institution*:</label><br/>
    <input type='text' name='institution' id='institution' value='<?php echo $fgmembersite->SafeDisplay('institution') ?>' maxlength="100" /><br/>
    <span id='register_institution_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
</div>
<!--Facebook like boox-->
<div style="float:left; margin-left:30px;" >
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFirewall-12%2F233205656763733&amp;width=292&amp;height=290&amp;colorscheme=dark&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true&amp;appId=240364842641954" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:290px;" allowTransparency="true"></iframe>
</div>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

<!--
Form Code End (see html-form-guide.com for more info.)
-->



<div class="clear"></div>
</div></div>

<div class="clear"></div>
</div>
</div>


</body>
</html>
