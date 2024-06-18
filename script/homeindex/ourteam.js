let ourteamcards = document.getElementById('ourteamcards');
let ourteambackBtn = document.getElementById("otleft");
let ourteamnextBtn = document.getElementById("otright");



let ourteamnocts=parseFloat(getComputedStyle(document.body).getPropertyValue('--noofcardstoshow')); //This should be change from the variable in ourproduct.css

// for gap between each card
let otgapbetweencards=40;
ourteamcards.style.gap= otgapbetweencards +"px"


// for height and width of each card
let otcardWidth= 450;
let otcardheight = 450;
let ourteamcard=document.getElementsByClassName("ourteamcard")
for (let index = 0; index < ourteamcard.length; index++) {
    const element = ourteamcard[index];
    element.style.width= otcardWidth + 'px';
    element.style.height= otcardheight + 'px';
};

// for image in card
document.querySelectorAll('.ourteamwrap .ourteamcards img').forEach(img => {
    img.style.width=otcardWidth + 'px'
    img.style.height=otcardheight + 'px'
});



// this is to determine the width of cards container
/*logic for 3 card =  3 * width + (3-1) gap + 20px * 3 * 2 */
let otcardsWidth= (ourteamnocts * otcardWidth) + ((ourteamnocts - 1) * gapbetweencards);
ourteamcards.style.width=otcardsWidth+'px'
document.getElementById("ourteam").style.width= (otcardsWidth-20) + "px" // this is for cards cover


// this is width to scroll 
let otscrollwidth=otcardWidth + gapbetweencards



let otcardcount=(document.getElementsByClassName("ourteamcard").length)-ourteamnocts
let otcount=0;


// /*
if(ourteamnocts==1){
    // for card
    for (let index = 0; index < ourteamcard.length; index++) {
        const element = ourteamcard[index];
        element.style.width= 60 + 'vw';
        element.style.height= 60 + 'vw';
    };

    // card image
    document.querySelectorAll('.ourteamwrap .ourteamcards img').forEach(img => {
        img.style.width=60 + 'vw';
        img.style.height=60 + 'vw';
    });

    // cards container
    ourteamcards.style.width=60+ "vw"
    otscrollwidth=(window.innerWidth/100)*60 +gapbetweencards
        


}

ourteamnextBtn.addEventListener("click", ()=>{
    if(otcount==otcardcount){
        ourteamcards.style.scrollBehavior = 'smooth';
        ourteamcards.scrollLeft -= otscrollwidth*otcardcount;
        otcount=0;
    }
    else{
        ourteamcards.style.scrollBehavior = 'smooth';
        ourteamcards.scrollLeft += otscrollwidth;
        otcount++;
    }
})

ourteambackBtn.addEventListener("click", ()=>{
    if(otcount==0){
        ourteamcards.style.scrollBehavior = 'smooth';
        ourteamcards.scrollLeft += otscrollwidth*otcardcount;
        otcount=otcardcount;
    }
    else{
        ourteamcards.style.scrollBehavior = 'smooth';
        ourteamcards.scrollLeft -= otscrollwidth;
        otcount--;
    }
})  


