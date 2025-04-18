<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/site.webmanifest">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page-loader">
        <span class="loading loading-ring loading-xl text-primary"></span>
    </div>

    <header class="py-3 border-b-2 border-gray-100">
        <div class="container max-w-7xl mx-auto px-4 2xl:px-0">
            <div class="flex items-center justify-between">
                <div class="_logo">
                    <a href="/" class="flex items-center gap-3">
                        <img class="w-10" src="<?php echo get_template_directory_uri(); ?>/assets/images/befroosh-logo.svg" alt="Logo">
                        <h1 class="text-[#2563eb] text-[22px] font-black"><?php bloginfo('name'); ?></h1>
                    </a>
                </div>
                <nav class="hidden md:block">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'flex items-center gap-2',
                    ]);
                    ?>
                </nav>
                <div class="_buttons flex items-center gap-4">
                    <a href="https://befroosh.app/console" class="text-gray-500 hover:text-primary font-medium hidden md:flex">ورود به پنل</a>
                    <a href="https://befroosh.app/auth/signup" class="btn btn-primary hidden md:flex">ثبت نام</a>
                    <label for="mobile-menu" class="drawer-button md:hidden flex items-center text-blue-800"><i class="ph-bold ph-list text-4xl"></i></label>
                </div>
            </div>
        </div>
    </header>

    <div class="drawer">
        <input id="mobile-menu" type="checkbox" class="drawer-toggle" />
        <div class="drawer-side z-10">
            <label for="mobile-menu" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="_menu-wrapper bg-white min-h-full w-80 p-0 z-0">
                <div class="_logo p-3 shadow-sm shadow-blue-100">
                    <a href="/" class="flex items-center gap-3">
                        <img class="w-10" src="<?php echo get_template_directory_uri(); ?>/assets/images/befroosh-logo.svg" alt="Logo">
                        <h1 class="text-[#2563eb] text-[22px] font-black"><?php bloginfo('name'); ?></h1>
                    </a>
                </div>
                <nav>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'mobile',
                        'container'      => false,
                        'menu_class'     => 'flex flex-col p-4 gap-1 text-blue-900',
                    ]);
                    ?>
                </nav>
                <div class="divider mt-0 px-4 border-dashed"></div>
                <div class="_buttons grid grid-cols-2 gap-3 px-4">
                    <a href="https://befroosh.app/console" class="btn btn-primary w-full">ورود به پنل</a>
                    <a href="https://befroosh.app/auth/signup" class="btn btn-success text-white w-full">ثبت نام</a>
                </div>
            </div>
        </div>
    </div>