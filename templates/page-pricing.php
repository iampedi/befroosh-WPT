<?php
/*
Template Name: Pricing Page
*/
get_template_part('parts/header'); ?>
<main class="_page-pricing pb-14 md:pb-24 bg-gradient-to-b from-blue-50/50 to-white">
    <div class="container max-w-7xl mx-auto px-4 2xl:px-0">
        <div class="_page-wrapper">
            <div class="page-header-wrapper">
                <div class="header-content">
                    <h1 class="bg-testcolor">
                        <?php the_title(); ?>
                    </h1>
                    <?php
                    if (function_exists('get_field')) {
                        $page_id = get_the_ID();
                        $page_description = get_field('page_description', $page_id);
                        if (!empty($page_description)): ?>
                            <div class="page-description">
                                <?php echo wp_kses_post($page_description); ?>
                            </div>
                    <?php endif;
                    }
                    ?>
                </div>

                <div class="header-bottom-mask"><a href="#PricingSelector"><i class="ph-light ph-mouse-simple"></i></a></div>
            </div>

            <div class="_page-content">
                <?php the_content(); ?>
            </div>

            <!-- Package Selector Tabs -->
            <?php get_template_part('parts/section', 'pricing-tabs'); ?>

        </div>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>