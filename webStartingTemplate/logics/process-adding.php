<?php
require_once('logics/dpconnection.php');
if(isset($_POST{'addstudents'}))
{
	//fetch form data
	$fullname= $_POST['fullname'];
	$phonenumber= $_POST['phonenumber'];
	$email= $_POST['email'];
	$gender= $_POST['gender'];
	$course= $_POST['course'];

	//perfom the sql query
	$updaterecords= mysqli_query($conn,"INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phonenumber','$email','$gender','$course')" );
	if($updaterecords)
	{
		$msg= "added student successfully";
	}
	else
	{
		$msg= "error occured";
	}
}
?>