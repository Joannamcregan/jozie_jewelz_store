import u from '/umbrella.min.js';

class FrontPage{
    constructor(){
        this.selections = u('.selection');
        this.seeMores = u('.see-more');
        this.seeLesses = u('.see-less');
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
        let cookiesAccepted = false;
    }
    events(){
        this.rejectCookies.on('click', ()=>{
            this.cookieBanner.addClass('fade-closed');
                setTimeout(()=>{
                    this.cookieBanner.addClass('hidden');
                    this.cookieBanner.removeClass('fade-closed');
                }, 1000);
        })
        this.acceptCookies.on('click', ()=>{
            if (this.cookiesAccepted == false){
                this.cookiesAccepted = true;
                const newsletterScript = document.createElement('script');
                newsletterScript.src = 'https://eocampaign1.com/form/a7bb2ba6-7f63-11f0-83c1-b7699d22af41.js';
                newsletterScript.async = true;
                newsletterScript.setAttribute('data-form', 'a7bb2ba6-7f63-11f0-83c1-b7699d22af41');
                this.newsletterSection.append(newsletterScript);
                this.cookieBanner.addClass('fade-closed');
                setTimeout(()=>{
                    this.cookieBanner.addClass('hidden');
                    this.cookieBanner.removeClass('fade-closed');
                }, 1000);
            }
        })
        this.cookiesLearnMore.on('click', ()=>{
            this.cookiePolicy.addClass('fade-open');
            this.cookiePolicy.removeClass('hidden');
            setTimeout(()=>{
                this.cookiePolicy.removeClass('fade-open');
            }, 1000);
        })
        this.selections.on('click', (e)=>{
            const selected = u(e.target);
            this.selections.removeClass('selected-glasses');
            setTimeout((e)=>{
                selected.addClass('selected-glasses');
                this.body.removeClass('light dark sepia');
                this.footer.removeClass('light dark sepia');
                this.body.addClass(selected.data('mode'));
                this.footer.addClass(selected.data('mode'));
            }, 100)
        })
        // seeMores.on('click', (e)=>{
        //     u(e.target).parent('.description-text').find('.expanded-description').removeClass('hidden');
        //     u(e.target).parent('.description-text').find('.see-less').removeClass('hidden');
        //     u(e.target).addClass('hidden');
        // });
        // seeLesses.on('click', (e)=>{
        //     u(e.target).parent('.description-text').find('.expanded-description').addClass('hidden');
        //     u(e.target).parent('.description-text').find('.see-more').removeClass('hidden');
        //     u(e.target).addClass('hidden');
        // });
        // closeButtons.on('click', (e)=>{
        //     const parentDiv = u(e.target).parent('div').parent('div');
        //     parentDiv.addClass('fade-closed');
        //     setTimeout(()=>{
        //         parentDiv.addClass('hidden');
        //         parentDiv.removeClass('fade-closed');
        //     }, 1000)
        // })
        // privacyPolicyLink.on('click', (e)=>{
        //     privacyPolicy.addClass('fade-open');
        //     privacyPolicy.removeClass('hidden');
        //     setTimeout(()=>{
        //         privacyPolicy.removeClass('fade-open');
        //     }, 1000)
        // })
    }
}

export default FrontPage;