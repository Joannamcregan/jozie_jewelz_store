<?php get_header();

?><main>
    <div id="short-stories-section" class="book-collection-section book-collection--left">
        <h1>Short Stories</h1>
        <div class="book-section">
            <div class="book-shelf-section">
                <img src="<?php echo get_theme_file_uri('/img/her_first_cover_200.jpg'); ?>" alt="In the cover for Her First, a short story by Jozie Jewelz, a blurred image of a young, white man in a t-shirt and baseball cap appears on the screen of a phone, which rests in the manicured hands of a young, white woman." class="book-cover" />
                <div class="shelf"></div>
            </div>
            <div class="book-flyer-section">
                <div class="book-flyer" id="her-first-flyer">
                    <p>In a time when terrible things are being done to innocent people, a good girl meets a bad guy and neither is quite what the other expected...</p>
                </div>
                <div class="top-left-tape tape"></div>
                <div class="top-right-tape tape"></div>
                <div class="bottom-left-tape tape"></div>
                <div class="bottom-right-tape tape"></div>
            </div>
        </div>
        <div class="book-section">
            <div class="book-flyer-section">
                <div class="book-flyer" id="behind-your-eyes-flyer">
                    <p>A young woman and her boyfriend enjoy each other's company in an abandoned apartment building the day before a deadly storm is set to hit.</p>
                </div>
                <div class="top-left-tape tape"></div>
                <div class="top-right-tape tape"></div>
                <div class="bottom-left-tape tape"></div>
                <div class="bottom-right-tape tape"></div>
            </div>
            <div class="book-shelf-section">
                <img src="<?php echo get_theme_file_uri('/img/behind_your_eyes_cover_200.jpg'); ?>" alt="In the cover for Behind Your Eyes, a short story by Jozie Jewelz, a silver locket hangs on a silver chain." class="book-cover" />
                <div class="shelf"></div>
            </div>
        </div>
    </div>
    <div id="novels-section" class="book-collection-section book-collection--right">
        <h1>Novels</h1>
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