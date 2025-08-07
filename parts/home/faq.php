<div class="border-y px-3.5 md:px-0">
    <div class="border-x max-w-[1080px] mx-auto">
        <div class="container">
            <div class="pt-7 pb-14 md:py-14 max-w-3xl mx-auto">
                <h2 class="text-2xl font-semibold mt-2.5 text-center mb-7">
                    سوالات متداول شما
                </h2>

                <div class="_faq-accordion">
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

                <div class="text-center mt-14">
                    <a class="btn btn-primary" href="/faq">
                        <i class="ph ph-question"></i>
                        سوالات بیشتر
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>