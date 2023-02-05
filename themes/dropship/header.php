<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('favicon.ico'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri('assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('assets/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('assets/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?php echo get_theme_file_uri('assets/favicon/site.webmanifest'); ?>">
    <link rel="mask-icon" href="<?php echo get_theme_file_uri('assets/favicon/safari-pinned-tab.svg'); ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <link rel="alternate" href="https://nuvalyk.lt/" hreflang="x-default" />

</head>
<body>
<header>
<div class="logo-col">
            <a href="<?php echo get_home_url(); ?>"><img id="site-logo" src="<?php the_field('logo_image', 'header-settings'); ?>"></a>
        </div>
        <div class="menu-col">
        <?php
				$defaults = array(
					'theme_location'  => 'header-menu',
					'container'       => '',
					'items_wrap'      => '<nav>%3$s</nav>'
				);
				wp_nav_menu( $defaults );
				?>
        </div>
        <div class="cart-col">
        <img id="cart" src="<?php the_field('cart_icon', 'header-settings'); ?>">
        </div>

</header>
<main>
