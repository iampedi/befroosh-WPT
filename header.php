<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="py-3 border-b-2 border-gray-100">
        <div class="bg-fuchsia-200">
            <div class="flex items-center justify-between">
                <div class="_logo">
                    <a href="/" class="flex items-center gap-3">
                        <img class="w-10" src="<?php echo get_template_directory_uri(); ?>/assets/images/befroosh-logo.svg" alt="Logo">
                        <h1 class="text-[#2563eb] text-xl font-black"><?php bloginfo('name'); ?></h1>
                    </a>
                </div>
                <nav>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'flex items-center gap-3',
                    ]);
                    ?>
                </nav>
                <div></div>
            </div>
        </div>
    </header>