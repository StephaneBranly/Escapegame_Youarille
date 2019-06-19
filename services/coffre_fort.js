var status_clic = false;
var x_initial = 0;
var y_initial = 0;
var x_actuel = 0;
var y_actuel = 0;
function tourner_serrure(event)
{
    document.onmousedown = function(){
        x_initial = event.clientX;
        y_initial = event.clientY;
        document.getElementById("coord_clic").innerHTML = 'Coordonnées clic souris : ' + x_initial + ', ' + y_initial ;
        document.getElementById("status").innerHTML = 'Mouse down' ;
        status_clic = true;
    }
    if(status_clic == true){
        x_actuel = event.clientX;
        y_actuel = event.clientY;

        document.getElementById("coord_clic_maintenu").innerHTML = 'Coordonnées clic maintenu souris : ' + x_actuel + ', ' + y_actuel ;
        distance_a=distance(x_initial,y_initial,x_actuel,y_actuel);
        document.getElementById("distance").innerHTML = distance_a;

        angle_initial=angle(798,164,x_initial,y_initial);
        angle_actuel=angle(798,164,x_actuel,y_actuel);
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