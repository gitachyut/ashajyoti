<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script> 
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
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
					<div class="grid_12">
						<div class="map">
							<figure class=" ">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.6542159586375!2d91.9028407150106!3d26.402356788229657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375afe03df4c7cdd%3A0x34399c9fb48afd97!2sGhorabandha%2C%20Sipajhar%2C%20Assam%20784145!5e0!3m2!1sen!2sin!4v1643940135196!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</figure>
						</div>
					</div>
					<div class="grid_4">
						<h3>Address</h3>
						<div class="map">
							<address>
								<dl>
									<b>Jiaur Rahman</b><br>
									<b>Executive Director</b><br>
									<dt>
										ASHAJYOTI. Sipajhar,<br>
										Darrang, Assam, <br>
										India 784145 <br>
									</dt>
									<dd><span>Telephone:</span>+91-9864422957</dd>
									<dd><span>Telephone:</span>+91-7576010957</dd>
									<dd>E-mail: <a href="#" class="col1">ashajyotiorg@gmail.com</a></dd>
								</dl>
							</address>
						</div>
					</div>
					<div class="grid_8">
						<h3>Contact Form</h3>
						<form id="form">
							<div class="success_wrapper">
								<div class="success-message">Contact form submitted</div>
							</div>
							<label class="name">
								<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid name.</span>
							</label>
							<label class="email">
								<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							</label>
							<label class="phone">
								<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid phone.</span>
							</label>
							<label class="message">
								<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							</label>
							<div>
								<div class="clear"></div>
								<div class="btns">
									<a href="#" data-type="submit" class="btn">Send</a>
									<a href="#" data-type="reset" class="btn">Clear</a>
								</div>
							</div>
						</form>   
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<?php include 'footer.php';?>
		</div>
	</body>
</html>

