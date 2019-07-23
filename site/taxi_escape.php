<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <div id='taxi_escape' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg,true));">
                <p class='popup' id='popup_coffre' style="visibility:hidden" onclick="close_popup('popup_coffre');"></p>
                <p class='popup' id='popup_portiere' style="visibility:hidden" onclick="close_popup('popup_portiere');"></p>
                <p class='popup' id='popup_repose_bras' style="visibility:hidden" onclick="close_popup('popup_repose_bras');"></p>
                <p class='popup' id='popup_cache_voiture' style="visibility:hidden" onclick="close_popup('popup_cache_voiture');"></p>
                <p class='popup' id='popup_poignee_portiere' style="visibility:hidden" onclick="close_popup('popup_poignee_portiere')"><span>Merde, la portière est fermée...</span></p>
                <p class='popup' id='popup_loquet' style="visibility:hidden" onclick="close_popup('popup_loquet');"><span>Je n'arrive pas à débloquer le loquet...</span></p>
                <div id='hitbox'></div>
            </div>
        </section>
        <section id='text_section'>
            <p class='typewriter'>Dépêche toi ! Il y a un gaz qui se propage</p>
        </section> 
        <div id='item_bar'></div>
        <div id='chronotime' >0000</div>
        <img id='broken_window' src='../ressources/images/broken_window.png' alt='broken window'/>
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>

<script type="text/javascript" src="../services/general.js"></script>
<script type="text/javascript" src="../services/taxi_escape.js"></script>
<script type="text/javascript" src="../services/chrono.js"></script>
<script type="text/javascript">window.onload = chronoStart(0,25,999);</script>