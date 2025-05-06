<?php get_template_part('parts/header'); ?>

<!-- Home Page Default Template -->
<main class="_page-home">

    <div class="_slider bg-blue-50/50 py-10 md:py-20">
        <div class="container max-w-7xl mx-auto px-4 2xl:px-0 relative">
            <div class="_slider-wrapper flex flex-col md:flex-row gap-5 md:gap-20">

                <div class="flex-col w-full md:w-7/12 flex">
                    <div class="flex flex-grow items-center">
                        <div class="_items-info-wrapper w-full bg-blue-50/40 px-3 md:px-14 md:pt-16 md:pb-14 rounded-2xl md:shadow-lg shadow-blue-800/10 backdrop-blur-lg md:z-[1]">
                            <h1 class="text-4xl font-black text-purple-500 mb-6 leading-12 text-center <?php echo is_rtl() ? 'md:text-right' : 'md:text-left'; ?>"><?php echo pll__('Slider Title') ?></h1>
                            <p class="mr-0 mb:mr-6 mb-8 text-[21px] md:text-[22px] font-semibold text-blue-800 leading-9 md:leading-10 md:before:content-[''] md:before:w-1 before:h-24 before:bg-gray-400/80 relative before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-full <?php echo is_rtl() ? 'before:-right-4 md:before:-right-6' : 'before:-left-4 md:before:-left-6'; ?>"><?php echo pll__('Slider Description') ?></p>
                            <a class="btn btn-primary w-full md:w-auto" href=<?php echo is_rtl() ? "https://console.befroosh.app/auth/signup" : "https://console.befroosh.app/en/auth/signup"; ?>><?php echo pll__('Slider Button') ?></a>
                        </div>
                    </div>
                </div>

                <div class="w-1/2 absolute top-1/2 -translate-y-1/2 z-0 hidden md:block <?php echo is_rtl() ? 'left-0' : 'right-0'; ?>">
                    <img class="rounded-2xl" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-slide-01-min.webp" alt="Instagram">
                </div>
            </div>
        </div>
    </div>

    <div class="_sec-how-it-works bg-gradient-to-b from-blue-50/50 to-white pt-12 pb-16 border-blue-100/50">
        <div class="container max-w-5xl mx-auto px-4 2xl:px-0">
            <div class="_sec-wrapper">
                <h2 class="_sec-header text-[23px] md:text-3xl font-black text-blue-800 mb-12 text-center">
                    <?php the_field('module_title'); ?>
                </h2>

                <div class="_sec-content grid md:grid-cols-2 md:flex-row flex-wrap justify-around gap-6">
                    <?php if (have_rows('mod_home_loop_one')): ?>
                        <?php while (have_rows('mod_home_loop_one')): the_row(); ?>
                            <div class="_item">
                                <i class="ph-duotone <?php the_sub_field('item_icon'); ?>"></i>
                                <h3><?php the_sub_field('item_title'); ?></h3>
                                <p><?php the_sub_field('item_text'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
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