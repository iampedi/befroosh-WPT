<?php get_template_part('parts/header'); ?>

<!-- Home Page Default Template -->
<main class="_page-home border-t">

    <?php get_template_part('parts/home/slider'); ?>

    <?php get_template_part('parts/home/tabed-data'); ?>

    <!-- <?php get_template_part('parts/home/how-it-works'); ?> -->

    <?php get_template_part('parts/home/features'); ?>

    <?php get_template_part('parts/home/support'); ?>

    <?php get_template_part('parts/home/faq'); ?>

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
    document.addEventListener("DOMContentLoaded", function() {
        const tabs = document.querySelectorAll(".pd-tab");
        const contents = document.querySelectorAll(".pd-tab-content");

        function activate(tab) {
            const targetId = tab.dataset.target;

            // reset all
            tabs.forEach(t => {
                t.classList.remove("bg-neutral-50", "active-tab");
                t.setAttribute("data-active", "false");
                t.setAttribute("aria-selected", "false");
                const icon = t.querySelector("i");
                if (icon) {
                    icon.classList.remove("ph-duotone");
                    icon.classList.add("ph");
                }
            });
            contents.forEach(c => c.classList.add("hidden"));

            // set active
            tab.classList.add("bg-neutral-50", "active-tab");
            tab.setAttribute("data-active", "true");
            tab.setAttribute("aria-selected", "true");
            const activeIcon = tab.querySelector("i");
            if (activeIcon) {
                activeIcon.classList.remove("ph");
                activeIcon.classList.add("ph-duotone");
            }

            document.getElementById(targetId)?.classList.remove("hidden");
        }

        tabs.forEach(tab => tab.addEventListener("click", () => activate(tab)));

        // init (اگر چیزی فعال نیست)
        const current = document.querySelector('.pd-tab[data-active="true"]') || tabs[0];
        if (current) activate(current);
    });
</script>


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