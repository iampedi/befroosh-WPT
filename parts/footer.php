<?php
get_template_part('parts/bottom_icons');
?>

<footer>
    <div class="_footer pb-8 md:pb-18 pt-20 md:pt-24 bg-gradient-to-t from-gray-200 to-white">
        <div class="container max-w-7xl mx-auto px-5 2xl:px-0">
            <div class="_wrapper">
                <div class="_socials flex flex-col pb-12 gap-5 items-center">
                    <h4 class="font-semibold text-blue-800">بفروش را شبکه‌های اجتماعی دنبال کنید:</h4>
                    <div class="_items flex items-center justify-center gap-5 md:gap-6 w-full md:w-auto bg-gray-200/15 inset-shadow-sm inset-shadow-gray-200 rounded-4xl inset-ring inset-ring-gray-200/50 py-2.5 md:py-3 md:px-6">
                        <div class="_item">
                            <a href="https://www.instagram.com/befroosh.app" target="_blank" rel="noopener noreferrer" data-tip="اینستاگرام" class="flex items-center text-gray-400 hover:text-fuchsia-700 duration-300 tooltip"><i class="ph ph-instagram-logo text-3xl"></i></a>
                        </div>
                        <div class="_item">
                            <a href="https://aparat.com/befroosh" target="_blank" rel="noopener noreferrer" data-tip="آپارات" class="flex items-center text-gray-400 hover:text-pink-600 duration-300 tooltip"><i class="ph ph-film-reel text-3xl"></i></a>
                        </div>
                        <div class="_item">
                            <a href="https://www.linkedin.com/company/befroosh" target="_blank" rel="noopener noreferrer" data-tip="لینکدین" class="flex items-center text-gray-400 hover:text-blue-600 duration-300 tooltip"><i class="ph ph-linkedin-logo text-3xl"></i></a>
                        </div>
                        <div class="_item">
                            <a href="https://t.me/befroosh_app" target="_blank" rel="noopener noreferrer" data-tip="کانال تلگرام" class="flex items-center text-gray-400 hover:text-blue-500 duration-300 tooltip"><i class="ph ph-telegram-logo text-3xl"></i></a>
                        </div>
                        <div class="_item">
                            <a href="https://x.com/befroosh" target="_blank" rel="noopener noreferrer" data-tip="ایکس" class="flex items-center text-gray-400 hover:text-gray-900 duration-300 tooltip"><i class="ph ph-x-logo text-3xl"></i></a>
                        </div>
                    </div>
                </div>
                <div class="_footer-content flex flex-col md:flex-row items-center gap-12">
                    <div class="w-full md:w-2/5">
                        <div class="_footer-content flex flex-col items-start gap-4">
                            <p class="text-gray-500 text-[15px]">بفروش ابزاری هوشمند در حوزه فروش و ارسال سفارش‌های آنلاین است و به فروشگاه‌های اینترنتی و فروشندگان در شبکه‌های اجتماعی، امکان مدیریت و نظارت بر فرآیند فروش و ارسال سفارش‌ها را می‌دهد.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/5">
                        <div class="_item flex items-center justify-center col-span-2 md:col-span-1">
                            <img class="w-28 rounded-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/enamad.png" alt="e-Namad Logo">
                        </div>
                    </div>
                    <div class="w-full md:w-2/5">
                        <div class="_footer-tools grid grid-cols-2 gap-10 md:gap-12 px-4 md:px-8">
                            <div class="_item col-span-1">
                                <ul class="text-[15px] leading-7 text-gray-500 [&>li>a]:hover:text-blue-900 duration-300">
                                    <li><a href="/blog">بلاگ بفروش</a></li>
                                    <li><a href="/faq">سوالات متداول</a></li>
                                    <li><a href="/privacy">حریم خصوصی</a></li>
                                    <li><a href="/terms">قوانین و مقررات</a></li>
                                </ul>
                            </div>
                            <div class="_item col-span-1">
                                <ul class="text-[15px] leading-7 text-gray-500 [&>li>a]:hover:text-blue-900 duration-300">
                                    <li><a href="/about">درباره بفروش</a></li>
                                    <li><a href="/features">امکانات</a></li>
                                    <li><a href="/pricing">تعرفه‌ها</a></li>
                                    <li><a href="/contact">اطلاعات تماس</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="_copy-right bg-gray-200 py-4 md:py-6">
        <div class="container max-w-7xl mx-auto px-4 2xl:px-0">
            <div class="_wrapper text-center">
                <p class="text-gray-400 text-xs md:text-sm text-center bg-gray-300/20 py-2.5 md:px-5 inline-block rounded-full inset-shadow-xs w-full md:w-auto">© تمامی حقوق ناشی از این وب سایت برای <span class="text-gray-500"><?php bloginfo('name'); ?></span> محفوظ است.</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<script>
    window.addEventListener("load", function() {
        document.body.classList.add("loaded");
    });
</script>
</body>

</html>