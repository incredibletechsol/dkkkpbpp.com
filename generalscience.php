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
                            <h2>General Science and Humanities</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Departments</a>/</li>
                                <li>General Science and Humanities</li>
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
											<h3>Mission</h3>
											<p align="justify">
											"Transferring dreams into reality by developing an individual’s potentials through spread of knowledge and wisdom in an intelligent environment."</p>
											<h3>Vision</h3>
											<p align="justify">
											       "To enrich the knowledge and enhance the facilities to help the Dnyan, Kala, Krida and Krishi Pratishthan’s students to structure their careers to the glorious future and to develop the students as a source within and outside the organization by holistic focus on character building through a range of curricular, co-curricular and extracurricular activities. To facilitate a harmonious symphony of excellence in teaching with a motivational approach this shall be synonymous with rigor, intellectual discipline and sustained efforts to maximize learning."
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
											We our General science and humanities engineering department faculties comprehend this fact and are in the process of building a young and vibrant team from the first year onwards. When the students migrate from school to technical studies, they struggle a lot to apprehend the technical task.  In order to overcome this issue we have adopted various innovative methods including of the students’ performance, frequent evaluation and paying individualized attention and giving counselling to academically weaker students with extra coaching classes. </p>
											<p align="justify">
                                    To educate our students in understanding of fundamental physics Chemistry  and mathematical principles with good communication knowledge, to create learning opportunities allowing students to synthesise knowledge to improve the quality of life and create wealth through the generation of new ideas, systems, technologies and products.</p>
<div id="slider" class="swipe">
								<ul class="swipe-wrap">
								
<li><img src="departments/physics.jpg" style="max-width:100%;height:auto" border="0"></li>
<li><img src="departments/chemistry.jpg" style="max-width:100%;height:auto" border="0"></li>
									
								</ul>
								<div class="swipe-navi">
								  <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div> 
								  <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
								</div>
							</div>
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
																	 displayStaff('Teaching','General Science and Humanities');
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
																		displayStaff('Non-Teaching','General Science and Humanities');
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