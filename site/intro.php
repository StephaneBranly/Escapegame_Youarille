<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body onmousemove="avoircoordonnees(event);">
        <section id='main'>
            <div id='intro' onclick="click_intro(in_hit_box(event,tableau_hitbox));">
                <div class='popup' id='popup_intro' onclick="close_popup('popup_intro');">
                    <h1>Bienvenue futur Youa !</h1>
                    <p>Nous espérons que ce petit escape game te plaira ! <br/>N'hésite pas à contacter @stephane_branly si tu es bloqué<br/>Codé avec amour !</p>
                </div>
                <div class='popup' id='popup_pika' onclick="close_popup('popup_pika');"></div>
            </div>
        </section>
        <section id='text_section'>
            <p id='coord'>Coordonnées : x ; y </p>
            <p>Intéragissez avec le décors. <a href='coffrefort.php'><button>Suite</button></a></p>
        </section> 
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>
<script type="text/javascript" src="../services/intro.js"></script>
<script type="text/javascript" src="../services/general.js"></script>