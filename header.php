<! DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <meta name = "viewport" content = "width=device-width", initial-scale=1>
    <!-- <meta property="og:image" content="<?php echo get_theme_file_uri('/images/screenshot.png'); ?>" />
    <meta name="twitter:image" content="<?php echo get_theme_file_uri('/images/screenshot.png'); ?>"> -->
    <title>
        <?php if (is_front_page()) {
            echo 'Home | ';
            bloginfo('name');
        }
        else {
            wp_title(' | ', true, 'right');
            bloginfo('name');
        }
    ?></title>
    <script>
        (function () {
            let chosenTheme = localStorage.getItem('theme');
            if (!(chosenTheme)){
                let prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                chosenTheme = prefersDark ? 'dark' : 'light';
            }
            if (chosenTheme){
                document.documentElement.setAttribute('data-theme', chosenTheme);
            }
        })();
    </script>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div id="main-heading-link-section">
        <a href="<?php echo esc_url(site_url()) ?>" id="main-heading-home-link">Jozie Jewelz Writes</a>
        <div id="main-heading-writing-links">
            <a id="novels-link"  href="<?php echo esc_url(site_url() . '#novels-section'); ?>">novels</a>
            <a id="stories-link"  href="<?php echo esc_url(site_url() . '#short-stories-section'); ?>">stories</a>
            <a id="zines-link">e-zines</a>
        </div>
    </div>
    <div tabindex="-1" id="menu-container">
        <p id="menu-link">menu</p>
        <div class="menu-link-overlay"></div>
        <div id="menu-nav" class="hidden">
            <p>close</p>
            <nav>
            <a href="<?php echo esc_url(site_url('/requiem-for-my-myspace') . '#about-me');?>">bio</a>
            <a href="<?php echo esc_url(site_url('/requiem-for-my-myspace') . '#contact-info');?>">connect</a>
            <a href="<?php echo esc_url(site_url('/blog')); ?>">blog</a>
        </nav>
        </div>
    </div>
</header>
<div id="menu-screen-overlay" class="hidden"></div>
</div>