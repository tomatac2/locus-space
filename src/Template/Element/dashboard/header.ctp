<!DOCTYPE html>
<html>

    <head>
        <?php
		echo $this->Html->meta('icon');
		/* Bootstrap CSS */
		echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css?q='.QRDN);
		
		/* Usermgmt Plugin CSS */
		echo $this->Html->css('/usermgmt/css/umstyle.css?q='.QRDN);
		
		/* Bootstrap Datepicker is taken from https://github.com/eternicode/bootstrap-datepicker */
		echo $this->Html->css('/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css?q='.QRDN);

		/* Bootstrap Datepicker is taken from https://github.com/smalot/bootstrap-datetimepicker */
		echo $this->Html->css('/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css?q='.QRDN);
		
		/* Chosen is taken from https://github.com/harvesthq/chosen/releases/ */
		echo $this->Html->css('/plugins/chosen/chosen.min.css?q='.QRDN);

		/* Toastr is taken from https://github.com/CodeSeven/toastr */
		echo $this->Html->css('/plugins/toastr/build/toastr.min.css?q='.QRDN);

		/* Jquery latest version taken from http://jquery.com */
		echo $this->Html->script('/plugins/jquery-1.11.3.min.js');
		
		/* Bootstrap JS */
		echo $this->Html->script('/plugins/bootstrap/js/bootstrap.min.js?q='.QRDN);

		/* Bootstrap Datepicker is taken from https://github.com/eternicode/bootstrap-datepicker */
		echo $this->Html->script('/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?q='.QRDN);

		/* Bootstrap Datepicker is taken from https://github.com/smalot/bootstrap-datetimepicker */
		echo $this->Html->script('/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?q='.QRDN);
		
		/* Bootstrap Typeahead is taken from https://github.com/biggora/bootstrap-ajax-typeahead */
		echo $this->Html->script('/plugins/bootstrap-ajax-typeahead/js/bootstrap-typeahead.min.js?q='.QRDN);
		
		/* Chosen is taken from https://github.com/harvesthq/chosen/releases/ */
		echo $this->Html->script('/plugins/chosen/chosen.jquery.min.js?q='.QRDN);

		/* Toastr is taken from https://github.com/CodeSeven/toastr */
		echo $this->Html->script('/plugins/toastr/build/toastr.min.js?q='.QRDN);

		/* Usermgmt Plugin JS */
		echo $this->Html->script('/usermgmt/js/umscript.js?q='.QRDN);
		echo $this->Html->script('/usermgmt/js/ajaxValidation.js?q='.QRDN);

		echo $this->Html->script('/usermgmt/js/chosen/chosen.ajaxaddition.jquery.js?q='.QRDN);
                echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                        
                        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <link rel="shortcut icon" href="slices/crlogo.png" type="image/x-icon">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= URL ?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= URL ?>dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?= URL ?>dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="<?= URL ?>plugins/iCheck/flat/blue.css">
        <link rel="stylesheet" href="<?= URL ?>plugins/morris/morris.css">
        <link rel="stylesheet" href="<?= URL ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="<?= URL ?>plugins/datepicker/datepicker3.css">
        <link rel="stylesheet" href="<?= URL ?>plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="<?= URL ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <style>
             @font-face {
                font-family: myFirstFont;
                src: url(<?= URL ?>font/GE-SS-Two-Bold.otf);
            }
            @font-face {
                font-family: mysecondFont;
                src: url(<?= URL ?>font/GE-SS-Two-Light.otf);
            }
            @font-face {
                font-family: mythirdFont;
                src: url(<?= URL ?>font/GE-SS-Two-Medium.otf);
            }
            body {
                font-family: mysecondFont !important;
            }
            h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: mysecondFont !important;
}
            
            #mainpt1{    background-image: url(<?= URL ?>slices/1.png);
    background-size: 100% 100%;
    height: 160px;}
           #mainpt2{    background-image: url(<?= URL ?>slices/2.png);
    background-size: 100% 100%;
    height: 160px;}
                                    
           #mainpt3{    background-image: url(<?= URL ?>slices/3.png);
    background-size: 100% 100%;
    height: 160px;}
                                                
           #mainpt4{    background-image: url(<?= URL ?>slices/4.png);
    background-size: 100% 100%;
    height: 160px;}
                                                            
           #mainpt5{    background-image: url(<?= URL ?>slices/5.png);
    background-size: 100% 100%;
    height: 160px;}
                                                                        
          #mainpt6{    background-image: url(<?= URL ?>slices/6.png);
    background-size: 100% 100%;
    height: 160px;}
            .small-box>.inner {
    padding: 58px !important;
}

#mainpth{padding-top: 26px;}
#mainptp{float: right;    padding-top: 15px;}
@media screen and (max-width: 1000px) {
   .small-box h3 {
    font-size: 20px !important;
    white-space: pre-line !important;
}
}
a{
        text-decoration: none !important;
}

        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b><span style="color:#f9c60d;">C</span></b><span style="color:#c23188;">R</span></span>
                    <!-- logo for regular state and mobile devices -->
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                       
                                            <!-- end message -->
                                           
                                          
                                         
                                          
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                     
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">مشاهدة الكل</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        تصميم بعض الأزرار
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20٪ كاملة</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        إنشاء موضوع جميل
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% كاملة</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        بعض المهام يجب أن أفعل
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        جعل التحولات جميلة
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">80% كاملة</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">عرض كافة المهام</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= URL ?>library/users/imagecache/umphotos/<?php echo $user[0]['photo'];?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"> <?php echo $user[0]['username'];?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= URL ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            <?php echo $user[0]['username'];?> - <?php echo $user[0]['username'];?>
                                            <small>عضو منذ نوفمبر 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?= URL ?>pages/examples/profile.html" class="btn btn-default btn-flat">الملف الشخصي</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?= URL ?>/logout" class="btn btn-default btn-flat">خروج</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= URL ?>library/users/imagecache/umphotos/<?= $user[0]['photo']; ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $user[0]['username'];?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                           <?php if ($user[0]['user_group_id'] == 1) { ?>
                    <ul class="sidebar-menu">
                        <li class="header">homepage</li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> personal information</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?= URL ?>Infos/add"><i class="fa fa-circle-o"></i>  add info</a></li>
                                <li class="active"><a href="<?= URL ?>Infos"><i class="fa fa-circle-o"></i>  all infos</a></li>
                            </ul>
                        </li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> skills</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?= URL ?>PersonalSkills/add"><i class="fa fa-circle-o"></i>  add personal skill</a></li>
                                <li class="active"><a href="<?= URL ?>OtherSkills/add"><i class="fa fa-circle-o"></i>  add other skills</a></li>
                                <li class="active"><a href="<?= URL ?>SupOtherSkills/add"><i class="fa fa-circle-o"></i>  add sup other skills</a></li>
                                <li class="active"><a href="<?= URL ?>PersonalSkills"><i class="fa fa-circle-o"></i>  all personal skills</a></li>
                                <li class="active"><a href="<?= URL ?>OtherSkills"><i class="fa fa-circle-o"></i>  all other skills</a></li>
                            </ul>
                        </li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> courses</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?= URL ?>courses/add"><i class="fa fa-circle-o"></i>  add courses</a></li>
                                 <li class="active"><a href="<?= URL ?>courses"><i class="fa fa-circle-o"></i>  all courses</a></li>
                             </ul>
                        </li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> experinces</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?= URL ?>experinces/add"><i class="fa fa-circle-o"></i>  add experince</a></li>
                                 <li class="active"><a href="<?= URL ?>experinces"><i class="fa fa-circle-o"></i>  all experince</a></li>
                             </ul>
                        </li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> works</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?= URL ?>works/add"><i class="fa fa-circle-o"></i>  add works</a></li>
                                 <li class="active"><a href="<?= URL ?>works"><i class="fa fa-circle-o"></i>  all works</a></li>
                             </ul>
                        </li>

    
                    </ul>
                 
                   
                      <?php }     else  {?>
                                                   <ul class="sidebar-menu">
                        <li class="header">الرئيسية</li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> الرئيسية</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?= URL ?>/dashboard"><i class="fa fa-circle-o"></i>  الرئيسية</a></li>
                            </ul>
                        </li>

                      
                      
                      
       
                      
                    </ul>
                                        <?php   } ?>
                </section>
                <!-- /.sidebar -->
            </aside>
