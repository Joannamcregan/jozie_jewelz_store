import u from '/umbrella.min.js';

class Preview{
    constructor(){
        this.previewOverlay = u('#single-product--preview-overlay');
        this.closePreview = u('#preview-overlay--close');
        this.openPreview = u('p.sample-link');
        this.body = u('body');
        this.events();
    }
    events(e){
        this.openPreview.on('click', ()=>{
            this.previewOverlay.addClass('fadeIn');
            this.body.addClass('no-scroll');
            setTimeout(()=>{
                this.previewOverlay.removeClass('hidden');
            }, 100);
            setTimeout(()=>{
                this.previewOverlay.removeClass('fadeIn');
            }, 1100);
        })
        this.closePreview.on('click', ()=>{
            this.previewOverlay.addClass('fadeOut');
            this.body.removeClass('no-scroll');
            setTimeout(()=>{
                this.previewOverlay.addClass('hidden');
            }, 1000);
            setTimeout(()=>{
                this.previewOverlay.removeClass('fadeOut');
            }, 1001);
        })
    }
}

export default Preview;