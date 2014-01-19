<?php
	define('INCLUDE_CHECK',1);
	require "functions.php";

ob_start();

$uid=$_GET['User_id'];
$name=$_GET['Name'];
$age=$_GET['Age'];
$about_me=$_GET['AboutMe'];
$gender=$_GET['Gender'];
$birthday=$_GET['Birthday'];
$email=$_GET['Email'];
$educationType=$_GET['educationType'];
$educationYear=$_GET['educationYear'];
$educationConcentration=$_GET['educationConcentration'];
$educationName=$_GET['educationName'];

$get_edu_names=explode(";","$educationName");
$edu_name = array_unique($get_edu_names);

$college_name;
$college_passing_year='lol';
$ans=0;

$i=0;
foreach($edu_name as $value)
{	
	if($value=="Delhi College of Engineering" || $value=="Delhi Technological University (Formerly DCE)" || $value=="Delhi Technological University")
	{
	$college_name="Delhi Technological University";
	$ans=1;
	break;
	}
}

$edu_year=explode(";","$educationYear");
foreach($edu_year as $value)
{	
	$college_passing_year = $value;
	
}





/*
$edu_name1=$edu_name[0];
$edu_name2=$edu_name[1];
$edu_name3=$edu_name[2];


echo $edu_name1;
echo "<br>";
echo $edu_name2;
echo "<br>";
echo $edu_name3;
*/

echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $about_me;
echo "<br>";
echo $email;
echo "<br>";
echo $educationType;
echo "<br>";
echo $educationConcentration;
echo "<br>";
echo $educationYear;
echo "<br>";
echo $educationName;
echo "<br>";
echo $birthday;
echo "<br>";
echo $gender;
echo "<br>";



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creating a Facebook-like Registration Form with jQuery</title>

<link rel="stylesheet" type="text/css" href="demo.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>


</head>

<body>

<?php
if($ans==0)
echo
'<script type="text/javascript">
alert("STOP!!  You doesnt belong to Delhi college of Engineering. So, you cant access this app ");
</script>'

?>




<div id="div-regForm">

<div class="form-title">Sign Up</div>
<div class="form-sub-title">Its free and any DCEite / DTUian can join !!</div>

<form id="regForm" action="submit.php" method="post">

<table>
  <tbody>
  <tr>
    <td><label for="fname">First Name:</label></td>
    <td><div class="input-container"><input name="fname" id="fname" type="text" value="<?php echo $name; ?>"/></div></td>
  </tr>
  <tr>
    <td><label for="lname">Age:</label></td>
    <td><div class="input-container"><input name="age" id="age" type="text" value="<?php echo $age; ?>" /></div></td>
  </tr>
  <tr>
    <td><label for="email">Your Email:</label></td>
    <td><div class="input-container"><input name="email" id="email" type="text" value="<?php echo $email; ?>" /></div></td>
  </tr>
  <tr>
    <td><label for="pass">About Me:</label></td>
    <td><div class="input-container"><input name="ame" id="ame" type="text" value="<?php echo $about_me; ?>" /></div></td>
  </tr>
  <tr>
    <td><label for="sex-select">I am:</label></td>
    <td>
    <div class="input-container">
    <select name="sex-select" id="sex-select">
    <option value="0">Select Sex:</option>
    <option value="1">Female</option>
    <option value="2">Male</option>
    </select>
    </div>
    
    </td>
  </tr>
  <tr>
    <td><label>Birthday:</label></td>
    <td>
    <div class="input-container">
    <select name="month"><option value="0">Month:</option><?=generate_options(1,12,'callback_month')?></select>
    <select name="day"><option value="0">Day:</option><?=generate_options(1,31)?></select>
	<select name="year"><option value="0">Year:</option><?=generate_options(date('Y'),1900)?></select>
    </div>
    </td>
  </tr>
  <tr>
    <td><label for="fname">College:</label></td>
    <td><div class="input-container"><input name="college" id="college" type="text" value="<?php echo $college_name; ?>"/></div></td>
  </tr>
  <tr>
    <td><label>Branch:</label></td>
    <td>
    <div class="input-container">
    <select name="Branch"><option value="COE">COE</option><option value="ECE">ECE</option><option value="MECH">MECH</option><option value="EEE">EEE</option></select>
  </div>
  </td>
  </tr>
   <tr>
    <td><label for="fname">Roll Number:</label></td>
    <td><div class="input-container"><input name="roll_no" id="roll" type="text" value="xxx/xxx/xxx" </div></td>
  </tr>
  <tr>
    <td><label>Degree:</label></td>
    <td>
    <div class="input-container">
    <select name="Degree"><option value="B.Tech">B.Tech</option><option value="M.Tech">M.Tech</option></select>
  </div>
  </td>
  </tr>
  <tr>
    <td><label for="fname">Passing Year:</label></td>
    <td><div class="input-container"><input name="pass_year" id="year" type="text" value="<?php echo $college_passing_year; ?>" </div></td>
  </tr>
  
  <td>&nbsp;</td>
  <td><input type="submit" class="greenButton" value="Sign Up" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />
</td>
  </tr>
  
  
  </tbody>
</table>

</form>

<div id="error">
&nbsp;
</div>

</div>

</body>
</html>
