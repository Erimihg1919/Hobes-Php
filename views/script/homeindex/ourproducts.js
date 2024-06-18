let scrollContainer = document.getElementById('cards');
let backBtn = document.getElementById("left");
let nextBtn = document.getElementById("right");



let nocts=parseFloat(getComputedStyle(document.body).getPropertyValue('--noofcardstoshow')); //This should be change from the variable in ourproduct.css

// for gap between each card
let gapbetweencards=40;
scrollContainer.style.gap= gapbetweencards +"px"


// for height and width of each card
let cardWidth= 300;
let cardheight = 500;
let card=document.getElementsByClassName("card")
for (let index = 0; index < card.length; index++) {
    const element = card[index];
    element.style.width= cardWidth + 'px';
    element.style.height= cardheight + 'px';
};

// for image in card
document.querySelectorAll('.scrollcontainerwrap .cards img').forEach(img => {
    img.style.width=cardWidth + 'px'
    img.style.height=cardheight + 'px'
});



// this is to determine the width of cards container
/*logic for 3 card =  3 * width + (3-1) gap + 20px * 3 * 2 */
let cardsWidth= (nocts * cardWidth) + ((nocts - 1) * gapbetweencards);
scrollContainer.style.width=cardsWidth+'px'
document.getElementById("scrollcontainer").style.width= (cardsWidth-20) + "px" // this is for cards cover


// this is width to scroll 
let scrollwidth=cardWidth + gapbetweencards



let cardcount=(document.getElementsByClassName("card").length)-nocts
let count=0;


// /*
if(nocts==1){

    // for card
    for (let index = 0; index < card.length; index++) {
        const element = card[index];
        element.style.width= 75 + 'vw';
        element.style.height= 70 + 'vh';
    };

    // card image
    document.querySelectorAll('.scrollcontainerwrap .cards img').forEach(img => {
        img.style.width=75 + 'vw';
        img.style.height=70 + 'vh';
    });

    // cards container
    scrollContainer.style.width=75+ "vw"
    scrollwidth=(window.innerWidth/100)*75 +gapbetweencards
        


}

// */





// for autoscroll
/*
setInterval(() => {
        if(count==cardcount){
            scrollContainer.style.scrollBehavior = 'smooth';
            scrollContainer.scrollLeft -= 340*cardcount;
            count=0;
        }
        else{
            scrollContainer.style.scrollBehavior = 'smooth';
            scrollContainer.scrollLeft += 340;
            count++;
        }
}, 3000);

*/


// wheel 
/*
scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    
    // console.log(evt.deltaY*)
    // scrollContainer.style.scrollBehavior = 'smooth';
    // scrollContainer.scrollLeft += evt.deltaY*;
    
    if(evt.deltaY>0){
        if(count==cardcount){
            scrollContainer.style.scrollBehavior = 'smooth';
            scrollContainer.scrollLeft -= scrollwidth*cardcount;
            count=0;
        }
        else{
            scrollContainer.style.scrollBehavior = 'smooth';
            scrollContainer.scrollLeft += scrollwidth;
            count++;
        }
    }
    else{
        if(count==0){
            scrollContainer.style.scrollBehavior = 'smooth';
            scrollContainer.scrollLeft += scrollwidth*cardcount;
            count=cardcount;
        }
        else{
            scrollContainer.style.scrollBehavior = 'smooth';
            scrollContainer.scrollLeft -= scrollwidth;
            count--;
        }
    }
})

*/
nextBtn.addEventListener("click", ()=>{
    if(count==cardcount){
        scrollContainer.style.scrollBehavior = 'smooth';
        scrollContainer.scrollLeft -= scrollwidth*cardcount;
        count=0;
    }
    else{
        scrollContainer.style.scrollBehavior = 'smooth';
        scrollContainer.scrollLeft += scrollwidth;
        count++;
    }
})

backBtn.addEventListener("click", ()=>{
    if(count==0){
        scrollContainer.style.scrollBehavior = 'smooth';
        scrollContainer.scrollLeft += scrollwidth*cardcount;
        count=cardcount;
    }
    else{
        scrollContainer.style.scrollBehavior = 'smooth';
        scrollContainer.scrollLeft -= scrollwidth;
        count--;
    }
})  


