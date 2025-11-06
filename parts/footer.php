<!-- <?php
      get_template_part('parts/bottom_icons');
      ?> -->

<footer>
  <div class="_copyright bg-slate-800/90 py-4">
    <div class="container mx-auto px-5 md:px-0">
      <div class="_wrapper text-center">
        <?php if (function_exists('pll__')) : ?>
          <p class="text-center text-xs font-light text-gray-200">
            <?php echo pll__('Footer Prefix'); ?>
            <a href="<?php echo home_url(); ?>" class=""><?php bloginfo('name'); ?></a>
            <?php echo pll__('Footer Suffix'); ?>
          </p>
        <?php endif; ?>
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