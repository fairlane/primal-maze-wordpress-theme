<?php
define('PM_SNIPPETS_DIR', __DIR__  . '/snippets/');
define('PM_ICONS_DIR_RELATIVE', '/img/social/');

/**
 * Enqueues custom styles for the theme
 */
function primalmaze_enqueue_styles() {

    $parent_style = 'simple-bootstrap-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'primalmaze_enqueue_styles' );

/**
 * @param WP_Post $wpPost
 * @return string
 */
function primalmaze_get_social_icon_url(WP_Post $wpPost) {
    $iconBaseUrl = sprintf(
        '%s/%s',
        get_stylesheet_directory_uri(),
        PM_ICONS_DIR_RELATIVE
    );
    $iconUrl = '';
    if (isset($wpPost->post_title)) {
        $iconUrl = sprintf(
            '%s%s.png',
            $iconBaseUrl,
            strtolower($wpPost->post_title)
        );
    }

    return $iconUrl;
}