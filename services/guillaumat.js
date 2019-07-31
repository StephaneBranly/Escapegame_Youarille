var yo_audio = new Audio('../ressources/audios/yo.mp3');

var param_hb_dim_bg = [1600,900];

var tableau_hitbox = [
    [685,298,702,308],
    [674,308,707,315],
    [661,315,712,322],
    [666,322,717,329],
    [671,329,721,336],
    [676,336,713,343],
    [681,343,702,350],
    [685,350,694,357]
    ];


function click_intro(id_hitbox)
{
    if(active_popup==false)
    {
        if(id_hitbox>=0 && id_hitbox<=7)
        {
            yo_audio.play();
            setTimeout(function() { document.location.href="en_travaux.php"; },300);
        }
    }
}