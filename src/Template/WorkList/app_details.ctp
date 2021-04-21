
	<link href="<?=URL?>OurApps/common/css/roboto.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=URL?>OurApps/common/css/animate.css">
	<link rel="stylesheet" href="<?=URL?>OurApps/common/css/icomoon.css">
	<link rel="stylesheet" href="<?=URL?>OurApps/common/css/font-awesome.css">
	<link rel="stylesheet" href="<?=URL?>OurApps/common/css/bootstrap.css">
	<link rel="stylesheet" href="<?=URL?>OurApps/common/css/flexslider.css">
	<link rel="stylesheet" href="<?=URL?>OurApps/common/css/stylec619.css?v=1.0">
	
	<link rel="stylesheet" href="<?=URL?>OurApps/common/css/bootstrap-rtl.css"><link rel="stylesheet" href="<?=URL?>OurApps/common/css/style_ar.css">
 
	<link href="<?=URL?>OurApps/common/css/lightslider.css" rel="stylesheet">
	
	<link href="<?=URL?>OurApps/common/css/owl.carousel.min.css" rel="stylesheet">
	<link href="<?=URL?>OurApps/common/css/owl.theme.default.min.css" rel="stylesheet">
	
	<link href="<?=URL?>OurApps/common/css/jssocials.css" rel="stylesheet" type="text/css">
    <link href="<?=URL?>OurApps/common/css/jssocials-theme-flat.css" rel="stylesheet" type="text/css">
	
	
	
 
		<div id="fh5co-page">
<!--		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>-->
	 
		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<div class="row">
					
					
					<div class="col-md-12 animate-box" data-animate-effect="fadeInRight">
						
						<div class="col-md-9 col-md-push-3">
                                                    <h1><?= $appsDetails->subject ?></h1>
							<p><?= $appsDetails->post ?><p>
								
								<div class="row" style="direction: ltr">
									
<ul class="lightSlider" style="width:100%">
    <?php foreach($appsDetails['project_photos'] as $Val){ ?>
<li data-thumb="<?=URL?>library/projectPics/<?=$Val->pics?>" data-src="<?=URL?>library/projectPics/<?=$Val->pics?>" style="width:100%">
<img src="<?=URL?>library/projectPics/<?=$Val->pics?>" style="width:100%; height: 250px;" />
</li>
    <?php } ?>
</ul>								

								</div>
                                            
						</div>

						<div class="col-md-3 col-md-pull-9 fh5co-services text-center">
								<img  src="<?=URL?>library/works/<?=$appsDetails->photo?>" alt="<?=$appsDetails->subject?>" style="height:200px;width:50%; margin-bottom:30px" />
							<ul>
                                                            <?php if($appsDetails['iosLink']): ?>
                                                                <li style="margin-bottom:8px">تحميل تطبيق ابل</li> 
                                                                <div class="col-xs-12" style="padding-bottom:8px">
                                                                    <a href="<?=$appsDetails['iosLink']?>" target="_blank">
                                                                        <img src="<?=URL?>OurApps/common/images/ios-button.png" style="width:100%; max-width:170px" />
                                                                    </a>
                                                                </div>   
                                                          <?php  endif; ?>
 
                                                            <?php if($appsDetails['andriodLink']): ?>
                                                                <li style="margin-bottom:8px"> تحميل تطبيق اندرويد</li>
                                                                <div class="col-xs-12" style="padding-bottom:8px">
                                                                    <a href="<?=$appsDetails['andriodLink']?>" target="_blank">
                                                                        <img src="<?=URL?>OurApps/common/images/android-button.png" style="width:100%; max-width:170px" />
                                                                    </a></div>
                                                                  <?php  endif; ?>
                                                                    <?php if($appsDetails['webLink']): ?>
                                                                <li style="margin-bottom:8px">الذهاب الى الموقع</li>
                                                                <div class="col-xs-12" style="padding-bottom:8px"><a href="<?=$appsDetails['webLink']?>" target="_blank"><img src="<?=URL?>OurApps/common/images/web-button.png" style="width:100%; max-width:170px" /></a></div>							</ul>
                                                                     <?php  endif; ?>
                                                                 <div class="fh5co-narrow-content">
         
            <div class="row">
             
                    <?= $this->element('contact/contact') ;?>
            </div>
        </div>
                                                </div>
     
					</div>
				</div>
                                <?php 
                                $appPlus = $appsDetails->id +1 ;
                                $appMinus = $appsDetails->id -1 ;
                               $iPlus = 0 ;
                               $iMiuns = 0 ;
                              foreach($allApps as $allAppss):
                                  if($appPlus == $allAppss['id']){
                                   $plusURL = $appPlus.'/'.str_replace(" ", "-", $allAppss['subject']) ;   
                                   $iPlus = 1 ;
                                  } 
                                  if($appMinus == $allAppss['id']){
                                       $iMiuns = 1 ;
                                    $minusURL = $appMinus.'/'.str_replace(" ", "-", $allAppss['subject']) ; 
                                    
                                  } 
                              
                             endforeach;
                                    if($iPlus == 0):
                                        $plusURL =  $appsDetails->id.'/'.str_replace(" ", "-", $appsDetails['subject']) ;        
                                    endif;
                                    
                                      if($iMiuns == 0):
                                        $minusURL =  $appsDetails->id.'/'.str_replace(" ", "-", $appsDetails['subject']) ;         
                                    endif;
                             
                                
                                ?>
				<div class="row work-pagination animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-9 col-md-offset-3 col-sm-12 col-sm-offset-0">
						
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<a href="<?=URL?>workList/appDetails/<?=$plusURL?>"><i class="icon-arrow-right-thick"></i> <span>المشروع التالى</span></a>							
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<a href="<?=URL?>workList/OurApps">
                                                            <i class="icon-th-large"></i></a>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<a href="<?=URL?>workList/appDetails/<?=$minusURL?>"><span>المشروع السابق</span> <i class="icon-arrow-left-thick"></i></a>						</div>
					</div>
				</div>

			</div>
		</div>
</div>
	<!-- Modernizr JS -->
	<script src="<?=URL?>OurApps/common/js/modernizr-2.6.2.min.js"></script>
	<!-- jQuery -->
	<script src="<?=URL?>OurApps/common/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=URL?>OurApps/common/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=URL?>OurApps/common/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=URL?>OurApps/common/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?=URL?>OurApps/common/js/jquery.flexslider-min.js"></script>
	<script src="<?=URL?>OurApps/common/js/lightslider.js"></script>
	<script src="<?=URL?>OurApps/common/js/owl.carousel.min.js"></script>
	<script src="<?=URL?>OurApps/common/js/jssocials.js"></script>
	
	<!-- MAIN JS -->
	<script src="<?=URL?>OurApps/common/js/main.js"></script>
	
	 
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23924802-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-23924802-1');
	</script>
	
  

  
<script>
	$(".lightSlider").lightSlider({
	    gallery:true,
	    item:5,
	    loop:true,
	    thumbItem:9,
	    slideMargin:10,
	    
	    rtl:true,	    
	    enableDrag: true,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ],
	    currentPagerPosition:'left'
	});
</script>

<style>
    .header-top .logo-wrapper .logo img {
    height: auto!important;
    width: 45% !important; 
    float: left !important;
}
    .wrapper{ width: 100% !important}
    ul, ol { color: white;}
    p ,  a span {    color: white;} 
    .page-cover{ background: black}
    #fh5co-main{ width: 100% !important;     float: right;}
    .lSSlideOuter .lSPager.lSGallery img{height: 70px; width: 100%;opacity: 0;}
    li img {    border-radius: 2%; }
    .text-center img{ width: 100% !important}
   .text-center ul li{color:white !important;}
  [class^="icon-"], [class*=" icon-"]{
    color: white;
    font-size: 22px;
    }
    .fh5co-narrow-content .row{
        margin: 0;
    }
    #fh5co-main .fh5co-narrow-content{ padding:0 35px !important; margin-top: 100px;}
    h1 {color : white}
     .__res_msg { display: block !important ;}
    </style>