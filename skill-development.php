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
					<div class="grid_12">
						<h2>Skill Development</h2>
                        <br>
                        <b>
                        Skill Training Programme:
                        </b>
                        <br>
                        <p>Ashajyoti organized a series of Training programmes in 2019-20. These are:</p>
                        <p>
                        i) Ashajyoti organized one Skill upgradation training programme on Asstt. Carpentry at Sipajhar. The programme was held at village Dakshinchuburi under Sipajhar development block from 18-01-20 to 24-01-20. Total number of participants was 30.
                        </p>
                        <p>
                        ii) Another Skill upgradation training programme was organized on Bamboo utility Product at Mangaldai. The programme was held at village Chamuapara under Mangaldai development block from 02-01-20 to 08-01-20. Total number of participants was 30.
                        </p>
                        <p>
                        iii) Ashajyoti in collaboration with KVK, Darrang organized a training programme on paddy, bee keeping and mustard oil at Naopota (Chengeliajhar) on 23rd August/2019.
                        </p>
                        <p>
                        iv) Training for SHG members: Ashajyoti organized a one day long training programme for SHG members at ward no.2, Mangaldai. Mr. Bhupen Kumar Nath attends as resource person in the training programme.
                        </p>
					</div>
					<div class="clear"></div>
                    <div class="grid_12">

						<h2>Personality Dev. And Skill Dev</h2>
						<br>
                        <b>Training Program:</b>
                        <p>
                            We provided the training program to the PWD student to uplift the personalities and their skill development for their livelihood. The PWD persons who have passed the H.S.L.C. & H.S.S.L.C. 
                            are eligible to get the Training. The training was only for three days. In the month of march 2019 we start the training. First day i.e on 23rd march training was inaugurated by our president 
                            Mr Jogendra Bania and on 25th march evening it was closed. The total number of participants was 55 and the training venue was our office auditorium. No fees were collected for the training. In the training program they were taught how to face the interview, both in written as well as viva voce. The training was provided not only for the services but it was given in such a way so that they can live in the society as well as amongst the general public. 
                            They were given proper guidance so that they would never bow down to any one for their livelihood.
                            The training was provided by the resource person Mr. Imran Hussain Asstt. Professor, College of Science &Technology, Jorhat.
                        </p>
					</div>

					<div class="grid_12">
						<h2>Legal issues</h2>
						<br>
						<h5>Awareness Programme on legal issues</h5>
						<br>
						<p>On 20th Oct. 2019 a awareness meeting was held on Legal Service to Mentally ill and Mentally disable person (NALSA) sponsored by Dist. Legal Service Authority, Darrang. The programme was held at Niz-Dahi Hari Mandir Campus. Ms. Deepsikha Sarma, senior Advocate, Mangaldai Bar Association attended as Resource person.</p>
						<p>On 30th September an awareness meeting was held on MABLISING (Ganahatya) sponsored by Dist. Legal Service Authority, Darrang. The programme was held at Debananda Gaon Panchayat Community hall. Mr. Basanta Saikia, senior Advocate Mangaldai Bar Association attended as Resource person. </p>
						<p>On 2nd February/2020 an awareness meeting was held on “Pranam Act, 2017”, “Eradication of Poverty” and “Clean India” at Gyan Dipti Club, Dahi Nagaon.  The programme was sponsored by Nehru Yuva Kendra, Darrang.</p>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<?php include 'footer.php';?>
		</div>
	</body>
</html>