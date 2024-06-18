// window.addEventListener('resize', function () { 
//     "use strict";
//     window.location.reload(); 
// });


function sidenavbar(){
    let hamburger=document.getElementById("hamburgermenu")
    let logo=document.getElementById("logofirst")
    let sidenavbar=document.getElementById("sidenav")
    let blur=document.querySelector(".bluraftersidenav")
    let close=document.getElementById("closesidenav")
    let socials=document.getElementById("socials")
    hamburger.onclick=()=>{
        if(sidenavbar.style.left!="0px"){
            opensidenav()
        }
        else{
            closesidenav()
        }
        }
    close.onclick=()=>{
        closesidenav()
        }
    blur.onclick=()=>{
        closesidenav()
    }
    document.body.onscroll=()=>{
        closesidenav()

    }
    
        
        function opensidenav(){
            logo.style.visibility="hidden"
            sidenavbar.style.left="0px";
            blur.style.display="flex"
        }
        function closesidenav(){
        logo.style.visibility="visible"
        sidenavbar.style.left="-200px";
        blur.style.display="none"

        
        
        
    }
}


sidenavbar()


