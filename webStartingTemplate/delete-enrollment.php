<?php
    // database conn
    require_once('logics/dpconnection.php');
    $sqldeletestudent= mysqli_query($conn, "DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
    if($sqldeletestudent)
    {
        echo "user deleted successfully";
        header('location:students.php');
    }
    else
    {
        echo "error occurred";

    }
?>