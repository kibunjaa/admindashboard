<?php
$msg="";
  require_once('logics/process-add.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- beginning of link -->
         <?php require_once('includes/links.php')?>
       <!-- end of link -->
    </head> 
<body>
	<!-- All our code. write here   -->

    <!-- beginning of header-->
      <?php require_once('includes/navbar.php') ?>
	<!-- end of header -->
    <br>

	<!-- sidebar starts -->
	<?php require_once('includes/sidebar.php') ?>
	<!-- sidebar ends -->

    <!--scripts starts here-->
    <?php require_once('includes/scripts.php') ?>
    <!--scripts ends here-->
    

    <div class="main-content">
	   <div class="container-fluid">
        <div class="card">    
            <div class="card-header bg-dark text-white text-center"> 
                <a class="float-left text-white " href="contactus.php">    
                    <span ><i class="fa fa-arrow-circle-left"></i> </span>                  
                    <span >Back</span>   
                </a>
                <h4>Add Student </h4>
					<span class="text-success"> <?php echo $msg  ?></span>       
            </div>
              <div class="card-body">  
                <form action="add-student.php" method="POST">
                    <div class="row">  
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">								
                                        <div class="mb-3 col-lg-6">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control"name="firstname" placeholder="Enter Your First Name">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="lastname" placeholder="Enter Your Last Name">
                                        </div>
                                    </div>	
                                    <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <label for="phonenumber" class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" name="phonenumber" placeholder="Enter Your Phone Number">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="Emailaddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="message" class="form-label">Your message</label>
                                            <input type="text" class="form-control" name="message" placeholder="Enter Your message">
                                        </div>
                                    </div>	
                                    <br>								                                   															
                                </div>
                            </div>
                    </div>
                        <div class="row pt-1">
                            <div class="col-lg-6">
                                <button type="submit" name="addstudent" class="btn btn-primary">Add Student</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>	
		</div>         
	</div>
</body>
</html> 