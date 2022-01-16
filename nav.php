
<!--Start Header-->
	<header id="header" class="clearfix"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 hidden-xs top-info">
                        <span><i class="fa fa-phone"></i>Phone: 02118-252420/254720,9960003113</span>
                        <span><i class="fa fa-envelope"></i>Email: bpp.kalamb@dkkkpbpp.com,1513principal@msbte.com</span>
                    </div>
					<!--
                    <div class="col-sm-5 top-info">
                        <ul>
                            <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
					-->
                </div>
            </div>
        </div>
        <!-- LOGO bar -->
       <div id="logo-bar" class="clearfix">
           <!-- Container -->
           <div class="container">
               <div class="row">
                   <!-- Logo / Mobile Menu -->
                   <div class="col-xs-12">
                       <div id="logo">
                           <h1><a href="index.php"><img src="images/logo.png" alt="Eve" /></a></h1>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Container / End -->
       </div>
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
					<?php
					  $pageName = basename($_SERVER['PHP_SELF']);
					  if($pageName == "index.php")
							{
							echo "<li class='active'><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "intro.php" || $pageName == "aboutdkkkp.php" || $pageName == "presidentsmessage.php" || $pageName == "secretarysmessage.php" || $pageName == "ceosmessage.php" || $pageName == "principalmessage.php" || $pageName == "missionvision.php" || $pageName == "gbody.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li class='active'><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					  if($pageName == "mechanical.php" || $pageName == "entc.php" ||  $pageName == "civil.php" ||  $pageName == "electrical.php" ||  $pageName == "automobile.php" ||  $pageName == "generalscience.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
					
					if($pageName == "admissionprocedure.php" || $pageName == "brochure.php" || $pageName == "documentsrequired.php" )
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
						if($pageName == "placementoverview.php" || $pageName == "recruiters.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "alumini.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li class='active'><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "labs.php" || $pageName == "computerlab.php" || $pageName == "boyshostel.php" || $pageName == "library.php" || $pageName == "guesthouse.php" || $pageName == "transport.php" || $pageName == "canteen.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li  class='active'><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
							
					if($pageName == "gallery.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.unipune.ac.in/university_files/Syllabi_revised2013.htm'  target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "contactus.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "allnews.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}		
						if($pageName == "admissionform.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Institute at a Glance</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarysmessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceosmessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
									echo "<li><a href='gbody.php'><img src='images/arrow.png' border='0'>Board of Governors </a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='mechanical.php'><img src='images/arrow.png' border='0'>Mechanical Engineering</a></li>";
									echo "<li><a href='entc.php'><img src='images/arrow.png' border='0'>Electronics and Telecommunication</a></li>";
									echo "<li><a href='civil.php'><img src='images/arrow.png' border='0'>Civil Engineering</a></li>";
									echo "<li><a href='electrical.php'><img src='images/arrow.png' border='0'>Electrical Engineering</a></li>";
									//echo "<li><a href='automobile.php'><img src='images/arrow.png' border='0'>Automobile Engineering</a></li>";
									echo "<li><a href='generalscience.php'><img src='images/arrow.png' border='0'>General Science & Humanities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='documentsrequired.php'><img src='images/arrow.png' border='0'>Documents Required</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
									echo "<li><a href='http://www.sssamiti.org/' target='_blank'><img src='images/arrow.png' border='0'>Shikshan Shulka Samiti</a></li>";
									echo "<li><a href='http://www.msbte.com/' target='_blank'><img src='images/arrow.png' border='0'>Syllabus</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Placement</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='placementoverview.php'><img src='images/arrow.png' border='0'>Overview</a></li>";                
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>Our Recruiters</a></li>"; 
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='ControlPanel/index.php' target='_blank'>Student Section</a></li>";
							echo "<li><a href='alumini.php'>Alumini</a></li>";
							echo "<li><a href='#'>Facilities</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}				
					?>		
				</ul>
			</div>	
		</div>	
	</div>	
</div>			
</header>	