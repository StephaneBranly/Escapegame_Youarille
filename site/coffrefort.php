<?php
    session_start();
    $_SESSION["page_actu"]="coffrefort.php";
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

<body id='coffre_fort'>
	
    
    <?php
        $angle0=0; /* Decodage des angles en nombre*/
        $angle1=0;
        $angle2=0;
        $angle3=0;
        $tenter=0;
        if(isset($_POST['angle0']))
        {
            $angle0=$_POST['angle0'];
            $tenter=1;
            $_SESSION['angle0']=$angle0;
        }
        if(isset($_POST['angle1']))
        {
            $angle1=$_POST['angle1'];
            $tenter=1;
            $_SESSION['angle1']=$angle1;
        }
        if(isset($_POST['angle2']))
        {
            $angle2=$_POST['angle2'];
            $tenter=1;
            $_SESSION['angle2']=$angle2;
        }
        if(isset($_POST['angle3']))
        {
            $angle3=$_POST['angle3'];
            $tenter=1;
            $_SESSION['angle3']=$angle3;
        }
        if(isset($_SESSION['angle0']))
        {
            $angle0=$_SESSION['angle0']; 
        }
        if(isset($_SESSION['angle1']))
        {
            $angle1=$_SESSION['angle1']; 
        }
        if(isset($_SESSION['angle2']))
        {
            $angle2=$_SESSION['angle2']; 
        }
        if(isset($_SESSION['angle3']))
        {
            $angle3=$_SESSION['angle3']; 
        }
            echo "<section id='main'>
                    <a href='labo53.php'><p class='fleche fleche_left' title='Retourner au labo'></p></a>
                    <div id='les_serrures_coffre'>
                        <img onDragStart='return false' style='transform: rotate($angle0";echo"deg);' onmousemove='tourner_serrure(event,0);' id='serrure0' class='serrure_coffre' src='../ressources/images/serrure_coffre_fort.png'/>
                        <img onDragStart='return false' style='transform: rotate($angle1";echo"deg);' onmousemove='tourner_serrure(event,1);' id='serrure1' class='serrure_coffre' src='../ressources/images/serrure_coffre_fort.png'/>
                        <img onDragStart='return false' style='transform: rotate($angle2";echo"deg);' onmousemove='tourner_serrure(event,2);' id='serrure2' class='serrure_coffre' src='../ressources/images/serrure_coffre_fort.png'/>
                        <img onDragStart='return false' style='transform: rotate($angle3";echo"deg);' onmousemove='tourner_serrure(event,3);' id='serrure3' class='serrure_coffre' src='../ressources/images/serrure_coffre_fort.png'/>
                    </div>
                </section>";
            /*echo "<script>alert(\"$angle0 , $angle1 , $angle2 , $angle3\")</script>";*/
            echo "<script>var angles_serrures=[$angle0 ,$angle1,$angle2,$angle3]</script>";
            /*echo "<script>alert(\"$number0 , $number1 , $number2 , $number3\")</script>";*/
            echo "<section id='text_section'>Tourne les curseurs ! 
            <form action='coffrefort.php' method='post' >
                <input style='visibility:hidden; display:none;' value='$angle0' type='number' id='angle0' name='angle0'/>
                <input style='visibility:hidden; display:none;' value='$angle1' type='number' id='angle1' name='angle1'/>
                <input style='visibility:hidden; display:none;' value='$angle2' type='number' id='angle2' name='angle2'/>
                <input style='visibility:hidden; display:none;' value='$angle3' type='number' id='angle3' name='angle3'/>";
            if($angle0<0)
            {$angle0=-$angle0;}
            else
            {$angle0=180+(180-$angle0);}
            if($angle1<0)
            {$angle1=-$angle1;}
            else
            {$angle1=180+(180-$angle1);}
            if($angle2<0)
            {$angle2=-$angle2;}
            else
            {$angle2=180+(180-$angle2);}
            if($angle3<0)
            {$angle3=-$angle3;}
            else
            {$angle3=180+(180-$angle3);}
            
            $number0=round(($angle0)/36);
            $number1=round(($angle1)/36);
            $number2=round(($angle2)/36);
            $number3=round(($angle3)/36);
       
           
                        echo"Pour smartphone : 
                        <input value='$number0' type='number' class='smartphone_input' min='0' max='10' id='number0' name='number0'/>
                        <input value='$number1' type='number' class='smartphone_input' min='0' max='10' id='number1' name='number1'/>
                        <input value='$number2' type='number' class='smartphone_input' min='0' max='10' id='number2' name='number2'/>
                        <input value='$number3' type='number' class='smartphone_input' min='0' max='10' id='number3' name='number3'/>
                        <input class='submit_button' name='login_button' value=\"Essayer d'ouvrir\" type='submit'>
                    </form>";
        $number_smartphone0=0;
        $number_smartphone1=0;
        $number_smartphone2=0;
        $number_smartphone3=0;

        if(isset($_POST['number0']))
        {
            $number_smartphone0=$_POST['number0'];
        }
        if(isset($_POST['number1']))
        {
            $number_smartphone1=$_POST['number1'];
        }
        if(isset($_POST['number2']))
        {
            $number_smartphone2=$_POST['number2'];
        }
        if(isset($_POST['number3']))
        {
            $number_smartphone3=$_POST['number3'];
        }
        if($tenter==1)
        {
            if(($number0==2 && $number1 ==8 && $number2==4 && $number3 == 3)||($number_smartphone0==2 && $number_smartphone1==8 && $number_smartphone2==4 && $number_smartphone3 == 3))
            {
                echo " <script type='text/javascript'>var ouverture_coffre_audio = new Audio('../ressources/audios/ouverture_coffre.mp3');
                ouverture_coffre_audio.play(); setTimeout(function() { document.location.href='coffrefort_interieur.php'; },3000); </script>";
            }
            else
            {
                echo " <script type='text/javascript'>var coffre_bloque_audio = new Audio('../ressources/audios/coffre_bloque.mp3');
                coffre_bloque_audio.play(); </script>";
                echo "Il me semble que le code n'est pas le bon...";
            }
        }
        echo "</section>";
    ?>
</body>
</html>

<script type="text/javascript" src="../services/elements_infos.js"></script>
<script type="text/javascript" src="../services/maths2d.js"></script>
<script type="text/javascript" src="../services/coffre_fort.js"></script>