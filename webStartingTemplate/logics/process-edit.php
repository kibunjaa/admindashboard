<?php
require_once('logics/dpconnection.php');
if(isset($_POST{'updatecontactus'}))
{
	//fetch form data
	    $firstname= $_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		
	//perfom the sql query
	$updaterecords= mysqli_query($conn, "UPDATE contactus SET firstname= '$firstname', lastname='$lastname', phonenumber ='$phonenumber', email='$email', message='$message'
	WHERE no='".$_GET['id']."' ");
	if($updaterecords)
	{
		$msg= "Record updated successfully";
	}
	else
	{
		$msg= "error occured".mysqli_error($conn);
	}
}
?>