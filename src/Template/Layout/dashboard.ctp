<?PHP 

echo $this->element('dashboard/header');?>
    <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        
                        <small>لوحة التحكم</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<?php
			echo $this->element('Usermgmt.message_notification');

echo $this->fetch('content');?>
                    
                </section>
    </div>
                    <?php

echo $this->element('dashboard/footer');?>