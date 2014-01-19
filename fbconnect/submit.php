<?php

// we check if everything is filled in

if(empty($_POST['fname']) || empty($_POST['age']) || empty($_POST['email']) || empty($_POST['ame']))
{
	die(msg(0,"All the fields are required"));
}


// is the sex selected?

if(!(int)$_POST['sex-select'])
{
	die(msg(0,"You have to select your sex"));
}


// is the birthday selected?

if(!(int)$_POST['day'] || !(int)$_POST['month'] || !(int)$_POST['year'])
{
	die(msg(0,"You have to fill in your birthday"));
}


// is the email valid?

if(!(preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $_POST['email'])))
	die(msg(0,"You haven't provided a valid email"));




$connection = mysql_connect("localhost","root","");
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}


$db_select = mysql_select_db("fbconnect");
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}



$query = "SELECT uid FROM users WHERE uid = '{$uid}'";
$result_check = mysql_query($query);

$check = mysql_num_rows($result_check);


if($check>=1)
{
	echo "Already registered !!";
	
}

else
{
	$query = "INSERT INTO users (uid,name,age,about_me,email) VALUES ('{$uid}','{$name}','{$age}','{$about_me}','{$email}')";
$result_set = mysql_query($query);	


if (!$result_set)
die("Database query failed: " . mysql_error());

else
{
 
			  
		echo msg(1,"registered.html");
		
}
}






function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}
?>
