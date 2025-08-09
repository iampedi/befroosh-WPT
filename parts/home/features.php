<div class="_home-features border-t px-3.5 md:px-0">
    <div class="border-x max-w-[1080px] mx-auto">
        <div class="py-10 text-center max-w-2xl mx-auto">
            <i class="ph-duotone ph-lightning text-4xl text-blue-900"></i>
            <h2 class="text-xl md:text-2xl font-semibold mb-1.5">
                امکانات دایرکت هوشمند بفروش
            </h2>
            <p class="text-neutral-500 font-normal">دایرکت هوشمند بفروش مجموعه‌ای از امکانات کاربردی را در اختیار شما قرار می‌دهد که فرایند فروش و ارتباط با مشتری را به شکلی کاملا بهینه می‌کند. برخی از امکانات کلیدی عبارت‌اند از:</p>
        </div>

        <div class="_features-items grid md:grid-cols-3 border-t">
            <?php if (have_rows('features_item')): ?>
                <?php
                $i = 0;
                while (have_rows('features_item')): the_row();
                    $icon = get_sub_field('feature_item_icon');
                    $title = get_sub_field('feature_item_title');
                    $description = get_sub_field('feature_item_text');
                    $classes = 'border-b';

                    if ($i % 3 !== 0) {
                        $classes .= ' md:border-r';
                    }
                ?>
                    <div class="<?php echo $classes; ?> group hover:bg-blue-50/75 duration-300">
                        <!-- <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feat-demo-img.png" class="w-full h-full object-cover object-bottom" />
                        </div> -->
                        <div class="p-6 md:px-7">
                            <!-- <i class="ph-duotone ph-<?php echo esc_html($icon ?: 'star'); ?> text-4xl text-gray-500"></i> -->
                            <h3 class="mb-2 text-lg font-bold line-clamp-1"><?php echo esc_html($title); ?></h3>
                            <p class=" font-normal text-neutral-700 line-clamp-4"><?php echo wp_kses_post($description); ?></p>
                        </div>
                    </div>
                <?php
                    $i++;
                endwhile;
                ?>
            <?php endif; ?>
        </div>

        <div class="text-center py-10 px-5">
            <a class="btn btn-primary w-full md:w-auto" href="/features">
                <i class="ph ph-lightning"></i>
                لیست تمام امکانات
            </a>
        </div>
    </div>
</div>