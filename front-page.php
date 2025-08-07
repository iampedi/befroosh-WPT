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

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                const targetId = tab.dataset.target;

                // Remove active class from all
                tabs.forEach(t => t.classList.remove("bg-neutral-50", "active-tab"));
                contents.forEach(c => c.classList.add("hidden"));

                // Add active class to clicked tab
                tab.classList.add("bg-neutral-50", "active-tab");

                // Show selected tab content
                document.getElementById(targetId)?.classList.remove("hidden");
            });
        });
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