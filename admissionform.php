<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php include('title.php'); ?></title>

	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



    <!-- CSS FILES -->

    <link rel="stylesheet" href="css/bootstrap.min.css"/>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">

    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">



    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    
    
	<link rel="stylesheet" href="css/calender.css" type="text/css">

	<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

	

		<script type="text/javascript">



	function setColor(el, bg) 

		{

		  if (el.style) el.style.backgroundColor = bg;

		}

		

	function checkInput(form) 

		{

		  var bgBad = "#FF9999";

		  var bgGood = "#66FFCC";

		  var valid = true;

		  var errmsg="";

		  

		 /* Name Validation */ 		  

		 if (form.candidateName.value == "") {

			error_candidateName.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Your Name";

			setTimeout(function () {error_candidateName.innerHTML =""}, 10000);

			valid = false;

		  } else {

			error_candidateName.innerHTML ="";

			setColor(form.candidateName, bgGood);

		  }


		 /*Date Of Birth validation */ 		  

		 if (form.bdate.value == "") {

			error_bdate.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Date Of Birth";

			setTimeout(function () {error_bdate.innerHTML =""}, 10000);

			valid = false;

		  } else {

			error_bdate.innerHTML ="";

			setColor(form.bdate, bgGood);

		  }

		    /* Gender validation */ 		  

		 if (form.candidateGender.value == "") {

			error_candidateGender.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your Gender";

			setTimeout(function () {error_candidateGender.innerHTML =""}, 10000);

			valid = false;

		  } else {

			error_candidateGender.innerHTML ="";

			setColor(form.candidateGender, bgGood);

		  }

		  

		   /* Mobile No validation */ 		  

		 if (form.candidateMobileno.value == "") {

			error_candidateMobileno.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Mobile No";

			setTimeout(function () {error_candidateMobileno.innerHTML =""}, 10000);

			valid = false;

		  } else {

			error_candidateMobileno.innerHTML ="";

			setColor(form.candidateMobileno, bgGood);

		  }
		  
		   /* Admission To validation */ 		  

		 if (form.admissionTo.value == "") {

			error_admissionTo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select your admission Preference";

			setTimeout(function () {error_admissionTo.innerHTML =""}, 10000);

			valid = false;

		  } else {

			error_admissionTo.innerHTML ="";

			setColor(form.admissionTo, bgGood);

		  }

		  

		  /* Email Id validation */ 		  

		 if (form.candidateEmail.value == "" ) {

			error_candidateEmail.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Email Address";

			setTimeout(function () {error_candidateEmail.innerHTML =""}, 10000);

			valid = false;

		  } else {

			error_candidateEmail.innerHTML ="";

			setColor(form.candidateEmail, bgGood);

		  } 

				  

		if (document.addstudent.candidateEmail.value != " ")

		{

			var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";

			var checkStr = document.addstudent.candidateEmail.value;

			var allValid = 'true';

			for (i = 0;  i < checkStr.length+1;  i++)

			{

	

			ch = checkStr.charAt(i);

				for (j = 0;  j < checkOK.length+1;  j++)

				{

					if (ch == checkOK.charAt(j))

					break;

					if (j == checkOK.length)

					{

						allValid = 'false';

						break;

					}

				}

			}

		}

	

		if(document.addstudent.candidateEmail.value != "")

		{

			var val=document.addstudent.candidateEmail.value ;

			var pass1=val.indexOf('@',0);

			if(pass1==-1)

			{

				error_candidateEmail.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";

				setTimeout(function () {error_candidateEmail.innerHTML =""}, 10000);

				document.addstudent.candidateEmail.value="";

				document.addstudent.candidateEmail.focus();

				return false;

			}

		}



		if(document.addstudent.candidateEmail.value != "")

		{

			var val=document.addstudent.candidateEmail.value ;

			var pass2=val.indexOf('.',0);

			if(pass2==-1)

			{

				error_candidateEmail.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";

				setTimeout(function () {error_candidateEmail.innerHTML =""}, 10000);

				document.addstudent.candidateEmail.value="";

				document.addstudent.candidateEmail.focus();

				return false;

			}

			if((pass2 - pass1)== 1)

			{

				error_candidateEmail.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";

				setTimeout(function () {error_candidateEmail.innerHTML =""}, 10000);

				document.addstudent.candidateEmail.value="";

				document.addstudent.candidateEmail.focus();

				return false;

			}

		}



		if (!allValid)

		{

			error_candidateEmail.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";

			setTimeout(function () {error_candidateEmail.innerHTML =""}, 10000);

			document.addstudent.candidateEmail.focus();

			return false;

		}

			

		
			  
		  

		return valid;

		}

		

		

	function isNumberKey(evt)

       {

		  var chCode = (evt.which) ? evt.which : event.keyCode

		  if (chCode != 46 && chCode > 31 

			&& (chCode < 48 || chCode > 57))

			 return false;

		  else

		  return true;

       }

		       

    function isAlpha(keyCode)

       {

         return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)

       }

	   

	function save()

		{

		var b=new Boolean();	

		b=checkInput(document.addstudent);

		if (!b) 

			{

			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";

			setTimeout(function () {ERROR.innerHTML =""}, 12000);

			}

		else

			{

			document.addstudent.action="enquiry.php";

			document.addstudent.submit();			

			}

		}   

	</script>

	

</head>

<body>

	<!--Start Header-->

	<?php include('nav.php'); ?>

	<!--End Header-->

	

	<!--start wrapper-->

	<section class="wrapper">

        <section class="page_head">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <div class="page_title">

                            <h2>Alumini</h2>

                        </div>

                        <nav id="breadcrumbs">

                            <ul>

                                <li><a href="#">Home</a>/</li>

                                <li>Alumini</li>

                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </section>



		<section class="content left_sidebar">

			<div class="container">

				<div class="row">

					<!--Sidebar Widget-->

					<div class="col-lg-4 col-md-4 col-sm-4">

						<div class="sidebar">

							<div class="widget widget_tab">

                                <div class="velocity-tab sidebar-tab">

                                    <ul  class="nav nav-tabs">

                                        <li class="active"><a href="#Popular" data-toggle="tab">News</a></li>

                                    </ul>



                                    <div  class="tab-content clearfix">

                                        <div class="tab-pane fade active in" id="Popular">

                                         <?php include('newsticker.php'); ?>    

                                        </div>

                                    </div>

                                </div>

                            </div>

						</div>

					</div>

					

					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

						<div class="blog_large">

							<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>

							<form name="addstudent" method="post">

							<input type="hidden" name="action" value="student">

							<div class="container">
								<div class="row">
							
							         <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
							            <label for="exampleInputEmail1">Name</label>
							            <input type="text" class="form-control w-50" id="candidateName" placeholder="Enter Your Name" name="candidateName">
							            <DIV id="error_candidateName" style="color:red;"></DIV>
							        </div>
							        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 w-25">
							            <label for="exampleInputEmail1">Email address</label>
							            <input type="email" class="form-control" id="candidateEmail" placeholder="Enter Your Email Address" name="candidateEmail">
							            <DIV id="error_candidateEmail" style="color:red;"></DIV>
							        </div>
							       <div class="clearfix"></div>
							        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
							            <label for="exampleInputPassword1">Mobile Number</label>
							            <input type="text" class="form-control w-50" id="candidateMobileno" placeholder="Enter Your Mobile No" name="candidateMobileno">
							            <DIV id="error_candidateMobileno" style="color:red;"></DIV>
							        </div>
							        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
							            <label for="exampleInputPassword1">Gender</label>
							            <select name="candidateGender" id="candidateGender" class="form-control w-50">
                							<option value=""></option>
                							<option value="Male">Male</option>
                							<option value="Female">Female</option>
                						</select>
                						<DIV id="error_candidateGender" style="color:red;"></DIV>
							        </div>
							        <div class="clearfix"></div>
							        <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
							            <label for="exampleInputFile">Date Of Birth</label>
							            <input type="text" class="form-control w-50" id="bdate" name="bdate">
							            <DIV id="error_bdate" style="color:red;"></DIV>
							        </div>
							        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
							            <label for="admissionTo">Admission To</label>
							            <select name="admissionTo" id="admissionTo" class="form-control w-50">
                							<option value=""></option>
                							<option value="fymech">First Year Mechanical Engineering</option>
                							<option value="symech">Second Year Mechanical Engineering</option>
                						</select>
                				        <DIV id="error_admissionTo" style="color:red;"></DIV>	
							        </div>
							        <div class="clearfix"></div>
							        <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
							            <a href="#" class="btn btn-primary"  onClick="save();">Submit</a>
							        </div>
						
							    <div class="clearfix"></div>
							    </div>
							</div>

							</form>	

						</div>

					</div>

					 <?php include('tabslide.php'); ?>

				</div>

			</div>

		</section>

	</section>

	<!--end wrapper-->



	<?php include('footer.php');  ?> 





    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/retina-1.1.0.min.js"></script>

    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->

    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->

    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>

    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jflickrfeed.js"></script>

    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>

    <script type="text/javascript" src="js/swipe.js"></script>

    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>



    <script src="js/main.js"></script>
	<script type="text/javascript" src="js/zebra_datepicker.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>

    <!-- Start Style Switcher -->

    <div class="switcher"></div>

    <!-- End Style Switcher -->

</body>

</html>