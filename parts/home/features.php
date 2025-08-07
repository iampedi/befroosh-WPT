<div class="_home-features border-t px-3.5 md:px-0">
    <div class="border-x max-w-[1080px] mx-auto">
        <div class="p-7 text-center space-y-3.5 max-w-2xl mx-auto">
            <i class="ph-duotone ph-lightning text-4xl text-blue-900"></i>
            <h2 class="text-xl font-bold">
                امکانات دایرکت هوشمند بفروش
            </h2>
            <p class="text-neutral-500 font-normal text-[15px]">دایرکت هوشمند بفروش مجموعه‌ای از امکانات کاربردی را در اختیار شما قرار می‌دهد که فرایند فروش و ارتباط با مشتری را به شکلی کاملا بهینه می‌کند. برخی از امکانات کلیدی عبارت‌اند از:</p>
        </div>

        <div class="_features-items grid md:grid-cols-3 border-t">
            <?php if (have_rows('features_item')): ?>
                <?php
                $i = 0;
                while (have_rows('features_item')): the_row();
                    $title = get_sub_field('feature_item_title');
                    $description = get_sub_field('feature_item_text');
                    $classes = 'p-6 md:p-7 border-b';

                    if ($i % 3 !== 0) {
                        $classes .= ' md:border-r';
                    }
                ?>
                    <div class="<?php echo $classes; ?> group hover:bg-blue-50/25 duration-300">
                        <h3 class="mb-3 font-semibold text-blue-900"><?php echo esc_html($title); ?></h3>
                        <p class="text-sm font-normal text-neutral-700"><?php echo wp_kses_post($description); ?></p>
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