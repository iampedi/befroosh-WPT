<div class="_items-info-wrapper w-full">
    <?php $index = 0; ?>
    <?php while (have_rows('slider_items')): the_row(); ?>
        <div class="_item-info collapse">
            <input type="radio" name="slider-accordion"
                id="slider-item-<?php echo $index; ?>"
                <?php echo $index === 0 ? 'checked' : ''; ?>
                onchange="activeItem(<?php echo $index; ?>)" />
            <div class="collapse-title flex justify-center xl:justify-start items-center text-center">
                <label for="slider-item-<?php echo $index; ?>">
                    <?php echo esc_html(get_sub_field('slider_item_title')); ?>
                </label>
            </div>
            <div class="collapse-content">
                <?php echo esc_html(get_sub_field('slider_item_subtitle')); ?>
                <?php
                $button_text = get_sub_field('slider_item_button');
                if (!empty(trim($button_text))): ?>
                    <div class="mt-3">
                        <button class="btn btn-primary w-full xl:w-auto">
                            <a href="https://console.befroosh.app"><?php echo esc_html($button_text); ?></a>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php $index++; ?>
    <?php endwhile; ?>

    <div class="_slider-images w-full md:w-2/5">
        <?php $index = 0; ?>
        <?php while (have_rows('slider_items')): the_row(); ?>
            <?php $image = get_sub_field('slider_item_image'); ?>
            <div class="_slider-item-image justify-end flex <?php echo $index === 0 ? '' : 'hidden'; ?>"
                id="slider-image-<?php echo $index; ?>">
                <img class="w-[360px]" src="<?php echo esc_url($image); ?>" alt="">
            </div>
            <?php $index++; ?>
        <?php endwhile; ?>
    </div>
</div>