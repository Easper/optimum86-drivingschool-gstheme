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
        <p>АНО ДПО "ОПТИМУМ 86" 2020</p>
    </div>
</footer>
</div>
<!-- input mask -->
<script>
    $(document).ready(function() {
        $("input[type='tel']").mask("+7 (999) 99-99-999");
    });
</script>
<!-- dropdown menu -->
<script>
    $(".mobile-menu-button").click(function(){
        $("#main-nav").toggleClass("menu-opened");
    });
    $("#main-nav ul .open > a").click(function(event) {
        event.preventDefault();
    });
    $("#main-nav > ul > .open").hover(function(){
        $(this).children("ul").css('display', 'block');
    }, function(){
        $(this).find("ul").css('display', 'none');
    });
    // for dropdown menus that can differentiate between a user trying hover over a dropdown item vs trying to navigate into a submenu's contents
    $("#main-nav > ul > .open > ul").menuAim({
        activate: activateSubmenu,
        deactivate: deactivateSubmenu
    });
    function activateSubmenu(row) {
        $(row).children('ul').css('display', 'block');
    };
    function deactivateSubmenu(row) {
        $(row).children('ul').css('display', 'none');
    };
</script>
<!-- add horiz table scroll for mobile devices -->
<script>$("#main-content .content table").wrap("<div class='table-container'></div>");</script>

<?php get_footer(); ?>
</body>

</html>