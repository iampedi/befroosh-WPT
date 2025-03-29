<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<main class="container mx-auto my-8">
  <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
  <?php the_content(); ?>
</main>

<?php get_footer(); ?>
