<?php
	$msg="";
	// database conn
	require_once('logics\dpconnection.php');
	$querystudent=mysqli_query($conn, 
			"SELECT * FROM contactus WHERE no ='".$_GET['id']."' ");
	while($fetchstudent =mysqli_fetch_array($querystudent))
	{
		$firstname= $fetchstudent['firstname'];
		$lastname=$fetchstudent['lastname'];
		$phonenumber=$fetchstudent['phonenumber'];
		$email=$fetchstudent['email'];
		$message=$fetchstudent['message'];
		$id=$fetchstudent['no'];
	}
	require_once('logics/process-edit.php');

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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
							<a class="float-left text-white " href="contactus.php">    
						          <span ><i class="fa fa-arrow-circle-left"></i> </span>                  
						          <span >Back</span>
					          </a>
							<h4>Edit Student </h4>
							<span class="text-success"> <?php echo $msg  ?></span>      
                        </div>
						<div class="card-body">
						    <form action="edit-contactus.php?id=<?php echo $id ?>" method="POST">
								<div class="row">								
									<div class="mb-3 col-lg-6">
										<label for="firstname" class="form-label">First Name</label>
										<input type="text" class="form-control"name="firstname"  value="<?php echo $firstname  ?>" placeholder="Enter Your First Name">
									</div>
									<div class="mb-3 col-lg-6">
										<label for="lastname" class="form-label">Last Name</label>
										<input type="text" class="form-control" name="lastname"  value="<?php echo $lastname  ?>" placeholder="Enter Your Last Name">
									</div>
								</div>	
								<div class="row">
										<div class="mb-3 col-lg-6">
											<label for="phonenumber" class="form-label">Phone Number</label>
											<input type="tel" class="form-control" name="phonenumber" value="<?php echo $phonenumber  ?>"  placeholder="Enter Your Phone Number">
										</div>
										<div class="mb-3 col-lg-6">
											<label for="Emailaddress" class="form-label">Email Address</label>
											<input type="email" class="form-control" name="email"  value="<?php echo $email  ?>" placeholder="Enter Your Email Address">
										</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<label for="message" class="form-label">Your message</label>
										<input type="text" class="form-control" name="message"  value="<?php echo $message ?>" placeholder="Enter Your message">
									</div>
								</div>	
								<br>								                                   								
								<div class="row pt-1">
									<div class="col-lg-6">
										<button type="submit" name="updatecontactus" class="btn btn-primary">Update records</button>
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