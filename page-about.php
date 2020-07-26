 <?php get_header(); 
        while(have_posts()) {
            the_post();
        }
    ?>
    <div id="about" class="article-div">
    <?php
        the_content();
    ?>
    </div>
<?php get_footer();?>


