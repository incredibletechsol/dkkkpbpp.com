<?php
include('logincommon.php'); 

include("excel.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php include('title.php'); ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	
  
</head>
<body>
    <div id="wrapper">
        <?php include('nav.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                 <h3>Direct Second  Year Admissions</h3>
                <div class="col-md-12">
                    <!-- First Year Un Confirmed Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>New Registerations</h3>
							 <div align='right'>
							     <?php listOfFirstYearUnConfirmedStudents();  ?>
	    					 <a href="admissions/secondyearnotconfirmed.xls" class="btn btn-primary btn-lg">Export To XLS</a>
							</div>
                        </div>
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="secondyear_unconfirmed">
                                    <thead>
                                        <tr>
                                            <th>Candidate Id</th>
					                        <th>Name</th>
											<th>Email Id</th>
										    <th>Mobile No</th>
                                            <th>Gender</th>
											<th>Date Of Birth</th>
                                            <th>Admission To</th>
											<th>Actions</th>
	                                       </tr>
                                    </thead>
                                    <tbody>
										<?php
										include('conn.php');
										$fetch_basic_profile="select * from tbl_admissions where status='R' and admissionTo in('symech') order by candidate_id desc";	
										
										$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
                                       
										while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
											{
											$id=$basic_profile_row[0];
											echo "<tr>";
											echo "<td>".$basic_profile_row[0]."</td>";
											echo "<td>".$basic_profile_row[1]."</td>";
             								echo "<td>".$basic_profile_row[2]."</td>";
											echo "<td>".$basic_profile_row[3]."</td>";
											echo "<td>".$basic_profile_row[4]."</td>";
											echo "<td>".$basic_profile_row[5]."</td>";
											echo "<td>".$basic_profile_row[6]."</td>";
											echo "<td><a href='confirmcandidate.php?id=$id&msg=confirmanddelete'><img src='images/edit.png'></a></td>";
											echo "</tr>";
											} 
										?>
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                    </div>
                   <!-- First Year Un Confirmed End -->
                   
                     <!-- First Year Confirmed Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Confirmed Admissions</h3>
							 <div align='right'>
							 
							 <a href="admissions/secondyearconfirmed.xls" class="btn btn-primary btn-lg">Export To XLS</a>
							</div>
                        </div>
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="secondyear_confirmed">
                                    <thead>
                                        <tr>
                                            <th>Candidate Id</th>
					                        <th>Name</th>
											<th>Email Id</th>
										    <th>Mobile No</th>
                                            <th>Gender</th>
											<th>Date Of Birth</th>
                                            <th>Admission To</th>
											<th>Actions</th>
				                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										include('conn.php');
										$fetch_basic_profile="select * from tbl_admissions where status='C' and admissionTo in('symech') order by candidate_id desc";	
										
										$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
                                       
										while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
											{
											$id=$basic_profile_row[0];
											echo "<tr>";
											echo "<td>".$basic_profile_row[0]."</td>";
											echo "<td>".$basic_profile_row[1]."</td>";
             								echo "<td>".$basic_profile_row[2]."</td>";
											echo "<td>".$basic_profile_row[3]."</td>";
											echo "<td>".$basic_profile_row[4]."</td>";
											echo "<td>".$basic_profile_row[5]."</td>";
											echo "<td>".$basic_profile_row[6]."</td>";
											echo "<td><a href='confirmcandidate.php?id=$id&msg=onlydelete'><img src='images/edit.png'></a></td>";
	    									echo "</tr>";
											} 
										?>
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                    </div>
                   <!-- First Year confirmed End -->
                </div>
            </div>
        </div>
    </div>
</div>


	
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
   <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
           $(document).ready(function () {
		$('#secondyear_unconfirmed').dataTable({
        		"order": [[ 0, "desc" ]]
		});
		
			$('#secondyear_confirmed').dataTable({
        		"order": [[ 0, "desc" ]]
		});
	
	});
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  
   
</body>
</html>