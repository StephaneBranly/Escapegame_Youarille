var status_clic = false;
var coord_init=[0,0];
var coord_act=[0,0];
var coord_middle=[get_middle_pos('serrure0'),get_middle_pos('serrure1'),get_middle_pos('serrure2'),get_middle_pos('serrure3')];
var angles_serrures=[0,0,0,0]

var son_tic = new Audio('../ressources/audios/Tic_serrure.mp3');


function tourner_serrure(event,ref)
{
    name_serrure="serrure"+ref;
    document.onmousedown = function(){
        coord_init=[event.clientX,event.clientY];
        angle_initial=angle(coord_middle[ref],coord_init) - (angles_serrures[ref]*Math.PI/180);
        status_clic = true;
        
    }
   
    if(status_clic == true){
        coord_act=[event.clientX,event.clientY];
        
        distance_a=distance(coord_init,coord_act);
        
        angle_actuel=angle(coord_middle[ref],coord_act);
        angle_diff=((angle_actuel-angle_initial)*180/Math.PI);
       
        document.getElementById(name_serrure).style.transform = 'rotate('+angle_diff+'deg)';
        mettre_a_jour_angle(name_serrure,ref);
        son_tic.play();
    }
    document.onmouseup = function(){
        status_clic = false;
    }
}

function mettre_a_jour_angle(name_serrure,ref)
{
    var el = document.getElementById(name_serrure);
    var st = window.getComputedStyle(el, null);
    var tr = st.getPropertyValue("-webkit-transform") ||
            st.getPropertyValue("-moz-transform") ||
            st.getPropertyValue("-ms-transform") ||
            st.getPropertyValue("-o-transform") ||
            st.getPropertyValue("transform") ||
            "FAIL";

    var values = tr.split('(')[1].split(')')[0].split(',');
    var a = values[0];
    var b = values[1];
    var c = values[2];
    var d = values[3];

    var scale = Math.sqrt(a*a + b*b);

    var sin = b/scale;

    var angle_det = Math.round(Math.atan2(b, a) * (180/Math.PI));
    name_angle="angle"+ref;

    document.getElementById(name_angle).value = angle_det;
    angles_serrures[ref]=angle_det;
}