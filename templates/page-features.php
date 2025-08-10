<?php
/*
Template Name: Features Page
*/
get_template_part('parts/header'); ?>
<main class="_page-featrues border-t">
    <div class="_title px-3.5 md:px-0">
        <div class="max-w-[1080px] border-x mx-auto py-10 md:py-14">
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
                        <?php else: ?>
                            <div></div>
                    <?php endif;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="_features-items px-3.5 md:px-0 border-y">
        <div class="max-w-[1080px] border-x mx-auto">
            <div class="grid md:grid-cols-3 ">
                <?php if (have_rows('features_item')): ?>
                    <?php
                    $items_count = count(get_field('features_item'));
                    $i = 0;

                    while (have_rows('features_item')): the_row();
                        $icon = get_sub_field('feature_item_icon');
                        $title = get_sub_field('feature_item_title');
                        $description = get_sub_field('feature_item_text');
                        $classes = 'border-b'; // پیش‌فرض با border-b

                        // اضافه کردن border-r فقط به آیتم‌هایی که ستون سوم نیستند
                        if ($i % 3 !== 2) {
                            $classes .= ' md:border-l';
                        }

                        // حذف border-b برای سه آیتم آخر
                        if ($i >= $items_count - 3) {
                            $classes = str_replace('border-b', '', $classes);
                        }
                    ?>
                        <div class="<?php echo $classes; ?> group hover:bg-blue-50/75 duration-300">
                            <!-- <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feat-demo-img.png" />
                            </div> -->
                            <div class="p-6 md:p-7">
                                <!-- <i class="ph-duotone ph-<?php echo esc_html($icon ?: 'star'); ?> text-4xl text-gray-500"></i> -->
                                <h3 class="mb-2 font-bold line-clamp-1"><?php echo esc_html($title); ?></h3>
                                <p class=" font-normal text-neutral-700 line-clamp-4"><?php echo wp_kses_post($description); ?></p>
                            </div>
                        </div>
                    <?php
                        $i++;
                    endwhile;
                    ?>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <div class="container max-w-7xl mx-auto px-4 2xl:px-0">
        <div class="_page-wrapper">
            <div class="_page-content" id="PageContent">
                <?php the_content(); ?>
            </div>
        </div>
</main>

<?php get_template_part('parts/footer'); ?>