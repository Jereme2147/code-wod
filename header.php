<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head();?>
    <title>Code-wod | Workouts for Firefighters | Police | EMS | Military and everyone else</title>
    <meta name="description" content="Free First Responder workouts. Workouts for people with minimal time and equeipment.">
    <script data-ad-client="ca-pub-3519329254611036" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<body>
    <div id="container">
        <nav id="nav">
            <div id="mobile-nav">
                <h1>&lt;Code-Wod/&gt;</h1>
                <div id="mobile-search">
                    <i class="fas fa-search menu-hover"></i>
                </div>
                 <div id="menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div id="mobile-menu">
                <ul>
                    <li><a href="<?php echo site_url('');?>">Current Workout</a></li>
                    <li><a href="<?php echo site_url('/articles');?>">Articles</a></li>
                    <li><a href="<?php echo site_url('/resources');?>">Resources</a></li>
                    <li><a href="<?php echo site_url('/about');?>">About</a></li>
                </ul>
            </div>
            <div id="desktop-nav">
                <h1>&lt;Code-Wod/&gt;</h1>
                <div 
                id="nav-center">
                    <h2 <?php if(is_front_page()) echo 'class="page-selected"'?>><a href="<?php echo site_url('');?>">Current Workout</a></h2>
                </div>
                <div id="nav-right">
                    <ul>
                        <li class="menu-hover "><h2 <?php if(get_post_type() == 'article') echo 'class="page-selected"'?>><a href="<?php echo site_url('/articles');?>">Articles</a></h2></li>
                        <li class="menu-hover "><h2 <?php if(is_page('resources')) echo 'class="page-selected"'?>><a href="<?php echo site_url('/resources');?>">Resources</a></h2></li>
                        <li class="menu-hover "><h2 <?php if(is_page('about')) echo 'class="page-selected"'?>><a href="<?php echo site_url('/about');?>">About</a></h2></li>
                        <li >
                            <div id="search-expand">
                                <i class="fas fa-search menu-hover"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="search-div">
            <?php 
                get_search_form();
            ?>
        </div>
        <div id="top-space">
        </div>
        <!-- <div id="banner">
        </div> -->

        <div id="logo-div">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo900.png" alt="">
        </div>
        <main>