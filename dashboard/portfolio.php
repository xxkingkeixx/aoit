<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Suko</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/linecons.css" rel="stylesheet">
        <link href="css/custom-fonts.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/Colors/default.css" rel="stylesheet">
        <link href="css/dark.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="widget-sidebar hidden-item">
            <!-- widget Tabs -->
            <div class="widget section-black around-white">
                <ul class="nav nav-tabs">
                    <li><a href="#home" data-toggle="tab" class="text-color">Popular</a></li>
                    <li class="active"><a href="#profile" data-toggle="tab" class="text-color">New</a></li>
                    <li><a href="#messages" data-toggle="tab" class="text-color">Categories</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane" id="home">

                    </div>
                    <div class="tab-pane active" id="profile">
                        <!-- content tab -->
                        <div class="row thumbnails hover-bg-color hover-around-white">
                            <div class="images">
                                <img src="images/Pictures/p1.jpg" alt="image">
                            </div>
                            <div class="label text-left">
                                <p>THE SIT UP.</p>
                                <small class="text-gray">March 6th 2013</small>
                            </div>
                        </div>
                        <div class="row thumbnails hover-bg-color hover-around-white">
                            <div class="images">
                                <img src="images/Pictures/thumb-p1.jpg" alt="image">
                            </div>
                            <div class="label text-left">
                                <p>RAIN OF THINK.</p>
                                <small class="text-gray">March 6th 2013</small>
                            </div>
                        </div>
                        <div class="row thumbnails hover-bg-color hover-around-white">
                            <div class="images">
                                <img src="images/Pictures/p1.jpg" alt="image">
                            </div>
                            <div class="label text-left">
                                <p>Suko AND CAT.</p>
                                <small class="text-gray">March 6th 2013</small>
                            </div>
                        </div>
                        <div class="row thumbnails hover-bg-color hover-around-white">
                            <div class="images">
                                <img src="images/Pictures/thumb-p1.jpg" alt="image">
                            </div>
                            <div class="label text-left">
                                <p>BROVEN.</p>
                                <small class="text-gray">March 6th 2013</small>
                            </div>
                        </div>
                        <div class="row thumbnails hover-bg-color hover-around-white">
                            <div class="images">
                                <img src="images/Pictures/thumb-p1.jpg" alt="image">
                            </div>
                            <div class="label text-left">
                                <p>THE SIT UP.</p>
                                <small class="text-gray">March 6th 2013</small>
                            </div>
                        </div>
                        <div class="row thumbnails hover-bg-color hover-around-white">
                            <div class="images">
                                <img src="images/Pictures/thumb-p6.jpg" alt="image">
                            </div>
                            <div class="label text-left">
                                <p>THE SIT UP.</p>
                                <small class="text-gray">March 6th 2013</small>
                            </div>
                        </div>
                        <!-- end content tab -->
                    </div>
                    <div class="tab-pane" id="messages">

                    </div>
                </div>

            </div>

            <section class="section-dark around-white">
                <!-- widget Tags -->
                <article class="widget text-box">
                    <div class="widget-title text-color">
                        <span class="glyphicon glyphicon-tags text-color text-medium-large"> </span> &nbsp; <span class="text-medium-large"> TAGS </span>
                    </div>
                    <hr>
                    <div class="widget-content widget-tags">
                        <a href="#" class="hover-bg-color hover-text-white">Amazing</a> / <a href="#" class="hover-bg-color hover-text-white">Envato</a> / <a href="#" class="hover-bg-color hover-text-white">Themes</a> / <a href="#" class="hover-bg-color hover-text-white">Clean</a> / <a href="#" class="hover-bg-color hover-text-white">Responsive</a> / <a href="#" class="hover-bg-color hover-text-white">Multipurpose</a> / 
                        <a href="#" class="hover-bg-color hover-text-white">Creative</a> / <a href="#" class="hover-bg-color hover-text-white">Twitter</a> / <a href="#" class="hover-bg-color hover-text-white">Wordpress</a>
                    </div>
                </article>
            </section>
        </div>

        <!-- menu mobile -->
        <div class="navigation-mobile bg-black hidden-item">
            <ul class="navigation-item">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="services.html">SERVICES</a></li>
                <li><a href="portfolio.html">PORTFOLIO</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
            <!-- end content tab -->
        </div>

        <div class="modal fade modal-form-load-portfolio" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <header class='modal-header'>
                        <div class='message'>
                            Title
                        </div>
                        <a class='glyphicon glyphicon-remove' data-dismiss="modal"></a>
                        <div class='clearfix'></div>
                    </header>
                    <section class='content'>
                    </section>
                </div>
            </div>
        </div>

        <div class="modal fade modal-search" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <header class='modal-header'>
                        <div class='message'>
                            SEARCH
                        </div>
                        <a class='glyphicon glyphicon-remove' data-dismiss="modal"></a>
                        <div class='clearfix'></div>
                    </header>
                    <section class='content'>
                        <input type='text' class='form-control' placeholder="&#xe009; &nbsp; : &nbsp; KEYWORDS">
                        <hr>
                        <a href='#' class='btn-Suko-modal' data-prefix='&#xe009;'>SEARCH</a>
                    </section>
                </div>
            </div>
        </div>

        <section class="header">
            <div class="btn-nav">
                <a href="#" class="facebook"><i class="glyphicon glyphicon-th-large"></i></a>
            </div>

            <nav class="nav-top">
                <ul class="social hidden-xs">
                    <li>
                        <a href="#" class="facebook"><i class="icon-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="icon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="google-plus"><i class="icon-google"></i></a>
                    </li>
                </ul>
                <ul class="nav-user">
                    <li class="visible-xs">
                        <a href="#" class="menu-open"><i class="fa fa-bars"></i> &nbsp; <span class="hidden-xs"> SOCIAL </span></a>
                    </li>
                    <li>
                        <a href="#" class="widget-open"><i class="glyphicon glyphicon-list-alt"></i> &nbsp; <span class="hidden-xs"> SOCIAL </span></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target=".modal-search" class="search hover-bg-black"><i class="glyphicon glyphicon-search"></i></a>
                    </li>
                </ul>
            </nav>
            <nav class="nav-left">
                <ul>
                    <li>
                        <a href="index.html" data-rel="home"><i class="icon-home"></i></a>
                    </li>
                    <li>
                        <a href="about.html" data-rel="About"><i class="li_user"></i></a>
                    </li>
                    <li>
                        <a href="Services-2.html" data-rel="Services"><i class="li_paperplane"></i></a>
                    </li>
                    <li class="active">
                        <a href="portfolio.html" data-rel="Portfolio"><i class="li_photo"></i></a>
                    </li>
                    <li>
                        <a href="blog.html" data-rel="Blog"><i class="li_pen"></i></a>
                    </li>
                    <li>
                        <a href="contact.html" data-rel="Contact"><i class="li_location"></i></a>
                    </li>
                </ul>
            </nav>
        </section>

        <section class="wrapper">
            <section class='section-dark around-white'>
                <div class="body row">
                    <div class="col-lg-4 col-sm-6">
                        <header>
                            <h1 class='font-soft text-big inline'>
                                <span class="block">
                                    OUR <span class='text-color'>WORK</span>
                                </span>
                            </h1>
                            <hr>
                            <small class="text-small block right text-gray">Check our plans. We’re very reasonable when it comes about pricing.</small>
                        </header>
                    </div>
                    <div class="col-lg-8 col-sm-6">

                        <select id="cd-dropdown" class="cd-select right">
                            <option value="-1" selected>Select Filter</option>
                            <option value="*" >All</option>
                            <option value=".design" >Design</option>
                            <option value=".technology" >Technology</option>
                            <option value=".photography" >Photography</option>
                            <option value=".event" >Event</option>
                            <option value=".services" >Services</option>
                        </select>

                        <!--
                        <nav class="navigation-isotope right">
                            <a href="#" data-filter="*" class="none-border">ALL</a>
                            <a href="#" data-filter=".design">DESIGN</a>
                            <a href="#" data-filter=".technology">TECHNOLOGY</a>
                            <a href="#" data-filter=".photography">PHOTOGRAPHY</a>
                            <a href="#" data-filter=".event">EVENT</a>
                            <a href="#" data-filter=".services">SERVICES</a>
                        </nav>
                        -->
                    </div>

                    <article class="portfolio_container_isotope row box-spacing-blog">
                        <article class="bg-black item-isotope design services">
                            <img src="images/Pictures/portfolio-1.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope design photography services">
                            <img src="images/Pictures/portfolio-2.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope design photography">
                            <img src="images/Pictures/portfolio-3.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope design services">
                            <img src="images/Pictures/portfolio-6.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope technology photography">
                            <img src="images/Pictures/portfolio-4.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope technology event">
                            <img src="images/Pictures/portfolio-5.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope photography event">
                            <img src="images/Pictures/portfolio-10.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope photography services">
                            <img src="images/Pictures/portfolio-11.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope design event">
                            <img src="images/Pictures/portfolio-12.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope design event">
                            <img src="images/Pictures/portfolio-13.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope technology event">
                            <img src="images/Pictures/portfolio-14.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>

                        <article class="bg-black item-isotope technology services">
                            <img src="images/Pictures/portfolio-15.jpg" alt="image">
                            <div class="relative text-box front bottom ">
                                <div class="portfolio-description">
                                    <h1 class="text-medium-large font-hard"><span class="text-color " >MY </span> PROJECTS ONE.</h1>
                                    <span class="block text-smaller text-left"> Reference site about Lorem Ipsum </span>
                                </div>
                                <a href="single-portfolio.html" class="portfolio-link bg-color hover-bg-light-black height-full text-spacing-small absolute right fa fa-arrow-up text-white hover-text-white text-center text-large play-animations"></a>

                            </div>
                        </article>


                    </article>
                </div>
            </section>

            <section id="footer" class="section-black">
                <div class="around-white body small ">
                    <p class="text-medium">Copyright &COPY; Suko.Tv All Rights Reserved</p>
                </div>
            </section>

        </section>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script src="js/zepto.min.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <!-- parallax -->
        <script src="js/jquery.localscroll-1.2.7-min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- google map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!-- boostrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- nicescroll -->
        <script src="js/jquery.nicescroll.min.js"></script>

        <!-- isotope -->
        <script src="js/jquery.isotope.min.js"></script>

        <!-- Flexslider -->
        <script src="js/jquery.easing.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>

        <!-- Youtube -->
        <script src="js/youtube.js"></script>

        <!-- Fittext -->
        <script src="js/jquery.fittext.js"></script>

        <!-- Owl -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- Slider -->
        <script src="js/classie.js"></script>
        <script src="js/tiltSlider.js"></script>

        <!-- navigation -->
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/jquery.nav.js"></script>

        <!-- dots -->
        <script src="js/dots.js"></script>

        <!-- dots -->
        <script src="js/jquery.dropdown.js"></script>

        <!-- jpreloader -->
        <script src="js/jpreloader.min.js"></script>
        
        <!-- placeholder ie 9 -->
        <script src="js/jquery.placeholder.js"></script>

        <!-- Count Down -->
        <script src="js/jquery.countdown.min.js"></script>

        <!-- custom js -->
        <script src="js/custom.js"></script>
    </body>
</html>