<?php get_header(); ?>

<main id="content">
    <div class="container mx-auto">
        <div class="_page-wrapper">
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