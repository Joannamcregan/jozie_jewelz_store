import u from '/umbrella.min.js';

class FrontPage{
    constructor(){
        this.selections = u('.selection');
        this.body = u('body');
        this.footer = u('footer');
        this.events();
    }
    events(){
        this.selections.on('click', (e)=>{
            const selected = u(e.target);
            setTimeout((e)=>{
                document.documentElement.setAttribute('data-theme', selected.data('mode'));
                this.footer.removeClass('light dark sepia');
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