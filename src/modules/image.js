import u from '/umbrella.min.js';

class Image{
    constructor(){
        this.galleryImageLink = u('.woocommerce-product-gallery__image a');
        this.events();
    }
    events(e){
        this.galleryImageLink.on('click', (e)=>{
            console.log('clicked an image');
            e.preventDefault();
        })
    }
}

export default Image;