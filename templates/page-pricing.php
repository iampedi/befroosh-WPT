<?php
/*
Template Name: Pricing Page
*/
get_template_part('parts/header'); ?>
<main class="_page-pricing pt-6 pb-14 md:pt-8 md:pb-28">
    <div class="container max-w-7xl mx-auto px-4 md:px-0">
        <div class="_page-wrapper">
            <div class="_page-header flex flex-col items-center gap-3 md:gap-4 py-6 md:py-8 mb-6 md:mb-8">
                <h1 class="text-[27px] font-bold text-center text-primary">
                    <?php the_title(); ?>
                </h1>
                <?php
                if (function_exists('get_field')) {
                    $page_id = get_the_ID();
                    $page_description = get_field('page_description', $page_id);
                    if (!empty($page_description)): ?>
                        <div class="_page-description text-center text-[17px] font-medium text-gray-500">
                            <?php echo wp_kses_post($page_description); ?>
                        </div>
                <?php endif;
                }
                ?>
            </div>

            <div class="_page-content">
                <?php the_content(); ?>
            </div>

            <?php if (have_rows('package_rep')): ?>
                <div class="_pricing-selector flex items-center justify-center gap-3 py-8">
                    <button id="monthly" class="btn-tab active"><i class="ph-duotone ph-moon text-xl"></i><?php esc_html_e('یک ماهه', 'befroosh'); ?></button>
                    <button id="quarterly" class="btn-tab"><i class="ph-duotone ph-leaf text-xl"></i><?php esc_html_e('سه ماهه', 'befroosh'); ?></button>
                    <button id="yearly" class="btn-tab"><i class="ph-duotone ph-globe-hemisphere-east text-xl"></i><?php esc_html_e('یک ساله', 'befroosh'); ?></button>
                </div>

                <!-- Desktop Version -->
                <div class="_pricing-packages hidden md:flex items-center justify-center gap-6">
                    <?php while (have_rows('package_rep')): the_row(); ?>
                        <?php
                        $pack_conditions = get_sub_field('pack_conditions');
                        $features_list = get_sub_field('features_list');
                        $base_price = get_sub_field('base_price');
                        $formatted_price = convert_numbers_to_persian(number_format($base_price, 0, '', '.'));
                        ?>
                        <div class="_item flex flex-col gap-6 w-1/5 p-8 bg-radial border-2 border-gray-200 hover:border-primary rounded-2xl group hover:shadow-lg duration-300">
                            <?php if ($pack_conditions): ?>
                                <h2 class="_pack-conditions text-xl text-center font-bold text-blue-900 duration-300"><?php echo esc_html(convert_numbers_to_persian($pack_conditions)); ?></h2>
                            <?php endif; ?>

                            <?php if ($features_list): ?>
                                <ul class="_features-list">
                                    <?php foreach ($features_list as $feature): ?>
                                        <li class="flex items-center gap-2 h-8 text-[15px] text-gray-500 duration-300"><i class="ph ph-check-circle text-green-600 duration-300"></i> <?php echo esc_html($feature); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <?php if ($base_price): ?>
                                <div class="_base-price flex justify-start gap-2.5">
                                    <div class="discount-badge hidden items-center">
                                        <span class="saved-amount flex flex-wrap items-center justify-center text-xs font-medium text-center text-amber-700 bg-amber-100 border border-amber-200 rounded-full h-12 w-12 p-1"></span>
                                    </div>
                                    <div class="price-details flex flex-col items-center">
                                        <span class="original-price text-xl font-bold text-red-600 line-through duration-300"></span>
                                        <span class="discounted-price text-2xl font-black text-green-600 duration-300" data-base-price="<?php echo esc_attr($base_price); ?>">
                                            <?php echo esc_html($formatted_price); ?>
                                        </span>
                                        <span class="price-label text-gray-400 font-bold duration-300">تومان در ماه</span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>

                <!-- Mobile Version -->
                <div class="_pricing-packages flex md:hidden carousel carousel-center max-w-full space-x-4">
                    <?php while (have_rows('package_rep')): the_row(); ?>
                        <?php
                        $pack_conditions = get_sub_field('pack_conditions');
                        $features_list = get_sub_field('features_list');
                        $base_price = get_sub_field('base_price');
                        $formatted_price = convert_numbers_to_persian(number_format($base_price, 0, '', '.'));
                        ?>
                        <div class="carousel-item">
                            <div class="_item flex flex-col gap-4 p-8 bg-radial border-2 border-primary rounded-2xl">
                                <?php if ($pack_conditions): ?>
                                    <h2 class="_pack-conditions text-xl text-center font-bold text-blue-900 duration-300"><?php echo esc_html(convert_numbers_to_persian($pack_conditions)); ?></h2>
                                <?php endif; ?>

                                <?php if ($features_list): ?>
                                    <ul class="_features-list">
                                        <?php foreach ($features_list as $feature): ?>
                                            <li class="flex items-center gap-2 h-8 text-[15px] text-gray-500 duration-300"><i class="ph ph-check-circle text-green-600 duration-300"></i> <?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <?php if ($base_price): ?>
                                    <div class="_base-price flex justify-start gap-2.5">
                                        <div class="discount-badge hidden items-center">
                                            <span class="saved-amount flex flex-wrap items-center justify-center text-xs font-medium text-center text-amber-700 bg-amber-100 border border-amber-200 rounded-full h-12 w-12 p-1"></span>
                                        </div>
                                        <div class="price-details flex flex-col items-center">
                                            <span class="original-price text-xl font-bold text-red-600 line-through duration-300"></span>
                                            <span class="discounted-price text-2xl font-black text-green-600 duration-300" data-base-price="<?php echo esc_attr($base_price); ?>">
                                                <?php echo esc_html($formatted_price); ?>
                                            </span>
                                            <span class="price-label text-gray-400 font-bold duration-300">تومان در ماه</span>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>