<?php
// database conn
require_once('logics/dpconnection.php');
$querystudent=mysqli_query($conn, "SELECT * FROM enrollment WHERE no ='".$_GET['id']."' ");
while($fetchstudent =mysqli_fetch_array($querystudent))
{
	$fullname= $fetchstudent['fullname'];
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
						<h4>Edit Student <?php echo $fullname  ?></h4>
                        </div>
                    </div>
                </div>
            </div>			           
		</div>         
	</div>

    <?php require_once('includes/scripts.php') ?>
</body>
</html>