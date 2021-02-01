<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NATURide</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Activity Status</a>
                    </li>
					<li>
                        <a  class="active-menu" href="activity.php"><i class="fa fa-plus-circle"></i>Add Activity</a>
                    </li>
                    <li>
                        <a  href="activitydel.php"><i class="fa fa-pencil-square-o"></i> Delete Activity</a>
                    </li>
					

                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ACTIVITY <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW ACTIVITY
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>ID</label>
                                    <br>
                                    <input name="id" class="form-control" required>
                                            
                                            
                               </div>
                            <div class="form-group">
                                            <label>Type Of Activity</label>
                                <br>
                                            <input name="tactivity" class="form-control" required>
                              </div>
							  
								<div class="form-group">
                                            <label>No of People</label>
                                    <br>
                                    <input name="npeople" class="form-control" required>
                                            
                                            
                               </div>
                            <div class="form-group">
                                            <label>Place</label>
                                    <br>
                                    <input name="place" class="form-control" required>
                                            
                                            
                               </div>
                            <div class="form-group">
                                            <label>Cost per Person</label>
                                    <br>
                                    <input name="costperperson" class="form-control" required>
                                            
                                            
                               </div>
							 <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
							</form>
							<?php
							 $con=mysqli_connect("localhost","root","","naturide");
							 if(isset($_POST['add']))
							 {
                                        
                                        $id=$_POST['id'];
										$tactivity =$_POST['tactivity'];
										$npeople = $_POST['npeople'];
				                        $place =$_POST['place'];
                                        $costperperson =$_POST['costperperson'];
										
										
										$sql ="INSERT INTO `activity`( `id`,`tactivity`, `npeople`,`place`,`cost`) VALUES ('$id','$tactivity','$npeople','$place','$costperperson')" ;
                                 
                                        
										if(mysqli_query($con,$sql))
										{
										      echo '<script>alert("New Activity Added") </script>' ;
										}
                                        else 
                                        {
											echo '<script>alert("Sorry ! Check The System") </script>' ;
                                        }
							 }
							
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Activity INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
						$sql = "select * from activity";
						$re = mysqli_query($con,$sql)
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Activity ID</th>
                                            <th>Activity Type</th>
                                            <th>Place</th>
											<th>Number of People</th>
                                            <th>Cost per person</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['id'];
											 
											
												echo "<tr>
													  <td>".$row['id']."</td>
													  <td>".$row['tactivity']."</td>
                                                      <td>".$row['place']."</td>
												      <th>".$row['npeople']."</th>
                                                      <th>".$row['cost']."</th>
												</tr>";
											
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    
                       
                            
							  
							 
							 
							  
							  
							   
                       </div>
                        
                    </div>
                </div>
                
               
            </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    </div>
   
</body>
</html>
