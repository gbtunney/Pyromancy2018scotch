<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <section id="branding" class="ghidden">
            <div id="site-title"><?php if (!is_singular()) {
                echo '<h1>';
            } ?><a href="<?php echo esc_url(home_url('/')); ?>"
                   title="<?php esc_attr_e(get_bloginfo('name'), 'blankslate'); ?>"
                   rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a><?php if (!is_singular()) {
                echo '</h1>';
            } ?></div>
            <div id="site-description"><?php bloginfo('description'); ?></div>
        </section>
        <nav id="menu" role="navigation">
            <a href="<?php echo esc_url(home_url('/')); ?>"
               title="<?php esc_attr_e(get_bloginfo('name'), 'blankslate'); ?>" rel="home">
                <img class="header-image"
                     src="<?php echo get_template_directory_uri(); ?>/images/pyromancy-web-header.png"/>
            </a>
            <div class="">

                <?php wp_nav_menu(array('theme_location' => 'header-menu','container'       => 'nav','menu_class'      => '',
                    'menu_id'         => 'gillian' )); ?>
            </div>
            <img class="header-rule" src="<?php echo get_template_directory_uri(); ?>/images/header-bar.png"/>
        </nav>
    </header>
    <div id="container">