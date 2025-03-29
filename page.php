<?php get_template_part('parts/header'); ?>

<!-- All Pages Default Template -->
<main class="_page-all py-6 md:py-8">
    <div class="container max-w-7xl mx-auto px-3 md:px-0">
        <div class="_page-wrapper">
            <div class="_page-header flex flex-col items-center gap-4 py-8 mb-8">
                <h1 class="text-3xl font-bold text-center text-primary">
                    <?php the_title(); ?>
                </h1>

                <?php
                if (function_exists('get_field')) {
                    $page_id = get_the_ID();
                    $page_description = get_field('page_description', $page_id);

                    if (!empty($page_description)): ?>
                        <div class="_page-description text-lg font-medium text-gray-500">
                            <?php echo wp_kses_post($page_description); ?>
                        </div>
                    <?php else: ?>
                        <div></div>
                <?php endif;
                }
                ?>
            </div>

            <div class="_page-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>