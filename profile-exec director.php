<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KYAF | Profile</title>
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
.style2 {
	color: #00FFFF;
	font-weight: bold;
}
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
				<li class="active"><a>WHO WE ARE</a>
								
				</li>
				<li><a href="#">WHAT WE DO</a>	
				</li>
				<li><a href="#">PRESS</a>
			  </li>
				<li><a href="#">MEDIA</a>
				</li>
				<li><a href="#">YOUTH ASSEMBLIES</a>
			  </li>
									<li><a href="#">ENGAGE US</a></li>
			</ul>   
		</nav><!-- Menu -->

	</div>		
</header><!--header-->

<div class="top-image">
	<img src="images/single-page-top2.jpg" alt="" />
</div><!-- Page Top Image -->
<br></br>
<br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="about.php" class="style2"> >>Back to Team</a>
<section class="page">
	<div class="container">
		<div class="row">
			<div class="profile-page">
				<div class="col-md-6">
					<div class="tab-content profile-tabs-content" id="myTabContent">
						<div id="profile-pic1" class="tab-pane fade in active">
							<img src="images/swaleh_ouma_exc.jpg" alt="" />
						</div>
						
					</div>					
					
									
				</div>
				<div class="col-md-6">
					<h1><i class="icon-user"></i>Swaleh Ouma</h1>
					<span class="designation">Executive Director</span>
					<ul class="profile-info">
						<li>
							<span><i class="icon-lightbulb"></i>Experience:</span>
							<p>10 Years</p>
						</li>
						<li>
							<span><i class="icon-envelope"></i>Email:</span>
							<p>o.swaleh@kyaf.or.ke</p>
						</li>
						<li>
						
						</li>
					</ul>
					<p>Mr. Swaleh Ouma is a graduate of Master of Arts in International Comparative Politics, Peace & Security from Wright State University (USA) and Bachelor of Law (LLB) from the University of Reading (UK).
Mr. Swaleh Ouma is a political expert with over 10 years of experience and having served in key political positions as International Liaison Officer, Chairperson of Youth League, and having contested as Member of Parliament for Kisauni Constituency.
Mr. Swaleh Ouma has proven skills to run efficient, community awareness campaigns and fund raising activities, strong analytical, diplomatic skills and proven ability to coordinate the efforts of many to meet organizational goals within a short period of time.
The above is evident by his academic prowess being a honorary member of Phi Kappa Phi, having won various International Model United Nations (MUN) Awards in New York, London, Nottingham, Bath, and Dayton, Graduate Teaching Assistant at WSU, and working for UNDP – Kenya.
Mr. Swaleh Ouma has proven leadership skills having served in the British Army as an Officer Cadet, President of Reading University MUN, Vice President of Reading University Society Convention Committee, and Country Director for the White Knights Partnership (UK).
 Mr. Swaleh Ouma is currently the Executive Director of KYAF where he is responsible for the day-to-day management of the organization.          

</p>

					
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