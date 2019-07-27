<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <?php
                if(isset($_GET['page']))
                {
                    $page=$_GET['page'];
                }
                else
                {
                    $page=1;
                }
                echo"<div id='run_escape' style=\"background-image: url('../ressources/images/escape_$page.png')\"></div> ";            
            ?>
            
        </section>
        <section id='text_section'>
            <p class='typewriter'>Dépêche toi de rejoindre la route principale !</p>
        </section>
        <section id='cross_directions'>
            <table>
                <tbody>
                    <?php
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
                                break;
                            case 8:
                                $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                                $liens=array('','7','','');
                                break;
                            case 9:
                                $directions=array('visibility:hidden','','','visibility:hidden');
                                $liens=array('','6','10','');
                                break;
                            case 10:
                                $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                                $liens=array('','9','','');
                                break;
                            case 11:
                                $directions=array('visibility:hidden','','visibility:hidden','visibility:hidden');
                                $liens=array('','6','','');
                                break;
                            default:
                                $directions=array('','','','');
                                $liens=array('1','1','1','1');
                                //echo "<script>alert(\"Default choix\")</script>";
                                break;
                        }
                        echo "<tr><td></td><td><a href='run_escape.php?page=$liens[0]'><img style='$directions[0]' id='top' src='../ressources/images/cross_t.png' alt='Top'/></a></td><td></td></tr>";
                        echo "<tr><td><a href='run_escape.php?page=$liens[2]'><img style='$directions[2]' id='left' src='../ressources/images/cross_l.png' alt='Left'/></a></td><td></td>";
                        echo"<td><a href='run_escape.php?page=$liens[3]'><img style='$directions[3]' id='right' src='../ressources/images/cross_r.png' alt='Right'/></a></td></tr>";
                        echo"<tr><td></td><td><a href='run_escape.php?page=$liens[1]'><img style='$directions[1]' id='down' src='../ressources/images/cross_d.png' alt='Down'/></a></td><td></td></tr>";
                    ?>
                </tbody>
            </table>
        </section>   
    </body>
</html>


<script type="text/javascript" src="../services/general.js"></script>