<?php
    session_start();
    $_SESSION["page_actu"]="intro.php";
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
            <div id='taxi_escape' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg,false));">
                <p class='popup' id='popup_coffre' style="visibility:hidden" onclick="close_popup('popup_coffre');"></p>
                <p class='popup' id='popup_portiere' style="visibility:hidden" onclick="close_popup('popup_portiere');"></p>
                <p class='popup' id='popup_repose_bras' style="visibility:hidden" onclick="close_popup('popup_repose_bras');"></p>
                <p class='popup' id='popup_cache_voiture' style="visibility:hidden" onclick="close_popup('popup_cache_voiture');"></p>
                <p class='popup' id='popup_poignee_portiere' style="visibility:hidden" onclick="close_popup('popup_poignee_portiere')"><span>Merde, la portière est fermée...</span></p>
                <p class='popup' id='popup_loquet' style="visibility:hidden" onclick="close_popup('popup_loquet');"><span>Je n'arrive pas à débloquer le loquet...</span></p>
                <p class='popup' id='popup_fenetre' style="visibility:hidden" onclick="close_popup('popup_fenetre');"><span>Impossible de casser cette fenêtre à la main...</span></p>
                <p class='popup' id='popup_kaboom' style="visibility:hidden" onclick="setTimeout(function() { document.location.href='intro.php'; }, 500);"></p>
                <p class='popup' id='popup_faucheuse' style="visibility:hidden" onclick="setTimeout(function() { document.location.href='intro.php'; }, 500);"></p>
                <p class='popup' id='popup_fenetre_cassee_left' style="visibility:hidden"></p>
                <p class='popup' id='popup_fenetre_cassee_back' style="visibility:hidden"></p>
                <p class='popup' id='popup_indice1' style="visibility:hidden" onclick="close_popup('popup_indice1');"><span>Il faut que tu trouves un objet volumineux <br/>pour casser cette vitre, où pourrais-tu le trouver...</span></p>
                <div id='hitbox'></div>
            </div>
        </section>
        <section id='text_section'>
            <p class='typewriter'>Dépêche toi ! Il y a un gaz qui se propage</p>
        </section> 
        <div id='indice1' onclick="open_popup('popup_indice1');">Indice 1</div>
        <div id='item_bar'></div>
        <div id='chronotime' >0:01:30:000</div>
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>

<script type="text/javascript" src="../services/general.js"></script>
<script type="text/javascript" src="../services/taxi_escape.js"></script>
<script type="text/javascript" src="../services/chrono.js"></script>
<script type="text/javascript">window.onload = chronoStart(1,29,999);</script>