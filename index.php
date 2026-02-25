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
            <div class="book-sticker-section">
                <div class="top-left-tape"></div>
                <div class="top-right-tape"></div>
                <div class="bottom-left-tape"></div>
                <div class="bottom-right-tape"></div>
                <div class="book-sticker" id="her-first-sticker">
                    <p>When the good girl meets the bad guy and neither is quite what the other expected.</p>
                    <p><a>read now</a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="novels-section" class="book-collection-section">
        <h2>Novels</h2>
    </div>
    <div id="mode-selector-wrapper" class="light">
        <div id="mode-selector">
            <img src="<?php echo get_theme_file_uri('/img/glasses_80.png'); ?>" alt="a simple illustration of glasses with black frames" class="selection selected-glasses" data-mode="light"/>
            <img src="<?php echo get_theme_file_uri('/img/sepia_glasses_80.png'); ?>" alt="a simple illustration of glasses with sepia lenses" class="selection" data-mode="sepia"/>
            <img src="<?php echo get_theme_file_uri('/img/dark_glasses_80.png'); ?>" alt="a simple illustration of sunglasses with dark brown frames" class="selection" data-mode="dark"/>
        </div>
    </div>
</main>