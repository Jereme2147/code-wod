 <?php get_header(); 

?>
<section class="summary-section section-divider">
<?php
 $the_query = new WP_Query( array('posts_per_page'=>10,
                                 'post_type'=>'post',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            ); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
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
<?php
endwhile;
?>
    </section>
    <div class="pagination">
<?php
$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );

wp_reset_postdata();
?>
    </div>
<?php get_footer();?>