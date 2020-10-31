<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            <h2>Admission Procedure</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Admissions</a>/</li>
                                <li>Admission Procedure</li>
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
							<h3><img src="images/nextarrow.png">Courses Offered </font></h3>
								<table width="389" border="1">
									<tr bgcolor="#FFCCFF">
										<td align=left width="222"><b><font face="calibri" size=3>Name of Course</font></b></td>
										<td align=left width="97">
										<p align="center"><b><font face="calibri" size=3>Part Time/<br>Full time</font></b></td>
										<td align=center width="97"><b><font face="calibri" size=3>Intake</font></b></td>
									</tr>
									
									<tr>
										<td align=left width="222"><font face="calibri" size=3>Mechanical Engineering</font></td>
										<td align=center width="97"><font face="calibri" size=3> Full time</font></td>
										<td align="center">60</td>
									</tr>
									
									<tr>
										<td align=left width="222"><font face="calibri" size=3>Electrical Engineering</font></td>
										<td align=center width="97"><font face="calibri" size=3> Full time</font></td>
										<td align="center">60</td>
									</tr>
								
									
									<tr>
										<td width="222"><font face="calibri" size=3>Electronics & Telecommunication</font></td>
										<td align=center width="97"><font face="calibri" size=3> Full time</font></td>
										<td align="center">60</td>
									</tr>
									
									<tr>
										<td align=left width="222"><font face="calibri" size=3>Civil Engineering</font></td>
										<td align=center width="97"><font face="calibri" size=3> Full time</font></td>
										<td align="center">60</td>
									</tr>
									
									
									
								</table>	
								<br>
								<p align="justify">
								
								The total intake capacity of our college is 420.Our highly qualified and experienced staff is always ready to share their knowledge so as to produce live products which will have immense value on changing globalize market. Apart from that our motto is to produce creative and innovative brains which can better compete with the changing market.
								
								</p>
					
								<h3><p align=left><img src="images/nextarrow.png">Selection :</p> </h3>
								<p align=justify>
								
								Selection for the admission shall be made strictly on the basis of merits of the candidates as per procedure of the Director of Technical Education.
									
								</p>
							
								<h3><p align=left><img src="images/nextarrow.png">Eligibility  :</p> </h3>
								<b><img src="images/arrow.png">Diploma First Year Engineering  Admission</b><br>
								<p align=justify>
								 For admission to first year diploma course candidates must have passed Secondary School Certificate Examination of Maharashtra State Board of Secondary Education, with minimum 35% marks other equivalent examination with
								 </p>
								<p align=justify>
									<ol>
										<li>General Science or Physics & Chemistry</li>
										<li>Elementary Mathematic or Algebra & Geometry and </li>
										<li>English</li>
									</ol>
								</p>		
								<b><img src="images/arrow.png">Diploma Second Year Engineering Admission</b>
								<p align=justify>
								<ol>
								<li>Admission to direct second year: The candidate passed H.S.C. (XII)Science/technical subject (A-2, A-3, A-4, C-2, and D-9) with 35% marks.</li>
								<li>ITI/MCVC/COE pass are eligible to admission as per DTE/ MSBTE rules</li>
								<li>Double Diploma: The students can avail this facility as per MSBTE rules. </li>
								<li>Reservation/Merit: As per Govt. rules. For more details refer DTE website : <a href="http://www.dte.org.in" target='blank'>www.dte.org.in</a> </li>
								</ol>
						
								</p>
								
							
								
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

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
</body>
</html>