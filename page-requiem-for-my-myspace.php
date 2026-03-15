<?php get_header('myspace');
$birth_date = '1991-04-11';
$current_date = date('Y-m-d');
$birth_date_obj = new DateTime($birth_date);
$current_date_obj = new DateTime($current_date);
$diff = $current_date_obj->diff($birth_date_obj);
$age_years = $diff->y;

?><main id="myspace-main">
    <div id="basic-info">
        <h1>Jozie Jewelz</h1>
        <img src="<?php echo get_theme_file_uri('/img/myspace_2026.jpg'); ?>" alt="a kind-of young white woman with wavy reddish brown hair and glasses smiles while looking up at the camera" />
        <p>pronouns: <span class="handwritten-text">she/her</span></p>
        <p>age: <span class="handwritten-text"><?php echo $age_years; ?></span></p>
        <p>location: <span class="handwritten-text">Northeast Ohio</span></p>
    </div>
    <div id="myspace-section-0">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/D1nh3bGrgHM?si=fS-lTLULtDtf3UtR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen role="application" aria-label="YouTube Video"></iframe>
        <div id="contact-info">
            <h2>Contact</h2>
            <p>TikTok: @authorjoziejewelz</p>
            <p>UpScroll: @joziejewelz</p>
            <p>Instagram: @joziejewelz</p>
            <a href="https://www.glitter-graphics.com" target="_blank" class="glitter-graphic"><img src="http://dl9.glitter-graphics.net/pub/687/687779doa3stdf14.gif" width=101 height=90 border=0></a>
        </div>
    </div>
    <div id="newsletter-section">
        <script async src="https://eocampaign1.com/form/a7bb2ba6-7f63-11f0-83c1-b7699d22af41.js" data-form="a7bb2ba6-7f63-11f0-83c1-b7699d22af41"></script>
    </div>
    <a href="https://www.glitterfy.com/" target="_blank" class="glitter-text" id="glitter-jozie-jewelz-writes"><img src="https://img88.glitterfy.com/26072/glitterfy6070904T3971.gif" alt="glittery blue text spells out Jozie Jewelz Writes" border=0 /></a><br />
    <div id="myspace-section-1">
        <div id="top-friends">
            <h2>Jozie's Top 8</h2>
            <div id="top-friends-containter">
                <img src="<?php echo get_theme_file_uri('/img/homegoing_top.jpg'); ?>" />
                <img src="<?php echo get_theme_file_uri('/img/firekeepers_daughter_top.jpg'); ?>" />
                <img src="<?php echo get_theme_file_uri('/img/white_oleander_top.jpg'); ?>" />
                <img src="<?php echo get_theme_file_uri('/img/black_iris_top.jpg'); ?>" />
                <img src="<?php echo get_theme_file_uri('/img/layla_top.jpg'); ?>" />
                <img src="<?php echo get_theme_file_uri('/img/wrong_family_top.jpg'); ?>" />
                <img src="<?php echo get_theme_file_uri('/img/the_girls_in_queens_top.jpg'); ?>" />
                <img src="<?php echo get_theme_file_uri('/img/too_soon_top.jpg'); ?>" />
            </div>
        </div>
        <div id="about-me">
            <p></p>
        </div>
    </div>
</main>