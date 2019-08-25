<?php
    session_start();
    $_SESSION["page_actu"]="guillaumat.php";
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
            <div id='guillaumat' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg,false));">
                <div id='hitbox'></div>
            </div>
        </section>
        <section id='text_section'>
            <p class='typewriter'>Trouve le labo 53, proche de 3 toilettes et au centre...</p>
        </section>
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>
<script type="text/javascript" src="../services/general.js"></script>

<script type="text/javascript" src="../services/guillaumat.js"></script>