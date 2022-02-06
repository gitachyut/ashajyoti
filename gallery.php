<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Videos</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script> 
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			}) 
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
	<body class="" id="top">
<!--==============================header=================================-->
		<?php include 'header.php';?>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="clear"></div>
					<div class="grid_12">
						<div class="pad1">
							<h3>Our Gallery</h3>
						<div class="gallery-container">
							
							<?php
							for ($x = 2; $x <= 56; $x++) {
							?>
								<a href="assets/imgs/<?php echo $x; ?>.jpg" data-lg-size="1600-2400">
									<img alt="img1" src="assets/imgs/<?php echo $x; ?>.jpg" />
								</a>
							<?php
							}
							?>
						</div>
						</div>
					</div>
					<div class="grid_12">
						<a href="assets/imgs/1.jpg" data-lg-size="1024-800">
								<img alt="img2" src="assets/imgs/1.jpg" />
							</a>
							<a href="assets/imgs/60.jpg" data-lg-size="1024-800">
								<img alt="img2" src="assets/imgs/60.jpg" />
							</a>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<?php include 'footer.php';?>
		</div>
	</body>
</html>