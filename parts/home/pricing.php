<section class="_pricing bg-gradient-to-t from-white to-gray-200/70 py-14">
    <div class="container px-4 md:px-0">
        <div>
            <h2 class="text-2xl font-bold text-center mb-7 gradient"><?php the_field('home_pricing_title'); ?></h2>

            <?php if (have_rows('home_pricing_items')): ?>
                <div class="flex flex-col gap-10">
                    <?php
                    $i = 0;
                    $btn_colors = ['bg-violet-500', 'bg-violet-600', 'bg-violet-700', 'bg-violet-800'];
                    $icon_colors = ['text-lime-500', 'text-rose-400', 'text-green-700', 'text-amber-400'];
                    while (have_rows('home_pricing_items')): the_row();
                        $btnColorClass = $btn_colors[$i % count($btn_colors)];
                        $iconColorClass = $icon_colors[$i % count($icon_colors)];
                    ?>
                        <div class="_item bg-white pt-10 pb-8 px-6 flex-wrap rounded-xl border-2">
                            <div class="flex items-center gap-x-6 justify-center">
                                <i class="ph-thin ph-<?php the_sub_field('item_icon'); ?> text-[50px] <?php echo $iconColorClass; ?>"></i>
                                <div class="space-y-1">
                                    <h3 class="text-lg font-medium">پیج <?php the_sub_field('item_title'); ?> فالور</h3>
                                    <p class="text-lg font-bold text-violet-600"><?php the_sub_field('item_price'); ?> هزار تومان</p>
                                </div>
                            </div>
                            <a href="#" class="btn <?php echo $btnColorClass; ?> w-full -mb-20"><?php the_field('home_pricing_button'); ?></a>
                        </div>
                    <?php
                        $i++;
                    endwhile;
                    ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>