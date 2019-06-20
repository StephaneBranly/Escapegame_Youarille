var Lscreen=document.body.clientWidth;
var Hscreen=document.body.clientHeight;
function avoircoordonnees(event)
{
    var x = event.clientX;
    var y = event.clientY;
    posx_rel=x/Lscreen;
    posy_rel=y/Hscreen;
    document.getElementById("coord").innerHTML = 'mouse:' + x + ' et ' + y + ' ;<br/> rel:' + posx_rel + ' et ' + posy_rel + ' ;<br/> ecr ' + Lscreen +' et '+Hscreen;
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

function in_hit_box(event,tableau_coord)
{
    var x = event.clientX;
    var y = event.clientY;
    posx_rel=x/Lscreen;
    posy_rel=y/Hscreen;
    for (var i = 0; i < tableau_coord.length; i++) 
    {
        tableau_coord_raw=tableau_coord[i];
        if(posx_rel>=tableau_coord_raw[0] && posx_rel<=tableau_coord_raw[2] && posy_rel>=tableau_coord_raw[1] && posy_rel<=tableau_coord_raw[3]){
            return i;
        }
        else{
        }
    }
    return -1;
}