<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
	<link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php include('title.php'); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

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
                            <h2>Our Recruiters</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Placement</a>/</li>
                                <li>Our Recruiters </li>
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
					
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 animation-page">
						<div class="blog_large">
						 <h3>Our Students Working in...</h3>
						   <p align="left"><img src="images/companies.png" style="max-width:100%;height:auto" border="0"></p>
						<!--
							<div class="row sub_content">
								<div class="col-lg-4 col-sm-4 wow rollIn">
								   <div class="animation">
									   <img class="img-circle" src="recruiters/bharat.png" alt=""/>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4 wow bounceInDown">
									<div class="animation">
										<img class="img-circle" src="recruiters/cummins.png" alt=""/>
									</div>
								</div>
								
							</div>
							
							 <div class="row sub_content">
								<div class="col-lg-4 col-sm-4 wow bounceInDown">
									<div class="animation">
										<img class="img-circle" src="recruiters/dynamix.png" alt=""/>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-4 wow bounceInLeft">
									<div class="animation">
										<img class="img-circle" src="recruiters/hdfc.png" alt=""/>
									</div>
								</div>
							</div>
							
							<div class="row sub_content">
								<div class="col-lg-4 col-sm-4 wow pulse ">
									<div class="animation">
										<img class="img-circle" src="recruiters/hyundai.png" alt=""/>
									</div>
								</div>

								<div class="col-lg-4 col-sm-4 wow bounceInRight ">
									<div class="animation">
										<img class="img-circle" src="recruiters/ibm.png" alt=""/>
									</div>
								</div>
							</div>
							
							 <div class="row sub_content">
								<div class="col-lg-4 col-sm-4 wow flip">
									<div class="animation">
										<img class="img-circle" src="recruiters/icici.png" alt=""/>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-4 wow flipInX">
									<div class="animation">
										<img class="img-circle" src="recruiters/imsofor.png" alt=""/>
									</div>
								</div>
							
							</div>
							
							<div class="row sub_content">
								<div class="col-lg-4 col-sm-4 wow shake">
									<div class="animation">
										<img class="img-circle" src="recruiters/mahindra.png" alt=""/>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4 wow shake">
									<div class="animation">
										<img class="img-circle" src="recruiters/ms.png" alt=""/>
									</div>
								</div>
							</div>
							
							<div class="row sub_content">
								<div class="col-lg-4 col-sm-4 wow bounce">
									<div class="animation">
										<img class="img-circle" src="recruiters/peocit.png" alt=""/>
									</div>
								</div>
								<div class="col-lg-4 col-sm-4 wow bounceInUp">
									<div class="animation">
										<img class="img-circle" src="recruiters/piaggio.png" alt=""/>
									</div>
								</div>
								
							</div>
							
							<div class="row sub_content">
								<div class="col-lg-4 col-sm-4 wow bounceInDown">
									<div class="animation">
										<img class="img-circle" src="recruiters/rao.png" alt=""/>
									</div>
								</div>
								 <div class="col-lg-4 col-sm-4 wow swing">
									<div class="animation">
										<img class="img-circle" src="recruiters/tatamotors.png" alt=""/>
									</div>
								</div>
							</div>
							
								<div class="row sub_content">
								<div class="col-lg-4 col-sm-4 wow bounceInDown">
									<div class="animation">
										<img class="img-circle" src="recruiters/toyota.png" alt=""/>
									</div>
								</div>
								 <div class="col-lg-4 col-sm-4 wow swing">
									<div class="animation">
										<img class="img-circle" src="recruiters/walchand.png" alt=""/>
									</div>
								</div>
							</div>

						</div>
						-->
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
	<script type="text/javascript" src="js/wow.min.js"></script>
    <script>
        // WOW Animation
        new WOW().init();
    </script>
</body>
</html>