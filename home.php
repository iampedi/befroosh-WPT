<?php
/* Template Name: Blog */
get_header();
?>

<main class="page-blog container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">
        <?php echo get_the_title(get_queried_object_id()); ?>
    </h1>
    <div class="_blog-wrapper grid grid-cols-4 gap-8">
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
                <div class="post-card card bg-base-100 hover:bg-gray-50 shadow-sm hover:shadow-lg duration-200 transition-all group">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <figure>
                                <?php the_post_thumbnail('medium', ['class' => 'rounded-tr-lg rounded-tl-lg']); ?>
                            </figure>
                        <?php endif; ?>

                        <div class="card-body">
                            <h2 class="card-title group-hover:text-primary">
                                <?php the_title(); ?>
                            </h2>

                            <p class="text-sm text-gray-400 font-light">
                                منتشر شده در <?php echo get_the_date(); ?> توسط <?php the_author(); ?>
                            </p>
                            <?php
                            $excerpt = get_the_excerpt();
                            if (!empty(trim($excerpt))) : ?>
                                <p class="text-gray-800"><?php echo $excerpt; ?></p>
                            <?php endif; ?>
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
</main>

<?php get_footer(); ?>