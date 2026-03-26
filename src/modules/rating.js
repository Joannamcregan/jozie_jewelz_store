import u from '/umbrella.min.js';

class Rating{
    constructor(){
        this.starBox = u('.rating-star-box')
        this.events();
    }
    events(e){
        this.starBox.on('click', (e)=>{
            let starNum = u(e.target).closest('div.rating-star-box').attr('id').replace('rating-star-box-', '');
            for (let i = 1; i <= starNum; i++){
                u('#rating-star-box-' + i).children('img.unfilled').each((el)=>{u(el).addClass('hidden')});
                u('#rating-star-box-' + i).children('img.filled').each((el)=>{u(el).removeClass('hidden')});
            }
            starNum++;
            for (let i = starNum ; i <= 5; i++){
                u('#rating-star-box-' + i).children('img.filled').each((el)=>{u(el).addClass('hidden'); console.log(u(el))});
                u('#rating-star-box-' + i).children('img.unfilled').each((el)=>{u(el).removeClass('hidden'); console.log(u(el))});
            }
        })
    }
}

export default Rating;