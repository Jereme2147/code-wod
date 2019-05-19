<?php
function codewod_setup() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    //version must change every time we change css, change microtime to 
    //version number after finished developement. 
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'codewod_setup');

function codewod_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'codewod_init');

function codewod_custom_post_type() {
    register_post_type('article', 
    array(
        'rewrite' => array('slug' => 'articles'),
        'labels' => array(
            'name' => 'Articles', 
            'singular_name' => 'Article',
            'add_new_item' => 'Add New Article',
            'edit_item' => 'Edit Article'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
        ));
}
add_action('init', 'codewod_custom_post_type');

function mySearchFilter($articleQuery) {
    if( isset($_GET['search-type']) && $_GET['search-type']){
        $type = $_GET['search-type'];
    }
    if ($articleQuery->is_search && $type == 'blog') {
        $articleQuery->set('post_type', 'post');
    };
    return $articleQuery;
};

add_filter('pre_get_posts','mySearchFilter');

?>