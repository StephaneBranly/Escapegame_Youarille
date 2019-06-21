var son_tel = new Audio('../ressources/audios/son_telephone.mp3');
var pikaaaa = new Audio('../ressources/audios/Pikaaaa.mp3');
var radio_soviet = new Audio('../ressources/audios/radio_soviet.mp3');
son_tel.play();

var tableau_hitbox = [
                        [997,1095,1305,1448],
                        [2118,880,3361,1733],
                        [1373,1080,1562,1450],
                        [1681,1214,2080,1442],
                        [3298,1854,4135,2475]
                        ];

var param_hb_dim_bg = [4608,3456];

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