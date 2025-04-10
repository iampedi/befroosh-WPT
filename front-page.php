<?php get_template_part('parts/header'); ?>

<!-- Home Page Default Template -->
<main class="_page-home">
    <div class="container max-w-7xl mx-auto px-4 2xl:px-0">
        <div class="_page-wrapper pb-6 md:pb-8">
            <div class="_page-header">
                <!-- <h1><?php the_title(); ?></h1> -->

                <?php if (function_exists('get_field')): ?>
                    <?php if ($page_description = get_field('page_description')): ?>
                        <div class="page-description">
                            <?php echo wp_kses_post($page_description); ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <div class="_slider">
                <div class="_slider-title">
                    <?php
                    if (function_exists('get_field')) {
                        $test = get_field('slider_title');
                        echo '<h1>' . esc_html($test) . '</h1>';
                    } ?>
                </div>
                <?php if (have_rows('slider_items')): ?>
                    <div class="_slider-items flex items-center justify-between">
                        <div class="_items-info">
                            <?php while (have_rows('slider_items')): the_row(); ?>
                                <div class="_slider-item-title"><?php echo esc_html(get_sub_field('slider_item_title')); ?></div>
                                <div class="_slider-item-subtitle"><?php echo esc_html(get_sub_field('slider_item_subtitle')); ?></div>
                            <?php endwhile; ?>
                        </div>
                        <div class="_slider-images">
                            <?php while (have_rows('slider_items')): the_row(); ?>

                                <div class="_slider-item-image w-40">
                                    <img src="<?php echo esc_url(get_sub_field('slider_item_image')); ?>" alt="">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>