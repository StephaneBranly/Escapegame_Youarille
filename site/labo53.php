<?php
    session_start();
    $_SESSION["page_actu"]="labo53.php";
?>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src='https://www.googletagmanager.com/gtag/js?id=UA-52252996-3'></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-52252996-3');
	</script>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <div id='labo53' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg,false));">
                <a href='coffrefort.php'><p class='fleche fleche_right' title='Aller au coffre fort'></p></a>
                <p class='popup' id='popup_papier_froisse' style="visibility:hidden" onclick="close_popup('popup_papier_froisse');"></p>
                <p class='popup' id='popup_ecran_binaire' style="visibility:hidden"><img src='../ressources/images/quitter.png' class='quitter_croix'  onclick="close_popup('popup_ecran_binaire');"/><span>01100011011010000110000101110001<br/>01110101011001010010000001100011<br/>01101000011010010110011001100110<br/>01110010011001010010000001100101<br/>01110011011101000010000001110000<br/>01110010011001010111001101100101<br/>01101110011101000010000001110101<br/>01101110011001010010000001110011<br/>01100101011101010110110001100101<br/>00100000011001100110111101101001<br/>01110011001011100010111000101110<span></p>
                <p class='popup' id='popup_clefs' style="visibility:hidden" onclick="close_popup('popup_clefs');"></p>
                <p class='popup' id='popup_tiroir_ferme' style="visibility:hidden" onclick="close_popup('popup_tiroir_ferme');"><span>Il faut une clef pour ouvrir ce tiroir...</span></p>
                <p class='popup' id='popup_preservatif' style="visibility:hidden" onclick="close_popup('popup_preservatif');"></p>
                <p class='popup' id='popup_boite_gants' style="visibility:hidden" onclick="close_popup('popup_boite_gants');"></p>
                <p class='popup' id='popup_postit' style="visibility:hidden" onclick="close_popup('popup_postit');"></p>
                <p class='popup' id='popup_oscillo' style="visibility:hidden" onclick="close_popup('popup_oscillo');"></p>
                <p class='popup' id='popup_salete' style="visibility:hidden" onclick="close_popup('popup_salete');"><span>C'est bien trop sale, il me faut des gants...</span></p>
                <p class='popup' id='popup_ardoise' style="visibility:hidden" onclick="close_popup('popup_ardoise');"></p>
                <p class='popup' id='popup_bobine' style="visibility:hidden" onclick="close_popup('popup_bobine');"></p>
                <p class='popup' id='popup_tournevis' style="visibility:hidden" onclick="close_popup('popup_tournevis');"></p>
                <p class='popup' id='popup_des' style="visibility:hidden" onclick="close_popup('popup_des');"></p>
                <p class='popup' id='popup_indice1' style="visibility:hidden" onclick="close_popup('popup_indice1');"><span>Tu verras que les seuls indices utiles n'apparaissent pas dans tes items ! <br/>Note les sur un bout de papier.<br/>Fouille les cartons, les poubelles, les tiroirs, les casiers...</span></p>
                <p class='popup' id='popup_indice2' style="visibility:hidden" onclick="close_popup('popup_indice2');"><span>Décode ce que tu vois sur l'écran, calcule quels chiffres entre 0 et 9 sont le cube d'un autre chiffre (qui devra être présent dans le code), <br/>regarde où est placé le dé, ensuite avec les autres conditions (n,n+1) et (n,n*2), tu peux trouver le code !</span></p>
                <p class='popup' id='popup_manette' style="visibility:hidden" onclick="close_popup('popup_manette');"></p>
                <div id='hitbox'></div>
            </div>
        </section>
        <div id='indice1' onclick="open_popup('popup_indice1');">Indice 1</div>
        <div id='indice2' onclick="open_popup('popup_indice2');">Indice 2</div>
        <section id='text_section'>
            <p class='typewriter'>Etape finale ! Retrouvez le bidet doré !</p>
        </section> 
        <div id='item_bar'></div>
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>

<script type="text/javascript" src="../services/general.js"></script>
<script type="text/javascript" src="../services/labo53.js"></script>