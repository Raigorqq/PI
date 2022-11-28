var div=document.getElementById("d1");

function checkEvent(e){


	if(e.type=="keydown"){
		var style= getComputedStyle(div);
		var currentTop= style.top;
		var currentLeft= style.left;
		switch(e.key){
			case "a":
			  move(parseInt(currentTop), parseInt(currentLeft)-500);
			  break;
			case "w":
			  move(parseInt(currentTop)-500, parseInt(currentLeft));
			  break; 
			case "d":
			  move(parseInt(currentTop), parseInt(currentLeft)+500);
			  break;
			case "s":
			  move(parseInt(currentTop)+500, parseInt(currentLeft));
			  break; 
	  }
	}
}	
	
function move(top, left){
	div.style.top= top+"px";
    div.style.left= left+"px";

}

document.addEventListener("keydown",checkEvent);
