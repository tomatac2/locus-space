<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>                          
<?PHP  // echo $this->element('front/css'); ?>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
<?php     echo $this->Html->script('/plugins/jquery-3.2.0.min.js'); 
           echo $this->Html->script('/plugins/bootstrap/js/bootstrap.min.js?q='.QRDN); ?>
 <?= $this->fetch('content') ?>
   <?PHP // echo $this->element('front/js'); ?>
   
    <?php

		echo $this->Html->css('/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css?q='.QRDN);

		/* Bootstrap Datepicker is taken from https://github.com/smalot/bootstrap-datetimepicker */
		echo $this->Html->css('/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css?q='.QRDN);
		/* Bootstrap Datepicker is taken from https://github.com/eternicode/bootstrap-datepicker */
		echo $this->Html->script('/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?q='.QRDN);

		/* Bootstrap Datepicker is taken from https://github.com/smalot/bootstrap-datetimepicker */
		echo $this->Html->script('/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?q='.QRDN);
                   		echo $this->Html->script('/plugins/bootstrap/js/bootstrap.min.js?q='.QRDN);

	?>