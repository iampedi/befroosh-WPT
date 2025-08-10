<?php
/*
Template Name: Contact Page
*/
get_template_part('parts/header'); ?>

<main class="_page-featrues border-t">
  <div class="_title px-3.5 md:px-0">
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
              <div></div>
          <?php endif;
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="_contact-details px-3.5 md:px-0 border-y">
    <div class="max-w-[1080px] border-x mx-auto">
      <div class="grid md:grid-cols-3 ">
        <?php if (pll_current_language() === 'fa'): ?>
          <div class="_item group">
            <i class="ph-duotone ph-handshake"></i>
            <h2 class="_title">پشتیبانی فـروش</h2>
            <p>در صورت بروز هرگونه مشکل در پرداخت و یا فعال شدن اشتراک با همکاران ما در واحد فروش ارتباط بگیرید.</p>
            <a href="https://t.me/+989360226688" target="_blank" class="btn btn-primary">
              تماس با کارشناس
            </a>
          </div>

          <div class="_item group">
            <i class="ph-duotone ph-user-sound"></i>
            <h2 class="_title">پشتیبانی مشتریان</h2>
            <p>در صورت نیاز به کمک در استفاده از سامانه بفروش و یا مشورت در برای بهره‌وری بیشتر از سرویس‌ها با ما تماس بگیرید.</p>
            <a href="https://t.me/+989122406612" target="_blank" class="btn btn-primary">
              تماس با کارشناس
            </a>
          </div>

          <div class="_item group">
            <i class="ph-duotone ph-lifebuoy"></i>
            <h2 class="_title">پشتیبانی فنی</h2>
            <p>در صورت بروز هرگونه اختلال در عملکرد سایت و یا سرویس‌های سامانه بفروش با واحد پشتیبانی فنی تماس بگیرید.</p>
            <a href="https://t.me/+989360226688" target="_blank" class="btn btn-primary">
              تماس با کارشناس
            </a>
          </div>


        <?php else: ?>
          <div class="_item group">
            <a href="mailto:info@befroosh.app">
              <i class="ph-duotone ph-user-sound"></i>
              <h2 class="_title">Management</h2>
            </a>
          </div>
          <div class="_item group">
            <a href="mailto:support@befroosh.app">
              <i class="ph-duotone ph-lifebuoy"></i>
              <h2 class="_title">Support</h2>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="_page-content">
    <?php the_content(); ?>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>