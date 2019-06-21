<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <div id='intro' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg));">
                <p class='popup' id='popup_intro' onclick="close_popup('popup_intro');">
                    Bienvenue futur Youa !
                    Nous espérons que ce petit escape game te plaira ! <br/>N'hésite pas à contacter @stephane_branly si tu es bloqué<br/>Codé avec amour !
                </p>
                <p class='popup' id='popup_pika' style="visibility:hidden" onclick="close_popup('popup_pika');"></p>
                <p class='popup' id='popup_tel' style="visibility:hidden" onclick="close_popup('popup_tel');"></p>
                <p class='popup' id='popup_screen_credit_pc' style="visibility:hidden" onclick="close_popup('popup_screen_credit_pc');"></p>
                <div id ='hitbox'>
                    <p id='hitbox0' class='une_hitbox' style='top: 50px;
                        left: 400px;
                        width: 400px;
                        height: 100px;'>0</p>
                </div>
            </div>
        </section>
        <section id='text_section'>
            <p>Intéragissez avec le décor</p>
        </section> 
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>
<script type="text/javascript" src="../services/intro.js"></script>
<script type="text/javascript" src="../services/general.js"></script>