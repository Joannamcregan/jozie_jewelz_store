<?php get_header('myspace');
$birth_date = '1991-04-11';
$current_date = date('Y-m-d');
$birth_date_obj = new DateTime($birth_date);
$current_date_obj = new DateTime($current_date);
$diff = $current_date_obj->diff($birth_date_obj);
$age_years = $diff->y;

?><main id="myspace-main">
    <div id="myspace-section-1">
        <div id="basic-info">
            <h1>Jozie Jewelz</h1>
            <img src="<?php echo get_theme_file_uri('/img/myspace_2026.jpg'); ?>" alt="a kind-of young white woman with wavy reddish brown hair and glasses smiles while looking up at the camera" />
            <p>pronouns: she/her</p>
            <p><?php echo 'age: ' . $age_years; ?></p>
            <p>location: Northeast Ohio</p>
        </div>
        <div aria-label="YouTube Video" role="region">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/D1nh3bGrgHM?si=fS-lTLULtDtf3UtR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen role="region"></iframe>
        </div>
        <div id="contact-info">
            <h2>Contact</h2>
            <p>TikTok: @authorjoziejewelz</p>
            <p>UpScroll: @joziejewelz</p>
            <p>Instagram: @joziejewelz</p>
            <a href="https://www.glitter-graphics.com" target="_blank" class="glitter-graphic"><img src="http://dl9.glitter-graphics.net/pub/687/687779doa3stdf14.gif" width=101 height=90 border=0></a>
        </div>
        <img src="<?php echo get_theme_file_uri('/img/sparkle_jozie.gif'); ?>" />
    </div>
    <div id="newsletter-section">
        <script async src="https://eocampaign1.com/form/a7bb2ba6-7f63-11f0-83c1-b7699d22af41.js" data-form="a7bb2ba6-7f63-11f0-83c1-b7699d22af41"></script>
    </div>
    <div id="myspace-section-1">
        <div id="top-friends">
            <h2>Jozie's Top 16</h2>
            <img src=""
        </div>
    </div>
</main>