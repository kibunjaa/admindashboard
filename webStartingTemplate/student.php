<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Franziska Kibunja">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
    
</head>
<body>
	<!-- All our code. write here   -->
	 <div class="header">
        <a href="index.php">
		<img src="images/zalegologo.jpg" alt="Zalego" height="50" width="50" class="rounded-circle"> 
		</a>
	</div> 

	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="">    
						<span><i class="fa fa-group"></i> </span>                  
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">   
						<span><i class="fa fa-folder-open"></i> </span>             
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">     
						<span><i class="fa fa-graduation-cap"></i> </span>        
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student</span>
					</div>										
				</div>                 
			</div>  
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">phone</th>
                                <th scope="col">email</th>
                                <th scope="col">gender</th>
                                <th scope="col">course</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Zigrid Wanjiru</td>
                                <td>0724602129</td>
                                <td>zigy@gmail.com</td>
                                <td>Female</td>
                                <td>Web Design and Development</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Celline Wanjiku</td>
                                <td>0723619228</td>
                                <td>celline@gmail.com</td>
                                <td>Female</td>
                                <td>Cyber Security</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Naren Vyas</td>
                                <td>918524369</td>
                                <td>Naren@gmail.com</td>
                                <td>Male</td>
                                <td>Data Analysis</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Siddhart Nigam</td>
                                <td>072328562</td>
                                <td>Nigam@gmail.com</td>
                                <td>Male</td>
                                <td>Cyber Security</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
		</div>         
	</div>

<script src="webStartingTemplate/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/webStartingTemplate/bootstrap/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>