<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
include('header_navigation.inc.php'); 
?>
        <main id="main-content">
            <article class="content clearfix">
                <h1 class="page-title-header"><?php get_page_title(); ?></h1>
                <?php
                    if ($content == '') {
                        Get_Child_Pages_Links();
                    }
                    get_page_content();
                ?>
            </article>
        </main>
        <?php include('footer.inc.php'); ?>