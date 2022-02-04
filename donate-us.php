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
					items : 4, //10 items above 1000px browser wibh
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
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" wibh="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
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
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="images/page1_img1.jpg" alt="">
									<div class="flex-caption">
										<p>Hope</p>
									</div>
								</li>
								<li>
									<img src="images/page1_img2.jpg" alt="">
									<div class="flex-caption c2">
										<p>Save</p>
									</div>
								</li>
								<li>
									<img src="images/page1_img3.jpg" alt="">
									<div class="flex-caption">
										<p>Help</p>
									</div>
								</li>
							</ul>
						</div>
						<span id="responsiveFlag"></span>
					</div>
					<div class="grid_6">
						<h2>Donate Us</h2>
						<br>
                        <div class="map">
							<address>
								<dl>
									<b>ASHAJYOTI (NGO) </b><br>
									<b>Ac No. 2022010027803</b><br>
                                    <b>IFSC. PUNB0202220</b><br>
                                    <b>MICR Code. 784024506</b><br>
                                    <b>Punjab National Bank</b><br>
                                    <b>Sipajhar Branch</b><br>
                                    <b>Darrang, Assam/b><br>
                                    <b>India 784145</b><br>
									<dd><span>Telephone:</span>+91-9864422957</dd>
									<dd><span>Telephone:</span>+91-7576010957</dd>
									<dd>E-mail: <a href="#" class="col1">ashajyotiorg@gmail.com</a></dd>
								</dl>
							</address>
						</div>
					</div>
                    <div class="grid_6">
                        <h2></h2>
						<br>
						<div class="map">
							<figure class=" ">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.6542159586375!2d91.9028407150106!3d26.402356788229657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375afe03df4c7cdd%3A0x34399c9fb48afd97!2sGhorabandha%2C%20Sipajhar%2C%20Assam%20784145!5e0!3m2!1sen!2sin!4v1643940135196!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</figure>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
<!--==============================footer=================================-->
			<?php include 'footer.php';?>
		</div>
	</body>
</html>