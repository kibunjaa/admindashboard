<?php
require_once('logics/dpconnection.php');
if(isset($_POST{'submitbutton'}))
{
	//fetch form data
		$email=$_POST['email'];
	//perfom the sql query
	$updaterecords = mysqli_query($conn, "UPDATE subscribers SET  email='$email',WHERE no='".$_GET['id']."'  ");
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