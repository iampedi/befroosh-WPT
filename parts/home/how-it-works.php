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