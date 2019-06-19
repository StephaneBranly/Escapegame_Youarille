var status_clic = false;
var coord_init=[0,0];
var coord_act=[0,0];
var coord_middle=[get_middle_pos('serrure0'),get_middle_pos('serrure1'),get_middle_pos('serrure2'),get_middle_pos('serrure3')];
alert(coord_middle[0]);

function tourner_serrure(event,ref)
{
    name_serrure="serrure"+ref;
    document.onmousedown = function(){
        coord_init=[event.clientX,event.clientY];
        //document.getElementById("coord_clic").innerHTML = 'Coordonnées clic souris : ' + coord_init ;
        //document.getElementById("status").innerHTML = 'Mouse down' ;
        status_clic = true;
    }
    if(status_clic == true){
        coord_act=[event.clientX,event.clientY];
        
        //document.getElementById("coord_clic_maintenu").innerHTML = 'Coordonnées clic maintenu souris : ' + coord_act ;
        distance_a=distance(coord_init,coord_act);
        //document.getElementById("distance").innerHTML = distance_a;
        angle_initial=angle(coord_middle[ref],coord_init);
        angle_actuel=angle(coord_middle[ref],coord_act);
        //document.getElementById("angleini").innerHTML = angle_initial;
        //document.getElementById("angleact").innerHTML = angle_actuel;
        angle_diff=(angle_actuel-angle_initial)*180/Math.PI;
       
        document.getElementById(name_serrure).style.transform = 'rotate('+angle_diff+'deg)';;
    }
    document.onmouseup = function(){
        //document.getElementById("status").innerHTML = 'Mouse up' ;
        status_clic = false;
    }
}