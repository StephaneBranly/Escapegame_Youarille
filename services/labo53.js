var carton_audio = new Audio('../ressources/audios/carton.mp3');
var clavier_audio = new Audio('../ressources/audios/clavier.mp3');
var pc_ecran_audio = new Audio('../ressources/audios/pc_ecran.mp3');
var poubelle_audio = new Audio('../ressources/audios/poubelle.mp3');
var tiroir_audio = new Audio('../ressources/audios/tiroir.mp3');
var clefs_audio = new Audio('../ressources/audios/clefs.mp3');
var loquet_audio = new Audio('../ressources/audios/loquet.mp3');
var oscillo_audio = new Audio('../ressources/audios/oscillo.mp3');

var param_hb_dim_bg = [1500,844];

var tableau_hitbox = [
    [109,241,236,347],
    [113,461,317,493],
    [577,537,652,628],
    [498,456,551,488],
    [693,480,761,528],
    [1064,521,1199,596],
    [729,581,852,673],
    [1096,421,1316,492],
    [924,393,1055,474],
    [542,322,592,356],
    [950,292,1123,344],
    [490,270,537,305],
    [618,242,731,291],
    [997,200,1065,248],
    [1072,194,1164,242],
    [336,376,404,428],
    [407,308,514,435]
    ];

var clefs=false;
var preservatif=false;
var boite_gants=false;
var manette=false;
var bobine=false;
var tournevis=false;
var active_item='none';

function click_intro(id_hitbox)
{
    if(active_popup==false)
    {
        switch(id_hitbox){
            case 0:
                pc_ecran_audio.play();
                open_popup("popup_ecran_binaire");
                break;
            case 1:
                clavier_audio.play();
                break;
            case 2:
                if(active_item!="boite_gants")
                {
                    open_popup("popup_salete"); 
                }
                else
                {
                    poubelle_audio.play();
                    open_popup("popup_papier_froisse");
                }
                break;
            case 3:
                if(active_item!="clefs")
                {
                    open_popup("popup_tiroir_ferme");
                    loquet_audio.play();
                }
                else
                {
                    tiroir_audio.play();
                    open_popup("popup_postit");
                }
                break;
            case 4:
                if(active_item!="clefs")
                {
                    open_popup("popup_tiroir_ferme");
                    loquet_audio.play();
                }
                else
                {
                    if(preservatif==false)
                    {
                        open_popup("popup_preservatif");
                        add_item("preservatif");
                        preservatif=true;
                        tiroir_audio.play();
                    }    
                }
                break;
            case 5:
                if(active_item!="clefs")
                {
                    open_popup("popup_tiroir_ferme");
                    loquet_audio.play();
                }
                else
                {
                    if(boite_gants==false)
                    {
                        open_popup("popup_boite_gants");
                        add_item("boite_gants");
                        boite_gants=true;
                        tiroir_audio.play();
                    } 
                }
                break;
            case 6:
                if(manette==false)
                {
                    carton_audio.play();
                    open_popup('popup_manette');
                    add_item('manette');
                    manette=true;
                }
                break;
            case 7:
                oscillo_audio.play();
                open_popup("popup_oscillo");
                break;
            case 11:
                if(tournevis==false)
                {
                    carton_audio.play();
                    open_popup('popup_tournevis');
                    add_item('tournevis');
                    tournevis=true;
                }
                break;
            case 12:
                carton_audio.play();
                open_popup("popup_ardoise");
                break;
            case 14:
                if(clefs==false)
                {
                    carton_audio.play();
                    open_popup('popup_clefs');
                    add_item('clefs');
                    clefs=true;
                    setTimeout(function() { clefs_audio.play(); },300);
                }
                break;
            case 15:
                if(bobine==false)
                {
                    carton_audio.play();
                    open_popup('popup_bobine');
                    add_item('bobine');
                    bobine=true;
                }
                break;
            case 16:
                tiroir_audio.play();
                open_popup("popup_des");
                break;
            default:
                break;
        }
    }
}




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