<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <div id='taxi_escape' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg,true));">
                <a href='taxi.php'><p class='fleche fleche_right' title='Sortir prendre le taxi'></p></a>
                <p class='popup' id='popup_pika' style="visibility:hidden" onclick="close_popup('popup_pika');"></p>
                <p class='popup' id='popup_tel' style="visibility:hidden" onclick="close_popup('popup_tel');"></p>
                <p class='popup' id='popup_screen_pc' style="visibility:hidden" onclick="close_popup('popup_screen_pc');"></p>
                <p class='popup' id='popup_lettre' style="visibility:hidden" onclick="close_popup('popup_lettre');"></p>
                <div id='hitbox'></div>
            </div>
        </section>
        <section id='text_section'>
            <p class='typewriter'>Dépêche toi !</p>
        </section> 
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>

<script type="text/javascript" src="../services/general.js"></script>
<script type="text/javascript" src="../services/taxi.js"></script>