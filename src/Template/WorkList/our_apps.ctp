 
<link href="<?= URL ?>OurApps/common/css/roboto.css" rel="stylesheet">
<link rel="stylesheet" href="<?= URL ?>OurApps/common/css/animate.css">
<link rel="stylesheet" href="<?= URL ?>OurApps/common/css/icomoon.css">
<link rel="stylesheet" href="<?= URL ?>OurApps/common/css/font-awesome.css">
<link rel="stylesheet" href="<?= URL ?>OurApps/common/css/bootstrap.css">
<link rel="stylesheet" href="<?= URL ?>OurApps/common/css/flexslider.css">
<link rel="stylesheet" href="<?= URL ?>OurApps/common/css/stylec619.css?v=1.0">

<link rel="stylesheet" href="<?= URL ?>OurApps/common/css/bootstrap-rtl.css"><link rel="stylesheet" href="<?= URL ?>OurApps/common/css/style_ar.css">
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
<link href="<?= URL ?>OurApps/common/css/lightslider.css" rel="stylesheet">

<link href="<?= URL ?>OurApps/common/css/owl.carousel.min.css" rel="stylesheet">
<link href="<?= URL ?>OurApps/common/css/owl.theme.default.min.css" rel="stylesheet">

<link href="<?= URL ?>OurApps/common/css/jssocials.css" rel="stylesheet" type="text/css">
<link href="<?= URL ?>OurApps/common/css/jssocials-theme-flat.css" rel="stylesheet" type="text/css">


<div id="fh5co-page">
<!--    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>-->


    <div id="fh5co-main">
        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInRight">أعمالنا</h2>
            <div class="row row-bottom-padded-md">
                   <?php foreach($allApps as $allAppss): ?>
                <div class="col-md-4  col-sm-6 col-padding text-center animate-box" data-animate-effect="fadeInRight" >
                    <a href="<?=URL?>workList/appDetails/<?=$allAppss['id'].'/'.str_replace(' ','-' , $allAppss['subject'])?>" class="work image-popup" style="background-image: url('<?=URL?>library/works/<?= $allAppss->photo ?>');">
                        <div class="desc">
                            <h3><?= $allAppss->subject ?></h3>
                            <span><?= $allAppss->short_desc ?></span>
                        </div>
                    </a>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>

        <div class="fh5co-narrow-content">
            <div class="row">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                    <h1 class="fh5co-heading-colored">تواصل معنا</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInRight">
                    <p class="fh5co-lead" >يسعدنا و يشرفنا أن نتعامل معا</p>
<!--                    <p><a href="<?=URL?>#contact/message" class="btn btn-primary">اتصل بنا</a></p>-->
                </div>
  <?= $this->element('contact/contact') ;?>
            </div>
            
        </div>
        
      
        
    </div>
</div>

<!-- Modernizr JS -->
<script src="<?= URL ?>OurApps/common/js/modernizr-2.6.2.min.js"></script>
<!-- jQuery -->
<script src="<?= URL ?>OurApps/common/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?= URL ?>OurApps/common/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?= URL ?>OurApps/common/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?= URL ?>OurApps/common/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="<?= URL ?>OurApps/common/js/jquery.flexslider-min.js"></script>
<script src="<?= URL ?>OurApps/common/js/lightslider.js"></script>
<script src="<?= URL ?>OurApps/common/js/owl.carousel.min.js"></script>
<script src="<?= URL ?>OurApps/common/js/jssocials.js"></script>

<!-- MAIN JS -->
<script src="<?= URL ?>OurApps/common/js/main.js"></script>

 




<style>
        .row .row{    margin: 0 50px;}
        label {    padding: 0 15px;}
        .btn-primary{    background:#00adef !important; border: 2px solid #00adef !important;}
    .row-bottom-padded-md{    margin: 0;}
     .page-cover{ background: black}
    #fh5co-main{ width: 95% !important;     float: right; padding-top: 50px;}
    .work{ border:none !important}
    .work .desc{ height: 300px;}
    h2{ color :white}
    .fh5co-heading{    text-align: center; font-size: 28px; margin-top: 50px;}
    p{ color : white}
    #fh5co-main .fh5co-narrow-content{ padding: 0}
   @media (min-width: 280px) and (max-width: 1024px) {  #fh5co-main{ width: 100% !important;     float: right; padding-top: 50px;}}
    .header-top .logo-wrapper .logo img {
    height: auto !important; 
    width: 50% !important; 
    float: left;
}
</style>