var son_tel = new Audio('../ressources/audios/son_telephone.mp3');
var pikaaaa = new Audio('../ressources/audios/Pikaaaa.mp3');
var radio_soviet = new Audio('../ressources/audios/radio_soviet.mp3');
var clic_souris = new Audio('../ressources/audios/clic_souris.mp3');
repeat_tel = setInterval("son_tel.play();", 6000);
if(document.getElementById('popup_intro'))
{
    open_popup('popup_intro');
    son_tel.play();
}
else
{
    clearInterval(repeat_tel);
}

var tableau_hitbox = [
                        [997,1095,1305,1448],
                        [2118,880,3361,1733],
                        [1373,1080,1562,1450],
                        [1681,1214,2080,1442],
                        [3298,1854,4135,2475]
                        ];

var param_hb_dim_bg = [4608,3456];



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
                
                open_popup('popup_screen_credit_pc')
                setTimeout(function() { document.location.href="pc.php"; }, 500);;
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