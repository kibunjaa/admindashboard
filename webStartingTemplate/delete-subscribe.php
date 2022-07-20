<?php
    // database conn
    require_once('logics/dpconnection.php');
    $sqldeletestudent= mysqli_query($conn, "DELETE FROM subscribers WHERE no='".$_GET['id']."' ");
    if($sqldeletestudent)
    {
        echo "user deleted successfully";
        header('location:subscribe.php');
    }
    else
    {
        echo "error occurred".mysqli_error($conn);

    }
?>