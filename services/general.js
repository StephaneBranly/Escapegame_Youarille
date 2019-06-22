var raccrochage = new Audio('../ressources/audios/raccrochage_tel.mp3');
var appel_tel = new Audio('../ressources/audios/appel_tel.mp3');
var ouverture_lettre = new Audio('../ressources/audios/ouverture_lettre.mp3');
var fermeture_lettre = new Audio('../ressources/audios/fermeture_lettre.mp3');

var active_popup=false;

function close_popup(name_popup)
{
    document.getElementById(name_popup).style.visibility='hidden';
    setTimeout(function() { active_popup=false; }, 500);
    switch(name_popup){
        case 'popup_tel':
            appel_tel.pause();
            appel_tel.currentTime = 0;
            raccrochage.play();
            break;
        case 'popup_lettre':
            fermeture_lettre.play();
            break;
        default:
            break;
    }
        
}
function open_popup(name_popup)
{
    document.getElementById(name_popup).style.visibility='visible';
    setTimeout(function() { active_popup=true; }, 500);
    switch(name_popup){
        case 'popup_tel':
            appel_tel.play();
            break;
        case 'popup_lettre':
            ouverture_lettre.play();
            break;
        default:
            break;
    }
}
