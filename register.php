<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$mydb=mysql_select_db("contest") or die (mysql_error());
if(isset($_POST['signup']))
{
	$name = $_POST['name'];
	$pass = $_POST['password'];
	$emailid = $_POST['email'];

	if($name=='')
	{
		echo "Please enter your name<br>";
		exit();
	}
	if($pass=='')
	{
		echo "Please enter your password<br>";
		exit();
	}
	if($emailid=='')
	{
		echo "Please enter your email id<br>";
		exit();
	}
	else{

	$query="insert into user (name,password,email) values ('$name','$pass','$emailid')";
	if(mysql_query($query))
	{
		echo"<h3>Registered Successfully</h3>";
	}
        }
}
?>