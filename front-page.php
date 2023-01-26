<?php get_header(); ?>
 <!-- ************Current workouts and 4 previous wods here -->
<?php 
    $postCounter = 0;
    while (have_posts()) {
        the_post();
        if($postCounter == 0) {
            ?>
            <section class="wods todays-workout">
                <div class="title-division">
                    <h3><?php echo get_the_date();?></h3>
                    <!-- <h3>Feature Workout</h3> -->
                    <h3><?php echo get_the_title();?></h3>
                </div>
                <div id="workout">
                    <p><?php
                        echo the_content();
                     ?></p>
                </div>
                <div id="wod-links" class="no-link">
                    <h3><a href="<?php echo site_url('/blog') ?>">Previous Workouts</a></h3>
                    <h3><a href="<?php the_permalink();?>">View with Comments</a></h3>
                </div>
            </section>
            <section class="summary-section section-divider">
            <?php
            // start previous of next wods
        } else {
            ?>
                <div class="wods summary">
                    <div class="title-division">
                        <h3><?php echo get_the_date();?></h3>
                        <!-- <h3>One Back</h3> -->
                        <h3><?php echo get_the_title();?></h3>
                    </div>
                    <div class="summary-content">
                        <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 150); ?>
                        </p>
                    </div>
                    <div class="summary-links no-link">
                        <!-- <h3>Previous Workouts</h3> -->
                        <h3><a href="<?php the_permalink();?>">View with Comments</a></h3>
                    </div>
                </div>
            <?php
        }
        ?> 
        
        
        <?php
        $postCounter = $postCounter + 1;
    }      
?>
            </section>
<?php
    wp_reset_query();
    $counter = 0;
?>      
        <div class="pagination">
                <?php echo paginate_links(); ?>
        </div>
<!-- ********************* End wod section ******************* -->
    <div id="article-title" class="no-link">
        <h2><a href="#">Articles</a></h2>
    </div>
  <section class="summary-section section-divider">
 
 <?php 
            $args = array(
                'post_type' => 'article',
                'posts_per_page' => 4,
            );

            $articles = new WP_Query($args);

            while ($articles->have_posts()) {
                $articles->the_post();
            
        ?>
                <div class="wods summary">
                    <div class="title-division">
                        <h3><?php echo get_the_date();?></h3>
                        <h3><?php the_title(); ?></h3>
                        <h3>Posted by <?php echo get_the_author();?></h3>
                    </div>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    <div class="summary-content">
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    </div>
                    <div class="summary-links no-link">
                        <!-- <h3>Previous Workouts</h3> -->
                        <h3><a href="<?php the_permalink();?>">View</a></h3>
                    </div>
                </div>
<!-- temp divider -->
       

            <?php } wp_reset_query();?>
    </section>
            
    <!-- </section> -->
<?php get_footer(); ?>