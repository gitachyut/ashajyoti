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
						<h2>Awareness Programme</h2>
                        <br>
					</div>

					<div class="grid_12">
                        <b>World Mental Health Day:</b>
                        <p>On 10th Oct. 2019 on the auspices of World Mental Health Day Ashajyoti celebrated by organizing an awareness meeting at Niz-Dahi Hari Mandir Campus. The programme was sponsored by Dist. Legal Service Authority, Darrang.</p>
					</div>
					<div class="clear"></div>

                    <div class="grid_12">
                        <b>World environment day:</b>
                        <p>The World Environment Day is observed on 5th June 21. On this occasion Ashajyoti organized one plantation programme at villages Niz-sipajhar, Hazarikapara & kamarpara. Supported by District Legal services Authority, Darrang . The plantation was done by Mr. Jiaur Rahman, Executive Director, Mr. Jogendra Bania, President of  Ashajyoti, Mr. Jayanta Barua, Rebokanta Bania, Mr. Nandi Ram Kalita , Head Master R.G.Baruah L.P School, Niz-sipajhar .</p>
                    </div>
					<div class="clear"></div>

                    <div class="grid_12">
                        <b>International youth Day:</b>
                        <p>ASHAJYOTI observed the International Youth Day on 12th Aug.’21. The meeting was held at the auditorium of Diamond club sipajhar. The meeting was attended by the resource persons like Mr. Bhupen Kr. Nath  programme  officer Grant Thornton, London, Mr. Jiaur Rahman Executive Director “ ASHAJYOTI”and Mr. Jayanta Barua chief Advisor “ASHAJYOTI”. They plead for the development of the youth both mentally as well as physically. Without mental development no one can become a perfect gentleman. The meeting was supported by the DLSA, Darrang. </p>
                    </div>
					<div class="clear"></div>

                    <div class="grid_12">
                        <b>Awareness Programme on Covid-19:</b>
                        <p>Ashajyoti organized three awareness meetings on Covid-19 at different locations. This programme was held at the villages of Niz-sipajhar, Khatikuchi, Dukanpara and Muslimghopa. These meeting were held on 10thand 12thSeptember20</p>
                    </div>
					<div class="clear"></div>
                    
                    <div class="grid_12">
                        <b>Health Programme:</b>
                        <p>As part of health programme Ashajyoti organized an awareness meeting on 20thFebruary/21.The 	A meeting was held on the Importance of Blood Donation.  The programme was held at Debananda Gaon Panchayat Community hall. </p>
                        <p>An awareness programme for pregnant women was held on 19/03/21 at village Muslimghopa. In the meeting the resource person explains to the participant how to take care of the health during pregnancy. Ms. Elima Jahan CHO, Solpam health and wellness Centre attended as resource person. </p>
                    </div>
					<div class="clear"></div>

                    <div class="grid_12">
                        <b>Child protection:</b>
                        <p>It is one of the most unfortunate actions that prevails in our society. Basically it happened in those societies where the light of education is quite negligible and where girl children were nothing but the burden. So the guardians tried to avoid the burden by giving marriage to their child before maturity. Our organization provides awareness camps in various places in the sipajhar block area to abolish the bad practice from  the society by giving proper knowledge through awareness camps. In this society people thought that Girl children were nothing but a burden. We are now happy that our awareness camps help the interior villagers and char areas to stop the early marriage in their society.</p>
                    </div>
					<div class="clear"></div>

                    <div class="grid_12">
                        <b>Sexual abuse:</b>
                        <p>Sexual abuse is one of the most heinous forbidden word in our society. Because the man who is involved in this act is really like an animal. The society where there is no proper education, economic and social development in that area has some illiterate people involved in these forbidden acts. To rescue and avoid this bad action we provided awareness camps in the remote areas of our block area to give the proper knowledge and education, so that the children of these areas were saved & rescued from this heinous work.</p>
                    </div>
					<div class="clear"></div>

                    <div class="grid_12">
                        <b>Drug Addiction:</b>
                        <p>Regarding the drug addiction we have taken a special measure i.e the children who are coming for therapy to our unit we provide them light food and organized a seminar on Drug Abuse. This type of seminar is observed occasionally to enhance the knowledge of the parents and to give proper guidance of the bad effect of drug abuse to the children & guardian as a whole.</p>
                    </div>
					<div class="clear"></div>

				</div>
			</div>
<!--==============================footer=================================-->
			<?php include 'footer.php';?>
		</div>
	</body>
</html>