var text=document.getElementById("t1");


function checkEvent(e){

    if(e.type=="keydown"){
        text.classList.add('upper');
    }
}

document.addEventListener("keydown",checkEvent);