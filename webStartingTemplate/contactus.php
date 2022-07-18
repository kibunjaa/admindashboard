<?php
    require_once ('logics/dpconnection.php');
    $sql= mysqli_query($conn, "SELECT *FROM contactus");
?>

<!DOCTYPE html>
<html>
    <!-- beginning of link -->
      <?php require_once('includes/links.php')?>
    <!-- end of link -->
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
			<div class="row">				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
                        <a class="float-left text-white " href="index.php">    
						    <span ><i class="fa fa-arrow-circle-left"></i> </span>                  
						        <span >Back</span>
					    </a>
						<span>Contact Us</span>
					</div>										
				</div>                 
			</div>  
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive{-sm|-md|-lg|-xl" style="font-size:12px">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th >Firstname</th>
                                <th >Lastname</th>
                                <th >Phone</th>
                                <th >Email</th>
                                <th >Message</th>                
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td> <?php echo $fetchEnrollmentRecord['no']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['firstname']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['lastname']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['phonenumber']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['email']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['message']  ?></td>
                                    <td>
                                        <a href="edit-contactus.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="view-contactus.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="delete-contactus.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>  
                                                                                                                                          
                           <?php }?>                           
                        </tbody>
                    </table>
                </div>
            </div>
		</div>         
	</div>
</body>
</html> 