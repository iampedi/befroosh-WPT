<?php get_template_part('parts/header'); ?>

<main class="_page-404 py-40 md:py-48">
    <div class="container max-w-7xl mx-auto px-4 md:px-0">
        <div class="_page-wrapper flex items-center flex-col">
            <h1 class="text-7xl font-medium text-primary mb-4"><i class="ph-duotone ph-warning"></i></h1>
            <h2 class="text-lg md:text-xl font-semibold text-gray-700 mb-2 text-center">
                صفحه‌ای که به دنبال آن هستید وجود ندارد!
            </h2>
            <p class="text-gray-500 mb-6">
                ممکن است صفحه‌ مورد نظر حذف شده باشد.
            </p>
            <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                صفحه اول
            </a>
        </div>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>