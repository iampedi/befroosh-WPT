<?php
/*
Template Name: Contact Page
*/
get_template_part('parts/header'); ?>

<main class="_page-contact-list pt-6 pb-14 md:pt-8 md:pb-28">
  <div class="container max-w-7xl mx-auto px-4 2xl:px-0">
    <div class="_page-wrapper">
      <div class="_page-header flex flex-col items-center gap-3 md:gap-4 py-6 md:py-8 mb-6 md:mb-8">
        <h1 class="text-[27px] font-bold text-center text-primary">
          <?php the_title(); ?>
        </h1>

        <?php
        if (function_exists('get_field')) {
          $page_id = get_the_ID();
          $page_description = get_field('page_description', $page_id);

          if (!empty($page_description)): ?>
            <div class="_page-description text-center text-[17px] font-medium text-gray-500">
              <?php echo wp_kses_post($page_description); ?>
            </div>
          <?php else: ?>
            <div></div>
        <?php endif;
        }
        ?>
      </div>

      <div class="_page-content pt-14">
        <?php the_content(); ?>
      </div>

      <div class="_contact-details flex flex-col md:flex-row justify-center gap-4 md:gap-8">
        <div class="_item group">
          <a href="https://t.me/+989360226688" target="_blank">
            <i class="ph-duotone ph-handshake"></i>
            <h2 class="_title">واحد فـروش</h2>
          </a>
        </div>

        <div class="_item group">
          <a href="https://t.me/+989360226688" target="_blank">
            <i class="ph-duotone ph-lifebuoy"></i>
            <h2 class="_title">پشتیبانی</h2>
          </a>
        </div>

        <div class="_item group">
          <a href="https://t.me/+989122406612" target="_blank">
            <i class="ph-duotone ph-user-sound"></i>
            <h2 class="_title">مدیریت</h2>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>