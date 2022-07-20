<?php
    // database conn
    require_once('logics/dpconnection.php');
        $sqlfetchenrolledstudents= mysqli_query($conn, "SELECT *FROM subscribers WHERE no='".$_GET['id']."' ");
        while($fetchstudents= mysqli_fetch_array($sqlfetchenrolledstudents ))
        {           
            $email= $fetchstudents['email'];
        }

?>
<!DOCTYPE html>
<html>
     <?php require_once('includes/links.php')?>
    <body>
        <!-- All our code. begins here   -->
        <!-- beginning of header-->
            <?php require_once('includes/navbar.php') ?>
        <!-- end of header -->
        <br>
        <!-- sidebar starts -->
            <?php require_once('includes/sidebar.php') ?>
        <!-- sidebar ends -->
        
        <div class="main-content pt-4">
            <div class="container-fluid">
                <div class="row">    
                    <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-dark text-white text-center"> 
                                    <a class="float-left text-white pb-1" href="subscribe.php">    
                                            <span ><i class="fa fa-arrow-circle-left"></i> </span>                  
                                            <span>Back</span>
                                    </a>
                                    <h4 class="card-title">personal information</h4>    
                                </div> 
                                <div class="card-body"> 
                                    <ul class="list-group">
                                        <li class="list-group-item">Email <span class="float-right badge badge-info "><?php echo $email ?> </span></li>
                                    </ul>
                                </div>                                
                            </div>
                    </div>               
                </div>              
            </div>	   						            					
        </div>
        <?php require_once('includes/scripts.php') ?>
    </body>
</html>