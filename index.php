<?php require('nc-cms/system/start.php'); $cms = new NCCms(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pasta Casalinga is an informal Italian restaurant that embraces and emphasizes the core of rustic cooking learned from generations of Italian tradition." />

    <!-- For the CMS -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php $cms->CSS(); ?>" />

    <link rel="icon" href="favicon.ico">

    <title>Pasta Casalinga</title>

    <link href="https://pastacasalingaseattle.com/css/pasta-casalinga.min.css" rel="stylesheet" />
    <script src="js/prefixfree.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#ff0000" />
    <meta name="theme-color" content="#ffffff" />


</head>

<body id="skrollr-body">

    <!-- For the CMS -->
    <?php $cms->ControlPanel(); ?>

    <!-- Navbar -->
    <div id="nav-wrapper">
        <nav id="nav" class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header" style="width: 50px">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#menu" data-scroll>Menu</a></li>
                        <li><a href="#ordering" data-scroll>Take Me Home</a></li>
                        <li><a href="#catering" data-scroll>Catering</a></li>
                        <li><a href="#classes" data-scroll>Classes</a></li>
                        <li><a href="#events" data-scroll>Events</a></li>
                        <li><a href="#contact" data-scroll>Contact</a></li>
                        <li><a href="#photos" data-scroll>Photos</a></li>
                        <li><a href="#about" data-scroll>About</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </div>

    <!-- Header -->
    <div class="spacer-40"></div>
    <div class="hero-container">
        <div class="hero" id="hero-splash">
            <div class="logo-pasta">
                <a href="index.html" class="animsition-link">
                    <img src="images/logo-pasta-linga.png" alt="Authentic Italian Restaurant" class="img-responsive wow fadeInDown" data-wow-delay=".5s" />
                </a>
            </div>
        </div>
    </div>

    <!-- Section 1 -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="spacer-80 hidden-sm hidden-xs "></div>
                <div class="spacer-40 hidden-md hidden-lg"></div>
                <h1 class="text-center wow fadeInUp" data-wow-offset="50">Authentic Handmade Pasta Created to Feed The Community</h1>
                <div class="spacer-40"></div>

                <div style="padding:56.25% 0 0 0;position:relative;">
                    <iframe src="https://player.vimeo.com/video/414818412?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
                    </iframe>
                </div>
                <script src="https://player.vimeo.com/api/player.js"></script>

                <div class="spacer-80 hidden-sm hidden-xs"></div>
                <div class="spacer-40 hidden-md hidden-lg"></div>
            </div>
        </div>
    </div>

    <!-- Intro -->
    <section class="bg-yellow wow fadeIn" data-wow-offset="50" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p class="text-intro"><?php $cms->ContentString('intro_text'); ?></p>
                </div>
            </div>
        </div>
        <div class="override-pos" id="intro-img-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-8 col-sm-4">
                        <img data-bottom-top="margin-top:-20px" data-top-bottom="margin-top:-80px" src="images/making-fresh-pasta.jpg" class="img-responsive" alt="hand-made pasta Seattle" />
                    </div>
                </div>
            </div>
        </div>
        <div class="override-pos hidden-xs hidden-sm" id="intro-img-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-6 col-sm-3">
                        <img data-bottom-top="margin-top:100px" data-top-bottom="margin-top:260px" src="images/pike-place-market-dining.jpg" class="img-responsive" alt="Restaraunts in Pike Street Market" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-80 hidden-xs hidden-sm"></div>
    <div class="spacer-20 hidden-lg hidden-md"></div>

    <!-- Menu -->
    <section id="menu" class="wow fadeIn" data-wow-offset="50" data-wow-delay=".4s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
						<?php $cms->ContentString('men_title'); ?>
					</h2>
                    <div class="spacer-40"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-board">
                        <table>
                            <tr>
                                <td class="menu-category">
                                    <?php $cms->ContentString('men_cat_1'); ?>
                                </td>
                                <td class="menu-detail">
                                    <?php $cms->ContentString('men_det_1'); ?>
                                </td>
                                <td class="menu-price">
                                    <?php $cms->ContentString('men_price_1'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="menu-category">
                                    <?php $cms->ContentString('men_cat_2'); ?>
                                </td>
                                <td class="menu-detail">
                                    <?php $cms->ContentString('men_det_2'); ?>
                                </td>
                                <td class="menu-price">
                                    <?php $cms->ContentString('men_price_2'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="menu-category">
                                    <?php $cms->ContentString('men_cat_3'); ?>
                                </td>
                                <td class="menu-detail">
                                    <?php $cms->ContentString('men_det_3'); ?>
                                </td>
                                <td class="menu-price">
                                    <?php $cms->ContentString('men_price_3'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="menu-category">
                                    <?php $cms->ContentString('men_cat_4'); ?>
                                </td>
                                <td class="menu-detail">
                                    <?php $cms->ContentString('men_det_4'); ?>
                                </td>
                                <td class="menu-price">
                                    <?php $cms->ContentString('men_price_4'); ?>
                                </td>
                            </tr>
							<tr>
                                <td class="menu-category">
                                    <?php $cms->ContentString('men_cat_5'); ?>
                                </td>
                                <td class="menu-detail">
                                    <?php $cms->ContentString('men_det_5'); ?>
                                </td>
                                <td class="menu-price">
                                    <?php $cms->ContentString('men_price_5'); ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Ordering -->
    <section id="ordering" class="wow fadeIn" data-wow-offset="50" data-wow-delay=".2s">

        <div class="section-divider"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        <?php $cms->ContentString('ordering_title'); ?>
                    </h2>
                    <div class="spacer-40"></div>
                </div>
            </div>
        </div>
        <div class="bg-yellow-offset">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php $cms->ContentHTML('ordering_instructions'); ?>
                        <div class="spacer-20"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu-board">
                                        <table>
                                            <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_1'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_1'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_1'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_2'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_2'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_2'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_3'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_3'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_3'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_4'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_4'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_4'); ?>
                                                </td>
                                            </tr>
							                <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_5'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_5'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_5'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_6'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_6'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_6'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_7'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_7'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_7'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_8'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_8'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_8'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_9'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_9'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_9'); ?>
                                                </td>
                                            </tr>
							                <tr>
                                                <td class="menu-category">
                                                    <?php $cms->ContentString('men_take_cat_10'); ?>
                                                </td>
                                                <td class="menu-detail">
                                                    <?php $cms->ContentString('men_take_det_10'); ?>
                                                </td>
                                                <td class="menu-price">
                                                    <?php $cms->ContentString('men_take_price_10'); ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                        <div class="spacer-40"></div>
                        <div class="btnCTA-width wow fadeInRightBig" data-wow-offset="90">
                            <!-- <a class="btnCTA" href="mailto:catering@pastacasalingaseattle.com?subject=Lasagna Order&Body=-%20Lasagna%20size%20%28S%2C%20M%2C%20L%29%20%3F%0A-%20Cooked/uncooked%3F%0A-%20Desired%20pick%20up%20date/time%3F%0A-%20Hot%20at%20pick%20up%20time%20%20Y/N%29%20%3F%0A" role="button">Order Lasagna</a> -->
                            <a class="btnCTA" href="https://pasta-casalinga.square.site/" target="_blank"><?php $cms->ContentString('order_btn_label'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    

    <!-- Catering -->
    <section id="catering" class="wow fadeIn" data-wow-offset="50" data-wow-delay=".2s">

        <div class="section-divider sd-0-top"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        <?php $cms->ContentString('catering_title'); ?>
                    </h2>
                    <div class="spacer-40"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <th><?php $cms->ContentString('catering_th_1_1'); ?></th>
                        <th><?php $cms->ContentString('catering_th_1_2a'); ?><br><?php $cms->ContentString('catering_th_1_2b'); ?></th>
                        <th><?php $cms->ContentString('catering_th_1_3a'); ?><br><?php $cms->ContentString('catering_th_1_3b'); ?></th>
                        <tbody>
                            <tr>
                                <td><strong><?php $cms->ContentString('catering_row01_col01a'); ?></strong><br><?php $cms->ContentString('catering_row01_col01b'); ?></td>
                                <td><?php $cms->ContentString('catering_row01_col02'); ?></td>
                                <td><?php $cms->ContentString('catering_row01_col03'); ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php $cms->ContentString('catering_row02_col01a'); ?></strong><br><?php $cms->ContentString('catering_row02_col01b'); ?></td>
                                <td><?php $cms->ContentString('catering_row02_col02'); ?></td>
                                <td><?php $cms->ContentString('catering_row02_col03'); ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php $cms->ContentString('catering_row03_col01a'); ?></strong><br><?php $cms->ContentString('catering_row03_col01b'); ?></td>
                                <td><?php $cms->ContentString('catering_row03_col02'); ?></td>
                                <td><?php $cms->ContentString('catering_row03_col03'); ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php $cms->ContentString('catering_row04_col01a'); ?></strong><br><?php $cms->ContentString('catering_row04_col01b'); ?></td>
                                <td><?php $cms->ContentString('catering_row04_col02'); ?></td>
                                <td><?php $cms->ContentString('catering_row04_col03'); ?></td>
                            </tr>
                            <tr>
                                <td><strong><?php $cms->ContentString('catering_row05_col01a'); ?></strong><br><?php $cms->ContentString('catering_row05_col01b'); ?></td>
                                <td><?php $cms->ContentString('catering_row05_col02'); ?></td>
                                <td><?php $cms->ContentString('catering_row05_col03'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <th><?php $cms->ContentString('catering_th_2_1'); ?></th>
                        <th></th>
                        <tbody>
                            <tr>
                                <td><?php $cms->ContentHTML('catering_t2_row01_col01'); ?></td>
                                <td><?php $cms->ContentHTML('catering_t2_row01_col02'); ?></td>
                            </tr>
                            <tr>
                                <td><?php $cms->ContentHTML('catering_t2_row02_col01'); ?></td>
                                <td><?php $cms->ContentHTML('catering_t2_row02_col02'); ?></td>
                            </tr>
                            <tr>
                                <td><?php $cms->ContentHTML('catering_t2_row03_col01'); ?></td>
                                <td><?php $cms->ContentHTML('catering_t2_row03_col02'); ?></td>
                            </tr>
                            <tr>
                                <td><?php $cms->ContentHTML('catering_t2_row04_col01'); ?></td>
                                <td><?php $cms->ContentHTML('catering_t2_row04_col02'); ?></td>
                            </tr>
                            <tr>
                                <td><?php $cms->ContentHTML('catering_t2_row05_col01'); ?></td>
                                <td><?php $cms->ContentHTML('catering_t2_row05_col02'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <th><?php $cms->ContentString('catering_th_3_1'); ?></th>
                        <th></th>
                        <tbody>
                            <tr>
                                <td><?php $cms->ContentHTML('catering_t3_row01_col01'); ?></td>
                                <td><?php $cms->ContentHTML('catering_t3_row01_col02'); ?></td>
                            </tr>
                            <tr>
                                <td><?php $cms->ContentHTML('catering_t3_row02_col01'); ?></td>
                                <td><?php $cms->ContentHTML('catering_t3_row02_col02'); ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="spacer-20"></div>

                    <div class="table-legend">
                        <?php $cms->ContentHTML('catering_legend'); ?>
                    </div>
                </div>
            </div>
            <div class="row bigger-gutter">
                <div class="col-md-6">
                    <?php $cms->ContentHTML('catering_details'); ?>
                </div>
                <div class="col-md-6">
                    <div class="img-has-overlay">
                        <img class="img-responsive" src="images/slicing-salmon.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="spacer-20"></div>
                    <div class="btnCTA-width wow fadeInRightBig" data-wow-offset="90">
                        <a class="btnCTA" href="mailto:catering@pastacasalingaseattle.com?subject=Catering" role="button">Order Catering</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Classes -->
    <section id="classes" class="wow fadeIn" data-wow-offset="50" data-wow-delay=".2s">

    <div class="section-divider"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        <?php $cms->ContentString('classes_title'); ?>
                    </h2>
                    <div class="spacer-40"></div>
                </div>
            </div>
        </div>
        <!-- <div class="full-texture" style="padding-bottom: 20px">
            <div class="spacer-20"></div>
            <div class="container" style="background-color: white;">
                <div class="col-sm-12 the-classes">
                    <?php $cms->ContentHTML('upcoming_classes'); ?>
                </div>
            </div>
        </div> -->
        <div class="bg-yellow-offset">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 the-classes">
                        <?php $cms->ContentHTML('classes_upcoming'); ?>
                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    

    <!-- Private Events -->
    <section id="events" class="wow fadeIn" data-wow-offset="50" data-wow-delay=".2s">

        <div class="section-divider sd-0-top"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        <?php $cms->ContentString('events_title'); ?>
                    </h2>
                    <div class="spacer-40"></div>
                </div>
            </div>
            <div class="row bigger-gutter">
                <div class="col-sm-6">
                    <h3><?php $cms->ContentString('events_subheading'); ?></h3>
                    <div class="spacer-40"></div>
                    <?php $cms->ContentHTML('event_details'); ?>
                    <div class="spacer-40"></div>
                    <div class="wow fadeInRightBig" data-wow-offset="90">
                        <a class="btnCTA" style="width:auto;" href="mailto:michela@pastacasalingaseattle.com?subject=Private Event" role="button">Inquire About Events</a>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1 hidden-xs">
                    <div id="events-rail-1">
                        <img id="events-img-1" data-bottom-top="top:-80px;" data-top-bottom="top:10px;" class="wow fadeIn" src="images/events-01.jpg" alt="" />
                        <img id="events-img-2" data-bottom-top="top:-210px;" data-top-bottom="top:-30px;" class="wow fadeIn" src="images/events-02.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->

    <div id="contact" class="wow fadeIn" data-wow-offset="50" data-wow-delay=".2s">

    <div class="section-divider"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php $cms->ContentString('contact_title'); ?></h2>
                </div>
            </div>
        </div>
        <section class="" style="margin-top:40px; padding-top:0; position: relative; width: 100%;">
            <div id="contact-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-7 col-md-5 col-sm-6">
                            <?php $cms->ContentHTML('contact_info'); ?>
                        </div>
                        <div class="visible-sm col-sm-offset-1 col-sm-5">
                            <img class="img-responsive" src="images/pike-place-market-dining.jpg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-xs hidden-sm">
                <div id="contact-img-holder">
                    <img data-bottom-top="margin-top:-30%" data-top-bottom="margin-top:-70%" id="contact-img-1" src="images/pike-place-market-restaurant-view.jpg" alt="Pike Place Italian food restaurant" />
                </div>
            </div>


        </section>
    </div>

    <div class="spacer-80"></div>
    <div class="spacer-40 hidden-xs hidden-sm"></div>

    <!-- Photo Gallery -->

    <section id="photos" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php $cms->ContentString('photos_title'); ?></h2>
                    <div class="spacer-40"></div>
                </div>
            </div>
        </div>
        <div class="full-width bg-imagery">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div id="carousel-1" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                <li data-target="#carousel-1" data-slide-to="2"></li>
                                <li data-target="#carousel-1" data-slide-to="3"></li>
                                <li data-target="#carousel-1" data-slide-to="4"></li>
                                <li data-target="#carousel-1" data-slide-to="5"></li>
                                <li data-target="#carousel-1" data-slide-to="6"></li>
                                <li data-target="#carousel-1" data-slide-to="7"></li>
                                <li data-target="#carousel-1" data-slide-to="8"></li>
                                <li data-target="#carousel-1" data-slide-to="9"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/carousel-01.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-02.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-03.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-04.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-05.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-06.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-07.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-08.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-09.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="images/carousel-10.jpg" alt="" />
                                </div>

                            </div>

                            <!-- Controls -->
                            <!--<a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-80"></div>

    <!-- About Us -->

    <section id="about" class="wow fadeIn" data-wow-offset="50" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php $cms->ContentString('about_title'); ?></h2>
                    <div class="spacer-30"></div>
                        <?php $cms->ContentHTML('about_intro'); ?>
                    <div class="spacer-20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php $cms->ContentHTML('about_michela'); ?>                
                </div>
                <div class="col-md-4 hidden-lg">
                    <?php $cms->ContentHTML('about_nathan'); ?>                
                </div>
                <div class="col-md-4">
                    <img class="img-responsive visible-lg visible-md" src="images/nate-michela-italian-food.jpg" alt="Seattle authentic italian lunch" />
                    <img class="img-responsive visible-sm visible-xs" src="images/nate-michela-italian-food-wide.jpg" alt="Authentic Italian food" />
                </div>
                <div class="col-md-4 visible-lg">
                    <?php $cms->ContentHTML('about_nathan'); ?>                 
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-80"></div>
    <div class="spacer-20"></div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="spacer-20"></div>
                <svg version="1.1" id="logo-footer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 324.7 115.6" style="enable-background:new 0 0 324.7 115.6;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #AD0000;
                    }
                </style>
                <rect id="bar" y="107.6" class="st0" width="324" height="8" />

                <g>
                <path class="st0" d="M2.6,83.5h3.2V63.4H2.6v-1.8h8.9c4.9,0,8.7,2.9,8.7,7.3c0,4.6-3.4,7.5-8.5,7.5c-1.4,0-3,0-3.8-0.1v7.1h3.3v1.8
		                H2.6V83.5z M18.1,69c0-3.6-2.9-5.6-6.5-5.6H7.8v11.2c0.9,0,2.4,0.1,3.9,0.1C15.6,74.6,18.1,72.5,18.1,69z" />

                <path class="st0" d="M20.6,83.5h2.4l7.6-20.1h-2.7v-1.8h9.6v1.8h-2.7l7.6,20.1h2.4v1.8h-7.4v-1.8h2.8l-2.5-6.7h-10l-2.5,6.7h2.9
		                v1.8h-7.4V83.5z M36.9,75l-4.4-11.8L28.2,75H36.9z" />

                <path class="st0" d="M46.9,81c0-1.2,0.8-2,1.7-2s1.5,0.6,1.5,1.5c0,0.7-0.3,1.2-0.7,1.7c0.8,0.9,2.7,1.7,5.2,1.7
		                c3.4,0,5.4-1.8,5.4-4.6c0-2.7-2.4-3.9-5.2-5c-4-1.5-7-3.1-7-7c0-3.6,2.8-6.1,7.1-6.1c3.7,0,6.7,2.2,6.7,4.5c0,1.2-0.8,1.8-1.6,1.8
		                c-0.9,0-1.6-0.7-1.6-1.6c0-0.6,0.3-1.1,0.6-1.5c-0.6-0.8-2.7-1.4-4.2-1.4c-3.1,0-5,1.7-5,4.1c0,2.7,2.3,3.9,5.6,5.2
		                c3.7,1.5,6.6,3,6.6,6.8c0,4-3.2,6.6-7.5,6.6C49.9,85.7,46.9,83.1,46.9,81z" />

                <path class="st0" d="M70.9,83.5h3.3V63.3h-6.7v3.8h-2v-5.5H85v5.5h-2v-3.8h-6.7v20.2h3.3v1.8h-8.7V83.5z" />

                <path class="st0" d="M85.7,83.5h2.4l7.6-20.1h-2.7v-1.8h9.6v1.8h-2.7l7.6,20.1h2.4v1.8h-7.4v-1.8h2.8l-2.5-6.7h-10l-2.5,6.7h2.9
		                v1.8h-7.4V83.5z M102.1,75l-4.4-11.8L93.3,75H102.1z" />

                <path class="st0" d="M121,73.6c0-7.4,5.7-12.5,11.8-12.5c4.8,0,8.7,3.1,8.7,5.9c0,1.2-0.8,2.1-1.9,2.1c-0.9,0-1.6-0.7-1.6-1.6
		                c0-0.8,0.6-1.4,1.2-1.5c-0.6-1.2-3-3-6.4-3c-5.8,0-9.8,5.1-9.8,10.6c0,5.2,4.1,10.3,9.9,10.3c2.9,0,5.3-1,7.6-3l1.1,1.5
		                c-2.4,2.3-5.7,3.4-8.7,3.4C125.6,85.7,121,79.7,121,73.6z" />

                <path class="st0" d="M143.9,83.5h2.4l7.6-20.1h-2.7v-1.8h9.6v1.8H158l7.6,20.1h2.4v1.8h-7.4v-1.8h2.8l-2.5-6.7h-10l-2.5,6.7h2.9
		                v1.8h-7.4V83.5z M160.3,75l-4.4-11.8L151.5,75H160.3z" />

                <path class="st0" d="M170.2,81c0-1.2,0.8-2,1.7-2c0.9,0,1.5,0.6,1.5,1.5c0,0.7-0.3,1.2-0.7,1.7c0.8,0.9,2.7,1.7,5.2,1.7
		                c3.4,0,5.4-1.8,5.4-4.6c0-2.7-2.4-3.9-5.2-5c-4-1.5-7-3.1-7-7c0-3.6,2.8-6.1,7.1-6.1c3.7,0,6.7,2.2,6.7,4.5c0,1.2-0.8,1.8-1.6,1.8
		                c-0.9,0-1.6-0.7-1.6-1.6c0-0.6,0.3-1.1,0.6-1.5c-0.6-0.8-2.7-1.4-4.2-1.4c-3.1,0-5,1.7-5,4.1c0,2.7,2.3,3.9,5.6,5.2
		                c3.7,1.5,6.6,3,6.6,6.8c0,4-3.2,6.6-7.5,6.6C173.2,85.7,170.2,83.1,170.2,81z" />

                <path class="st0" d="M187.9,83.5h2.4l7.6-20.1h-2.7v-1.8h9.6v1.8H202l7.6,20.1h2.4v1.8h-7.4v-1.8h2.8l-2.5-6.7h-10l-2.5,6.7h2.9
		                v1.8h-7.4V83.5z M204.3,75l-4.4-11.8L195.5,75H204.3z" />

                <path class="st0" d="M214.6,83.5h3.2V63.4h-3.2v-1.8h8.6v1.8h-3.3v20.1h9v-3.7h2v5.5h-16.2V83.5z" />

                <path class="st0" d="M234.7,83.5h3.3V63.4h-3.3v-1.8h8.7v1.8h-3.3v20.1h3.3v1.8h-8.7V83.5z" />

                <path class="st0" d="M252.3,65.1v18.4h3.2v1.8h-8.3v-1.8h3.2V63.4h-3.2v-1.8h5l14.6,19.5V63.4h-3.2v-1.8h8.2v1.8h-3.1v22h-1.2
		                L252.3,65.1z" />

                <path class="st0" d="M275.3,73.7c0-7.6,5.8-12.5,12.2-12.5c5.3,0,8.7,3,8.7,5.4c0,1.2-0.7,1.9-1.7,1.9c-0.9,0-1.6-0.7-1.6-1.6
		                c0-0.6,0.3-1.1,0.8-1.4c-1-1.2-3.3-2.4-6.3-2.4c-6,0-10,4.8-10,10.7c0,6.1,4.4,10.2,9.6,10.2c2.8,0,5.3-0.9,7.6-2.6v-5.5h-6.8v-1.8
		                h8.9v11.2h-1.9v-2.2c-2.2,1.6-4.6,2.6-7.8,2.6C280.9,85.7,275.3,81.2,275.3,73.7z" />

                <path class="st0" d="M300.6,83.5h2.4l7.6-20.1h-2.7v-1.8h9.6v1.8h-2.7l7.6,20.1h2.4v1.8h-7.4v-1.8h2.8l-2.5-6.7h-10l-2.5,6.7h2.9
		                v1.8h-7.4V83.5z M317,75l-4.4-11.8L308.2,75H317z" />

                </g>
                <g id="rolling_pin">
                <g>
                <path class="st0" d="M126.3,4.4c-1.1,0-1.9,0.5-1.9,1.6v1.5c-5.2-0.1-9.9-0.5-12.1-1.2c-0.2-0.1-0.4-0.1-0.6-0.2
			                c-6.1-2.6-10.9-1.1-10.9-1.1c-1.3,0.6-1.9,1.3-2,2c0,0-2.8,0.9-2.6,3.8c0.2,2.4,2.6,2.9,2.6,2.9c0.1,0.7,0.7,1.4,2,2
			                c0,0,4.8,1.5,10.9-1.1c0.2-0.1,0.4-0.1,0.6-0.2c2.3-0.7,7-1.1,12.1-1.2v1.6c0,1.1,0.8,2.2,1.9,2.2h1.1V4.4H126.3z" />

                <polygon class="st0" points="195.3,0 131.8,0 131.8,4 131.8,16.8 131.8,20.7 195.3,20.7 		" />

	                </g>
                <path class="st0" d="M199.8,4.4c1.1,0,2.1,0.5,2.1,1.6v1.5c5.2-0.1,9.8-0.5,12-1.2c0.2-0.1,0.3-0.1,0.5-0.2
		                c6.1-2.6,10.9-1.1,10.9-1.1c1.3,0.6,1.9,1.3,2,2c0,0,2.8,0.9,2.6,3.8c-0.2,2.4-2.6,2.9-2.6,2.9c-0.1,0.7-0.7,1.4-2,2
		                c0,0-4.8,1.5-10.9-1.1c-0.2-0.1-0.3-0.1-0.5-0.2c-2.3-0.7-6.9-1.1-12-1.2v1.6c0,1.1-1,2.2-2.1,2.2H199V4.4H199.8z" />

                </g>
                </svg>

                <div class="spacer-80"></div>
                <div class="social">
                    <a href="https://www.facebook.com/pastacasalingaseattle/" class="float-shadow wow rotateIn" data-wow-offset="30" data-wow-delay=".2s">
                        <picture>
                            <source type="image/svg+xml" srcset="images/icon-facebook.svg" />
                            <img src="images/icon-facebook.png" alt="Facebook" title="Facebook" />
                        </picture>
                    </a>
                    <a href="https://www.yelp.com/biz/pasta-casalinga-seattle" class="float-shadow wow rotateIn" data-wow-offset="30" data-wow-delay=".4s">
                        <picture>
                            <source type="image/svg+xml" srcset="images/icon-yelp.svg" />
                            <img src="images/icon-yelp.png" alt="Yelp" title="Yelp" />
                        </picture>
                    </a>
                    <a href="https://www.instagram.com/pastacasalinga/" class="float-shadow wow rotateIn" data-wow-offset="30" data-wow-delay=".6s">
                        <picture>
                            <source type="image/svg+xml" srcset="images/icon-instagram.svg" />
                            <img src="images/icon-instagram.png" alt="Yelp" title="Instagram" />
                        </picture>
                    </a>
                </div>
                <p class="wow fadeIn">
                    <a href="/nc-cms" rel="noindex" style="color:inherit; text-decoration:none;">
                        &#169; Pasta Casalinga
                    </a>
                </p>
            </div>
        </div>
    </div>


    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/functions.js"></script>

    <script src="js/skrollr.min.js"></script>
    <script type="text/javascript">
        skrollr.init({
            mobileCheck: function () {
                return false;
            }
        });
    </script>

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script src="js/smooth-scroll.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', { speed: 1500, easing: 'easeInOutQuad' });
    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>
