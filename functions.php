<?php

foreach (glob(get_template_directory() . '/includes/*.php') as $file) {
    require_once $file;
}

// Avoide Direct Access
if (! defined('ABSPATH')) {
    exit;
}

// Import Phosphor Icons
function befroosh_enqueue_assets()
{
    wp_enqueue_script(
        'phosphor-icons',
        'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1',
        [],
        null,
        true // Load on Footer
    );
}
add_action('wp_enqueue_scripts', 'befroosh_enqueue_assets');

// Remove Gutenberg Block Styles
function remove_gutenberg_block_styles()
{
    wp_dequeue_style('wp-block-library'); // فایل اصلی استایل بلوک‌ها
    wp_dequeue_style('wp-block-library-theme'); // theme.json style
    wp_dequeue_style('global-styles'); // استایل‌های گلوبال از theme.json
}
add_action('wp_enqueue_scripts', 'remove_gutenberg_block_styles', 100);

// Import CSS Files
function mytheme_enqueue_styles()
{
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Add Theme Support
add_theme_support('post-thumbnails');


// Estimated Reading Time Function
function get_reading_time($post_id = null, $wpm = 180)
{
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    $content = get_post_field('post_content', $post_id);
    $clean_content = strip_tags($content);

    $word_count = mb_strlen(preg_replace('/\s+/', ' ', trim($clean_content))) > 0
        ? count(explode(' ', $clean_content))
        : 0;
    $reading_time = ceil($word_count / $wpm);
    return $reading_time;
}

// Convert Numbers to Persian
function convert_numbers_to_persian($string)
{
    $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    return str_replace($english, $persian, $string);
}
