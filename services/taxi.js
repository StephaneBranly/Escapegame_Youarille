//var son_tel = new Audio('../ressources/audios/son_telephone.mp3');
//repeat_tel = setInterval("son_tel.play();", 6000);
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



function click_intro(id_hitbox)
{
    if(active_popup==false)
    {
        switch(id_hitbox){
            case 0: 
                pikaaaa.play();
                open_popup('popup_pika');
                break;
            case 1:
                clic_souris.play();
                open_popup('popup_screen_pc')
                setTimeout(function() { document.location.href="pc_accueil.php"; }, 500);;
                break;
            case 2:
                clearInterval(repeat_tel);
                appel_tel.play();
                open_popup('popup_tel');
                break;
            case 3:
                radio_soviet.play();
                break;
            case 4:
                open_popup('popup_lettre');
                break;
            default:
                break;
        }
    }
}