<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ashajyoti - NGO for disabilities</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="assets/imgs/favicon.ico">
		<link rel="shortcut icon" href="assets/imgs/favicon.ico" />
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/style.css">

		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/kwiks.js"></script>

		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				var owl = $("#owl");
				owl.owlCarousel({
					items : 4, //10 items above 1000px browser width
					itemsDesktop : [995,3], //5 items between 1000px and 901px
					itemsDesktopSmall : [767, 2], // betweem 900px and 601px
					itemsTablet: [700, 2], //2 items between 600 and 0
					itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
					navigation : true,
				});
			})
			var Main = Main || {};
			jQuery(window).load(function() {
				window.responsiveFlag = jQuery('#responsiveFlag').css('display');
				Main.gallery = new Gallery();
				jQuery(window).resize(function() {
					Main.gallery.update();
				});
			});
			function Gallery(){
				var self = this,
					container = jQuery('.flexslider'),
					clone = container.clone( false );
					this.init = function (){
						if( responsiveFlag == 'block' ){
						var slides = container.find('.slides');
						slides.kwicks({
							max : 500,
							spacing : 0
						}).find('li > a').click(function (){
							return false;
						});
						} else {
							container.flexslider();
						}
					}
					this.update = function () {
						var currentState = jQuery('#responsiveFlag').css('display');
						if(responsiveFlag != currentState) {
							responsiveFlag = currentState;
							container.replaceWith(clone);
							container = clone;
							clone = container.clone( false );
							this.init();
						}
					}
				this.init();
			}

		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<?php include 'header.php';?>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<?php include 'slider.php';?>
					</div>
					<div class="grid_12">
						<h2>Our Mission</h2>
						<br>
						<p>All Children with Disabilities in Darrang district gain equal opportunity and live up to their full potential.</p>
					</div>
					<div class="clear"></div>
                    <div class="grid_12">
						<h2>Our Vision</h2>
						<br>
						<p>To build a society in which every child and persons with disability enjoyed the right to survive, protection and development.</p>
					</div>
					<div class="clear"></div>
                    <div class="grid_12">
						<h2>Our Objectives</h2>
						<br>
						<p>To stand with the children and persons with disabilities and ensure equal opportunities for their active participation in the society.</p>
                        <p>To provide therapy and special education to the children with disabilities especially from poor economic background to perform their day to day activities.</p>
                        <p>To provide skill oriented training to the youths and women</p>
                        <p>To help access rights and entitlements from the government available for the CwDs, PwDs, women, and children.</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
<!--==============================footer=================================-->
			<?php include 'footer.php';?>
		</div>
	</body>
</html>