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
		<header>
			<div class="clear"></div>

			<div class="container_12">
				<div class="grid_12 nav_menu">
					<div class="logo">
						<a href="index.html">
							<img src="assets/logo.png" alt="Your Happy Family">
						</a>
						<div class="brand">
							<h1>Ashajyoti</h1></br>
							<p>NGO for disabilities</p>
						</div>

					</div>

					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.html">Home</a></li>
								<li><a href="index-1.html">About Us </a></li>
								<li><a href="index-2.html">Our Mission</a>
									<ul class="sf-menu">
										<li><a href="#">history</a></li>
										<li><a href="#">offers</a></li>
										<li><a href="#">news</a>
										<ul>
											<li><a href="#">fresh </a></li>
											<li><a href="#">archive</a></li>
										</ul>
									</ul>
								</li>
								<li><a href="index-4.html">Gallery</a></li>
								<li><a href="index-4.html">Contacts</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 16, 2013!</div>
				<div class="container_12">
					<div class="grid_8">
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
					<div class="grid_4">
						<!-- <a href="#" class="donate">Donate</a> -->
						<div class="text1 title">An NGO for the development of the persons with disability.</div>
						<p>We stand with the children and persons with disabilities and ensure equal opportunities for their active participation in the society. </p>
						<p>We provide therapy and special education to the children with disabilities especially from poor economic background to perform their day to day activities.</p>
						<p>We provide skill oriented training to the youths and women</p>
						<p>We help access rights and entitlements from the government available for the CwDs, PwDs, women, and children. </p>
					</div>
					<div class="grid_12">
						<h2>About Ashajyoti</h2>
						<br>
						<p>Ashajyoti is an Non government organization for the development of the persons with disability in particular and socio economic development of the society in general. Ashajyoti started its journey in the year 2011. The organization has been gear up with enthusiastic and dynamic youth committed leader such as Mr. Jiaur Rahman and Mr. Jogendra Bania to work for the welfare of the society. The aim of Ashajyoti is to form a society where everybody will avail basic amenities so as to live a dignified life irrespective of caste, creed, religion and race. Accordingly the organization stated activities with women, children, youth, poor backward communities of the society. </p>
						<p>Ashajyoti has been covering almost all villages of Darrang district and some parts of Udalguri district also. Since inception Ashajyoti has been working for physical and mental development of persons with disabilities. Besides this the organization has been organizing training programmes on income generating activities. Also organized Awareness programme on legal issues, child protection, environment etc. Presently Ashajyoti managed one library and provided relief materials among the rural people during natural calamities. It has been organizing cultural events, art and sports competitions on various occasions. Also Ashajyoti has been observing various days such as Shishu Divas, Women’s day, Health day, Environment day etc. with suitable activities.</p>
					</div>
					<div class="clear"></div>
					<div class="grid_12">

						<div class="gallery-container">
							<a href="assets/imgs/30.jpg" data-lg-size="1600-2400">
								<img alt="img1" src="assets/imgs/30.jpg" />
							</a>
							<a href="assets/imgs/31.jpg" data-lg-size="1024-800">
								<img alt="img2" src="assets/imgs/31.jpg" />
							</a>
							<a href="assets/imgs/3.jpg" data-lg-size="1024-800">
								<img alt="img2" src="assets/imgs/3.jpg" />
							</a>
							<a href="assets/imgs/6.jpg" data-lg-size="1024-800">
								<img alt="img2" src="assets/imgs/16.jpg" />
							</a>
							<a href="assets/imgs/8.jpg" data-lg-size="1024-800">
								<img alt="img2" src="assets/imgs/23.jpg" />
							</a>
							<a href="assets/imgs/19.jpg" data-lg-size="1024-800">
								<img alt="img2" src="assets/imgs/19.jpg" />
							</a>
						</div>

					</div>
					<div class="clear"></div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">our Mission</div>
							<div class="pad">
								All Children with Disabilities in Darrang district gain equal opportunity and live up to their full potential..<div class="alright"><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Our Vision</div>
							<div class="pad">
								To build a society in which every child and persons with disability enjoyed the right to survive, protection and development..<div class="alright"><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Our Objectives</div>
							<div class="pad">
								We stand with the children and persons with disabilities and ensure equal opportunities for their active participation in the society..<div class="alright"><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Volunteer For Us</div>
							<div class="pad">Our day to day life keeps us away from many bigger things like bringing a change and working for a better society...<div class="alright"><a href="#" class="btn">Read More</a></div></div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12 events_title">
						<h3 class="nowrap mb0">Our Awareness Programmes</h3>
					</div>
					<div class="grid_4 events">
						<time class="st1">World Mental Health Day</time>
						On 10th Oct. 2019 on the auspices of World Mental Health Day Ashajyoti celebrated by organizing an awareness meeting at..
						<div class="alright alt"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_4 events">
						<time class="st1">World environment day</time>
						The World Environment Day is observed on 5th June 21. On this occasion Ashajyoti organized one plantation programme at..
						<div class="alright alt"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_4 events">
						<time class="st1">International youth Day</time>
						ASHAJYOTI observed the International Youth Day on 12th Aug.’21. The meeting was held at the auditorium of Diamond club..
						<div class="alright alt"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_4 events">
						<time class="st1">Awareness Programme on Covid-19</time>
						Ashajyoti organized three awareness meetings on Covid-19 at different locations. This programme was held at..
						<div class="alright alt"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_4 events">
						<time class="st1">Health Programme</time>
						As part of health programme Ashajyoti organized an awareness meeting on 20thFebruary/21.The A meeting was..
						<div class="alright alt"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_4 events">
						<time class="st1"> Early Marriage</time>
						It is one of the most unfortunate actions that prevails in our society. Basically it happened in those societies where..
						<div class="alright alt"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_4 events">
						<time class="st1">Sexual abuse</time>
						Sexual abuse is one of the most heinous forbidden word in our society. Because the man who is involved in this act is really.. 
						<div class="alright alt"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_4 events">
						<time class="st1">Drug Addiction</time>
						Regarding the drug addiction we have taken a special measure i.e the children who are coming for therapy to our unit we provide..
						<div class="alright alt"><a href="#" class="btn">Read More</a></div>
					</div>

					<div class="clear"></div>
					<div class="grid_12 events_title">
						<h3 class="nowrap mb0">Skill Development</h3>
					</div>
					<div class="grid_4 events">
						<time class="st1">Skill Training Programme</time>
						Ashajyoti organized a series of Training programmes in 2019-2020..
						<div class="alright"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_4 events">
						<time class="st1">Personality Dev. And Skill Dev</time>
						We provided the training program to the PWD student to uplift the personalities..
						<div class="alright"><a href="#" class="btn">Read More</a></div>
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
			<footer>
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12 ">
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							<strong>Ashajyoti</strong>   &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a><br>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>