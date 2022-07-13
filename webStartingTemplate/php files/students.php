<?php
require_once ('logics/dpconnection.php');
$sql= mysqli_query($conn, "SELECT *FROM enrollment");
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

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>										
				</div>                 
			</div>  
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive{-sm|-md|-lg|-xl" style="font-size:12px">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th >FullName</th>
                                <th >Phone</th>
                                <th >Email</th>
                                <th >Gender</th>
                                <th >Course</th>                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td> <?php echo $fetchEnrollmentRecord['no']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['fullname']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['phonenumber']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['email']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['gender']  ?></td>
                                    <td> <?php echo $fetchEnrollmentRecord['course']  ?></td>
                                    <td>
                                        <a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>                                                                                                                 
                           <?php }?>                         
                        </tbody>
                    </table>
                </div>
            </div>
		</div>         
	</div>
<?php require_once('includes/scripts.php') ?>

</body>
</html>