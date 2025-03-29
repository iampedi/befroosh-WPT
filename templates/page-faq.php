<?php
/*
Template Name: FAQ Page
*/
get_header(); ?>

<main class="container mx-auto my-8">
  <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
  
  <?php if (have_rows('faq')): ?>
    <div class="faq">
      <?php while (have_rows('faq')) : the_row(); ?>
        <div class="faq-item mb-4 border-b pb-2">
          <h3 class="font-semibold"><?php the_sub_field('faq_question'); ?></h3>
          <div><?php the_sub_field('faq_answer'); ?></div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <p>موردی ثبت نشده است.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
