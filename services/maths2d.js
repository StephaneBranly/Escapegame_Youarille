var Lscreen=window.innerWidth;
var Hscreen=window.innerHeight;
maj_LHscreen_time = setInterval("maj_LHscreen();", 1000);


function avoircoordonnees(event)
{
    var x = event.clientX;
    var y = event.clientY;
    posx_rel=x/Lscreen;
    posy_rel=y/Hscreen;
    document.getElementById("coord").innerHTML = 'mouse:' + x + ' et ' + y + ' ;<br/> rel:' + posx_rel + ' et ' + posy_rel + ' ;<br/> ecr ' + Lscreen +' et '+Hscreen;
}
function maj_LHscreen()
{
    Lscreen=window.innerWidth;
    Hscreen=window.innerHeight;
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

function in_hit_box(event,tableau_coord,param_hb_dim_bg,show)
{
    if(show==true)
    {
        show_hit_box(event,tableau_coord,param_hb_dim_bg);
    }
    var x = event.clientX;
    var y = event.clientY;
    posx_rel = x*param_hb_dim_bg[0]/Lscreen;
    posy_rel = (param_hb_dim_bg[1]*((((param_hb_dim_bg[1]*Lscreen/param_hb_dim_bg[0])-Hscreen)/2)+y)/(param_hb_dim_bg[1]*Lscreen/param_hb_dim_bg[0]));
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

function show_hit_box(event,tableau_coord,param_hb_dim_bg)
{
    document.getElementById("hitbox").innerHTML = "";
    for (var i = 0; i < tableau_coord.length; i++) 
    {
        tableau_coord_raw=tableau_coord[i];

        absolute_left=tableau_coord_raw[0]*Lscreen/param_hb_dim_bg[0];
        coeffecient=param_hb_dim_bg[1]*Lscreen/param_hb_dim_bg[0];
        absolute_top=(tableau_coord_raw[1]*coeffecient)/param_hb_dim_bg[1] - (coeffecient-Hscreen)/2;
        
        reel_width=tableau_coord_raw[2]*Lscreen/param_hb_dim_bg[0]-absolute_left;
        reel_height=(tableau_coord_raw[3]*coeffecient)/param_hb_dim_bg[1] - (coeffecient-Hscreen)/2-absolute_top;
        document.getElementById("hitbox").insertAdjacentHTML('beforeend', "<p id='hitbox"+i+"' class='une_hitbox' style='top: "+absolute_top+"px; left: "+absolute_left+"px; width: "+reel_width+"px; height: "+reel_height+"px;'>"+i+"</p>");
    }
    return 1;
}
