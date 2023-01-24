 <?php get_header(); 
        while(have_posts()) {
            the_post();
    ?>
 <h2 class="page-heading"><?php the_title(); ?> </h2>
            <section class="wods todays-workout">
            <?php
                if (get_the_post_thumbnail_url(get_the_ID())) {
                    ?><img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="card image"><?php
                } 
            ?>
                <div class="title-division">
                    <h3><?php echo get_the_date();?></h3>
                    <!-- <h3>Feature Workout</h3> -->
                    <h3>Posted by <?php echo get_the_author();?></h3>
                </div>
                <div id="workout">
                    <p><?php
                        echo the_content();
                     ?></p>
                </div>
                <div id="wod-links" class="no-link">
                <?php if(get_post_type() == 'article') {
                    ?> 
                        <h3><a href="#">More Articles</a></h3>
                    <?php
                } else {
                    ?><h3><a href="#">Previous Workouts</a></h3><?php
                }
                
                ?>
                    
                </div>
                <div id="comments-section">
                    <?php 
                    $fields =  array(
                            'author' =>
                                
                                '<input placeholder="Name" class="comment-login" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                                '" size="30"' . $aria_req . ' />',

                            'email' =>
                                '<input placeholder="Email" class="comment-login" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                                '" size="30"' . $aria_req . ' />',
                            );
                    $args = array(
                         'title_reply' => 'Share your thoughts',
                         'fields' => $fields,
                        'comment_field' =>  '<textarea placeholder = "Your comment" id="comment" name="comment" cols="45" rows="8" aria-required = "true">'. '</textarea>',
                        'comment_notes_before' => '<p class="comment-notes">Your email not published. All fields requrired.</p>'
                    );
                    comment_form($args);
                    $comments_number = get_comments_number();
                    if($comments_number != 0) {
                        ?>
                            <div class="comments">
                            <!-- <h3>What others say</h3> -->
                            <ol class="all-comments">
                                <?php
                                    $comments = get_comments(array(
                                        'post_id' => $post->ID,
                                        'status' => 'approve'
                                    ));
                                    wp_list_comments(array(
                                        'per_page' => 15
                                    ), $comments);
                                ?>
                            </ol>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </section>
        <?php } ?>

<?php get_footer();?>