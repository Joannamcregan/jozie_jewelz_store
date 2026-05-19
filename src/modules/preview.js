import u from '/umbrella.min.js';

class Preview{
    constructor(){
        this.previewOverlay = u('#single-product--preview-overlay');
        this.closePreview = u('#preview-overlay--close');
        this.openPreview = u('p.sample-link');
        this.events();
    }
    events(e){
        this.openPreview.on('click', ()=>{
            console.log('called open');
            this.previewOverlay.addClass('fadeIn');
            setTimeout(()=>{
                this.previewOverlay.removeClass('hidden');
            }, 100);
            setTimeout(()=>{
                this.previewOverlay.removeClass('fadeIn');
            }, 1100);
        })
        this.closePreview.on('click', ()=>{
            console.log('called close');
            this.previewOverlay.addClass('fadeOut');
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