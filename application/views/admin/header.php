<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShoppingGo</title>
    <!-- BOOTSTRAP STYLES-->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="<?php echo base_url();?>/assets/js/jquery-1.10.2.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet" />

    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="<?= base_url();?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">ShoppingGo</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">ADMIN</a> 
            </div>

<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 13px;">  &nbsp; 
        </nav>   


           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="http://localhost/penjualan/assets/img/t-shirt.png" class="user-image img-responsive"/>
            </li>
                
            <li>
                <a href="<?php echo site_url()?>/admin/customer"><i class="fa fa-user fa-2x"></i> Data Customer</a>
            </li>
                    
            <li>
                <a href=""><i class="fa fa-desktop fa-2x"></i> Category</a>
            </li>  
                                   
                <ul class="nav nav-second-level">
            <li>
                <a href="<?php echo site_url()?>/admin/baju">Baju</a>
            </li>
                            
            <li>
                <a href="<?php echo site_url()?>/admin/celana">Celana</a>
            </li>
                </ul>
            </li>  
                    
            <li>
                <a href="<?php echo site_url()?>/admin/transaksi"><i class="fa fa-edit fa-2x"></i> Data Transaksi</a>
            </li>
               
            </div>
            
        </nav> 