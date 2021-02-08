<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>KYAF | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/kyaflogo.png" alt="Kyaf Logo"/>

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

    <!--    New Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--End New Styles-->

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
<div id="top-bar">
    <div class="container">
        <ul>
            <li>
                <i class="icon-home"></i>
                Mewa Majengo Road, Mombasa
            </li>
            <li>
                <i class="icon-phone"></i>
                +254725957081
            </li>
            <li>
                <i class="icon-envelope"></i>
                info@kyaf.or.ke
            </li>
        </ul>
        <div class="search-box">
            <input class="submit-button" type="submit" value="" >
            <input class="search-input" type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';"  value="Search">
        </div>
    </div>
</div><!--top bar-->


<header class="sticky">
    <div class="container">
        <a class="js-scroll-trigger" href="index.php">
            <img src="images/kyaflogo.png" style="width: 50px">
        </a>
        <label>KENYA YOUTH ASSEMBLIES FOUNDATION <br>
            <label>Modelling Transformative Youth Leaders of Today</label>
        </label>
        <nav class="menu">
            <ul id="menu-navigation">
                <li class="active"><a href="index.php">Home</a>

                </li>
                <li><a>About</a>
                    <ul>
                        <li><a href="about.php">Background Information</a>

                        </li>
                        <li><a href="about.php">Strategy and Policy</a>


                    </ul>
                </li>


                </li>
                <li><a>Team</a>
                    <ul>
                        <li><a href="team.php">Advisory board</a>

                        </li>
                        <li><a href="team.php">Management team</a>


                    </ul>
                </li>
                <li><a>County Assemblies</a>
                    <ul>
                        <li><a href="mya.php" title="">Mombasa Youth Assembly</a></li>
                        <li><a href=#"portfolio-3-column.php" title="">Kwale Youth Assembly</a></li>
                        <li><a href=#"portfolio-4-column.php" title="">Kilifi Youth Assembly</a></li>
                        <li><a href=#"portfolio-2-column.php" title="">Tana River Youth Assembly</a></li>
                        <li><a href=#"portfolio-3-column.php" title="">Lamu Youth Assembly</a></li>
                        <li><a href=#"portfolio-4-column.php" title="">Garissa Youth Assembly</a></li>
                        <li><a href=#"portfolio-2-column.php" title="">Wajir Youth Assembly</a></li>
                        <li><a href=#"portfolio-3-column.php" title="">Mandera Youth Assembly</a></li>
                        <li><a href=#"portfolio-4-column.php" title="">Marsabit Youth Assembly</a></li>
                        <li><a href=#"portfolio-2-column.php" title="">Isiolo Youth Assembly</a></li>
                        <li><a href=#"portfolio-3-column.php" title="">Meru Youth Assembly</a></li>
                        <li><a href=#"portfolio-4-column.php" title="">Tharaka Nithi Youth Assembly</a></li>
                        <li><a href=#"portfolio-2-column.php" title="">Embu Youth Assembly</a></li>
                        <li><a href=#"portfolio-3-column.php" title="">Kitui Youth Assembly</a></li>
                        <li><a href=#"portfolio-4-column.php" title="">Machakos Youth Assembly</a></li>





                    </ul>
                </li>
                <li><a>Projects</a>
                    <ul>
                        <li><a href=#"gallery-one-column.php" title="">Training counties</a></li>
                        <li><a href=#"gallery-two-column.php" title=""> Technical Team</a></li>
                        <li><a href=#"gallery-three-column.php" title="">3 Column Wide</a></li>

                        </li>

                    </ul><!-- Drop Down -->
                </li>
                <li><a>Blog</a>
                    <ul>
                        <li><a href=#"blog-without-sidebar.php" title="">Lifetyle stories</a></li>
                        <li><a href=#"blog-with-sidebar.php" title="">Youths challenges</a></li>
                        <li><a href=#"blog-with-left-sidebar.php" title="">Successful events</a></li>

                        </li>


                    </ul><!-- Drop Down -->
                </li>
                <li><a href="contact.php">Contact us</a>

                </li>
            </ul>
        </nav><!-- Menu -->

        <select class="ipadMenu">
            <option value="">Menu</option>
            <option value="index.php">Home Simple 1</option>
            <option value="index2.php">Home Modern Style</option>
            <option value="index3.php">Home Simple 2</option>
            <option value="index4.php">Home Simple 3</option>
            <option value="index7.php">Home Traditional Style</option>
            <option value="index5.php">Home With Video</option>
            <option value="index6.php">Home With Portfolio</option>
            <option value="sticky-menu.php">Sticky Header</option>
            <option value="menu-below-slider.php">Menu Below Slider</option>
            <option value="middle-logo.php">With Logo In The Mid</option>
            <option value="index5.php">Toggle Header</option>
            <option value="about.php">About Wide</option>
            <option value="contact.php">Contact Wide</option>
            <option value="events-left-sidebar.php">Events With Left Sidebar</option>
            <option value="events.php">Events With Right Sidebar</option>
            <option value="single-event-page.php">Events Single Page</option>
            <option value="successful-stories.php">Successful Stories Wide</option>
            <option value="projects.php">On Going Project Wide</option>
            <option value="404.php">404 Page Wide</option>
            <option value="causes.php">Our Causes Wide</option>
            <option value="single-causes.php">Our Causes Single</option>
            <option value="services-single.php">Services Single Page</option>
            <option value="search-found.php">Search Found With R.Sidebar</option>
            <option value="search-found-left-sidebar.php">Search Found With L.Sidebar</option>
            <option value="nothing-found.php">Nothing Found With R.Sidebar</option>
            <option value="cart.php">My Cart With R.Sidebar</option>
            <option value="cart-left-sidebar.php">My Cart With L.Sidebar</option>
            <option value="products.php">Products With R.Sidebar</option>
            <option value="products-left-sidebar.php">Products With L.Sidebar</option>
            <option value="checkout.php">Checkout With R.Sidebar</option>
            <option value="checkout-left-sidebar.php">Checkout With L.Sidebar</option>
            <option value="order-recieved.php">Order Recieved With R.Sidebar</option>
            <option value="order-recieved-left-sidebar.php">Order Recieved With L.Sidebar</option>
            <option value="single-product.php">Products Single Page</option>
            <option value="portfolio-2-column.php">Portfolio 2 Col</option>
            <option value="portfolio-3-column.php">Portfolio 3 Col</option>
            <option value="portfolio-4-column.php">Portfolio 4 Col</option>
            <option value="gallery-one-column.php">Gallery 1 Col Wide</option>
            <option value="gallery-two-column.php">Gallery 2 Col Wide</option>
            <option value="gallery-three-column.php">Gallery 3 Col Wide</option>
            <option value="gallery-four-column.php">Gallery 4 Col Wide</option>
            <option value="gallery-one-column-with-sidebar.php">Gallery 1 Col With R.Sidebar</option>
            <option value="gallery-one-column-with-left-sidebar.php">Gallery 1 Col With L.Sidebar</option>
            <option value="gallery-two-column-with-sidebar.php">Gallery 2 Col With R.Sidebar</option>
            <option value="gallery-two-column-with-left-sidebar.php">Gallery 2 Col With L.Sidebar</option>
            <option value="gallery-three-column-with-sidebar.php">Gallery 3 Col With R.Sidebar</option>
            <option value="gallery-three-column-with-left-sidebar.php">Gallery 3 Col With L.Sidebar</option>
            <option value="blog-without-sidebar.php">Blog With Out Sidebar</option>
            <option value="blog-with-left-sidebar.php">Blog With L.Sidebar</option>
            <option value="blog-with-sidebar.php">Blog With R.Sidebar</option>
            <option value="single-post-image-left-sidebar.php">Single Post With Image L.Sidebar</option>
            <option value="single-post-image.php">Single Post With Image R.Sidebar</option>
            <option value="single-post-video-left-sidebar.php">Single Post With Video L.Sidebar</option>
            <option value="single-post-video.php">Single Post With Video R.Sidebar</option>
            <option value="single-post-slider-left-sidebar.php">Single Post With Slider L.Sidebar</option>
            <option value="single-post-slider.php">Single Post With Slider R.Sidebar</option>
            <option value="project-single-post-left-sidebar.php">Project Single Post L.Sidebar</option>
            <option value="project-single-post.php">Project Single Post R.Sidebar</option>
            <option value="elements.php">Features</option>
        </select>
    </div>
</header><!--header-->

</body>
</html>
