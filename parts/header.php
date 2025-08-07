<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>" />
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
    <meta property="og:description" content="<?php echo esc_attr(get_the_excerpt() ?: get_bloginfo('description')); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/og-image.jpg" />
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

    <header>
        <div class="container max-w-5xl mx-auto px-3 md:px-0">
            <div class="flex items-center justify-between h-14">
                <div class="_logo">
                    <a href=<?php echo is_rtl() ? '/' : '/en'; ?> class="flex items-center gap-3">
                        <div class="text-2xl font-extrabold"><?php bloginfo('name'); ?></div>
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

                <div class="_buttons flex items-center gap-1.5 md:gap-2">
                    <a href=<?php echo is_rtl() ? "https://console.befroosh.app" : "https://console.befroosh.app/en"; ?> class="btn btn-sm md:btn-md btn-outline"><?php echo pll__('Login'); ?></a>

                    <a href=<?php echo is_rtl() ? "https://console.befroosh.app/auth/signup" : "https://console.befroosh.app/en/auth/signup"; ?> class="btn btn-sm md:btn-md btn-primary"><?php echo pll__('Sign Up'); ?></a>

                    <label for="mobile-menu" class="drawer-button md:hidden flex items-center pl-1.5 pr-3"><i class="ph-bold ph-list text-xl"></i></label>
                </div>
            </div>
        </div>
    </header>

    <div class="drawer">
        <input id="mobile-menu" type="checkbox" class="drawer-toggle" />
        <div class="drawer-side z-10">
            <label for="mobile-menu" aria-label="close sidebar" class="drawer-overlay backdrop-blur-xs"></label>
            <div class="_menu-wrapper bg-white h-full w-80 p-0 z-0 flex flex-col flex-1">
                <div class="h-full">
                    <div class="border-b">
                        <div class="_logo h-14 flex items-center border-x mx-3.5 px-3.5">
                            <a href="/" class="flex items-center gap-3">
                                <h2 class="text-2xl font-extrabold"><?php bloginfo('name'); ?></h2>
                            </a>
                        </div>
                    </div>

                    <div class="border-b">
                        <nav class="border-x mx-3.5">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'mobile',
                                'container'      => false,
                                'menu_class'     => 'flex flex-col',
                            ]);
                            ?>
                        </nav>
                    </div>

                    <div class="border-b">
                        <div class="_buttons grid grid-cols-2 gap-2 p-3.5 border-x mx-3.5">
                            <a href=<?php echo is_rtl() ? "https://console.befroosh.app" : "https://console.befroosh.app/en"; ?> class="btn btn-outline w-full"><?php echo pll__('Login'); ?></a>
                            <a href=<?php echo is_rtl() ? "https://console.befroosh.app/auth/signup" : "https://console.befroosh.app/en/auth/signup"; ?> class="btn btn-primary text-white w-full"><?php echo pll__('Sign Up'); ?></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>