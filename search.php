<?php get_header(); ?>
 <!-- ************Current workouts and 4 previous wods here -->
<!-- the search page -->
 <section class="search-display">
<?php 
    while (have_posts()) {
        the_post();
            ?>
                <div class="search-result">
                    <a href="<?php echo the_permalink()?>" target="_blank"><h3>| <?php echo get_the_date();?>  |  <?php echo get_the_title();?> |  <?php 
                    if (get_post_type() == "post") {
                        echo "Workout";
                    }else{
                        echo get_post_type();
                    }
                    ?> |</h3></a>
                    <a href="<?php echo the_permalink()?>" target="_blank"><p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p></a>
                    <a href="<?php echo the_permalink()?>" target="_blank"><h3><?php echo get_the_author();?></h3></a>
                </div>
            <?php
    }      
?>
            </section>
<?php
    wp_reset_query();
?>      
        <div class="pagination">
                <?php echo paginate_links(); ?>
        </div>
<!-- ********************* End wod section ******************* -->
  
<?php get_footer(); ?>