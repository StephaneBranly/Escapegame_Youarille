var status_clic = false;
var coord_init=[0,0];
var coord_act=[0,0];
var bodyRect = document.body.getBoundingClientRect(),
        elemRect = document.getElementById('serrure1').getBoundingClientRect(),
        offset   = [elemRect.left - bodyRect.left,elemRect.top - bodyRect.top];
alert(bodyRect);

function tourner_serrure(event)
{
    document.onmousedown = function(){
        coord_init=[event.clientX,event.clientY];
        document.getElementById("coord_clic").innerHTML = 'Coordonnées clic souris : ' + coord_init ;
        document.getElementById("status").innerHTML = 'Mouse down' ;
        status_clic = true;
    }
    if(status_clic == true){
        coord_act=[event.clientX,event.clientY];
        
        document.getElementById("coord_clic_maintenu").innerHTML = 'Coordonnées clic maintenu souris : ' + coord_act ;
        distance_a=distance(coord_init,coord_act);
        document.getElementById("distance").innerHTML = distance_a;
        angle_initial=angle([0,0],coord_init);
        angle_actuel=angle([0,0],coord_act);
        document.getElementById("angleini").innerHTML = angle_initial;
        document.getElementById("angleact").innerHTML = angle_actuel;
        angle_diff=(angle_actuel-angle_initial)*180/Math.PI;
        document.getElementById("serrure1").style.transform = 'rotate('+angle_diff+'deg)';;
    }
    document.onmouseup = function(){
        document.getElementById("status").innerHTML = 'Mouse up' ;
        status_clic = false;
    }
}