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
    
   <script>
        function getConfirmation() {
            var id=document.confirmstudent.id.value;
            var retVal = confirm("Do you want to Confirm Candidate ?");
               if( retVal == true ) {
                    document.confirmstudent.action="admissionactions.php?id="+id+"&msg=confirm";
    		    	document.confirmstudent.submit();	
                  return true;
               } else {
                   return false;
               }
            }
    function deleteConfirmation() {
            var id=document.confirmstudent.id.value;
            var retVal = confirm("Do you want to Delete Candidate ?");
               if( retVal == true ) {
                    document.confirmstudent.action="admissionactions.php?id="+id+"&msg=delete";
    		    	document.confirmstudent.submit();	
                  return true;
               } else {
                   return false;
               }
            }        
</script>
	
  
</head>
<body>
    <div id="wrapper">
        <?php include('nav.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
          
                <div class="col-md-12">
                    <!-- First Year Un Confirmed Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Candidate Details</h3>
				        </div>
						
                        <div class="panel-body">
                            
                         	<div class="container">
								<div class="row">
								    <form name="confirmstudent" method="post">
								    <?php
										include('conn.php');
										$id=$_GET['id'];
										$msg=$_GET['msg'];
										$fetch_basic_profile="select * from tbl_admissions where candidate_id='$id'";	
										
										$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
                                       
										while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
											{
											$id=$basic_profile_row[0];
								 
										?>
									 <input type="hidden" name="id" value="<?php echo $id; ?>">	
							         <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
							            <label for="exampleInputEmail1">Name</label>
							            <input type="text" class="form-control w-50" id="candidateName" value="<?php echo $basic_profile_row[1]; ?>" name="candidateName" readonly>
					
							        </div>
							        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 w-25">
							            <label for="exampleInputEmail1">Email address</label>
							            <input type="email" class="form-control" id="candidateEmail" value="<?php echo $basic_profile_row[2]; ?>" name="candidateEmail" readonly>
						
							        </div>
							       <div class="clearfix"></div>
							        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
							            <label for="exampleInputPassword1">Mobile Number</label>
							            <input type="text" class="form-control w-50" id="candidateMobileno" value="<?php echo $basic_profile_row[3]; ?>" name="candidateMobileno" readonly>
							 
							        </div>
							        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
							            <label for="exampleInputPassword1">Gender</label>
							            <?php echo $basic_profile_row[4]; ?>
                			
							        </div>
							        <div class="clearfix"></div>
							        <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
							            <label for="exampleInputFile">Date Of Birth</label>
							            <input type="text" class="form-control w-50" id="bdate" name="bdate" value="<?php echo $basic_profile_row[5]; ?>" readonly>
			
							        </div>
							        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
							            <label for="admissionTo">Admission To</label>
							           <?php echo $basic_profile_row[6]; ?>
     
							        </div>
							        <div class="clearfix"></div>
							        <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
							            <?php
							            if($msg == "confirmanddelete") {
							                echo "<button class='btn btn-primary' onClick='getConfirmation();'>Confirm</button>";
							                echo "<button class='btn btn-primary' onClick='deleteConfirmation();'>Delete</button>";
							            }
							            else if($msg == "onlydelete") {
							                  echo "<button class='btn btn-primary' onClick='deleteConfirmation();'>Delete</button>";
							                }
							            ?>
							        </div>
						
							    <div class="clearfix"></div>
							    <?php
										}
							    ?>
							    </form>
							    </div>
							</div>
                            
                        </div>
                    </div>
                   <!-- First Year Un Confirmed End -->
                   
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
		$('#firstyear_unconfirmed').dataTable({
        		"order": [[ 0, "desc" ]]
		});
		
			$('#firstyear_confirmed').dataTable({
        		"order": [[ 0, "desc" ]]
		});
	
	});
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  
   
</body>
</html>