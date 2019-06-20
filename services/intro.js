var son_tel = new Audio('../ressources/audios/son_telephone.mp3');
var pikaaaa = new Audio('../ressources/audios/Pikaaaa.mp3');
var radio_soviet = new Audio('../ressources/audios/radio_soviet.mp3');
son_tel.play();

var tableau_hitbox = [
                        [0.216878,0.2090545438,0.27875,0.355525965],
                        [0.46375,0.09187749,0.715625,0.5259653],
                        [0.2975,0.2010652,0.343125,0.36484682],
                        [0.365625,0.2676434,0.4475,0.3605219]
                        ];

repeat_tel = setInterval("son_tel.play();", 6000);

function click_intro(id_hitbox)
{
    if(active_popup==false)
    {
        switch(id_hitbox){
            case 0: 
                pikaaaa.play();
                open_popup('popup_pika');
                break;
            case 2:
                clearInterval(repeat_tel);
                break;
            case 3:
                radio_soviet.play();
                break;
            default:
                break;
        }
    }
}