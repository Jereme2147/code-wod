<?php get_header(); 
        while(have_posts()) {
            the_post();
            the_content();
        }
?>
    
    
<?php get_footer();?>
//do not upload