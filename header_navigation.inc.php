<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/sm-core-css.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/contactform.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/mobile.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/preloader.css">
    <?php get_header(); ?>
</head>
<body id="<?php get_page_slug(); ?>" >
    <div class="preloader">
        <div class="loader">Загрузка...</div>
    </div>
    <div class="wrapper">
        <header id="main-header">
            <address class="cont-inf">
                <a href="tel:+79129389777">+7 (912) 938-97-77</a>
                <br />
                <a href="mailto:a.b.9821472654@yandex.ru">a.b.9821472654@yandex.ru</a>
            </address>
            <div class="mobile-menu-button">☰</div>
            <img src="<?php get_theme_url(); ?>/img/logo.svg" alt="" class="main-logo">
            <img src="<?php get_theme_url(); ?>/img/rospa-tandt-banner.svg" alt="" class="banner">
        </header>
        <nav id="main-nav">
            <ul id="main-menu" class="sm clearfix">
                <?php get_i18n_navigation(return_page_slug(),0,99,I18N_SHOW_MENU, 'main-menu-rendering'); ?>
            </ul>
        </nav>