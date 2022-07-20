<?php
require_once('logics/dpconnection.php');
if(isset($_POST{'addstudent'}))
{
	//fetch form data
		$firstname= $_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$message=$_POST['message'];
	//perfom the sql query
	$insertData = mysqli_query($conn,"INSERT INTO contactus  (firstname,lastname,phonenumber, email, message)
	 VALUES('$firstname','$lastname','$phonenumber','$email','$message') ");
	if($insertData)
	{
		$msg= "student added successfully";
	}
	else
	{
		$msg= "error occured" ;
	}
}
?>