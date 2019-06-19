function avoircoordonnees(event)
{
    var x = event.clientX;
    var y = event.clientY;
    document.getElementById("coord").innerHTML = 'Coordonnées souris : ' + x + ', ' + y ;
}

function distance(coord1,coord2)
{
    return Math.sqrt(Math.pow(coord2[1] - coord1[1],2) + Math.pow(coord2[0] - coord1[0],2));
}

function angle(coord1,coord2)
{
    norme=distance(coord1,coord2);
    opp=norme*(coord2[1] - coord1[1]);
    adj=norme*(coord2[0] - coord1[0]);
    return Math.atan2(opp,adj);
}