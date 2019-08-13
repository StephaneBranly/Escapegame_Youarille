var carton_audio = new Audio('../ressources/audios/carton.mp3');
var clavier_audio = new Audio('../ressources/audios/clavier.mp3');
var pc_ecran_audio = new Audio('../ressources/audios/pc_ecran.mp3');
var poubelle_audio = new Audio('../ressources/audios/poubelle.mp3');
var tiroir_audio = new Audio('../ressources/audios/tiroir.mp3');

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


function click_intro(id_hitbox)
{
    if(active_popup==false)
    {
        switch(id_hitbox){
            case 0:
                pc_ecran_audio.play();
                break;
            case 1:
                clavier_audio.play();
                break;
            case 2:
                poubelle_audio.play();
                break;
            case 3:
                tiroir_audio.play();
                break;
            case 4:
                tiroir_audio.play();
                break;
            case 5:
                tiroir_audio.play();
                break;
            case 6:
                carton_audio.play();
                break;
            case 11:
                carton_audio.play();
                break;
            case 12:
                carton_audio.play();
                break;
            case 15:
                carton_audio.play();
                break;
            case 16:
                tiroir_audio.play();
                break;
            default:
                break;
        }
    }
}