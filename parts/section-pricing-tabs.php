<!-- parts/section-pricing-tabs.php -->
<?php if (have_rows('package_tabs')): ?>
  <div class="_package-selector border-y">
    <div id="PricingSelector" class="_title px-3.5 md:px-0">
      <div class="max-w-[1080px] border-x mx-auto">

        <!-- Tabs Titles -->
        <div class="grid grid-cols-2 md:grid-cols-4 border-b" role="tablist">
          <?php $tab_index = 0; ?>
          <?php while (have_rows('package_tabs')): the_row(); ?>
            <?php
            $tab_title = get_sub_field('tab_title');
            $tab_icon = get_sub_field('tab_icon');
            $extra_classes = '';

            if ($tab_index < 2) {
              $extra_classes .= ' border-b md:border-b-0';
            }


            if ($tab_index === 0 || $tab_index === 2) {
              $extra_classes .= ' border-l';
            }


            if ($tab_index < 3) {
              $extra_classes .= ' md:border-l';
            }

            // حذف border-l برای دکمه دوم
            if ($tab_index === 1) {
              $extra_classes .= ' border-l-0';
            }
            ?>
            <button
              type="button"
              class="btn-tab <?php echo $extra_classes; ?> p-1.5 md:px-4 cursor-pointer flex flex-col md:flex-row items-center justify-center gap-1.5 md:py-4 md:flex-1 group [&.active]:bg-gradient-to-b from-blue-50/55 to-white [&.active_span]:text-blue-900 [&.active_span]:font-semibold [&.active_i]:text-blue-900 <?php echo ($tab_index === 0) ? 'active' : ''; ?>"
              onclick="showTab(<?php echo $tab_index; ?>)">
              <i class="ph-duotone <?php echo esc_attr($tab_icon); ?> text-xl md:text-2xl text-gray-400/75 group-hover:text-blue-900/90 duration-200"></i>
              <span class="text-gray-400 text-[15px] md:text-base font-normal group-hover:text-blue-900 duration-200"><?php echo esc_html($tab_title); ?></span>
            </button>
            <?php $tab_index++; ?>
          <?php endwhile; ?>
        </div>

        <!-- Tab Contents Desktop -->
        <div id="tab-content-wrapper-desktop" class="hidden md:flex">
          <?php $tab_index = 0; ?>
          <?php while (have_rows('package_tabs')): the_row(); ?>
            <div class="tab-panel w-full grid grid-cols-3 <?php echo ($tab_index !== 0) ? 'hidden' : ''; ?>" data-tab-index="<?php echo $tab_index; ?>">
              <?php if (have_rows('tab_items')): ?>
                <?php while (have_rows('tab_items')): the_row(); ?>
                  <?php
                  $title       = get_sub_field('tab_item_title');
                  $features    = get_sub_field('tab_item_features');
                  $price       = get_sub_field('tab_item_price');
                  $discount    = get_sub_field('tab_item_discount_price');
                  $percent     = get_sub_field('tab_item_discount_percentage');
                  $description = get_sub_field('tab_item_description');
                  $icon        = get_sub_field('tab_item_icon');
                  $image       = get_sub_field('tab_item_image');
                  ?>
                  <div class="_card flex flex-col gap-3.5 p-7 group flex-1 border-l last:border-l-0 hover:bg-gradient-to-t from-gray-50 to-white duration-300">
                    <?php if ($image): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="rounded-lg mb-3 w-full">
                    <?php endif; ?>

                    <h3 class="text-xl font-semibold duration-300">
                      <?php if ($icon): ?>
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="" class="w-6 h-6">
                      <?php endif; ?>
                      <?php echo esc_html($title); ?>
                    </h3>

                    <div class="_base-price flex items-center justify-between gap-4 h-16">
                      <div class="_price-details flex flex-col h-full">
                        <?php if ($discount): ?>
                          <div>
                            <span class="_discounted-price text-[22px] font-bold duration-300"><?php echo esc_html(convert_numbers_to_persian($discount)); ?> تومان</span> <span class="_price-label text-gray-400 font-normal">در ماه</span>
                          </div>
                        <?php endif; ?>
                        <span class="original-price duration-300 <?php echo ($discount) ? 'text-lg text-gray-500/80 font-normal line-through' : 'text-[22px] font-bold'; ?>">
                          <?php echo esc_html(convert_numbers_to_persian($price)); ?> تومان
                        </span>
                      </div>

                      <?php if ($percent): ?>
                        <div class="discount-badge flex items-start h-full">
                          <div class="bg-green-100/50 border rounded-lg border-green-200/75 flex h-14 w-14 p-1 rotate-45">
                            <span class="-rotate-45 saved-amount flex flex-wrap items-center justify-center text-[13px] font-semibold text-center text-green-800/75"><?php echo esc_html(convert_numbers_to_persian($percent)); ?>% کمتر</span>
                          </div>

                        </div>
                      <?php endif; ?>
                    </div>

                    <?php if ($description): ?>
                      <p class="text-gray-600"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>

                    <a href="https://console.befroosh.app/auth/signup" class="btn btn-primary w-full">شروع کنید</a>

                    <?php if ($features): ?>
                      <ul class="list-disc list-inside text-sm text-gray-700 px-2">
                        <?php foreach ($features as $feature): ?>
                          <li class="flex items-center gap-2 h-7 font-normal text-sm text-gray-500 duration-300">
                            <i class="ph ph-check-circle text-green-600 duration-300"></i>
                            <?php echo esc_html($feature); ?>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              <?php else: ?>
                <p class="text-center text-gray-500">هیچ آیتمی ثبت نشده</p>
              <?php endif; ?>
            </div>
            <?php $tab_index++; ?>
          <?php endwhile; ?>
        </div>

        <!-- Tab Contents -->
        <div id="tab-content-wrapper-mobile">
          <?php $tab_index = 0; ?>
          <?php while (have_rows('package_tabs')): the_row(); ?>
            <div class="tab-panel md:hidden flex shrink-0 snap-center min-w-full max-w-full   overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-thin <?php echo ($tab_index !== 0) ? 'hidden' : ''; ?>">
              <?php if (have_rows('tab_items')): ?>
                <?php while (have_rows('tab_items')): the_row(); ?>
                  <?php
                  $title       = get_sub_field('tab_item_title');
                  $features    = get_sub_field('tab_item_features');
                  $price       = get_sub_field('tab_item_price');
                  $discount    = get_sub_field('tab_item_discount_price');
                  $percent     = get_sub_field('tab_item_discount_percentage');
                  $description = get_sub_field('tab_item_description');
                  $icon        = get_sub_field('tab_item_icon');
                  $image       = get_sub_field('tab_item_image');
                  ?>
                  <div class="_card flex flex-col gap-4 p-5 border-l last:border-l-0  shrink-0 snap-center min-w-[90%] max-w-[90%] group">
                    <?php if ($image): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="rounded-lg mb-3 w-full">
                    <?php endif; ?>

                    <h3 class="text-xl font-semibold duration-300">
                      <?php if ($icon): ?>
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="" class="w-6 h-6">
                      <?php endif; ?>
                      <?php echo esc_html($title); ?>
                    </h3>

                    <div class="_base-price flex items-center justify-between gap-4 h-16">
                      <div class="_price-details flex flex-col h-full">
                        <?php if ($discount): ?>
                          <div>
                            <span class="_discounted-price text-[22px] font-bold duration-300"><?php echo esc_html(convert_numbers_to_persian($discount)); ?> تومان</span> <span class="_price-label text-gray-400 font-normal">در ماه</span>
                          </div>
                        <?php endif; ?>
                        <span class="original-price duration-300 <?php echo ($discount) ? 'text-lg text-gray-500/80 font-normal line-through' : 'text-[22px] font-bold'; ?>">
                          <?php echo esc_html(convert_numbers_to_persian($price)); ?> تومان
                        </span>
                      </div>

                      <?php if ($percent): ?>
                        <div class="discount-badge flex items-start h-full">
                          <div class="bg-green-100/50 border rounded-lg border-green-200/75 flex h-14 w-14 p-1 rotate-45">
                            <span class="-rotate-45 saved-amount flex flex-wrap items-center justify-center text-[13px] font-semibold text-center text-green-800/75"><?php echo esc_html(convert_numbers_to_persian($percent)); ?>% کمتر</span>
                          </div>

                        </div>
                      <?php endif; ?>
                    </div>

                    <?php if ($description): ?>
                      <p class="text-gray-600"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>

                    <a href="https://console.befroosh.app/auth/signup" class="btn btn-primary w-full">شروع کنید</a>

                    <?php if ($features): ?>
                      <ul class="list-disc list-inside text-sm text-gray-700 px-2">
                        <?php foreach ($features as $feature): ?>
                          <li class="flex items-center gap-2 h-7 font-normal text-sm text-gray-500 duration-300">
                            <i class="ph ph-check-circle text-green-600 duration-300"></i>
                            <?php echo esc_html($feature); ?>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              <?php else: ?>
                <p class="text-center text-gray-500">هیچ آیتمی ثبت نشده</p>
              <?php endif; ?>
            </div>
            <?php $tab_index++; ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>