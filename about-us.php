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
						<h2>About Ashajyoti</h2>
						<br>
						<p>Ashajyoti is an Non government organization for the development of the persons with disability in particular and socio economic development of the society in general. Ashajyoti started its journey in the year 2011. The organization has been gear up with enthusiastic and dynamic youth committed leader such as Mr. Jiaur Rahman and Mr. Jogendra Bania to work for the welfare of the society. The aim of Ashajyoti is to form a society where everybody will avail basic amenities so as to live a dignified life irrespective of caste, creed, religion and race. Accordingly the organization stated activities with women, children, youth, poor backward communities of the society.</p>
						<p>Ashajyoti has been covering almost all villages of Darrang district and some parts of Udalguri district also. Since inception Ashajyoti has been working for physical and mental development of persons with disabilities. Besides this the organization has been organizing training programmes on income generating activities. Also organized Awareness programme on legal issues, child protection, environment etc. Presently Ashajyoti managed one library and provided relief materials among the rural people during natural calamities. It has been organizing cultural events, art and sports competitions on various occasions. Also Ashajyoti has been observing various days such as Shishu Divas, Women’s day, Health day, Environment day etc. with suitable activities.</p>
					</div>
					<div class="clear"></div>
                    <div class="grid_12">

						<h2>Early Intervention Centre (EIC)</h2>
						<br>
                        <p>Ashajyoti has been running an Early Intervention Centre since its inception. The E.I.C assists the Children by providing infant stimulation, play based therapies, proper counseling and special education   inputs. It also emphasizes parents' involvement.  At present the early intervention Centre of ‘Ashajyoti’ reaches about 412 numbers of children and this shows a tremendous result.</p>
                        <p>Early Intervention Centre targeted services to help the ill-fated young children who have developmental delays or specific health conditions. Different types of specialist try with those 	children to avert disability. Providing the services early, will help the children to catch-up and build up their ability to succeed in school and over all in future.</p>
                        <br>

                        <b>Physiotherapy</b>
                        <p>Ashajyoti has been providing physiotherapy to the children with Disability from 0-6 age. This has been happening since 2014. The cumulative number of such physiotherapy patient is 310 The physiotherapist does the flowing activities :</p>
                        <p>
                            A) Referral: Gathered additional information and a discussion will be made as to the appropriateness & urgency of the referral (REFERRAL).<br>
                            B) Assessment: It may include information gathered from parents, families and neighbors of the child.
                        </p>
                        <br>

                        <b>Assessment includes</b>
                        <p>
                            1) Strength & Co-ordination.<br>
                            2) Motor development.<br>
                            3) Tone of the muscles.<br>
                            4) Posture & balance.<br>
                            5) Quality of movement.<br>
                            6) Function.<br>
                        </p>
                        <p>
                            C) Reporting: Following assessment the outcome will be discussed with the parent & a written report will be sent to the parent & the referrer.<br>
                            D) Interventions: Possible ways of supporting the child may include one or more of the following.
                            <br>
                            <div style="padding:0 10px;margin:0;">
                            a) Training & advice for parents /caretaker.<br>
                            b) Provide specialist equipment & appliances devices.<br>
                            c) Direct therapy to the children.<br>
                            d) Linkage with Line Departments for availing benefits of various scheme<br>
                            </div>
                        </p>

                        <p>
                            E) Discharged from therapy: The child discharged from therapy for one or more of the following reasons:<br>
                            <div style="padding:0 10px;margin:0;">
                            a) Physical potential achieved.<br>
                            b) Children do not benefit from the therapy.<br>
                            c) Child or family does not want to continue the therapy.<br>
                            </div>
                        </p>

                        <b>Speech therapy:</b>
                        <p>Speech therapy is a very important part of the Early Intervention unit. It is seen that almost all children have various disorders and have speech problems. The indigenously developed program is yielding excellent results especially when intervention is initiated early.</p>
                        <p>Ashajyoti has provided speech therapy from the age group of birth to 6 (six) years. Speech therapy is given to the children according to their needs, i,e to reduce drooling, tongue thrust and to improve chewing, speech clarity and breathing   power  etc. It is a very essential part to observe the condition of the patient at the time of Early Intervention. The cumulative number of such speech therapy patients is 29. Apart from the Darrang district, children suffering from speech problems are coming from other districts like Udalguri and Baska also to get treatment from our unit.</p>
                        <p>Besides treatment at our unit, our team visited the houses of our patient to look after the situation and environment of the society as well as their neighbour and counselling with the guardian to know how the patients accept our treatment</p>
                        <br>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<?php include 'footer.php';?>
		</div>
	</body>
</html>