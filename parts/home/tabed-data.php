<div class="_tabbed-data px-3.5 md:px-0 border-t">
    <div class="max-w-[1080px] border-x mx-auto">
        <div class="flex flex-col md:flex-row">
            <div class="pd-tabs flex flex-col items-start whitespace-nowrap border-l-2" role="tablist">
                <?php
                $i = 0;
                if (have_rows('home_tabed_data')) :
                    while (have_rows('home_tabed_data')) :
                        the_row();
                        $title = get_sub_field('tab_item_title');
                        $tab_id = 'tab-' . $i;
                ?>
                        <h2
                            class="pd-tab text-[15px] flex items-center gap-1.5 md:gap-2 border-b py-3.5 text-right w-full px-3 md:px-7 font-bold hover:bg-neutral-50 hover:cursor-pointer data-[active=true]:text-primary text-neutral-500 <?php echo $i === 0 ? 'active-tab' : ''; ?>"
                            data-target="<?php echo esc_attr($tab_id); ?>"
                            data-active="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                            <i class="ph ph-star text-xl text-yellow-500"></i>
                            <?php echo esc_html($title); ?>
                        </h2>
                <?php
                        $i++;
                    endwhile;
                endif;
                ?>
            </div>

            <div class="pd-tab-contents p-3 md:p-7">
                <?php
                $i = 0;
                if (have_rows('home_tabed_data')) :
                    while (have_rows('home_tabed_data')) : the_row();
                        $content = get_sub_field('tab_item_content');
                        $tab_id = 'tab-' . $i;
                ?>
                        <div id="<?php echo esc_attr($tab_id); ?>"
                            class="pd-tab-content font-normal text-[15px] leading-relaxed text-neutral-800 [&_p]:mb-2.5 <?php echo $i === 0 ? '' : 'hidden'; ?>">
                            <?php echo wp_kses_post($content); ?>
                        </div>
                <?php
                        $i++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>