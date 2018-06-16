<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Smart City</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/c821c25fcf.js"></script>
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body class="courses">
	<?php include 'include/header.php'; ?>
	<!-- Breadcrmb -->
	<div class="breadcrumbRow">
		<div class="container">
			<div class="row clearfix">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Course Detail</li>      
				</ol>
				<div class="left-top pull-right top-bar">   
					<div class="top-bar-txt">
						<ul class="font-sizer-wr list-inline">
							<li class="down-font"><a href="#">A-</a></li>
							<li class="up-font"><a href="#">A+</a></li>
						</ul>							
					</div>
				</div>
				<div class="right-top pull-right login_strip">
					<ul class="" style="margin-bottom: 0">
						<li>
							<a class="shape square" href="#"><i class="fa fa-user"></i>Register
							</a>                          
						</li>
						<li class="dropdown"><a href="#" class="shape square" id="login-bx2"><i class="fa fa-unlock-alt"></i> Web Login</a></li>
					</ul>
				</div>			
			</div>
		</div>
	</div>
	<!-- Ends here -->
	
	<div class="course-detail-container">
		<div class="top-course-highlight">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="course-overview">
							<h2>E-learning: Sustainable Urban Mobility in Developing Countries</h2>
							<p class="category">Category : <span>E-Learning</span> <span>Urban</span> <span>Mobility</span></p>
							<div class="datess"><p>Posted Date : <span>15 June, 2018</span></p></div>
						</div>
					</div>
					<div class="col-md-4">
						<img src="images/course1.jpg" class="img-responsive" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="details-of-course">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="detials">
							<h3>About this course :</h3>
							<p>The course aims to enhance the capacity of local decision-makers and urban and transportation planners to formulate and implement appropriate policies that contribute to sustainability in urban transport in developing countries.</p>
							<p>It allows an analysis of the important issues of sustainable transport including transport demand management, improved public and non-motorised transport, environmental protection, road safety, and gender in transport. In order to achieve sustainability, it also provides some means such as economic and financial instruments, institutional improvements, capacity building, regulation of markets and environmental standards.</p>
							<h3>Content :</h3>
							<ul class="list-unstyled content-list">
								<li><span class="module">Module 1 :</span> Urban growth and strategies for sustainable development</li>
								<li><span class="module">Module 2 :</span> Municipal mobility management</li>
								<li><span class="module">Module 3 :</span> Public transport services</li>
								<li><span class="module">Module 4 :</span> Management, financing and institutions</li>
								<li><span class="module">Module 5 :</span> Energy and environment</li>
							</ul>
							<hr>
							<p>A certificate of participation will be issued to participants who took all the exercises but achieved a final score inferior to 70 per cent.</p>
							<p class="course-avail">Course Available at: <a href="javascript:void(0);">http://www.eltis.org/participate/events/e-learning-sustainable-urban-mobility-developing-countries</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'include/footer.php'; ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	<script>		
		AOS.init({
			easing: 'ease-out-back',
			duration: 1000,
			disable: 'mobile'
		});	
		$(document).ready(function () {	
			$('#mainSlider').owlCarousel({
				items:1,
				autoplay : true,
				autoplayTimeout : 3000,
				autoplayHoverPause:true,
				smartSpeed:450,
				loop:true,
				margin:0,
				nav:true,
				dots : false,
				mouseDrag : false,
				touchDrag : true,
				navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],	
				animateIn : 'fadeIn',
				animateOut : 'fadeOut'			
			});	
			$('#contributer-slider').owlCarousel({
				items:4,
				autoplay : false,
				autoplayTimeout : 6000,
				autoplayHoverPause:true,
				smartSpeed:450,
				loop:true,
				margin:0,
				nav:false,
				dots : true,
				mouseDrag : true,
				touchDrag : true,
				navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]			
			});
		});
	</script>
</body>
</html>