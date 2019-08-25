<?php
    session_start();
    $_SESSION["page_actu"]="run_escape.php";
?>
<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <?php
                $page=1;
                if(isset($_GET['page']))
                {$page=$_GET['page'];}
            
                $badge=0;
                if(isset($_GET['badge']))
                {$badge=$_GET['badge'];}

                echo"<div id='run_escape' style=\"background-image: url('../ressources/images/escape_$page.png')\" onclick=\"click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg,false));\" >";   
                       
                $directions=array('','','',''); //haut,bas,gauche,droite
                $liens=array('','','','');//haut,bas,gauche,droite
                switch ($page) 
                {
                    case 1:
                        $directions=array('','visibility:hidden','visibility:hidden','visibility:hidden');
                        $liens=array('2','','','');
                        break;
                    case 2:
                        $directions=array('visibility:hidden','','','visibility:hidden');
                        $liens=array('','1','3','');
                        break;
                    case 3:
                        $directions=array('','','visibility:hidden','');
                        $liens=array('4','2','','5');
                        break;
                    case 4:
                        $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                        $liens=array('','3','','');
                        break;
                    case 5:
                        $directions=array('visibility:hidden','','','visibility:hidden');
                        $liens=array('','3','6','');
                        break;
                    case 6:
                        $directions=array('','','','');
                        $liens=array('11','5','9','7');
                        break;
                    case 7:
                        $directions=array('','','visibility:hidden','visibility:hidden');
                        $liens=array('8','6','','');
                        if($badge!=1)
                        {
                            echo "<div id='etudiant_7'></div>";
                        }
                        break;
                    case 8:
                        $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                        $liens=array('','7','','');
                        break;
                    case 9:
                        $directions=array('visibility:hidden','','','visibility:hidden');
                        $liens=array('','6','10','');
                        if($badge!=1)
                        {
                            echo "<p class='popup' id='popup_badge' style='visibility:hidden' onclick=\"close_popup('popup_badge');\"></p>";
                            echo "<div id='badge_9'></div>";
                        }
                        break;
                    case 10:
                        $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                        $liens=array('','9','','');
                        break;
                    case 11:
                        $directions=array('visibility:hidden','','','');
                        $liens=array('','6','14','15');
                        break;
                    case 12:
                        $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                        $liens=array('','17','','');
                        echo "<div id='reponse'>Voulez-vous rentrer ? ";
                        if($badge==1)
                        {
                            echo "<input type='submit' class='submit_button' 
                            onclick=\"setTimeout(function() { document.location.href='guillaumat.php'; }, 1000); 
                            var bip_bon=new Audio('../ressources/audios/bip_bon.mp3');
                            bip_bon.play();\" 
                            value=\"Rentrer\"></div>";
                        }
                        else
                        {
                            echo "<input type='submit' class='submit_button' 
                            onclick=\" var bip_faux=new Audio('../ressources/audios/bip_faux.mp3');
                            bip_faux.play();
                            open_popup('popup_badge_faux');\" 
                            value=\"Rentrer\"></div>";
                            echo "<p class='popup' id='popup_badge_faux' style='visibility:hidden' onclick=\"close_popup('popup_badge_faux');\"><span>Il faut un badge pour rentrer...</span></p>";
                        }
                        break;
                    case 13:
                        $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                        $liens=array('','14','','');
                        break;
                    case 14:
                        $directions=array('','','visibility:hidden','visibility:hidden');
                        $liens=array('13','11','','');
                        break;
                    case 15:
                        $directions=array('visibility:hidden','','','');
                        $liens=array('','11','17','16');
                        break;
                    case 16:
                        $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                        $liens=array('','15','','');
                        break;
                    case 17:
                        $directions=array('visibility:hidden','','','visibility:hidden');
                        $liens=array('','15','12','');
                        break;
                    default:
                        $directions=array('','','','');
                        $liens=array('1','1','1','1');
                        //echo "<script>alert(\"Default choix\")</script>";
                        break;
                }
                echo"<div id='hitbox'></div>";
                echo "</div>";
                echo "<script>var page=$page; var badge=$badge</script>"
            ?>
            
        </section>
        <section id='text_section'>
            <p class='typewriter'>Dépêche toi de rentrer à l'UTC !</p>
        </section>
        <div id='item_bar'>
            <?php
                if($badge==1)
                {
                    echo "<img id='badge' class='no_selected' onclick=\"select_item('badge');\" alt='badge' src='../ressources/images/badge.png'/>";
                }
            ?>
        </div>
        <section id='cross_directions' onclick="click_intro(in_hit_box(event,tableau_hitbox,param_hb_dim_bg,false));" >
            <table>
                <tbody>
                    <?php
                        echo "<tr><td></td><td><img onclick='document.location.href=\"run_escape.php?page=$liens[0]&badge=$badge\";' style='$directions[0]' id='top' src='../ressources/images/cross_t.png' alt='Top'/></td><td></td></tr>";
                        echo "<tr><td><img onclick='document.location.href=\"run_escape.php?page=$liens[2]&badge=$badge\";' style='$directions[2]' id='left' src='../ressources/images/cross_l.png' alt='Left'/></td><td></td>";
                        echo"<td><img onclick='document.location.href=\"run_escape.php?page=$liens[3]&badge=$badge\";' style='$directions[3]' id='right' src='../ressources/images/cross_r.png' alt='Right'/></td></tr>";
                        echo"<tr><td></td><td><img onclick='document.location.href=\"run_escape.php?page=$liens[1]&badge=$badge\";' style='$directions[1]' id='down' src='../ressources/images/cross_d.png' alt='Down'/></td><td></td></tr>";
                    ?>
                </tbody>
            </table>
        </section>   
    </body>
</html>

<script type="text/javascript" src="../services/maths2d.js"></script>
<script type="text/javascript" src="../services/general.js"></script>

<script type="text/javascript" src="../services/run_escape.js"></script>

<script type="text/javascript">var courir_audio = new Audio('../ressources/audios/courir.mp3'); courir_audio.play();</script>