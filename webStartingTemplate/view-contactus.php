<?php

    // database conn
    require_once('logics/dpconnection.php');
        $sqlfetchenrolledstudents= mysqli_query($conn, "SELECT *FROM contactus WHERE no='".$_GET['id']."' ");
        while($fetchstudents= mysqli_fetch_array($sqlfetchenrolledstudents ))
    {
        $firstname= $fetchstudents['firstname'];
		$lastname=$fetchstudents['lastname'];
		$phonenumber=$fetchstudents['phonenumber'];
		$email=$fetchstudents['email'];
		$message=$fetchstudents['message'];
		
    }     
?>
<!DOCTYPE html>
<html>	
	<?php require_once('includes/links.php')?>
<body>	

	<!-- All our code. write here   -->
	<!-- beginning of header-->
	  <?php require_once('includes/navbar.php') ?>
	<!-- end of header -->
	<br>
	<!-- sidebar starts -->
	    <?php require_once('includes/sidebar.php') ?>
	<!-- sidebar ends -->
	
	<div class="main-content pt-5">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center"> 
                            <a class="float-left text-white pb-1" href="contactus.php">    
                                <span ><i class="fa fa-arrow-circle-left"></i> </span>                  
                                    <span>Back</span>
                            </a>
                            <h4 class="card-title">personal information</h4>    
                        </div> 
                        <div class="card-body"> 
                            <ul class="list-group">
                                <li class="list-group-item">firstname<span class="float-right badge badge-primary"><?php echo $firstname ?> </span></li>
                                <li class="list-group-item"> lastname<span class="float-right badge badge-info "><?php echo $lastname ?> </span></li>
                                <li class="list-group-item">phonenumber<span class="float-right badge badge-secondary"><?php echo $phonenumber ?> </span></li>
                                <li class="list-group-item"> email<span class="float-right badge badge-primary"><?php echo $email ?> </span></li>
                            </ul>
                        </div>
                    </div> 
                </div>
                    <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-dark text-white text-center">
                                    <h4 class="card-title">other information</h4>
                                </div> 
                                <div class="card-body"> 
                                    <ul class="list-group">                                      
                                        <li class="list-group-item">message<span class="float-right badge badge-info "><?php echo $message?> </span></li>
                                    </ul>
                                </div>                                
                            </div>
                    </div>  
                                    
                </div>
			</div> 
      </div>	   						            					
    </div>
    <?php require_once('includes/scripts.php') ?>
</body>
</html>