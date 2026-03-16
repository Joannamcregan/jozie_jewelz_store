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
            <h2>Top 8 Favorites</h2>
            <div id="top-friends-containter">
                <img src="<?php echo get_theme_file_uri('/img/homegoing_top.jpg'); ?>" alt="in the cover for Homegoing by Yaa Gyasi, drawings of two young West African women's faces are centered on an orange background surrounded by drawings of ocean waves." />
                <img src="<?php echo get_theme_file_uri('/img/firekeepers_daughter_top.jpg'); ?>" alt="in the cover for FireKeepers Daughter by Angeline Boulley, drawings of two Anishinaabe girls merge with drawings of butterlfly wings, feathers, fire, and the sun." />
                <img src="<?php echo get_theme_file_uri('/img/white_oleander_top.jpg'); ?>" src="in the cover for White Oleander by Janet Fitch, hand-scrawled text appears over a photo of an Oleander flower." />
                <img src="<?php echo get_theme_file_uri('/img/black_iris_top.jpg'); ?>" src="in the cover for Black Iris by Leah Raeder, purple text appears around an image of a black and purple flower." />
                <img src="<?php echo get_theme_file_uri('/img/layla_top.jpg'); ?>" src="in the cover for Layla by Colleen Hoover, a window shows a shadowy figure standing in a living room." />
                <img src="<?php echo get_theme_file_uri('/img/wrong_family_top.jpg'); ?>" src="in the cover for The Wrong Family by Tarryn Fisher, a white picket fence stands in front of a teal green yard and sky."/>
                <img src="<?php echo get_theme_file_uri('/img/the_girls_in_queens_top.jpg'); ?>" src="the cover for The Girls in Queens by Christine Kandic Torres combines cut-outs in the shape of a woman's face, Queens New York, and railroad tracks." />
                <img src="<?php echo get_theme_file_uri('/img/too_soon_top.jpg'); ?>" src="in the cover for Too Soon by Betty Shameh, red text and a golden crown are laid over a green drawing of a young Palestinian woman with long hair, wearing a tanktop." />
            </div>
        </div>
        <div id="about-me">
            <h2>About Me</h2>
            <p>I'm a mom, a web dev, a customer service rep, a reader, and a socialist. In the past, I've been a dancer, a maladaptive daydreamer, and kind of a pick-me with some pretty awful taste in men. I'm looking forward to finding out how all these things will influence the work I create in the future.</p>
            <a href="https://www.glitter-graphics.com" target="_blank"><img src="http://dl3.glitter-graphics.net/pub/1541/1541613i15ydwm8jb.gif" width=80 height=83 border=0></a>
        </div>
    </div>
</main>
<?php get_footer('myspace');