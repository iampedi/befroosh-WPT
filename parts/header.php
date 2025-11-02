<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

  <header class="py-5">
    <div class="container max-w-5xl px-5 mx-auto">
      <div class="flex items-center justify-between gap-2.5">
        <label for="mobile-menu" class="drawer-button hidden items-center"><i class="ph ph-list text-[28px]"></i></label>

        <div class="_logo">
          <a href=<?php echo is_rtl() ? '/' : '/en'; ?> class="flex items-center gap-1.5">
            <div class="text-2xl font-extrabold gradient"><?php bloginfo('name'); ?></div>
            <div class="bg-gradient text-white text-xs px-1.5 h-6 rounded-md flex items-center leading-px font-medium">بـلاگ</div>
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

        <div class="_buttons flex items-center justify-end gap-1.5 md:gap-2 flex-1">
          <a href=<?php echo is_rtl() ? "https://befroosh.app" : "https://befroosh.app/en"; ?> class="btn btn-primary btn-icon">
            <i class="ph-duotone ph-house md:hidden"></i>
            <span class="hidden md:inline-block"><?php echo pll__('Back To Site'); ?></span>
          </a>

          <a href=<?php echo is_rtl() ? "https://my.befroosh.app/auth" : "https://my.befroosh.app/en/auth"; ?> class="btn btn-primary"><?php echo pll__('User Panel'); ?></a>
        </div>
      </div>
    </div>
  </header>

  <!-- <div class="drawer">
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
                            <a href=<?php echo is_rtl() ? "https://console.befroosh.app" : "https://console.befroosh.app/en"; ?> class="btn btn-outline w-full"><?php echo pll__('Sign In Sign Up'); ?></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> -->