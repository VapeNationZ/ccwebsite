<?php
$con=mysql_connect("localhost","root","") or die ("unable to connect");
$mydb = mysql_select_db("contest") or die ("db not found");
if($con)
	{echo"connection  established";}
else 
    {echo"error in connection";}
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$roll_no=$_POST['roll_no'];
	$branch=$_POST['branch'];
	$email=$_POST['email'];

	$query="Insert into data (fname,lname,roll_no,branch,email) values('$fname','$lname','$roll_no','$branch','$email')";
	if(mysql_query($query))
	{
		echo"<h3>Students data is inserted successfully</h3>";
	}
}
?> 