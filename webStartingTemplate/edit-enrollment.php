<?php
// database conn
require_once('logics/dpconnection.php');
$querystudent=mysqli_query($conn, "SELECT * FROM enrollment WHERE no ='".$_GET['id']."' ");
while($fetchstudent =mysqli_fetch_array($querystudent))
{
	$fullname= $fetchstudent['fullname'];
	$phonenumber=$fetchstudent['phonenumber'];
	$email=$fetchstudent['email'];
	$gender=$fetchstudent['gender'];
	$course=$fetchstudent['course'];
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
							<h4>Edit Student </h4>
                        </div>
						<div class="card-body">
						    <form action="students.php" method="POST">
							    <div class="row">								
									<div class="mb-3 col-lg-6">
										<label for="fullname" class="form-label">Full name</label>
										<input type="text"name="fullname" value="<?php echo $fullname  ?>" class="form-control" placeholder="Enter Your Full name">
									</div> 
									<div class="mb-3 col-lg-6">
										<label for="phonenumber" class="form-label">Phone Number</label>
										<input type="tel" name="phonenumber" value="<?php echo $phonenumber ?>" class="form-control" placeholder="+254">
									</div>
                                </div>
								<div class="row">

								
									<div class="mb-3 col-lg-6">
										<label for="Emailaddress" class="form-label">Email Address</label>
										<input type="email" name="email"  value="<?php echo $email ?>" class="form-control " placeholder=" please enter Your Email">
									</div>
									<div class="mb-3 col-lg-6">
										<label for="gender" class="form-label">What's Your gender </label>
										<select class="form-select form-control" name="gender" aria-label="Disabled select example" required>                       
											<option ><?php echo $gender ?></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
										        
									</div> 
							    </div>      
								                                   
									<div class="col-lg-6">
										<label for="message" class="form-label" > <b> What's your preferred course?</b></label>
										<select class="form-select form-control " name="course" aria-label="Disabled select example">
											<option><b><?php echo $course ?></b></option>
											<option value="Web Development and Design">Web Development and Design</option>
											<option value="Data Analysis">Data Analysis</option>
											<option value="Cyber Security">Cyber Security</option>
											<option value="Android App Development">Android App Development</option>
										</select>	
									</div> 
									<div class="row">
										<div class="mb-3 col-lg-12">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
												<label class="form-check-label"><b> Agree terms and condition</b></label> 
											</div>
										</div>										
									</div>									 
									<div class="col-lg-6">
										<button type="submit" name="submitapplication" class="btn btn-primary">Submit application</button>
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