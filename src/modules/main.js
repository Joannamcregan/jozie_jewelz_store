import u from '/umbrella.min.js';

class FrontPage{
    constructor(){
        this.selections = u('.selection');
        this.body = u('body');
        this.footer = u('footer');
        this.closeButtons = u('.overlay-close-button');
        this.privacyPolicyLink = u('#privacy-policy-link');
        this.privacyPolicy = u('#privacy-policy');
        this.cookiePolicy = u('#cookie-policy');
        this.cookieBanner = u('#cookie-banner-container');
        this.cookiesLearnMore = u('.cookies--learn-more');
        this.rejectCookies = u('#reject-cookies');
        this.acceptCookies = u('#accept-cookies');
        this.newsletterSection = u('#newsletter-section');
        this.events();
        // this.initializeTheme();
    }
    events(){
        this.selections.on('click', (e)=>{
            const selected = u(e.target);
            this.selections.removeClass('selected-glasses');
            setTimeout((e)=>{
                selected.addClass('selected-glasses');
                this.body.removeClass('light dark sepia');
                this.footer.removeClass('light dark sepia');
                this.body.addClass(selected.data('mode'));
                this.footer.addClass(selected.data('mode'));
                localStorage.setItem('theme', selected.data('mode'));
            }, 100)
        })        
    }
    initializeTheme() {
        let chosenTheme = localStorage.getItem('theme');
        if (!(chosenTheme)){
            let prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            chosenTheme = prefersDark ? 'dark' : 'light';
        }
        if (chosenTheme){
            console.log('the theme is ' + chosenTheme);
            document.querySelector('[data-mode="' + chosenTheme + '"]').click();
        }
    }
}

export default FrontPage;