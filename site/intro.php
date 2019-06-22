<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <div id='intro' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg));">
                <?php
                    if($_GET['debut']==1)
                    {
                        echo"<p class='popup' id='popup_intro' style=\"visibility:hidden\" onclick=\"close_popup('popup_intro');\">
                        <br/><br/><br/><br/>Bienvenue futur Youa !<br/>
                        Nous espérons que ce petit escape game te plaira ! <br/><br/>
                        <br/>N'hésite pas à contacter @stephane_branly si tu es bloqué
                        <br/>Codé avec amour par Stéphane BRANLY tu l'auras compris!
                        <br/><br/>(Le but de ce mini escape game est de proposer du contenu divertissant aux nouvös de l'UTC, j'ai conscience que cet escape game n'est pas parfait (optimisé pour PC, sur Mozilla))
                        <br/>(il ne faut pas réactualiser la page sinon la progression sera entièrement perdue)
                        <br/><br><br/><br/>N'hésite pas à intéragir avec le décor, et à chercher des informations sur internet si tu l'estimes nécessaire !
                        <br/><br/><br/><br/>GOOD LUCK ! Ton temps est compté mouahahah
                        </p>";
                    }
                ?>
               
                <p class='popup' id='popup_pika' style="visibility:hidden" onclick="close_popup('popup_pika');"></p>
                <p class='popup' id='popup_tel' style="visibility:hidden" onclick="close_popup('popup_tel');"></p>
                <p class='popup' id='popup_screen_credit_pc' style="visibility:hidden" onclick="close_popup('popup_screen_credit_pc');"></p>
                <p class='popup' id='popup_lettre' style="visibility:hidden" onclick="close_popup('popup_lettre');"></p>
                <div id='hitbox'></div>
            </div>
        </section>
        <section id='text_section'>
            <p class='typewriter'>Intéragissez avec le décor<a href='./intro.php?debut=0'>fdffd</a></p>
        </section> 
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>

<script type="text/javascript" src="../services/general.js"></script>
<script type="text/javascript" src="../services/intro.js"></script>