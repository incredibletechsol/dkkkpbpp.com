<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php include('title.php'); ?></title>
	<meta name="description" content="">
	
	<!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	 <!--Start Header-->
	<?php include('nav.php'); ?>
    <!--End Header-->
	<!--start wrapper-->
	<section class="wrapper">
        <div class="slider-wrapper">
            <div class="slider">
                <div class="fs_loader"></div>
             
                <div class="slide">
                    <img src="images/fraction-slider/base.jpg" data-in="fade" data-delay="" data-out="fade" width="1920" height="750">     
                </div>
				<div class="slide">
                    <img src="images/fraction-slider/maingate.jpg" data-in="fade" data-delay="" data-out="fade" width="1920" height="750">     
                </div>
                <div class="slide">
                    <img src="images/fraction-slider/11.jpg" data-in="fade" data-delay="" data-out="fade" width="1920" height="750">     
                </div>
                <div class="slide">
                    <img src="images/fraction-slider/22.jpg" data-in="fade" data-delay="" data-out="fade" width="1920" height="750">     
                </div>
				<div class="slide">
                    <img src="images/fraction-slider/33.jpg" data-in="fade" data-delay="" data-out="fade" width="1920" height="750">     
                </div>
            </div>
        </div>
		<!--End Slider-->
		<br><br>
	<!--start info service-->
		<section class="feature_bottom">
			<div class="container">
				<div class="row sub_content">
				<div class="col-lg-4">
						<div class="widget widget_tab">
                            <ul  class="nav nav-tabs">
                                <li class="active"><a href="#Popular" data-toggle="tab">News</a></li>
                            </ul>

                            <div  class="tab-content clearfix">
                                <?php include('newsticker.php'); ?>
                            </div>
                        </div>
					</div>
						
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="dividerHeading">
							<h4><span>Welcome To Late Babasaheb Phadtare Polytechnic</span></h4>
						</div>
						<p align="justify">
Institute inspired by philanthropic urge and motivated by social concern, babasaheb phadtare polytechnic is established by Dnyan,Kala, Krida and Krishi Prathisthan. The trustees are financially strong entrepreneurs, educationalist and philanthropist committed to establish a developed institute into world class education center.
</p>
<p align="justify">
Babasaheb Phadtare Polytechnic is situated in Kalamb-Walchandnagar 150 km away from   Pune. The location of college will provide the students an easy access to the industries, business houses and multinational companies in pune.
</p>
<p align="justify">
Our objective is to integrate the technical education and art of living with a balanced attention to competence, productivity and pragmatism and to develop in our student’s human value along with problem solving skills.
</p>
 <b>"To produce skilled, creative diploma Engineers from the rural students to fulfill the challenging requirements of the industry"</b>

					</div>
					
				</div>
			</div>
		</section>
		<!--end info service-->
<?php include('tabslide.php'); ?>
		<!--Start Photo Gallery-->
		<section class="latest_work">
			<div class="container">
				<div class="row sub_content">
					<div class="carousel-intro">
						<div class="col-md-12">
							<div class="dividerHeading">
								<h4><span>Photo Gallery</span></h4>
							</div>
							<div class="carousel-navi">
								<div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
								<div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

                    <div class="jcarousel recent-work-jc">
                        <ul class="jcarousel-list">
                          <!-- Photo Gallery Start-->
						<?php
							include('conn.php');
							$result = mysqli_query($conn,"SELECT * FROM tbl_gallery order by photoid desc") or die('Query Not Executed');
							while($row = mysqli_fetch_array($result))
							{
								echo "<li class='col-sm-3 col-md-3 col-lg-3'>";
								echo "<div class='recent-item'>";
									echo "<figure>";
										echo "<div class='touching medium'>";
											echo "<img src='gallery/$row[1]'  height='200'/>";
										echo "</div>";
										echo "<div class='option'>";
											echo "<a href='gallery/$row[1]' class='hover-zoom mfp-image' ><i class='fa fa-search'></i></a>";
										echo "</div>";
										echo "<figcaption class='item-description'>";
											echo "<span>$row[2]</span>";
										echo "</figcaption>";
									echo "</figure>";
								echo "</div>";
							echo "</li>";
							}
							?>
						<!-- Photo Gallery End--> 
                        </ul>
                    </div>
				</div>
			</div>
		</section>
	<!--End Photo Gallery-->
	</section>
	<!--end wrapper-->
	
	<?php include('footer.php'); ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>

    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
    <script>
        $(window).load(function(){
            $('.slider').fractionSlider({
                'fullWidth': 			true,
                'controls': 			true,
                'responsive': 			true,
                'dimensions': 			"1920,450",
                'increase': 			true,
                'pauseOnHover': 		true,
                'slideEndAnimation': 	true,
                'autoChange':           true
            });
        });
    </script>
</body>
</html>


