<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
} ?>
<footer id="main-footer">
    <div class="footer-contacts">
        <address>
            <p>г. Сургут,<br>ул. Мелик-Карамова,<br>дом 25А, офис 3<br><br>Тел.: <a href="tel:+79129389777">+7(912)938-97-77</a></p>
        </address>
        <address>
            <p>г. Мегион,<br>ул. Александра Жагрина,<br>дом 4, строение 7<br><br>Тел.: <a href="tel:+79129389777">+7(912)938-97-77</a></p>
        </address>
    </div>
    <div class="footer-bottom-line">
        <p>АНО ДПО "ОПТИМУМ 86" 2006-<?php echo date("Y"); ?></p>
    </div>
</footer>
</div>
<script src="<?php get_theme_url(); ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.smartmenus.min.js"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.maskedinput.min.js"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.fancybox.min.js"></script>
<!-- input mask -->
<script>
    $(document).ready(function() {
        $("input[type='tel']").mask("+7 (999) 99-99-999");
    });
</script>
<!-- dropdown menu -->
<script>
    $(function() {
        $('#main-menu').smartmenus({
            collapsibleBehavior: 'toggle'
        });
    });
    $(".mobile-menu-button").click(function(){
        $("#main-nav").toggleClass("menu-opened");
    });
</script>
<!-- add horiz table scroll for mobile devices -->
<script>$("#main-content .content table").wrap("<div class='table-container'></div>");</script>
<!-- preloader -->
<script>
    $(window).on('load', function () {
        window.setTimeout(function () {
            $('.preloader').fadeOut().end().delay(400).fadeOut('slow');
        }, 1000);
    });
</script>

<?php get_footer(); ?>
</body>

</html>