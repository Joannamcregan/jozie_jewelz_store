<! DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <meta name = "viewport" content = "width=device-width", initial-scale=1>
    <!-- <meta property="og:image" content="<?php echo get_theme_file_uri('/images/screenshot.png'); ?>" />
    <meta name="twitter:image" content="<?php echo get_theme_file_uri('/images/screenshot.png'); ?>"> -->
    <title><?php
            if (is_front_page()) {
                echo 'Home | ';
                bloginfo('name');
            }
            else {
                wp_title(' | ', true, 'right');
                bloginfo('name');
            }
        ?></title>
    <?php wp_head(); ?>
</head>
<body class="light">
<header>
    <a href="<?php echo esc_url(site_url()) ?>" id="home-link">Jozie Jewelz Writes</a>
    <span class="site-header__menu-trigger mobile" tabindex="-1" id="mobile-menu-link">menu</span>
    <nav class="desktop">
        <a>books</a>
        <a>bio</a>
        <a>blog</a>
        <a>socials</a>
        <a>newsletter</a>
    </nav>
</header>
</div>

