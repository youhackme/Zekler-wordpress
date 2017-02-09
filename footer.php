<footer class="footer footer-block">
    <div class="container-fluid text-center">
        <p class="text-muted">Copyright © <?php echo date('Y'); ?> Zekler. All Rights Reserved. </p>
        <ul class="list-inline">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Send us your favorite tips</a></li>
            <li><a href="#">Newletter</a></li>
            <li><a href="#">RSS</a></li>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>

<?php
if (is_front_page()) { ?>
    <script>
        $(function () {
            share.init();
            search.init();
        })
    </script>
    <?php
} else { ?>
    <script>
        $(function () {
            share.init({offset: 50});
            search.init();
        })
    </script>
    <?php
}
?>
</body>
</html>