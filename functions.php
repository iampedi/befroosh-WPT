<?php
// Load includes
foreach (glob(get_template_directory() . '/includes/*.php') as $file) {
    require_once $file;
}

// Avoide Direct Access
if (!defined('ABSPATH')) {
    exit;
}

//
// Register translatable strings (Polylang)
//
add_action('init', function () {
    if (function_exists('pll_register_string')) {
        pll_register_string('login', 'Login', 'General');
        pll_register_string('sign_up', 'Sign Up', 'General');
        pll_register_string('slider_title', 'Slider Title', 'Slider');
        pll_register_string('slider_description', 'Slider Description', 'Slider');
        pll_register_string('slider_button', 'Slider Button', 'Slider');
        pll_register_string('features_description', 'Features Description', 'Features');
        pll_register_string('no_faq', 'No faq found', 'FAQ');
        pll_register_string('contact_support_btn', 'Contact Support', 'FAQ');
        pll_register_string('need_more_help_text', 'Need more help?', 'FAQ');
        pll_register_string('footer_socials_title', 'Footer Socials Title', 'Footer');
        pll_register_string('footer_seo_text', 'Footer SEO Text', 'Footer');
        pll_register_string('footer_prefix', 'Footer Prefix', 'Footer');
        pll_register_string('footer_suffix', 'Footer Suffix', 'Footer');
    }
});

//
// Safe Polylang helper function
//
if (!function_exists('safe_pll')) {
    function safe_pll($key)
    {
        return function_exists('pll__') ? pll__($key) : $key;
    }
}

//
// Import Phosphor Icons
//
function befroosh_enqueue_assets()
{
    wp_enqueue_script(
        'phosphor-icons',
        'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1',
        [],
        null,
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'befroosh_enqueue_assets');

//
// Remove Gutenberg Block Styles
//
function remove_gutenberg_block_styles()
{
    wp_dequeue_style('wp-block-library');           // Core block styles
    wp_dequeue_style('wp-block-library-theme');     // theme.json styles
    wp_dequeue_style('global-styles');              // Global styles from theme.json
}
add_action('wp_enqueue_scripts', 'remove_gutenberg_block_styles', 100);

//
// Import CSS files (Tailwind + theme style.css)
//
function mytheme_enqueue_styles()
{
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'));
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), ['tailwind-style'], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

//
// Enable featured images
//
add_theme_support('post-thumbnails');

//
// Estimated Reading Time Function
//
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
    return ceil($word_count / $wpm);
}

//
// Convert English Numbers to Persian
//
function convert_numbers_to_persian($input)
{
    $input = (string) $input; // اطمینان از رشته بودن ورودی
    $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    return str_replace($english, $persian, $input);
}

//
// Load pricing page JavaScript
//
function theme_enqueue_pricing_script()
{
    if (is_page_template('templates/page-pricing.php')) {
        wp_enqueue_script(
            'pricing-script',
            get_template_directory_uri() . '/assets/js/pricing.js',
            ['jquery'],
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_pricing_script');
