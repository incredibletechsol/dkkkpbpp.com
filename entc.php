<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
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
                            <h2>Electronics and Telecommunication </h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Departments</a>/</li>
                                <li>Electronics and Telecommunication </li>
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
						    <div id="accordion" class="panel-group accordion"><!-- Accordians -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												Mission and Vision
											</a>
										</h4>
									</div>
									<div class="panel-collapse collapse in" id="collapseOne">
										<div class="panel-body">
										<h3>Vision</h3>
<p  align="justify">
To become a leading technical department of academic excellence by imparting high patterns of discipline through innovative program of global standards making our students technologically superior & ethically strong to serve the nation.								
</p>
<h3>Mission</h3>
<p  align="justify">
 Establish a unique learning environment to enable the students to face the challenges of E&TC engg. field. Provide ethical  &value based education by promoting activities addressing the societal needs. Enable students to develop skill to solve complex technological problems of current times &also provide a framework for promoting collaborative & multidisciplinary activities.
</p>
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
												About Department
											</a>
										</h4>
									</div>
									<div class="panel-collapse collapse in" id="collapseFive">
										<div class="panel-body">
											<p align="justify">
											The department has sophisticated laboratory equipment's to conduct practical's as per the curriculum of M.S.B.T.E. IT has highly qualified and experienced teaching staff. Electronics & Telecommunication is ever growing branch in the entire world. With the increasing demand in the field of telecommunication due to the growth in IT industries tremendous job opportunities are open to the students of this department.
											</p>
											<p align="justify">
											<div id="slider" class="swipe">
								<ul class="swipe-wrap">
<li><img src="departments/ENTC/1.jpg" style="max-width:100%;height:auto" border="0"></li>
<li><img src="departments/ENTC/2.jpg" style="max-width:100%;height:auto" border="0"></li>
<li><img src="departments/ENTC/3.jpg" style="max-width:100%;height:auto" border="0"></li>
<li><img src="departments/ENTC/4.jpg" style="max-width:100%;height:auto" border="0"></li>
<li><img src="departments/ENTC/5.jpg" style="max-width:100%;height:auto" border="0"></li>
<li><img src="departments/ENTC/6.jpg" style="max-width:100%;height:auto" border="0"></li>
<li><img src="departments/ENTC/7.jpg" style="max-width:100%;height:auto" border="0"></li>

									
								</ul>
								<div class="swipe-navi">
								  <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div> 
								  <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
								</div>
							</div>
											</p>											
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												Teaching Staff
											</a>
										</h4>
									</div>
									<div class="panel-collapse collapse" id="collapseTwo">
										<div class="panel-body">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-striped table-bordered table-hover" id="teaching">
																<thead>
																	<tr>
																	<th>Sr No</th>
																		<th>Name</th>
																		<th>Department</th>
																		<th>Designation</th>
																		<th>Qualification</th>
																		<th>Years Of Experience</th>
																		<th>Photo</th>
																	</tr>
																</thead>
																<tbody>
																	 <?php
																	 include('staff.php'); 
																	 displayStaff('Teaching','Electronics and Telecommunication');
																	 ?>    
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												Non-Teaching Staff
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-striped table-bordered table-hover" id="nonteaching">
																<thead>
																	<tr>
																	<th>Sr No</th>
																		<th>Name</th>
																		<th>Department</th>
																		<th>Designation</th>
																		<th>Qualification</th>
																		<th>Years Of Experience</th>
																		<th>Photo</th>
																	</tr>
																</thead>
																<tbody>
																	 <?php
																		displayStaff('Non-Teaching','Electronics and Telecommunication');
																	 ?>    
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
												Supporting Staff
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-striped table-bordered table-hover" id="supporting">
																<thead>
																	<tr>
																	<th>Sr No</th>
																		<th>Name</th>
																		<th>Department</th>
																		<th>Designation</th>
																		<th>Qualification</th>
																		<th>Years Of Experience</th>
																		<th>Photo</th>
																	</tr>
																</thead>
																<tbody>
																	 <?php
																		displayStaff('Supporting','Others');
																	 ?>    
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
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