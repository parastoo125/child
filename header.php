<!DOCTYPE html>
<html>
	
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<head>
    	<meta charset="utf-8">
        
	<title>  kodakam </title>
        
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
        
		<meta name="title" content="وب سایت کودکان">
		<meta name="keywords" content="وب سایت کودکانه کودک نقاشی ورزش عکس">
		<meta name="description" content="وبسایتی برای بازی و سرگرمی کودکان">
		
		<link rel="shortcut icon" href="<?=base_url()?>assets/users.ico"> 
		<link rel="icon" type="image/icon" href="<?=base_url()?>assets/users.ico"/>
		
    </head>
    <body>
        <section class="all">
            <section class="just-center">
                <header>
                    <div class="logo">
                        <div class="logo-image">
                            <img src="<?= base_url();?>assets/images/heart3.png"/>
                        </div>
                        <div class="logo-text">
                            <h1>کودک من</h1>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="<?= base_url();?>assets/images/slide.jpg"/>
                        <div class="cover">
                            //cover
                        </div>
                        <menu>
                            <ul>
                                <li class="<?php if(isset($mnu_current_home)) echo 'current-menu-parent'; ?>">
                                    <img src="<?= base_url();?>assets/images/brush.png">
                                    <a href="<?= base_url();?>">صفحه اصلی</a>
                                </li>
                                <li class="<?php if(isset($mnu_current_contact)) echo 'current-menu-parent'; ?>">
                                    <img src="<?= base_url();?>assets/images/brush.png">
                                    <a href="<?= base_url();?>page/contact">تماس با ما</a>
                                </li>
                                <li class="<?php if(isset($mnu_current_about)) echo 'current-menu-parent'; ?>">
                                    <img src="<?= base_url();?>assets/images/brush.png">
                                    <a
                                        href="<?= base_url();?>page/aboutus">درباره ما</a>
                                </li>
                                <li class="<?php if(isset($mnu_current_paint)) echo 'current-menu-parent'; ?>" >
                                    <img src="<?= base_url();?>assets/images/brush.png">
                                    <a href="<?= base_url();?>page/paint">نقاشی ها</a>
                                </li>
                                <li class="<?php if(isset($mnu_current_favorit)) echo 'current-menu-parent'; ?>" >
                                    <img src="<?= base_url();?>assets/images/brush.png">
                                    <a href="<?= base_url();?>">علاقمندی ها</a>
                                </li>
                                <li class="test" >
                                    <img src="<?= base_url();?>assets/images/brush.png">
                                    <a href="<?= base_url();?>">علاقمندی ها</a>
                                </li>
                            </ul>
                        </menu>
                    </div>
                </header>
       
	
		