<?php
    session_start();
    $_SESSION["page_actu"]="coffrefort_interieur.php";
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

<body id='coffre_fort_interieur'>
	<section id='main'>
        <div id='message_centre'>
            <span><img class='image_icone' src='../ressources/images/logo_integ.png' alt='Logo integ'/>
                        <img class='image_icone' src='../ressources/images/logo_youa.png' alt='Logo youa'/></span><br/>
                        Oh non !!! <br/> Il n'y a plus le bidet... Mais il faut tout de même que l'on le récupère ! <br/>
                        Pour cela, joins-toi avec nous chez les Youas pour que l'on unisse nos forces afin de le retrouver !<br/>
                        Ensemble, je suis sûr qu'on y arrivera ! <br/> Viens nous rencontrer lors de la pré-integ Youa le 1er Septembre à Compiègne !<br/>
                        <br/>Pour plus d'informations, ajoute Sire Youarille sur Facebook et suit les publications sur Intégration UTC et Alain Tégration !<br/><br/>
                        On compte sur toi pour être la nouvö !<br/><br/>Merci et félicitations pour avoir terminé cet escape game !
                        <?php
                            function microtime_float() 
                            {
                            list($usec, $sec) = explode(" ", microtime());
                            return ((float)$usec + (float)$sec);
                            }



                            // Attends pendant un moment
                            usleep(100);
                            if(isset($_SESSION['time_start']))
                            {
                                echo "<br/><br/>";
                                $time_start=$_SESSION['time_start'];
                                $time_end = microtime_float();
                                $time = $time_end - $time_start;
                                $minutes=round($time/60, 0);
                                $secondes=$time%60;
                                echo  ">>> Terminé en $minutes minute(s) et $secondes seconde(s) <<<";
                            }
                            ?>
        </div>
    </section>
</body>
</html>