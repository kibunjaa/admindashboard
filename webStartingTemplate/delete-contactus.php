<?php
    // database conn
    require_once('logics/dpconnection.php');
    $sqldeletestudent= mysqli_query($conn, "DELETE FROM contactus WHERE no='".$_GET['id']."' ");
    if($sqldeletestudent)
    {
        echo "user deleted successfully";
        header('location:contactus.php');
    }
    else
    {
        echo "error occurred";

    }
?>