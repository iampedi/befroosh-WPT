<!-- <?php
        get_template_part('parts/bottom_icons');
        ?> -->

<footer>
    <div class="_footer pb-8 md:pb-18 pt-20 md:pt-24 bg-gradient-to-t from-neutral-200 to-white">
        <div class="container max-w-7xl mx-auto px-5 2xl:px-0">
            <div class="_wrapper">
                <?php if (function_exists('pll_current_language') && pll_current_language() === 'fa') : ?>
                    <div class="_socials flex flex-col pb-12 gap-5 items-center">
                        <h4 class="font-semibold">بفروش را شبکه‌های اجتماعی دنبال کنید:</h4>
                        <div class="_items flex items-center justify-center gap-5 md:gap-6 w-full md:w-auto bg-neutral-200/15 inset-shadow-sm inset-shadow-neutral-200 rounded-4xl inset-ring inset-ring-neutral-200/50 py-2.5 md:py-3 md:px-6">
                            <div class="_item">
                                <a href="https://www.instagram.com/befroosh.app" target="_blank" rel="noopener noreferrer" data-tip="اینستاگرام" class="flex items-center text-neutral-400 hover:text-fuchsia-700 duration-300 tooltip"><i class="ph ph-instagram-logo text-2xl"></i></a>
                            </div>
                            <div class="_item">
                                <a href="https://aparat.com/befroosh" target="_blank" rel="noopener noreferrer" data-tip="آپارات" class="flex items-center text-neutral-400 hover:text-pink-600 duration-300 tooltip"><i class="ph ph-film-reel text-2xl"></i></a>
                            </div>
                            <div class="_item">
                                <a href="https://www.linkedin.com/company/befroosh" target="_blank" rel="noopener noreferrer" data-tip="لینکدین" class="flex items-center text-neutral-400 hover:text-blue-600 duration-300 tooltip"><i class="ph ph-linkedin-logo text-2xl"></i></a>
                            </div>
                            <div class="_item">
                                <a href="https://t.me/befroosh_app" target="_blank" rel="noopener noreferrer" data-tip="کانال تلگرام" class="flex items-center text-neutral-400 hover:text-blue-500 duration-300 tooltip"><i class="ph ph-telegram-logo text-2xl"></i></a>
                            </div>
                            <div class="_item">
                                <a href="https://x.com/befroosh" target="_blank" rel="noopener noreferrer" data-tip="ایکس" class="flex items-center text-neutral-400 hover:text-neutral-900 duration-300 tooltip"><i class="ph ph-x-logo text-2xl"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="_footer-content flex flex-col md:flex-row items-center gap-12">
                    <div class="w-full md:w-2/5">
                        <div class="_footer-content flex flex-col items-start gap-4">
                            <p class="text-neutral-500 font-normal leading-relaxed text-sm"><?php echo pll__('Footer SEO Text'); ?></p>
                        </div>
                    </div>

                    <div class="w-full <?php echo (pll_current_language() === 'fa') ? 'md:w-1/5' : 'md:w-2/5'; ?>">
                        <?php if (function_exists('pll_current_language')) : ?>
                            <?php if (pll_current_language() === 'fa') : ?>
                                <div class="_item flex items-center justify-center col-span-2 md:col-span-1">
                                    <img class="w-28 rounded-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/enamad.png" alt="e-Namad Logo">
                                </div>
                            <?php else : ?>
                                <div class="_socials flex flex-col pb-12 gap-5 items-center">
                                    <h4 class="font-semibold text-blue-800"><?php echo pll__('Footer Socials Title'); ?></h4>
                                    <div class="_items flex items-center justify-center gap-5 md:gap-6 w-full md:w-fit bg-neutral-200/15 inset-shadow-sm inset-shadow-neutral-200 rounded-4xl inset-ring inset-ring-neutral-200/50 py-2.5 md:py-3 md:px-12 mx-auto">
                                        <div class="_item">
                                            <a href="https://www.facebook.com/befroosh.app" target="_blank" rel="noopener noreferrer" data-tip="Facebook" class="flex items-center text-neutral-400 hover:text-fuchsia-700 duration-300 tooltip"><i class="ph ph-facebook-logo text-2xl"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="w-full <?php echo (pll_current_language() === 'fa') ? 'md:w-2/5' : 'md:w-1/5'; ?>">
                        <div class="_footer-tools grid grid-cols-2 gap-10 md:gap-12 px-4 md:px-8">
                            <?php if (has_nav_menu('footer_1')) : ?>
                                <div class="_item <?php echo (pll_current_language() === 'fa') ? 'col-span-1' : 'col-span-2'; ?>">
                                    <?php
                                    wp_nav_menu([
                                        'theme_location' => 'footer_1',
                                        'container'      => false,
                                        'menu_class'     => 'text-sm leading-7 font-normal text-neutral-500 [&>li>a]:hover:text-blue-900 duration-300',
                                    ]);
                                    ?>
                                </div>
                            <?php endif; ?>
                            <?php if (has_nav_menu('footer_2')) : ?>
                                <div class="_item col-span-1">
                                    <?php
                                    wp_nav_menu([
                                        'theme_location' => 'footer_2',
                                        'container'      => false,
                                        'menu_class'     => 'text-sm leading-7 font-normal text-neutral-500 [&>li>a]:hover:text-blue-900 duration-300',
                                    ]);
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="_copy-right bg-neutral-200 py-4 md:py-6">
        <div class="container max-w-7xl mx-auto px-4 2xl:px-0">
            <div class="_wrapper text-center">
                <?php if (function_exists('pll__')) : ?>
                    <p class="text-neutral-500 text-xs font-normal text-center bg-neutral-300/20 py-2.5 md:px-5 inline-block rounded-full inset-shadow-xs w-full md:w-auto">
                        <?php echo pll__('Footer Prefix'); ?>
                        <a href="<?php echo home_url(); ?>" class="text-neutral-500"><?php bloginfo('name'); ?></a>
                        <?php echo pll__('Footer Suffix'); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<script>
    window.addEventListener("load", function() {
        document.body.classList.add("loaded");
    });
</script>
</body>

</html>