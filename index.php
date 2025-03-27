<?php get_header(); ?>

<main id="content">
    <div class="container max-w-7xl mx-auto">
        <div class="_page-wrapper py-8 min-h-[600px]">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>