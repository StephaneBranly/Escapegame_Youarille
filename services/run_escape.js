var yo_audio = new Audio('../ressources/audios/yo.mp3');
var badge_perdu_audio = new Audio('../ressources/audios/badge_perdu.mp3'); 
var ramasser_objet_audio = new Audio('../ressources/audios/ramasser_objet.mp3'); 

var param_hb_dim_bg = [1600,900];

var tableau_hitbox = [
    [1151,415,1297,843],
    [962,688,1107,791]
    ];

switch(page){
    case 7:
        if(badge==0)
        {
            yo_audio.play();
        }
        break;
    default:
        break;
}

function click_intro(id_hitbox)
{
    if(active_popup==false)
    {
        switch(id_hitbox){
            case 0:
                if(page==7)
                {
                    badge_perdu_audio.play();
                }
                break;
            case 1:
                if(page==9 && badge==0)
                {
                    open_popup('popup_badge');
                    add_item('badge');
                    document.getElementById('badge_9').style.visibility='hidden';
                    ramasser_objet_audio.play();
                    document.getElementById('left').setAttribute( "onClick", "document.location.href=\"run_escape.php?page=10&badge=1\";");
                    document.getElementById('down').setAttribute( "onClick", "document.location.href=\"run_escape.php?page=6&badge=1\";");
                    badge=1;
                }  
                break;
            default:
                break;
        }
    }
}

var active_item='none';
function select_item(name_item)
{
    if(name_item==active_item)
    {
        document.getElementById(active_item).className = 'no_selected';
        active_item='none'
    }
    else 
    {
        if(active_item!='none')
        {
            document.getElementById(active_item).className = 'no_selected';
        }
        active_item=name_item;
        document.getElementById(active_item).className =  'selected';
    }
}