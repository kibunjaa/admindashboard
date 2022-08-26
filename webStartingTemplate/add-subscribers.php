<?php
  $msg= "";
    require_once('logics/process-subscribers.php')
?>

<!DOCTYPE html>
<html>
    <head>
      <?php require_once('includes/links.php')?>
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
	
	<div class="main-content pt-5">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
							<a class="float-left text-white " href="subscribe.php">    
						          <span ><i class="fa fa-arrow-circle-left"></i> </span>                  
						          <span >Back</span>
					          </a>
							<h4>Add subscribers </h4>
							<span class="text-success"> <?php echo $msg  ?></span>      
                        </div>
						<div class="card-body">
						    <form action="add-subscribers.php" method="POST">
							    <div class="row">
                                    <div class="mb-3 col-lg-6">
										<label for="Emailaddress" class="form-label">Email Address</label>
										<input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
									</div>								
                                </div>					                                   								
								<div class="row pt-1">
									<div class="col-lg-6">
                                        <button type="submit"  name="submitbutton" class="btn btn-primary">Subscribe</button>
									</div>
								</div>							
							</form>
						</div>
                    </div>
                </div>
			</div> 
      </div>	   						            					
    </div>
    <?php require_once('includes/scripts.php') ?>
</body>
</html>