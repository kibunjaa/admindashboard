<?php
require_once('logics/dpconnection.php');
if(isset($_POST{'updateenrollment'}))
{
	//fetch form data
	$fullname= $_POST['fullname'];
	$phonenumber= $_POST['phonenumber'];
	$email= $_POST['email'];
	$gender= $_POST['gender'];
	$course= $_POST['course'];

	//perfom the sql query
	$updaterecords= mysqli_query($conn, "UPDATE enrollment set fullname= '$fullname', phonenumber ='$phonenumber', email='$email', gender= '$gender', course='$course' WHERE no='".$_GET['id']."' ");
	if($updaterecords)
	{
		$message= "Record updated successfully";
	}
	else
	{
		$message= "error occured";
	}
}
?>