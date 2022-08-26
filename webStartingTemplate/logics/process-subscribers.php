<?php
require_once('logics/dpconnection.php');
if(isset($_POST{'submitbutton'}))
{
	//fetch form data
	$email= $_POST['email'];

	//perfom the sql query
	$updaterecords= mysqli_query($conn,"INSERT INTO subscribers(email)
    VALUES('$email')" );
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