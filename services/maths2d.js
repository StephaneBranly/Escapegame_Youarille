function avoircoordonnees(event)
{
    var x = event.clientX;
    var y = event.clientY;
    document.getElementById("coord").innerHTML = 'Coordonnées souris : ' + x + ', ' + y ;
}

function distance(x1,y1,x2,y2)
{
    return Math.sqrt(Math.pow(y2 - y1,2) + Math.pow(x2 - x1,2));
}

function angle(x1,y1,x2,y2)
{
    norme=distance(x1,y1,x2,y2);
    opp=norme*(y2-y1);
    adj=norme*(x2-x1);
    return Math.atan2(opp,adj);
}