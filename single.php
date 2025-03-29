<?php get_template_part('parts/header') ?>

<main class="_page-blog-post py-6 md:py-8">
    <div class="container max-w-4xl mx-auto px-3 md:px-0">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="_post-header flex flex-col gap-3 md:gap-6 mb-6">
                    <?php the_title('<h1 class="text-3xl font-bold leading-snug">', '</h1>'); ?>
                    <div class="_tools flex flex-col md:flex-row md:items-center justify-between gap-3">
                        <div class="_right-section flex items-center gap-3 md:gap-4">
                            <div class="_author-avatar">
                                <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', ['class' => 'max-w-14 md:max-w-16 rounded-full']); ?>
                            </div>
                            <div class="_separator flex flex-col gap-1.5 md:gap-3">
                                <h3 class="_author-name font-semibold text-primary"><?php the_author(); ?></h3>
                                <div class="flex  md:items-center gap-3 text-[14px] text-gray-500">
                                    <div class="_date flex items-center gap-1">
                                        <i class="ph ph-calendar-dots text-lg text-gray-600"></i><?php echo get_the_date('j F Y'); ?>
                                    </div>
                                    <div class="_dot hidden md:block">
                                        <i class="ph-bold ph-dot text-3xl leading-0 flex items-center justify-center max-h-2 max-w-2"></i>
                                    </div>
                                    <p class="_reading-time flex items-center gap-1">
                                        <i class="ph ph-timer text-lg text-gray-600"></i><span>زمان مطالعه <?php echo convert_numbers_to_persian(get_reading_time()); ?> دقیقه</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="_left-section">
                            <div class="socials flex items-center gap-2 md:gap-1.5">
                                <div class="bg-gray-200 flex items-center justify-center rounded-full p-2 text-xl hover:bg-blue-500 hover:text-white duration-300">
                                    <i class="ph ph-telegram-logo"></i>
                                </div>
                                <div class="bg-gray-200 flex items-center justify-center rounded-full p-2 text-xl hover:bg-green-500 hover:text-white duration-300">
                                    <i class="ph ph-whatsapp-logo"></i>
                                </div>
                                <div class="bg-gray-200 flex items-center justify-center rounded-full p-2 text-xl hover:bg-fuchsia-700 hover:text-white duration-300">
                                    <i class="ph ph-instagram-logo"></i>
                                </div>
                                <div class="bg-gray-200 flex items-center justify-center rounded-full p-2 text-xl hover:bg-gray-900 hover:text-white duration-300">
                                    <i class="ph ph-x-logo"></i>
                                </div>
                                <div class="bg-gray-200 flex items-center justify-center rounded-full gap-1 p-2 hover:bg-primary hover:text-white duration-300">
                                    <i class="ph ph-link-simple"></i><span class="text-xs pl-1">لینک مطلب</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_post-content [&>p]:mb-3 leading-relaxed">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="_post-image mb-6">
                            <?php the_post_thumbnail('large', ['class' => 'rounded-2xl']); ?>
                        </div>
            <?php endif;
                    the_content();
                endwhile;
            endif; ?>
                </div>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>