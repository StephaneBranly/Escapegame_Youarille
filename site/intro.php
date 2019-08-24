<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <div id='intro' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg,false));">
                <?php
                    $debut=1;
                    if(isset($_GET['debut']))
                    {$debut=$_GET['debut'];}
                    if($debut==1)
                    {
                        echo"<p class='popup' id='popup_intro' style=\"visibility:hidden\" onclick=\"close_popup('popup_intro');\">
                        <br/><br/><br/><img class='image_icone' src='../ressources/images/logo_integ.png' alt='Logo integ'/>
                        <img class='image_icone' src='../ressources/images/logo_youa.png' alt='Logo youa'/>
                        <br/><br/>Bienvenue futur Youa !<br/>
                        <br/>Nous espérons que ce petit escape game te plaira ! <br/><br/>
                        <br/>N'hésite pas à contacter @stephane_branly (Twitter, Insta, Facebook) ou Sire Youarille (Facebook) si tu es bloqué
                        <br/>Codé avec amour par Stéphane BRANLY tu l'auras compris!
                        <br/><br/>Je te conseille de mettre du son, faire F11 pour avoir le plein écran et de jouer sur PC (ne pas rafraichir la page sinon la progression sera perdue) !
                        <br/>Je sais que l'escape game n'est pas parfait, mais le principal c'est de s'amuser ;)
                        <br/><br/>GOOD LUCK !<br/><br/><br/><br/>v1.0.1
                        </p>";
                    }
                ?>
                <a href='taxi.php'><p class='fleche fleche_right' title='Sortir prendre le taxi'></p></a>
                <p class='popup' id='popup_pika' style="visibility:hidden" onclick="close_popup('popup_pika');"></p>
                <p class='popup' id='popup_tel' style="visibility:hidden" onclick="close_popup('popup_tel');"></p>
                <p class='popup' id='popup_screen_pc' style="visibility:hidden" onclick="close_popup('popup_screen_pc');"></p>
                <p class='popup' id='popup_lettre' style="visibility:hidden" onclick="close_popup('popup_lettre');"></p>
                <div id='hitbox'></div>
            </div>
        </section>
        <section id='text_section'>
            <p class='typewriter'>Vendetta, intéragissez avec le décor</p>
        </section> 
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>

<script type="text/javascript" src="../services/general.js"></script>
<script type="text/javascript" src="../services/intro.js"></script>