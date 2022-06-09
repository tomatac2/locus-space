<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Page Title Here -->
     <title> <?php  echo $this->request->params['action'] == "appDetails" || $this->request->params['action'] == "ourApps" ? "Application Development": "Locus Space" ?></title>
 
    <meta name="description" content="Locus Space">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="<?=URL?>fonts/opensans/stylesheet.css">
    <link rel="stylesheet" href="<?=URL?>fonts/montserrat/stylesheet.css">
    <link rel="stylesheet" href="<?=URL?>fonts/roboto/stylesheet.css">
    <link rel="stylesheet" href="<?=URL?>fonts/bebas/stylesheet.css">
    <link rel="stylesheet" href="<?=URL?>fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=URL?>css/pageloader.css">
    <link rel="stylesheet" href="<?=URL?>css/foundation.min.css">
    <link rel="stylesheet" href="<?=URL?>js/vendor/swiper.min.css">
    <link rel="stylesheet" href="<?=URL?>js/vendor/jquery.fullpage.min.css">
    <link rel="stylesheet" href="<?=URL?>js/vegas/vegas.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href="<?=URL?>css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="<?=URL?>css/responsive.css">
<link rel="shortcut icon" href="<?=URL?>img/icons/shorticon.png">
    <script src="<?=URL?>js/vendor/modernizr-2.7.1.min.js"></script>

</head>

<body id="menu" class="hh-body alt-bg left-light">

    <div class="page-loader" id="page-loader">
        <div class="boxLoading">
        </div>
    </div>

    <!-- BEGIN OF site header Menu -->
    <header class="hh-header header-top">
        <!-- Begin of logo -->
        <div class="logo-wrapper">
            <a href="<?=URL?>">
                <h2 class="logo">
                    <span class="logo-img">
                        <img class="light-logo" src="<?=URL?>img/logoLocus.png" alt="Logo">
                    </span>
                </h2>
            </a>
        </div>
        <!-- End of logo -->


        <!-- Begin of top menu -->
        <nav class="top-menu-links">
            <ul class="links">
                <li><a href="<?=URL?>#home">Home</a></li>
                <li><a href="<?=URL?>#about-us">About</a></li>
                <li><a href="<?=URL?>#services">Services</a></li>
                <li><a href="<?=URL?>#branches">Our Braches</a></li>
                <li><a href="<?=URL?>#contact">Contact</a></li>
                <li><a href="<?=URL?>workList/OurApps">Our Mobile Apps</a></li>
            </ul>
        </nav>
        <!-- End of top menu -->


        <!-- Begin of menu icon -->
        <a class="menu-icon">
            <div class="bars">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </a>
        <!-- End of menu icon -->

        <nav class="main-menu">

            <ul class="links" id="qmenu">
                <li data-menuanchor="home">
                    <a href="<?=URL?>#home">
                        <span class="txt">Home</span>
                        <i class="icon ion-ios-home-outline"></i>
                    </a>
                </li>
                <li data-menuanchor="about-us">
                    <a href="<?=URL?>#about-us">
                        <span class="txt">About</span>
                        <i class="icon ion-ios-information-outline"></i>
                    </a>
                </li>
                <li data-menuanchor="services">
                    <a href="<?=URL?>#services">
                        <span class="txt">Services</span>
                        <i class="icon ion-ios-list-outline"></i>
                    </a>
                </li>
                <li data-menuanchor="branches">
                    <a href="<?=URL?>#branches">
                        <span class="txt"> Branches </span>
                        <i class="icon ion-ios-albums-outline"></i>
                    </a>
                </li>
          
 
                <li data-menuanchor="contact">
                    <a href="<?=URL?>#contact">
                        <span class="txt">Contact</span>
                        <i class="icon ion-ios-telephone-outline"></i>
                    </a>
                </li>

                <li data-menuanchor="ourApps">
                    <a href="<?=URL?>workList/OurApps">
                        <span class="txt"> Apps</span>
                        <i class="icon ion-ios-albums-outline"></i>
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <!-- END OF site header Menu-->
       <!-- BEGIN OF page cover -->
    <div class="page-cover">
        <!-- Cover Background -->
        <div class="cover-bg pos-abs full-size bg-img  bg-blur-0" ></div>

        <!-- Transluscent mask as filter -->
        <div class="cover-bg-mask pos-abs full-size bg-color" data-bgcolor="rgba(2, 3, 10, 0.7)"></div>

        <!-- Image mask layer -->
 
    </div>
    <!--END OF page cover -->

 