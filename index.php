<?php get_header();

?><main>
    <div id="main-heading-section">
        <h1>Characters that are kinda fucked-up and completely unforgettable</h1>
    </div>
    <div id="short-stories-section" class="book-collection-section">
        <h2>Short Stories</h2>
        <div class="book-section">
            <div class="book-shelf-section">
                <img src="<?php echo get_theme_file_uri('/img/her_first_cover_200.jpg'); ?>" alt="In the cover for Her First, a short story by Jozie Jewelz, a blurred image of a young, white man in a t-shirt and baseball cap appears on the screen of a phone, which rests in the manicured hands of a young, white woman." class="book-cover" />
                <div class="shelf"></div>
            </div>
            <div class="book-flyer-section">
                <div class="book-flyer" id="her-first-flyer">
                    <p>When the good girl meets the bad guy and neither is quite what the other expected...</p>
                    <p><a>read now</a></p>
                </div>
                <div class="top-left-tape tape"></div>
                <div class="top-right-tape tape"></div>
                <div class="bottom-left-tape tape"></div>
                <div class="bottom-right-tape tape"></div>
            </div>
        </div>
    </div>
    <div id="novels-section" class="book-collection-section">
        <h2>Novels</h2>
        <div class="book-section">
            <div class="book-sticker-section">
                <div class="book-sticker" id="wtaak-sticker">
                    <p><em>I thought about how love was the curse of hustler, because how could I ever relate to someone who wasn't like me, but how could I ever trust someone who was?</em></p>
                    <p class="centered-text"><strong>coming soon!</storng></p>
                </div>
            </div>
            <div class="book-shelf-section">
                <img src="<?php echo get_theme_file_uri('img/wtaak_cover_180.jpg'); ?>" alt="In the cover for What Thieves and Artists Know by Jozie Jewelz, shadows and blue and purple lights drape over a curvy young woman wearing lingerie." class="book-cover" />
                <div class="shelf"></div>
            </div>
        </div>
    </div>
    <div id="mode-selector-wrapper" class="light">
        <div id="mode-selector">
            <img src="<?php echo get_theme_file_uri('/img/glasses_80.png'); ?>" alt="a simple illustration of glasses with black frames" class="selection selected-glasses" data-mode="light"/>
            <img src="<?php echo get_theme_file_uri('/img/sepia_glasses_80.png'); ?>" alt="a simple illustration of glasses with sepia lenses" class="selection" data-mode="sepia"/>
            <img src="<?php echo get_theme_file_uri('/img/dark_glasses_80.png'); ?>" alt="a simple illustration of sunglasses with dark brown frames" class="selection" data-mode="dark"/>
        </div>
    </div>
</main>
<div id="ceiling" aria-hidden="true">
    <div id="ceiling-light" aria-hidden="true"></div>
</div>
<?php get_footer(); ?>