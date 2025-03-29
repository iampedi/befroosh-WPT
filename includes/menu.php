<?php
// Menu Locations
function register_my_menus()
{
    register_nav_menus([
        'primary' => __('Primary Menu', 'befroosh'),
        'mobile' => __('Mobile Menu', 'befroosh'),
        'footer' => __('Footer Menu', 'befroosh'),
    ]);
}
add_action('after_setup_theme', 'register_my_menus');

// Main Menu Links Classes
add_filter('nav_menu_link_attributes', function ($atts, $item, $args, $depth) {
    if ($args->theme_location === 'primary') {
        $atts['class'] = $depth === 0
            ? 'flex items-center h-12 px-4 font-semibold hover:bg-gray-100 rounded-lg duration-300 hover:text-primary aria-[current=page]:bg-violet-50 aria-[current=page]:text-primary aria-[current=page]:cursor-default'
            : '';
    }
    return $atts;
}, 10, 4);

// Mobile Menu Links Classes
add_filter('nav_menu_link_attributes', function ($atts, $item, $args, $depth) {
    if ($args->theme_location === 'mobile') {
        $atts['class'] = 'flex items-center h-11 gap-3 px-4 py-0 font-medium text-base aria-[current=page]:bg-blue-100/70 rounded-lg duration-300 hover:text-primary focus-within:bg-blue-100';

        if (!empty($item->classes) && is_array($item->classes)) {
            foreach ($item->classes as $class) {
                if (strpos($class, 'ph-') === 0) {
                    $atts['data-icon'] = $class;
                    break;
                }
            }
        }
    }
    return $atts;
}, 10, 4);

// Add Icons to Mobile Menu
add_filter('walker_nav_menu_start_el', function ($item_output, $item, $depth, $args) {
    if ($args->theme_location === 'mobile') {
        if (!empty($item->classes) && is_array($item->classes)) {
            foreach ($item->classes as $class) {
                if (strpos($class, 'ph-') === 0) {
                    $icon = '<i class="ph-duotone ' . esc_attr($class) . ' text-[24px]"></i>';
                    $item_output = str_replace($item->title, $icon . $item->title, $item_output);
                    break;
                }
            }
        }
    }
    return $item_output;
}, 10, 4);
