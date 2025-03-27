<footer class="bg-gray-100 py-6">
    <div class="container max-w-7xl mx-auto">
        <div class="_copy-right text-center">
            <p class="text-gray-500 textarea-md">تمامی حقوق ناشی از این وب سایت برای <?php bloginfo('name'); ?> محفوظ است. <?php echo date('Y'); ?>&copy;</p>
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