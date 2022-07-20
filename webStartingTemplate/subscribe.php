<?php
    require_once ('logics/dpconnection.php');
    $sql= mysqli_query($conn, "SELECT *FROM subscribers");
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
                <a href="add-student.php">    
                    <span><i class="fa fa-edit"></i> </span>      
                    <span></span>
                </a>
                 <span>Subscribe Us</span>
              </div>
            </div>	
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive{-sm|-md|-lg|-xl" style="font-size:12px">
                        <thead>
                            <tr>                               
                              <th >Email</th>               
                            </tr> 
                        </thead>
                        <tbody>   
                            <?php $count=1;
                                while($row = mysqli_fetch_array($sql)) {?>                  
                            <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td> <?php echo $count ?></td>                            
                                    <td> <?php echo $fetchEnrollmentRecord['email']  ?></td>
                                    <td>
                                        <a href="edit-subscribe.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="view-subscribe.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="delete-subscribe.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>  
                                 <?php $count++; } ?>                                                                                                    
                           <?php }?>                           
                        </tbody>
                    </table>
                </div>
            </div>										
          </div>     
        </div>       
        </div>
    </div>
</body>
</html> 