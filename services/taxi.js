//var son_tel = new Audio('../ressources/audios/son_telephone.mp3');
//repeat_tel = setInterval("son_tel.play();", 6000);
var poignee_portiere_audio = new Audio('../ressources/audios/poignee_portiere.mp3');
var loquet_audio = new Audio('../ressources/audios/loquet.mp3');
var masse_audio = new Audio('../ressources/audios/masse.mp3');
var bouteille_eau_audio = new Audio('../ressources/audios/avaler_eau.mp3');
var briquet_audio = new Audio('../ressources/audios/briquet.mp3');
var ouverture_lettre = new Audio('../ressources/audios/ouverture_lettre.mp3');
var tableau_hitbox = [
                        [49,598,342,787],
                        [821,304,1063,606],
                        [127,298,296,375],
                        [310,421,480,501],
                        [880,172,1183,237],
                        [493,196,550,255],
                        [0,4,474,240],
                        [877,19,1195,162]
                        ];

var param_hb_dim_bg = [1600,803];

var magazine=false;
var briquet=false;
var bouteille_eau=false;
var masse=false;
var active_item='none';

function click_intro(id_hitbox)
{
    if(active_popup==false)
    {
        switch(id_hitbox){
            case 0:
                if(magazine==false)
                {
                    open_popup('popup_portiere');
                    add_item('magazine');
                    ouverture_lettre.play();
                    magazine=true;
                }
                break;
            case 1:
                if(bouteille_eau==false)
                {
                    open_popup('popup_cache_voiture');  
                    add_item('bouteille_eau');
                    bouteille_eau_audio.play();
                    bouteille_eau=true;
                }
                break;
            case 2:
                poignee_portiere_audio.play();
                break;
            case 3:
                if(briquet==false)
                {
                    open_popup('popup_repose_bras');
                    add_item('briquet');
                    briquet_audio.play();
                    briquet=true;
                }
                break;
            case 4:
                if(masse==false)
                {
                    open_popup('popup_coffre');
                    add_item('masse');
                    masse_audio.play();
                    masse=true;
                }
               break;
            case 5:
                loquet_audio.play();
                break;
            default:
                break;
        }
    }
}

function select_item(name_item)
{
    if(active_item!='none')
    {
        document.getElementById(active_item).className = 'no_selected';
    }
    active_item=name_item;
    document.getElementById(active_item).className =  'selected';
}