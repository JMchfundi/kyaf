<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KYAF | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>


<!-- Styles -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/sea-green.css" title="sea-green" />





<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


<!-- Scripts -->
<script src="js/jquery.1.9.1.js" type="text/javascript"></script>
<script src='js/bootstrap.js'></script>
<script src="js/html5lightbox.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
<script src='js/script.js'></script>		
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>
	
<script>
$(window).load(function(){
  $('.our-causes').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
	
  $('.slideshow').flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
});
  
</script>

	
<!-- Scripts For Layer Slider  -->
<script src="layerslider/JQuery/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="layerslider/JQuery/jquery-transit-modified.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#layerslider').layerSlider({
			skinsPath : 'layerslider/skins/',
			skin : 'defaultskin',
			responsive: true,
			responsiveUnder: 1200,			
			pauseOnHover: false,
			showCircleTimer: false,
			navStartStop:false,
			navButtons:false,
		}); // LAYER SLIDER
		
$(function() {
	


	$('#carousel').carouFredSel({
		responsive: true,
		circular: false,
		auto: false,
		items: {
			visible: 1,
			width: 20,
		},
		scroll: {
			fx: 'directscroll'
		}
	});
	$('#thumbs').carouFredSel({
		responsive: true,
		circular: false,
		infinite: false,
		auto: false,
		prev: '#prev',
		next: '#next',
		items: {
			visible: {
				min: 1,
				max: 6
			},
			width: 200,
			height: '80%'
		}
	});
	$('#thumbs a').click(function() {
		$('#carousel').trigger('slideTo', '#' + this.href.split('#').pop() );
		$('#thumbs a').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	
});
	
			
});		

</script>	
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #00CC00}
-->
</style>
</head>
<body>
<div class="theme-layout">
<div id="top-bar">
	<div class="container">
		<ul>
			<li>
				<span class="style1">Mewa Majengo Road, Mombasa</span>			</li>
			<li>
				<span class="style1">+254 725 957 081 | +254 721 420 290	</span> </li>
			<li>
				<span class="style1">hello@kyaf.or.ke</span>			</li>
		</ul> 
		<div class="search-box">
			<input class="submit-button" type="submit" value="" >
			<input class="search-input" type="text" onBlur="if(this.value=='')this.value=this.defaultValue;" onFocus="if(this.value==this.defaultValue)this.value='';"  value="Search">
		</div>
	</div>
</div><!--top bar-->


<header>
	<div class="container">
		<div class="logo">
			<a href="#" title=""><img src="images/kyaflogo.png" width="75" height="75"></a>
		</div><!-- Logo -->
		<nav class="menu">
			<ul id="menu-navigation">
				<li class="active"><a>HOME</a>
						</li>
				</li>
				<li><a href="about.php">WHO WE ARE</a>

				</li>
				<li><a href="#">WHAT WE DO</a>
				<ul>
						<li><a href="#" title="">Projects</a></li>
					</ul>
				</li>
				<li><a href="#">SMP</a>
                    <ul>
                        <li><a href="" title="">Twitter</a></li>
                        <li><a href="" title="">Facebook</a></li>
                        <li><a href="" title="">YouTube</a></li>
                    </ul>
                </li>
				<li><a href="media.php">MEDIA</a>
				</li>
				<li><a href="#">YOUTH ASSEMBLIES</a>
                    <ul>
                        <li><a href="" title="">Kwale Youth Assembly</a></li>
                        <li><a href="http://www.mya.kyaf.or.ke" title="">Mombasa Youth Assembly</a></li>
                        <li><a href="" title="">Kilifi Youth Assembly</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">ENGAGE US</a></li>
			</ul>
		</nav><!-- Menu -->

	</div>
</header><!--header-->

<div id="layerslider-container-fw">
	<div id="layerslider" style="width: 100%; height: 600px; margin: 0px auto; ">
	
		<div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >			
			<img src="images/slider_1.jpg" class="ls-bg" alt="Slide background">
				<h3 class="ls-s-1" style="top: 223px; left:248px; background: url(images/slider1-img2.png) no-repeat scroll 0 0 / auto 100% transparent; font-family:roboto; font-size:34px; font-weight:bold; color:#4c4c4c; line-height:56px; padding:0 60px 0 60px; ; border-radius:3px; delayin:500; scaleout:.5; slidedirection:fade;" ><i>LEADERSHIP AND </i> <span> GOVERNANCE</span></h3>
				<span class="ls-s-1"	style="top: 300px; left:248px; font-family:roboto; font-size:24px; font-weight:600; color:#000; padding:10px 20px 10px 50px; background:rgba(255,255,255,0.9); border-radius:4px 0 0px 4px; border-left:2px solid #93b631; position:relative; line-height:22px; float:left; delayin:1000; scalein:0; slidedirection:left; durationin : 2500;">A VOICE <i>FOR THE YOUTH</i></span>
				<p class="ls-s-1"	style="top: 360px; left:248px; font-family:roboto; font-size:13px; color:#fefefe; delayin:2000; scalein:4; slidedirection:fade; durationin : 2000;"></p>
		</div><!-- Slide1 -->

		<div class="ls-layer" style="transition2d: 45; slidedelay: 8000;" >			
			<img src="images/slider_2.jpg" class="ls-bg" alt="Slide background">
				<h3 class="ls-s-3 slide3-first" style="top:296px; left:100px; font-family: roboto; color: #FFFFFF; line-height:22px; font-size:32px; background:rgba(0,0,0,0.85); padding:18px 30px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5;  durationin :2000; delayin:500; showuntil:3000; slideoutdirection:right; easingin : easeOutQuad;">
						YOUTH<i> AND</i> GOVERNANCE</h3>
						
				<h4 class="ls-s-3 slide3-second" style="top:365px; left:100px; background:rgba(152,212,96,0.85); font-family: roboto; color: #FFFFFF; font-size:28px; line-height:26px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1000; showuntil:3500; slideoutdirection:right; easingin : easeOutQuad; ">
						EMPOWERING <span>YOUTH LEADERSHIP</span></h4>
			
			
			
		</div><!-- Slide2 -->
		
		<div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >			
			<img src="images/Slider_3.jpg" class="ls-bg" alt="Slide background">
				<h3 class="ls-s-2" style="top: 260px;left:230px; font-family:roboto; font-size:33px; font-weight:bold; color:#fff; line-height:60px; delayin:500; scaleout:.5; slidedirection:fade;" >GOVERNANCE<span class="style2"> ACCOUNTABILITY</span></h3>
				
				<span class="ls-s-2" style="top: 348px; left:230px; background:#9bd362; padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1000; showuntil:3000; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">CHAMPIONING<i style="font-style:normal; color:#373737;"> YOUTH AFFAIRS </i></span>

				
		</div><!-- Slide3 -->

		
		<div class="ls-layer" style="transition2d: 32; slidedelay: 8000;" >			
			<img src="images/slider_4.jpg" class="ls-bg" alt="Slide background">
			
			<h3 class="ls-s-4" style="top:280px; left:180px; background:rgba(0,0,0,0.9); font-family:roboto; font-size:36px; font-weight:bold; color:#fefefe; padding:20px 60px 20px; border-radius:4px; slidedirection:bottom; scalein :0; easingin : easeOutQuad; durationin :2000; delayin:500;">
				EMPOWERING YOUTH <i>ASSEMBLIES</i></h3>

				
			<h4 class="ls-s-4" style="top:415px; left:130px; color:#030303; font-family:source sans pro; font-size:20px; font-weight:700; slidedirection:fade; scalein :0; durationin :2000; delayin:2000;">GOVERNANCE, DEMOCRACY AND INTEGRITY</h4>

			
		</div><!-- Slide4 -->
		
	</div>

	<div class="message-box">
		<div class="message-box-title">			
			<span><i class="icon-envelope-alt"></i></span>
			<p>Leave A Message</p>
			<i class="icon-angle-up"></i>
		</div>
		<div class="message-form">
			<p>Talk to us and get to know more about Kenya Youth Assemblies Foundation</p>
			<div id="message"></div>
			<form method="post" action="contact.php" name="contactform" id="contactform">
				<input name="name" class="form-control" type="text" id="name" size="30" value=""  placeholder="Name" />
				<input name="email" class="form-control" type="text" id="email" size="30" value=""  placeholder="Email" />
				<textarea name="comments" rows="3" id="comments" rows="7" class="form-control"  placeholder="Your Message"></textarea>
				<input type="submit" class="submit-btn submit" id="submit" value="SEND MESSAGE" />
			</form>
		</div>
	</div><!-- Message Box -->
	
</div><!-- Layer Slider -->			


<section class="block">
	<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="sec-heading">
				<h2><strong>Our</strong> Support Programmes</h2>
			</div><!-- Section Title -->
			<div class="our-causes">	
					<ul class="slides">
						<li>
							<div class="row">
								<div class="col-md-4">
									<div class="causes-image">
										<img src="images/capacity_building.jpg" alt="thumb1" />
										<div class="cause-heading">
											<h3><b>Capacity Building</b></h3>
										</div>
											<div class="our-causes-hover">
												<h3>Capacity Building</h3>
												<p>In order to make governance more inclusive, trans formative capacity is needed. Governance will be strengthened with the youth and community recognizes the role in ensuring transparent and effective governance. To achieve this objective The foundation provide capacity building of Youth Assemblies across the country in trans-formative governance.</p>
												
											</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="causes-image">
										<img src="images/research_youth_affairs.jpg" alt="thumb1" />
										<div class="cause-heading">
											<h3><b>Research on Youth Affairs</b></h3>
										</div>
										<div class="our-causes-hover">
											<h3>Research on Youth Affairs</h3>
											<p>In order to understand the dynamics of the changing society on youth affairs, extensive research has to be conducted to ensure implementation of impacting youth policies and programs successfully and in order to achieve this, The foundation will participate and collaborate with other stakeholders in research focusing on youth and related affairs.</p>
											
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="causes-image">
										<img src="images/grant_aid_support.jpg" alt="thumb1" />
											<div class="cause-heading">
												<h3>Grant Aid Support</h3>
												
											</div>
										<div class="our-causes-hover">
											<h3>Grant Aid Support</h3>
											<p>Through its vast network of donors and partners as well as its own kitty, The foundation seeks to support the activities of the youth assemblies to achieve goals and objectives of transforming and empowering their communities in governance and accountability of public institutions . To achieve this The foundation will establish, develop, maintain and grant aid in cash or in kind to youth Assemblies both in  Kenya and outside.</p>
									
										</div>
									</div>		
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-md-4">
									<div class="causes-image">
										<img src="images/youth_assembly_affairs.jpg" alt="thumb1" />
										<div class="cause-heading">
											<h3>Youth Assemblies Activities</h3>
										</div>
											<div class="our-causes-hover">
												<h3>Youth Assemblies Activities</h3>
												<p>Youth Assemblies conduct various activities that foster good cooperation between the stakeholders and the youth who foster positive change. These activities motivate and enable the youth to participate, dialogue and debate issues affecting them with respective representatives of various institutions both government at National and County level as well as organizations. The foundation will support these youth assemblies to implement these activities with success.</p>
												
											</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="causes-image">
										<img src="images/Youth_affairs.jpg" alt="thumb1" />
										<div class="cause-heading">
											<h3>Youth Affairs</h3>
										</div>
										<div class="our-causes-hover">
											<h3>Youth Affairs</h3>
											<p>Supporting Youth Affairs through various youth-led empowerment programs are aimed at creating healthier and higher qualities of life for the youth to ensure positive developmental change is achieved. These promote youth competence, confidence and connections among the youth to drive the change they need and this is among the objectives of the foundation.</p>
									
										</div>
									</div>
								</div>
								
							</div>
						</li>
					</ul>
			</div><!-- Causes -->
		</div>
		
		<div class="col-md-3 pull-right">
			<div class="sec-heading">
				<h2><strong>Support</strong>Our Cause</h2>
			</div>
			<div class="donate-us-box">
				<h5>MAKE A DIFFERENCE</h5>
				<span><h5>Your can assist in supporting our programs towards an empowered youth.</h5></span>
				
				<a href="#" class="donate-btn" title="">Donate To Us</a>
			</div><!-- Donate Us Box -->
		</div>
	</div>
	</div>
</section>
<section class="block">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="sec-heading">
					<h2><strong>Stay</strong> Updated</h2>
				</div><!-- Section Title -->
				<div class="carusal-slider">
					<div id="carousel-wrapper">
						<div id="carousel">
							<div id="news1">
								<div class="row">
									<div class="col-md-6 desc">
										<h3><a href="#" title="">A milestone reached for MYA</a></h3>
										<p>"We are now more focused and better equipped to serve the youth of Mombasa and the community at large”
This review process has been life-changing both on an institutional as well as personal level."These were some of the sentiments expressed as members of the Mombasa Youth Assembly in Kenya hugged and congratulated each other..<h5><strong><a href="https://oslocenter.no/a-milestone-reached-for-the-mombasa-youth-assembly/" target="new">Read More</a></strong></h5> </p>
									</div>
									<div class="col-md-6">
										<div class="image">
											<img src="images/milestone_for_mya.jpg" alt="" />
										
										</div>
									</div>
								</div>
							</div><!-- News -->
					
						</div>
					</div>
					<div id="thumbs-wrapper">
						<div id="thumbs">
							<a href="https://oslocenter.no/a-milestone-reached-for-the-mombasa-youth-assembly/" target="new" class="selected"><img src="images/milestone_icocn.jpg" alt="" /><span class="carusal-our-news">A Miletone Reached for MYA</span></a>
							<a href="https://www.trademarkea.com/news/mombasa-youth-back-port-deal-blue-economy-in-hope-for-jobs/" target="new"><img src="images/blue_econ_icon.jpg" alt="" /><span class="carusal-our-news">Supporting the Blue Economy</span></a>
							<a href="https://parispeaceforum.org/porteurs_projet/youth-driving-democratic-change/" target="new"><img src="images/mya_paris_peace_icon.jpg" alt="" /><span class="carusal-our-news">Youth Driving Democratic Change</span></a>
						</div><!-- Selectors -->
						<a id="prev" href="#"><i class="icon-angle-left"></i></a>
						<a id="next" href="#"><i class="icon-angle-right"></i></a>
					</div>	
				</div>
			</div><!-- Recent News -->
			
			<div class="col-md-6 pull-right">
				<div class="sec-heading">
					<h2><strong>In </strong> the Media</h2>
				</div>
				<p></p>
								<p>
								</p>
												<p></p>
																<p></p>
				<br></br>
				<div class="image">
			<img src="images/MYA_Paris_Peace_Forum.jpg" alt="MYA at Paris Peace Forum" /><i class="icon-play"></i>
											<a class="html5lightbox" href="https://www.youtube.com/watch?v=p0RJVtmp5Ss" title="">
											<span><i class="icon-play"></i></span>
										</a>
				</div>
			</div>
		</div>
	</div>
</section>			
</div>

<div class="footer-bottom">
	<div class="container">
		<p><span class="style1">Copyright © 2020 Kenya Youth Assemblies Foundation. </span><span>All rights reserved.</span> </p>

	</div>
</div><!-- Bottom Footer Strip -->


</body>
</html>
