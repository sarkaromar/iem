<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php if(isset($title)){ echo $title; } ?> || Domain</title>

        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- bxslider -->
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/bxslider/jquery.bxslider.css">
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/flexslider/flexslider.css">
        <!-- End flexslider -->

        <!-- bxslider -->
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/radial-progress/style.css">
        <!-- End bxslider -->

        <!-- Animate css -->
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/css/animate.css">
        <!-- End Animate css -->

        <!-- Bootstrap css -->
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/css/bootstrap.min.css">
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css">
        <!-- End Bootstrap css -->

        <!-- Jquery UI css -->
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/jqueryui/jquery-ui.css">
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/jqueryui/jquery-ui.structure.css">
        <!-- End Jquery UI css -->

        <!-- Fancybox -->
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/fancybox/jquery.fancybox.css">
        <!-- End Fancybox -->

        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/fonts/fonts.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <link type="text/css" data-themecolor="default" rel='stylesheet' href="<?= base_url() ?>assets/css/main-default.css">

        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/rs-plugin/css/settings.css">
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/rs-plugin/css/settings-custom.css">
        <link type="text/css" rel='stylesheet' href="<?= base_url() ?>assets/js/rs-plugin/videojs/video-js.css">
        
    </head>
    <body>
        <header>
            <div class="container b-header__box b-relative">
                <a href="<?=base_url()?>" class="b-left b-logo "><img class="color-theme" data-retina src="<?= base_url() ?>assets/img/logo.png" alt="Logo" /></a>
                <div class="b-header-r b-right b-header-r--icon">
                    <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
                    <nav class="b-top-nav f-top-nav b-right j-top-nav">
                        <ul class="b-top-nav__1level_wrap">
                            <li class="b-top-nav__1level f-top-nav__1level <?php if ($menu == 'home' ) echo 'is-active-top-nav__1level' ?> f-primary-b"><a href="<?=base_url()?>">Home</a></li>
                            <li class="b-top-nav__1level f-top-nav__1level <?php if ($menu == 'service' ) echo 'is-active-top-nav__1level' ?> f-primary-b b-top-nav-big">
                                <a href="#"><i class="fa fa-inbox b-menu-1level-ico"></i>Services <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
                                <div class="b-top-nav__dropdomn">
                                    <ul class="b-top-nav__2level_wrap">
                                        <?php foreach($this->services_menu->services as $service):  ?>
                                        <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?=base_url()?>service/name/<?php $x = strtolower($service->title); $y = str_replace(' ', '_', $x); echo $y; ?>"><?=$service->title?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="b-top-nav__1level f-top-nav__1level <?php if ($menu == 'trail' ) echo 'is-active-top-nav__1level' ?> f-primary-b"><a href="<?=site_url('free_trail')?>"><i class="fa fa-code b-menu-1level-ico"></i>Free Trial</a></li>
                            <li class="b-top-nav__1level f-top-nav__1level <?php if ($menu == 'pricing' ) echo 'is-active-top-nav__1level' ?> f-primary-b"><a href="<?=site_url('pricing')?>">Pricing</a></li>
                            <li class="b-top-nav__1level f-top-nav__1level <?php if ($menu == 'upload' ) echo 'is-active-top-nav__1level' ?> f-primary-b"><a href="<?=site_url('upload')?>">Upload</a></li>
                            <li class="b-top-nav__1level f-top-nav__1level <?php if ($menu == 'portfolio' ) echo 'is-active-top-nav__1level' ?> f-primary-b"><a href="<?=site_url('portfolio')?>">Portfolio</a></li>
                            <li class="b-top-nav__1level f-top-nav__1level <?php if ($menu == 'blog' ) echo 'is-active-top-nav__1level' ?> f-primary-b"><a href="<?=site_url('blog/latest')?>">Blog</a></li>
                            <li class="b-top-nav__1level f-top-nav__1level <?php if ($menu == 'contact' ) echo 'is-active-top-nav__1level' ?> f-primary-b"><a href="<?=site_url('contact_us')?>">Contact Us</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </header>