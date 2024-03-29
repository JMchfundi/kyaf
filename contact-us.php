<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KYAF | Contact us</title>
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






<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


<!-- Scripts -->
<script src="js/jquery.1.9.1.js" type="text/javascript"></script>
<script src='js/script.js'></script>
<script src='js/bootstrap.js'></script>
<script src="js/html5lightbox.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>
	
<script>
$(window).load(function(){
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
				
</head><!-- Head --> 

<body>
<div class="theme-layout">
    <?php include "fragments/header.php";?><!--header-->

<div class="top-image">
	<img src="images/single-page-top2.jpg"alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="page-title">
			<h1>Contact <span>Us</span></h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="col-md-6">
				<div class="contact-info">
					<h3 class="sub-head">CONTACT INFORMATION</h3>
                    <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:600px;height:450px;"><div id="gmapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=aryan+plaza+Movie+Theater&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="embed-maphtml" href="https://www.embed-map.com" id="get-mapdata">https://www.embed-map.com</a><style>#gmapdisplay img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style></div>
			
					<ul class="contact-details">
						<li>
							<span><i class="icon-home"></i>ADDRESS</span>
							<p>Second Floor, Door 4, Aryan Plaza Opp. AAR Clinic,
                                Next to Basco Paints Machakos Street.
                            </p>
						</li>
						<li>
							<span><i class="icon-phone-sign"></i>PHONE NO</span>
							<p>+254 725 957 081 | +254 721 420 290</p>
						</li>
						<li>
							<span><i class="icon-envelope-alt"></i>EMAIL ID</span>
							<p>info@kyaf.or.ke</p>
						</li>
						<li>
							<span><i class="icon-link"></i>WEB ADDRESS</span>
							<p>http://www.kyaf.or.ke</p>
						</li>
					</ul>
				</div>
			</div>	<!-- Contact Info -->
			<div class="col-md-6 pull-right">
				<div id="message"></div>
				<div class="form">
					<h3 class="sub-head">CONTACT US BY MESSAGE</h3>
					<p>Your email address will not be published. Required fields are marked *<span>*</span></p>
					<form method="post"  action="contact.php" name="contactform" id="contactform">
						<label for="name" accesskey="U">Full name <span>*</span></label>
						<input name="name" class="form-control input-field" type="text" id="name" size="30" value="" />
						<label for="email" accesskey="E">Email Address <span>*</span></label>
						
						<input name="email" class="form-control input-field" type="text" id="email" size="30" value="" />
						<label for="comments" accesskey="C">Message <span>*</span></label>
						<textarea name="comments" rows="9" id="comments" rows="7" class="form-control input-field"></textarea>
						<input type="submit" class="form-button submit" id="submit" value="SEND MESSAGE" />
					</form>
				
				</div>
			</div>	<!-- Message Form -->
		</div>	
	</div>
<br></br>	
		
	<div class="footer-bottom">
	<div class="container">
		<p><span class="style1">Copyright © 2020 Kenya Youth Assemblies Foundation. </span><span>All rights reserved.</span> </p>

	</div>
</div><!-- Bottom Footer Strip -->


</body>
</html>