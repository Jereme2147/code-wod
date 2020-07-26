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
                    <li><a href="<?php  if (is_user_logged_in()) {
                            echo wp_logout_url();
                        }else {
                            echo wp_login_url();
                        }?>">
                        <?php if (is_user_logged_in()) {
                            echo 'Log Out';
                        }else {
                            echo 'Log In';
                        }?></a></li>
                    <li><a href="<?php echo site_url('/');?>">Home</a></li>
                    <li><a href="<?php echo site_url('/blog');?>">All Workouts</a></li>
                    <li><a href="<?php echo site_url('/articles');?>">Articles</a></li>
                    <li><a href="<?php echo site_url('/resources');?>">Resources</a></li>
                    <li><a href="<?php echo site_url('/about');?>">About</a></li>
                </ul>
            </div>
            <div id="desktop-nav">
                <h1><a href="<?php echo site_url('/');?>">&lt;Code-Wod/&gt;</a></h1>
                <div 
                id="nav-center">
                    <h2 <?php if(is_front_page()) echo 'class="page-selected"'?>><a href="<?php echo site_url('/blog');?>">All WODs</a></h2>
                </div>
                <div id="nav-right">
                    <ul>
                        <li class="menu-hover "><h2 <?php if(is_page(site_url('/wp-login.php'))) echo 'class="page-selected"'?>><a href="<?php 
                        if (is_user_logged_in()) {
                            echo wp_logout_url();
                        }else {
                            echo wp_login_url();
                        }?>">
                        <?php if (is_user_logged_in()) {
                            echo 'Log Out';
                        }else {
                            echo 'Log In';
                        }
                         ?></a></h2></li>
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
