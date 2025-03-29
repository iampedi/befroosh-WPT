<?php get_template_part('parts/header'); ?>

<main class="_page-blog-list py-6 md:py-8">
    <div class="container max-w-7xl mx-auto px-3 md:px-0">
        <div class="_page-header text-center py-4 mb-8">
            <h1 class="text-3xl font-bold mb-6 text-center text-primary">
                <?php echo get_the_title(get_queried_object_id()); ?>
            </h1>
            <?php
            $page_for_posts = get_option('page_for_posts');
            if ($page_for_posts) {
                $post = get_post($page_for_posts);
                setup_postdata($post);
            ?>
                <div class="_description text-lg font-medium text-gray-500">
                    <?php the_content(); ?>
                </div>
            <?php
                wp_reset_postdata();
            }
            ?>
        </div>

        <div class="_blog-wrapper grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            <?php
            $paged = get_query_var('paged') ?: 1;
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 10,
                'paged' => $paged
            ];
            $query = new WP_Query($args);

            global $wp_query;
            $wp_query = $query;

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="post-card card bg-base-100 hover:bg-gray-100 duration-200 transition-all group rounded-xl">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <figure class="p-6 pb-0">
                                    <?php the_post_thumbnail('medium', ['class' => 'rounded-lg']); ?>
                                </figure>
                            <?php endif; ?>

                            <div class="card-body">
                                <h2 class="card-title text-xl font-bold group-hover:text-primary min-h-14">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="flex items-center gap-2 text-gray-400"><i class="ph ph-calendar-dots text-lg"></i> <span class="pt-1"><?php echo get_the_date('j F Y'); ?></span></p>
                            </div>
                        </a>

                    </div>
            <?php endwhile;

                // Pagination
                the_posts_pagination([
                    'prev_text' => '« قبلی',
                    'next_text' => 'بعدی »',
                ]);

            else :
                echo '<p>هیچ پستی پیدا نشد.</p>';
            endif;

            wp_reset_postdata();
            ?>
        </div>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>