<?php
/*
Template Name: FAQ Page
*/
get_template_part('parts/header'); ?>

<main class="_page-faq border-t">
  <div class="px-3.5 md:px-0">
    <div class="max-w-[1080px] border-x mx-auto py-10 md:py-20">
      <div class="container !max-w-2xl">
        <div class="text-center space-y-1.5">
          <h1 class="text-2xl font-bold">
            <?php the_title(); ?>
          </h1>

          <?php
          if (function_exists('get_field')) {
            $page_id = get_the_ID();
            $page_description = get_field('page_description', $page_id);

            if (!empty($page_description)): ?>
              <div class="text-neutral-500 font-normal">
                <?php echo wp_kses_post($page_description); ?>

              </div>
            <?php else: ?>
              <div>...</div>
          <?php endif;
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="_faq-accordion px-3.5 md:px-0 border-y">
    <div class="max-w-[1080px] border-x mx-auto pt-7 pb-20">
      <div class="container !max-w-3xl">
        <?php if (have_rows('qa_field')): ?>
          <?php
          $i = 0;
          while (have_rows('qa_field')): the_row();
            $question = get_sub_field('question_field');
            $answer = get_sub_field('answer_field');
          ?>
            <div class="collapse group border-b collapse-plus rounded-none text-primary duration-150 ease-out">
              <input type="radio" name="faq-accordion" class="peer" />
              <div class="collapse-title  peer-not-checked:group-hover:bg-neutral-50">
                <span class="mb-0 p-0 flex items-center h-full"><?php echo esc_html($question); ?></span>
              </div>
              <i class="ph ph-plus transition-transform duration-200 peer-checked:rotate-45 absolute left-0 top-5 text-neutral-500 peer-checked:text-primary"></i>
              <div class="collapse-content px-0">
                <span class="text-neutral-700 text-[15px] flex font-normal leading-normal"><?php echo wp_kses_post($answer); ?></span>
              </div>
            </div>
          <?php
            $i++;
          endwhile;
          ?>
        <?php else: ?>
          <p class="text-gray-500 text-center"><?php echo pll__('No faq found'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="_faq-accordion px-3.5 md:px-0 border-b">
    <div class="max-w-[1080px] border-x mx-auto py-10 bg-neutral-50">
      <div class="container">
        <div class="text-center space-y-3.5">
          <?php
          $current_lang = pll_current_language(); // مثلا 'en' یا 'fa'
          $contact_url = '/' . $current_lang . '/contact';
          ?>
          <p class=""><?php echo pll__('Need more help?'); ?></p>
          <button class="btn btn-primary"><a href="<?php echo esc_url($contact_url); ?>"><?php echo pll__('Contact Support'); ?></a></button>
        </div>
      </div>
    </div>
  </div>

  <?php
  $content = get_the_content();
  if (!empty(trim($content))): ?>
    <div class="_page-content mt-16">
      <?php the_content(); ?>
    </div>
  <?php endif; ?>
</main>

<?php get_template_part('parts/footer'); ?>