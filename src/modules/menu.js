import u from '/umbrella.min.js';

class Menu{
    constructor(){
        this.menuContainer = u('#menu-container');
        this.menuNav = u('#menu-nav');
        this.menuLink = u('#menu-link');
        this.screenOverlay = u('#menu-screen-overlay');
        this.close = u('#menu-overlay-close')
        this.events();
    }
    events(e){
        this.menuLink.on('click', ()=>{
            this.screenOverlay.removeClass('hidden');
            this.screenOverlay.addClass('partialFadeIn');
            this.menuContainer.addClass('expand');
            this.menuLink.addClass('hidden');
            setTimeout(()=>{
                this.menuNav.removeClass('hidden');
                this.screenOverlay.removeClass('partialFadeIn');
            }, 2000);
        });
        this.close.on('click', ()=>{
            this.menuNav.addClass('hidden');
            this.menuContainer.removeClass('expand');
            this.menuContainer.addClass('contract');
            this.screenOverlay.addClass('partialFadeOut');
            setTimeout(()=>{
                this.menuLink.removeClass('hidden');
            }, 2000);
            setTimeout(()=>{
                this.menuContainer.removeClass('contract');
                this.screenOverlay.removeClass('partialFadeOut');
                this.screenOverlay.addClass('hidden');
            }, 2100);
        })
    }
}

export default Menu;