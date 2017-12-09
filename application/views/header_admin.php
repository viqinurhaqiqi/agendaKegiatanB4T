<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin B4T</title>
    
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logob4t.png">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style_admin.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php  echo base_url() ?>assets/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php  echo base_url() ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php  echo base_url() ?>assets/css/jquery-ui.css" rel="stylesheet">
    <link href="<?php  echo base_url() ?>assets/css/fullcalendar.min.css" rel="stylesheet" />
    <link href="<?php  echo base_url() ?>assets/css/fullcalendar.print.min.css" rel="stylesheet" media='print' />

    <script src="<?php  echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src='<?php  echo base_url() ?>assets/js/moment.min.js'></script>
    <script src='<?php  echo base_url() ?>assets/js/fullcalendar.min.js'></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>



</head>

<body>
<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">              
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="<?php echo base_url() ?>assets/img/Info_Man_Information_Help_Support_User-512.png" class="img-responsive" alt="admin" style="border: 3px solid #A4C639;">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name" style="font-family: fantasy;">
                        <?php echo $_SESSION["username"]; ?>
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <a href="<?php echo base_url()?>Login/logout"><button type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-off"></i> Keluar</button></a>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="">
                            <a href="index">
                            <i class="glyphicon glyphicon-home"></i>
                            Beranda </a>
                        </li>
                        <li>
                            <a href="lihat_jadwal">
                            <i class="glyphicon glyphicon-calendar"></i>
                            Kelola Agenda Kegiatan </a>
                        </li>
                        <li>
                            <a href="lihat_admin">
                            <i class="glyphicon glyphicon-user"></i>
                            Kelola Admin </a>
                        </li>
                        <li>
                            <a href="tentang">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            Panduan Penggunaan </a>
                        </li>                           
                    </ul>
                </div>
                <!-- END MENU -->               
            </div>            
        </div>

