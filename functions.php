<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}

function Get_Child_Pages_Links()
{
    $key = array_search(return_page_slug(), array_column(return_i18n_page_structure(), 'url'));
    $level = return_i18n_page_structure()[$key]["level"] + 1;
    echo "<ul class='child-pages-lnk'>";
    get_i18n_navigation(return_page_slug(), $level, $level, I18N_SHOW_MENU);
    echo "</ul>";
}
