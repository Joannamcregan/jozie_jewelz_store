import u from '/umbrella.min.js';

class Rating{
    constructor(){
        this.starBox = u('.rating-star-box')
        this.events();
    }
    events(e){
        this.starBox.on('click', (e)=>{
            let starNum = u(e.target).closest('div.rating-star-box').attr('id').replace('rating-star-box-', '');
            for (let i = 1; i < starNum; i++){
                u('#rating-star-box-' + i).children('img.unfilled').each((el)=>{u(el).addClass('hidden')});
                u('#rating-star-box-' + i).children('img.filled').each((el)=>{u(el).removeClass('hidden')});
                u('a.star-' + i).attr('aria-checked', 'false');
            }
            u('#rating-star-box-' + starNum).children('img.unfilled').each((el)=>{u(el).addClass('hidden')});
            u('#rating-star-box-' + starNum).children('img.filled').each((el)=>{u(el).removeClass('hidden')});
            u('a.star-' + starNum).attr('aria-checked', 'true');
            document.getElementById('rating').value = starNum;
            let afterStarNum = parseInt(starNum) + 1;
            for (let i = afterStarNum ; i <= 5; i++){
                u('#rating-star-box-' + i).children('img.filled').each((el)=>{u(el).addClass('hidden')});
                u('#rating-star-box-' + i).children('img.unfilled').each((el)=>{u(el).removeClass('hidden')});
                u('a.star-' + i).attr('aria-checked', 'false');
            }
        })
    }
}

export default Rating;