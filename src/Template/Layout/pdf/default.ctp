   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
        <link rel="stylesheet" href="<?= URL ?>animate.css/animate.min.css">
        <link rel="stylesheet" href="<?= URL ?>css/style.css">
        <link rel="stylesheet" href="<?= URL ?>css/fuck.css">
        <link rel="stylesheet" href="<?= URL ?>css/mpgradient.css">
        <link rel="stylesheet" href="<?= URL ?>css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" href="<?= URL ?>dropdown-menu-plugin/style.css">
<style>
                            .sortHeader th {text-align: center;}
                            .tables {text-align: center;}
                     
                              
  body{

                background-image: url('<?=URL?>images/IN-BG.png');    
                background-size: 100% 100%;
                background-repeat: no-repeat;
                font-family: mysecondFont;
            }
            .datepicker table {

                color: darkblue !important;
            }
            .control-label{
                display: inline-block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: bold;
                font-size: 13px !important;
            }
            .btn-default {
                border-color: #ffffff !important;
                color: #ffffff !important;
                background-color: black !important;
            }
            .form-group {
                margin-bottom: 25px !important;
            }
            .panel {
                margin-bottom: 20px;
                background-color: rgba(255, 255, 255, 0);
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .panel-default {
                border-color: #ddd;
                color: white;
            }
            a {
    color: #ffffff!important;
   
}
.table-striped > tbody  {
    background-color: rgba(84, 176, 255, 0.35)!important;
}
.table-striped > tbody > tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.21);
}
.table-hover > tbody > tr:hover {
    background-color: #0031ff!important;
}
.table-striped > tbody > tr:hover {
    background-color: #0031ff!important;
}
a, a:hover {
    text-decoration: none!important;
}
.panel-default > .panel-heading {
    color: #000000!important;
    background-color: rgb(70, 97, 121)!important;
    border-color: #dddddd;
}
.number {    margin-bottom: 10px;
    box-shadow: 2px 2px 3px #00adff;
}
    .ddleft{
    width: 100%!important;min-height: 36px;

    }
    .dtright{ min-height: 36px;
    width: 100%!important;
   
              padding: 8px;}
    input, button, select, textarea {
    color: #0043ff;
}
.pagination-sm > li:first-child > a, .pagination-sm > li:first-child > span {
    border-bottom-left-radius: 0px;
    border-top-left-radius: 0px;
    color: black!important;
}
.pagination-sm > li:last-child > a, .pagination-sm > li:last-child > span {
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;
    color: black!important;
}
            </style>
            <style>
                @font-face {
                    font-family: myFirstFont;
                    src: url(font/GE-SS-Two-Bold.otf);
                }
                @font-face {
                    font-family: mysecondFont;
                    src: url(font/GE-SS-Two-Light.otf);
                }
                @font-face {
                    font-family: mythirdFont;
                    src: url(font/GE-SS-Two-Medium.otf);
                }




                .fa.pull-right {
                    margin-left: 0.1em;   
                }

                .date-picker,
                .date-container {
                    position: relative;
                    display: inline-block;
                    width: auto;
                    color: rgb(75, 77, 78);
                    -webkit-touch-callout: none;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }
                .date-container {
                    padding: 0px 40px;   
                    color: rgb(255, 255, 255);

                }
                .date-picker h2, .date-picker h4 {
                    margin: 0px;
                    padding: 0px;
                    font-family: 'Roboto', sans-serif;
                    font-weight: 200;
                }
                .date-container .date {
                    text-align: center;
                }
                .date-picker span.fa {
                    position: absolute;
                    font-size: 4em;
                    font-weight: 100;
                    padding: 8px 0px 7px;
                    cursor: pointer;
                    top: 0px;
                }
                .date-picker span.fa[data-type="subtract"] {
                    left: 0px;
                }
                .date-picker span.fa[data-type="add"] {
                    right: 0px;
                }
                .date-picker span[data-toggle="calendar"] {
                    display: block;
                    position: absolute;
                    top: -7px;
                    right: 45px;
                    font-size: 1em !important;
                    cursor: pointer;
                }

                .date-picker .input-datepicker {
                    display: none;
                    position: absolute;
                    top: 50%;
                    margin-top: 38px;
                    width:auto;
                }
                .date-picker .input-datepicker.show-input {
                    display: table;
                }

                @media (min-width: 768px) and (max-width: 1010px) {
                    .date-picker h2{
                        font-size: 1.5em; 
                        font-weight: 400;  
                    }    
                    .date-picker h4 {
                        font-size: 1.1em;
                    }  
                    .date-picker span.fa {
                        font-size: 3em;
                    } 
                }
                .paperbigcolor{    color: aliceblue;}
                .calendercol{color: #0ed3ff;}
                .butncolor{background-color: white;}
                .betweenclass{    margin-bottom: 5px;
                                
                }
            </style>




<?php echo $this->fetch('content'); ?>

<?php 		

 ?>
