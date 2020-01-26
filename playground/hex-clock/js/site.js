jQuery(function($) {
    startTime();
});

function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
	
	var bgcolour = h+""+m+""+s;
	var invertedbgColour = invertHex(bgcolour);
		
	$('#clock').html("#"+h+""+m+""+s);
	
	$('body').css('background','#'+bgcolour);
	$('.clock__bg').css('background','#'+invertedbgColour);
	$('#clock').css('color','#'+bgcolour);
	$('.social').css('color','#'+invertedbgColour);
	
	var t = setTimeout(startTime, 500);
}

function checkTime(i) {
	if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
	return i;
}


/*
	Credit to Matt LaGrandeur
	http://www.mattlag.com/scripting/hexcolorinverter.php
*/
function invertHex(hexnum){
	String(hexnum);
	var splitnum = hexnum.split("");
	var resultnum = "";
	var simplenum = "FEDCBA9876".split("");
	var complexnum = new Array();
	complexnum.A = "5";
	complexnum.B = "4";
	complexnum.C = "3";
	complexnum.D = "2";
	complexnum.E = "1";
	complexnum.F = "0";

	for(i=0; i<6; i++){
		if(!isNaN(splitnum[i])) {
			resultnum += simplenum[splitnum[i]]; 
		} else if(complexnum[splitnum[i]]) {
			resultnum += complexnum[splitnum[i]]; 
		}
	}

	return resultnum;
}