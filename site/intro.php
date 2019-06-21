<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body onmousemove="avoircoordonnees(event);">
        <section id='main'>
            <div id='intro' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg));">
                <div class='popup' id='popup_intro' onclick="close_popup('popup_intro');">
                    <h1>Bienvenue futur Youa !</h1>
                    <p>Nous espérons que ce petit escape game te plaira ! <br/>N'hésite pas à contacter @stephane_branly si tu es bloqué<br/>Codé avec amour !</p>
                </div>
                <div class='popup' id='popup_pika' onclick="close_popup('popup_pika');"></div>
                <div id ='hitbox'>
                    <p id='hitbox0' class='une_hitbox' style='top: 50px;
                        left: 400px;
                        width: 400px;
                        height: 100px;'>0</p>
                </div>
            </div>
        </section>
        <section id='text_section'>
            <p id='coord'>xxx</p>
            
            <p>Intéragissez avec le décors. <a href='coffrefort.php'><button>Suite</button></a></p>
        </section> 
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>
<script type="text/javascript" src="../services/intro.js"></script>
<script type="text/javascript" src="../services/general.js"></script>