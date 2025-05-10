<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/site.webmanifest">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R698SHVJVM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R698SHVJVM');
    </script>

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('scroll-smooth'); ?>>
    <div id="page-loader">
        <span class="loading loading-ring loading-xl text-primary"></span>
    </div>

    <header class="py-6 md:py-10 bg-gradient-to-b from-white to-blue-50/75">
        <div class="container max-w-7xl mx-auto px-4 2xl:px-0">
            <div class="flex items-center justify-between">
                <div class="_logo">
                    <a href=<?php echo is_rtl() ? '/' : '/en'; ?> class="flex items-center gap-3">
                        <img class="w-10" src="<?php echo get_template_directory_uri(); ?>/assets/images/befroosh-logo.svg" alt="Logo">
                        <div class="text-[#2563eb] text-2xl font-black"><?php bloginfo('name'); ?></div>
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
                    <a href=<?php echo is_rtl() ? "https://console.befroosh.app" : "https://console.befroosh.app/en"; ?> class="text-gray-500 hover:text-primary font-medium flex"><?php echo pll__('Login'); ?></a>
                    <a href=<?php echo is_rtl() ? "https://console.befroosh.app/auth/signup" : "https://console.befroosh.app/en/auth/signup"; ?> class="btn btn-primary hidden md:flex"><?php echo pll__('Sign Up'); ?></a>
                    <label for="mobile-menu" class="drawer-button md:hidden flex items-center text-blue-800"><i class="ph-bold ph-list text-4xl"></i></label>
                </div>
            </div>
        </div>
    </header>

    <div class="drawer">
        <input id="mobile-menu" type="checkbox" class="drawer-toggle" />
        <div class="drawer-side z-10">
            <label for="mobile-menu" aria-label="close sidebar" class="drawer-overlay backdrop-blur-xs"></label>
            <div class="_menu-wrapper bg-gradient-to-b from-blue-50 to-white min-h-full w-80 p-0 z-0">
                <div class="_logo py-6 px-4">
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
                        'menu_class'     => 'flex flex-col px-4 pb-4 gap-1 text-blue-900',
                    ]);
                    ?>
                </nav>
                <div class="divider mt-0 px-4 before:bg-blue-100 after:bg-blue-100"></div>

                <div class="_buttons grid grid-cols-2 gap-3 px-4">
                    <a href=<?php echo is_rtl() ? "https://console.befroosh.app" : "https://console.befroosh.app/en"; ?> class="btn btn-primary w-full"><?php echo pll__('Login'); ?></a>
                    <a href=<?php echo is_rtl() ? "https://console.befroosh.app/auth/signup" : "https://console.befroosh.app/en/auth/signup"; ?> class="btn btn-success text-white w-full"><?php echo pll__('Sign Up'); ?></a>
                </div>
            </div>
        </div>
    </div>