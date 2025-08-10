<?php
/*
Template Name: Pricing Page
*/
get_template_part('parts/header'); ?>

<main class="_page-pricing border-t">
    <div class="_title px-3.5 md:px-0">
        <div class="max-w-[1080px] border-x mx-auto py-10 md:py-20">
            <div class="container !max-w-2xl">
                <div class="text-center space-y-1.5">
                    <h1 class="text-2xl font-bold">
                        <?php the_title(); ?>
                    </h1>
                    <?php
                    if (function_exists('get_field')) {
                        $page_id = get_the_ID();
                        $page_description = get_field('page_description', $page_id);
                        if (!empty($page_description)): ?>
                            <div class="text-neutral-500 font-normal">
                                <?php echo wp_kses_post($page_description); ?>
                            </div>
                    <?php endif;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Package Selector Tabs -->
    <?php get_template_part('parts/section', 'pricing-tabs'); ?>

    <div class="_page-content">
        <?php the_content(); ?>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>