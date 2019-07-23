var startTime = 0;
var start = 0;
var end = 0;
var diff = 0;
var timerID = 0;

var nbr_min=0;
var nbr_sec=0;
var nbr_msec=0

function chrono(){
	end = new Date();
	diff = end - start;
	diff = new Date(diff);
	var msec = diff.getMilliseconds();
	var sec = diff.getSeconds();
	var min = diff.getMinutes();
    var hr = diff.getHours()-1;
    min=nbr_min-min;
    sec=nbr_sec-sec;
    msec=nbr_msec-msec;
	if (min < 10){
		min = "0" + min;
	}
	if (sec < 10){
		sec = "0" + sec;
	}
	if(msec < 10){
		msec = "00" +msec;
	}
	else if(msec < 100){
		msec = "0" +msec;
    }
    
	document.getElementById("chronotime").innerHTML = hr + ":" + min + ":" + sec + ":" + msec;
	timerID = setTimeout("chrono()", 10);
}
function chronoStart(nbr_min_in,nbr_sec_in,nbr_msec_in){
    nbr_min=nbr_min_in;
    nbr_msec=nbr_msec_in;
    nbr_sec=nbr_sec_in;
	start = new Date();
	chrono();
}
function chronoContinue(){
	start = new Date()-diff;
	start = new Date(start);
	chrono();
}
function chronoReset(){
	document.getElementById("chronotime").value = "0:00:00:000";
	start = new Date()
}
function chronoStopReset(){
	document.getElementById("chronotime").value = "0:00:00:000";
}
function chronoStop(){
	clearTimeout(timerID);
}