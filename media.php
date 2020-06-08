<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KYAF | Media</title>
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
			<a href="#" title=""><h1>KYAF</h1></a>
		</div><!-- Logo -->
		<nav class="menu">
			<ul id="menu-navigation">
				<li><a href="index.php">HOME</a>
						</li>
				</li>
				<li><a href="about.php">WHO WE ARE</a>
								
				</li>
				<li><a href="#">WHAT WE DO</a>
				<ul>
						<li><a href="#" title="">Projects</a></li>
					</ul>
				</li>
				<li><a href="#">PRESS</a>
									</li>
				<li class="active"><a href="#">MEDIA</a>
				</li>
				<li><a href="#">YOUTH ASSEMBLIES</a>
				<ul>
						<li><a href="http://www.mya.kyaf.or.ke" title="">Mombasa Youth Assembly</a></li>
					</ul>
									</li>
									<li><a href="contact-us.php">ENGAGE US</a></li>
			</ul>   
		</nav><!-- Menu -->

	</div>		
</header><!--header-->
<div class="top-image">
	<img src="images/single-page-top2.jpg"alt="" />
</div><!-- Page Top Image -->		

	
<section class="page">
	<div class="container">
			<div class="page-title">
				<h1>Media</span></h1>
			</div><!-- Page Title -->
			<ul class="gallery-tabs nav nav-tabs" id="myTab">
				<li class="active"><a data-toggle="tab" href="#meetings">MEETINGS</a></li>
				<li class=""><a data-toggle="tab" href="#trainings">TRAININGS</a></li>
				<li class=""><a data-toggle="tab" href="#community">COMMUNITY</a></li>
				<li class=""><a data-toggle="tab" href="#research">RESEARCH</a></li>
				<li class=""><a data-toggle="tab" href="#featured">FEATURED</a></li>
			</ul><!-- Selectors -->	
			<div class="gallery-content tab-content" id="myTabContent">
				<div id="events" class="tab-pane fade active in">
					<div class="row">
						<div class="col-md-3">
							<div class="gallery-image">
								<img src="images/kyaf-kilifi.jpg" alt="" />
								<span>MEDIA</span>
								<div class="image-lists">
									<ul>
										<li><a href="images/kyaf-kilifi-0.jpg" data-group="group1" class="html5lightbox" title=""><img src="images/kilifi-00.jpg" alt="" /></a></li>
										<li><a href="images/kyaf-kilifi-2.jpg" data-group="group1" class="html5lightbox" title=""><img src="images/kilifi-11.jpg" alt="" /></a></li>
										<li><a href="images/kyaf-kilifi-1.jpg" data-group="group1" class="html5lightbox" title=""><img src="images/kilifi-22.jpg" alt="" /></a></li>
									</ul>
								</div>
							</div>
							<h3 class="image-title"><a href="#" title="">KYAF Courtesy Call to Kilifi County Assembly Speaker</a></h3>
						</div>
						
					</div>
				</div>	<!-- Featured -->	  
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