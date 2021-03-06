<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

    <link rel="author" href="https://plus.google.com/+YOUR-PROFILE-HERE"/>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.png" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />

    <!-- A. CSS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylesheet.css">

    <!-- A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- B. HEAD JS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 

    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery/jquery-1.9.1.min.js"></script>

    <!-- B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

</head>

<body <?php body_class(); ?> class="page-home" id="page-home" >
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

        <!-- C.1. MASTHEAD -->

        <header id="masthead" class="masthead">

            <!-- C.1.1. Logo -->
            <a href="#page-home" class="home-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/logo.png" alt="" class="logo"/>
            </a>    
            <!-- C.1.2. Navigation -->
            <nav class="nav-main">

                <!-- C.1.1. Logo -->
                <a href="#page-home" class="home-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/logo-small.png" alt="" class="logo-small"/>
                </a>

                <!-- C.1.2. NAV -->
                <ul>
                    <li><a class="textLink" href="#section-our-vision">Our Vision</a></li>
                    <li><a class="textLink" href="#section-team">Meet the Team</a></li>
                    <li><a class="textLink" href="#section-services">What We Offer</a></li>
                    <li><a class="pagelink" href="?page_id=213">What's News</a></li>
                    <li><a class="pagelink" href="?page_id=215">Fine Print</a></li>
                    <li><a class="textLink" href="#section-contact">Talk to Us</a></li>

                    <li>
                        <a class="imgLink" href="https://www.facebook.com/IIMG-Africa-578378702342326/" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-facebook.svg" alt="Facebook">
                        </a>
                    </li>
                    <li>
                        <a class="imgLink" href="https://twitter.com/iimgafrica" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-twitter.svg" alt="Twitter">
                        </a>
                    </li>
                    <li>
                        <a class="imgLink" href="https://www.linkedin.com/company/iimg-africa-pty-ltd" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-linkedin.svg" alt="Linked In">
                        </a>
                    </li>
                    <li>
                        <a class="imgLink" href="https://instagram.com/iimgafrica" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-instagram.svg" alt="Linked In">
                        </a>
                    </li>

                </ul>
            </nav>
            
        </header>

        <!-- C.1. END -->
    
        <!-- C.2. MOBI NAV -->
    
        <header class="masthead-mobi">
            
            <!-- C.1.1. Logo -->
            <a href="#page-home" class="home-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/logo-small.png" alt="" class="logo-mobi"/>
            </a>
            
            <a class="c-hamburger c-hamburger--htx burger reveal" href="#mobi-nav">
                <span>toggle menu</span>
            </a> 
            
        </header>

        <!-- C.1.2. Navigation -->
        <nav class="mobi-nav hide-nav" id="mobi-nav">

            <!-- C.1.2. NAV -->
            <ul>
                <li><a class="textLink" href="#section-our-vision">Our Vision</a></li>
                <li><a class="textLink" href="#section-team">Meet the Team</a></li>
                <li><a class="textLink" href="#section-services">What We Offer</a></li>
                <li><a class="pagelink" href="?page_id=213">What's News</a></li>
                <li><a class="pagelink" href="?page_id=215">Fine Print</a></li>
                <li><a class="textLink" href="#section-contact">Talk to Us</a></li>

            </ul>
            
            <ul class="social-media">
                <li class="soc-med">
                    <a class="imgLink" href="https://www.facebook.com/IIMG-Africa-578378702342326/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-facebook.svg" alt="Facebook">
                    </a>
                </li>
                <li class="soc-med">
                    <a class="imgLink" href="https://twitter.com/iimgafrica" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-twitter.svg" alt="Twitter">
                    </a>
                </li>
                <li class="soc-med">
                    <a class="imgLink" href="https://www.linkedin.com/company/iimg-africa-pty-ltd" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-linkedin.svg" alt="Linked In">
                    </a>
                </li>
                <li class="soc-med">
                    <a class="imgLink" href="https://instagram.com/iimgafrica" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-instagram.svg" alt="Linked In">
                    </a>
                </li>

            </ul>
            
        </nav>
    
        <!-- C.2. END -->