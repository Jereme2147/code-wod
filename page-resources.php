 <?php get_header('resources'); 
        while(have_posts()) {
            the_post();
        }
    ?>
    <div id="resources" class="article-div">
    <?php
        the_content();
    ?>
    </div>
<?php get_footer();?>