<!-- parts/section-pricing-tabs.php -->
<?php if (have_rows('package_tabs')): ?>
    <div id="PricingSelector" class="max-w-4xl mx-auto pricing-tab pt-4 md:pt-8">
        <!-- Tabs Titles -->
        <div class="grid grid-cols-2 md:grid-cols-4 md:gap-3 mb-6 md:mb-8" role="tablist">
            <?php $tab_index = 0; ?>
            <?php while (have_rows('package_tabs')): the_row(); ?>
                <?php
                $tab_title = get_sub_field('tab_title');
                $tab_icon = get_sub_field('tab_icon');
                ?>
                <button
                    type="button"
                    class="btn-tab border border-transparent px-6 md:px-4 rounded-xl hover:bg-blue-50 hover:border-blue-100 cursor-pointer flex flex-col items-center justify-center gap-1.5 duration-200 h-[120px] md:h-[94px] md:flex-1 group [&.active]:bg-blue-100/75 [&.active]:border-blue-200 [&.active_span]:text-blue-900 [&.active_span]:font-extrabold [&.active_i]text-blue-900 <?php echo ($tab_index === 0) ? 'active' : ''; ?>"
                    onclick="showTab(<?php echo $tab_index; ?>)">
                    <i class="ph-duotone <?php echo esc_attr($tab_icon); ?> text-3xl text-gray-400/75 group-hover:text-blue-800/90 duration-200"></i>
                    <span class="text-gray-400 group-hover:text-blue-800 duration-200 text-[17px]"><?php echo esc_html($tab_title); ?></span>
                </button>
                <?php $tab_index++; ?>
            <?php endwhile; ?>
        </div>

        <!-- Tab Contents Desktop -->
        <div id="tab-content-wrapper-desktop" class="hidden md:flex">
            <?php $tab_index = 0; ?>
            <?php while (have_rows('package_tabs')): the_row(); ?>
                <div class="tab-panel w-full <?php echo ($tab_index !== 0) ? 'hidden' : ''; ?>" data-tab-index="<?php echo $tab_index; ?>">
                    <?php if (have_rows('tab_items')): ?>
                        <div class="flex flex-col md:flex-row items-center justify-center gap-6 w-full">
                            <?php while (have_rows('tab_items')): the_row(); ?>
                                <?php
                                $title       = get_sub_field('tab_item_title');
                                $features    = get_sub_field('tab_item_features');
                                $price       = get_sub_field('tab_item_price');
                                $discount    = get_sub_field('tab_item_discount_price');
                                $percent     = get_sub_field('tab_item_discount_percentage');
                                $description = get_sub_field('tab_item_description');
                                $icon        = get_sub_field('tab_item_icon');
                                $image       = get_sub_field('tab_item_image');
                                ?>
                                <div class="_card flex flex-col gap-5 p-6 bg-radial border-2 border-gray-200/75 hover:border-primary rounded-2xl group hover:shadow-lg duration-300 bg-blue-50/25 w-full flex-1">
                                    <?php if ($image): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="rounded-lg mb-3 w-full">
                                    <?php endif; ?>

                                    <h3 class="text-xl text-center font-bold text-blue-900 duration-300">
                                        <?php if ($icon): ?>
                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="" class="w-6 h-6">
                                        <?php endif; ?>
                                        <?php echo esc_html($title); ?>
                                    </h3>

                                    <?php if ($description): ?>
                                        <p class="text-gray-600"><?php echo esc_html($description); ?></p>
                                    <?php endif; ?>

                                    <?php if ($features): ?>
                                        <ul class="list-disc list-inside text-sm text-gray-700 px-2">
                                            <?php foreach ($features as $feature): ?>
                                                <li class="flex items-center gap-2 h-8 text-[15px] text-gray-500 duration-300">
                                                    <i class="ph ph-check-circle text-green-600 duration-300"></i>
                                                    <?php echo esc_html($feature); ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <div class="_base-price flex items-center justify-center gap-4 h-[85px]">
                                        <div class="_price-details flex flex-col items-center justify-end h-full">
                                            <span class="original-price duration-300 <?php echo ($discount) ? 'text-xl text-red-600 line-through' : 'text-[22px] font-extrabold text-green-600'; ?>">
                                                <?php echo esc_html(convert_numbers_to_persian($price)); ?> تومان
                                            </span>

                                            <?php if ($discount): ?>
                                                <span class="_discounted-price text-[22px] font-extrabold text-green-600 duration-300"><?php echo esc_html(convert_numbers_to_persian($discount)); ?> تومان</span>
                                            <?php endif; ?>

                                            <span class="_price-label text-gray-400">در ماه</span>
                                        </div>

                                        <?php if ($percent): ?>
                                            <div class="discount-badge flex items-start h-full    ">
                                                <span class="saved-amount flex flex-wrap items-center justify-center text-[13px] font-medium text-center text-amber-700 bg-amber-100 border border-amber-200 rounded-full h-14 w-14 p-1"><?php echo esc_html(convert_numbers_to_persian($percent)); ?>% کمتر</span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <a href="https://console.befroosh.app/auth/signup" class="btn btn-primary w-full">خرید</a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p class="text-center text-gray-500">هیچ آیتمی ثبت نشده</p>
                    <?php endif; ?>
                </div>
                <?php $tab_index++; ?>
            <?php endwhile; ?>
        </div>

        <!-- Tab Contents -->
        <div id="tab-content-wrapper-mobile" class="flex md:hidden gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory">
            <?php $tab_index = 0; ?>
            <?php while (have_rows('package_tabs')): the_row(); ?>
                <div class="tab-panel snap-center min-w-full max-w-full shrink-0 <?php echo ($tab_index !== 0) ? 'hidden' : ''; ?>">
                    <?php if (have_rows('tab_items')): ?>
                        <div class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory px-1">
                            <?php while (have_rows('tab_items')): the_row(); ?>
                                <?php
                                $title       = get_sub_field('tab_item_title');
                                $features    = get_sub_field('tab_item_features');
                                $price       = get_sub_field('tab_item_price');
                                $discount    = get_sub_field('tab_item_discount_price');
                                $percent     = get_sub_field('tab_item_discount_percentage');
                                $description = get_sub_field('tab_item_description');
                                $icon        = get_sub_field('tab_item_icon');
                                $image       = get_sub_field('tab_item_image');
                                ?>
                                <div class="_card shrink-0 snap-center min-w-[90%] max-w-[90%] flex flex-col gap-5 p-6 bg-radial border-2 border-gray-200/75 hover:border-primary rounded-2xl group hover:shadow-lg duration-300 bg-blue-50/25 w-full flex-1">
                                    <?php if ($image): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="rounded-lg mb-3 w-full">
                                    <?php endif; ?>

                                    <h3 class="text-xl text-center font-bold text-blue-900 duration-300">
                                        <?php if ($icon): ?>
                                            <img src="<?php echo esc_url($icon['url']); ?>" alt="" class="w-6 h-6">
                                        <?php endif; ?>
                                        <?php echo esc_html($title); ?>
                                    </h3>

                                    <?php if ($description): ?>
                                        <p class="text-gray-600"><?php echo esc_html($description); ?></p>
                                    <?php endif; ?>

                                    <?php if ($features): ?>
                                        <ul class="list-disc list-inside text-sm text-gray-700 px-2">
                                            <?php foreach ($features as $feature): ?>
                                                <li class="flex items-center gap-2 h-8 text-[15px] text-gray-500 duration-300">
                                                    <i class="ph ph-check-circle text-green-600 duration-300"></i>
                                                    <?php echo esc_html($feature); ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <div class="_base-price flex items-center justify-center gap-4 h-[85px]">
                                        <div class="_price-details flex flex-col items-center justify-end h-full">
                                            <span class="original-price duration-300 <?php echo ($discount) ? 'text-xl text-red-600 line-through' : 'text-[22px] font-extrabold text-green-600'; ?>">
                                                <?php echo esc_html(convert_numbers_to_persian($price)); ?> تومان
                                            </span>

                                            <?php if ($discount): ?>
                                                <span class="_discounted-price text-[22px] font-extrabold text-green-600 duration-300"><?php echo esc_html(convert_numbers_to_persian($discount)); ?> تومان</span>
                                            <?php endif; ?>

                                            <span class="_price-label text-gray-400">در ماه</span>
                                        </div>

                                        <?php if ($percent): ?>
                                            <div class="discount-badge flex items-start h-full    ">
                                                <span class="saved-amount flex flex-wrap items-center justify-center text-[13px] font-medium text-center text-amber-700 bg-amber-100 border border-amber-200 rounded-full h-14 w-14 p-1"><?php echo esc_html(convert_numbers_to_persian($percent)); ?>% کمتر</span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <a href="https://console.befroosh.app/auth/signup" class="btn btn-primary w-full">خرید</a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p class="text-center text-gray-500">هیچ آیتمی ثبت نشده</p>
                    <?php endif; ?>
                </div>
                <?php $tab_index++; ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>