<! DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <meta name = "viewport" content = "width=device-width", initial-scale=1>
    <!-- <meta property="og:image" content="<?php echo get_theme_file_uri('/images/screenshot.png'); ?>" />
    <meta name="twitter:image" content="<?php echo get_theme_file_uri('/images/screenshot.png'); ?>"> -->
    <title>JozieSpace</title>
    <?php wp_head(); ?>
</head>
<body class="myspace">
<header>
    <nav>
        <div class="header-top-section">
            <a href="<?php echo esc_url(site_url() . '#short-stories-section'); ?>">stories</a>
            <a href="<?php echo esc_url(site_url() . '#novels-section'); ?>">novels</a>
            <a>e-zines</a>
        </div>
        <div class="header-bottom-section">
            <a href="#about-me">bio</a>
            <a href="#contact-info">connect</a>
            <a href="<?php echo esc_url(site_url('/blog')); ?>">blog</a>
        </div>
    </nav>
</header>
</div>

