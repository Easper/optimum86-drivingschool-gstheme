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
<a href="#" class="scrollToTop">наверх</a>

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
    $(function() {
        var $mainMenuState = $('#main-menu-state');
        if ($mainMenuState.length) {
            // animate mobile menu
            $mainMenuState.change(function(e) {
                var $menu = $('#main-menu');
                if (this.checked) {
                    $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
                } else {
                    $menu.show().slideUp(250, function() { $menu.css('display', ''); });
                }
            });
            // hide mobile menu beforeunload
            $(window).on('beforeunload unload', function() {
                if ($mainMenuState[0].checked) {
                    $mainMenuState[0].click();
                }
            });
        }
    });
</script>
<!-- wrapper for styling the second-level header in the content area -->
<script>$("#main-content .content h2:not(.homepage-header)").wrapInner('<span />');</script>
<!-- add table wrapper for scroll and margin -->
<script>$("#main-content .content table").wrap("<div style='overflow: auto; margin: 30px 0;'></div>");</script>
<!-- preloader -->
<script>
    $(window).on('load', function () {
        window.setTimeout(function () {
            $('.preloader').delay(400).fadeOut('slow');
        }, 1000);
    });
</script>
<!-- scroll to top -->
<script>
    $(document).ready(function(){
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 1800) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
</script>

<?php get_footer(); ?>
</body>

</html>