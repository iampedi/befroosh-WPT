<?php get_template_part('parts/header'); ?>

<!-- Home Page Default Template -->
<main class="_page-home">

    <?php if (have_rows('slider_items')): ?>
        <div class="_slider relative">
            <div class="hidden md:block w-56 h-56 bg-fuchsia-500/75 absolute aspect-square bottom-[35%] left-1/6 2xl:left-1/4 rounded-full"></div>
            <div class="py-5 md:py-16 backdrop-filter backdrop-blur-3xl bg-blue-100/25 h-full">
                <div class="container max-w-6xl mx-auto px-4 2xl:px-0">
                    <div class="_slider-wrapper flex flex-col md:flex-row gap-5 md:gap-20">

                        <div class="flex-col w-full md:w-3/5 flex">
                            <div class="flex flex-grow items-center">
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
                                </div>
                            </div>
                        </div>

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
                </div>
            </div>

        </div>
    <?php endif; ?>

    <div class="_sec-how-it-works bg-gradient-to-b from-blue-50/50 to-white pt-12 pb-16 border-blue-100/50">
        <div class="container max-w-5xl mx-auto px-4 2xl:px-0">
            <div class="_sec-wrapper">
                <h2 class="_sec-header text-xl font-bold text-blue-800 mb-10 text-center">
                    بفروش چطور به شما کمک میکنه؟
                </h2>

                <div class="_sec-content grid md:grid-cols-2 md:flex-row flex-wrap justify-around gap-5">
                    <div class="_item">
                        <i class="ph-duotone ph-hand-coins"></i>
                        <h3>فروش سریع‌تر از همیشه</h3>
                        <p>پاسخ‌های خودکار به دایرکت و کامنت، سفارش‌گیری فوری، پرداخت در لحظه. بفروش باعث می‌شه مشتری قبل از اینکه منصرف شه، خرید کنه و فروش اینستاگرامی شما چند برابر بشه</p>
                    </div>
                    <div class="_item">
                        <i class="ph-duotone ph-users-three"></i>
                        <h3>جذب مشتری بیشتر</h3>
                        <p>با ابزارهای بفروش، محصولاتت را در اینستاگرام به میلیون‌ها کاربر نمایش بده و مشتریان جدید جذب کن، کارهای تکراری رو حذف کن و زمانتو صرف تولید محتوا و رشد پیجت کن.</p>
                    </div>
                    <div class="_item">
                        <i class="ph-duotone ph-handshake"></i>
                        <h3>افزایش تعامل و تجربه بهتر مشتری</h3>
                        <p>پاسخ فوری، پیگیری هوشمند، ارتباط حرفه‌ای و خرید بدون دردسر باعث می‌شه مشتری حس خوبی بگیره، عاشق شما بشه و دوباره برگرده.</p>
                    </div>
                    <div class="_item">
                        <i class="ph-duotone ph-lightning"></i>
                        <h3>همه‌چیز یک‌جا، بدون نیاز به سایت</h3>
                        <p>فروشگاه، فرم سفارش، پرداخت، لیست مشتری‌ها و سفارش‌ها و ...، همه در یک پنل ساده و یکپارچه، همه‌چیز مستقیم تو دایرکت اینستاگرام اتفاق می‌افته</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const radios = document.querySelectorAll('input[name="slider-accordion"]');

        radios.forEach((radio, index) => {
            radio.addEventListener('change', () => {
                activeItem(index);
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        activeItem(0);
    });

    function activeItem(index) {
        const images = document.querySelectorAll('._slider-item-image');
        images.forEach((img, i) => {
            img.classList.toggle('hidden', i !== index);
        });

        const items = document.querySelectorAll('._item-info');

        items.forEach((item, i) => {
            const icon = item.querySelector('.collapse-title i');

            if (i === index) {
                item.classList.add('active');
                if (icon) {
                    icon.classList.remove('ph');
                    icon.classList.add('ph-duotone');
                }
            } else {
                item.classList.remove('active');
                if (icon) {
                    icon.classList.remove('ph-duotone');
                    icon.classList.add('ph');
                }
            }
        });
    }
</script>


<?php get_template_part('parts/footer'); ?>