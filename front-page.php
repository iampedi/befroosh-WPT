<?php get_template_part('parts/header'); ?>

<?php
if (is_home() && is_front_page()) {
    get_template_part('home');
} else { ?>
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

                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </main>
<?php } ?>






<?php get_template_part('parts/footer'); ?>