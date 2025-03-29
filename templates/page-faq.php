<?php
/*
Template Name: FAQ Page
*/
get_template_part('parts/header'); ?>

<main class="_page-faq py-6 md:py-8">
  <div class="container max-w-7xl mx-auto px-3 md:px-0">
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

      <div class="_page-content">
        <?php the_content(); ?>

        <div class="_faq-accordion max-w-2xl mx-auto space-y-2">
          <?php if (have_rows('qa_field')): ?>
            <?php while (have_rows('qa_field')): the_row();
              $question = get_sub_field('question_field');
              $answer = get_sub_field('answer_field');
            ?>
              <div class="collapse collapse-plus text-blue-900 hover:bg-blue-50 rounded-2xl duration-150 ease-out">
                <input type="radio" name="faq-accordion" class="peer" />
                <div class="collapse-title font-bold peer-checked:bg-blue-50 flex items-center">
                  <span class="mb-0 p-0 flex items-center h-full"><?php echo esc_html($question); ?></span>
                </div>
                <div class="collapse-content peer-checked:bg-blue-50">
                  <span class="border-r-2 border-blue-800 flex px-3"><?php echo wp_kses_post($answer); ?></span>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
            <p class="text-gray-500">سوالی برای نمایش وجود ندارد.</p>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>