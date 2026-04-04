import u from '/umbrella.min.js';

class Menu{
    constructor(){
        this.mobileMenu = u('#mobile-menu');
        this.mobileMenuLink = u('#mobile-menu-link');
        this.events();
    }
    events(e){
        this.mobileMenuLink.on('click', (e)=>{
            console.log('clicked')});
        }
}

export default Menu;