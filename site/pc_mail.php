<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'DTD/xhtml1-transitional.dtd'>

    <?php
        $mdp='aaa';
        $user='aaa';
        if(isset($_POST['horde_pass']))
        {
            $mdp=$_POST['horde_pass'];
        }
        if(isset($_GET['mdp']))
        {
            $mdp=$_GET['mdp'];
        }
        if(isset($_POST['horde_user']))
        {
            $user=$_POST['horde_user'];
        }
        if(isset($_GET['user']))
        {
            $user=$_GET['user'];
        }
        if(preg_match('/[Qq]ueue(.|)de(.|)[Ff]er/',$mdp) && preg_match('/[Vv]endetta/',$user))
        {
    echo"<html lang='en-US'>
    <head>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
        <link href='../design/style_pc_mail.css' rel='stylesheet' type='text/css'>  
    </head>
    <body>
    <div id='horde-page'>
        <div id='dimpmain'>
            <div id='dimpmain_folder' style=''>
                <div id='msgSplitPane'>
                    <div style='float: none; height: 285px; width: auto;'>
                        <div id='msglistHeaderContainer'>
                            <div class='vpRowHoriz vpRow horde-table-header' id='msglistHeaderHoriz' style=''>
                                <div class='msgStatus'>
                                    <div class='iconImg msCheckAll msCheck' id='horiz_opts' title='Select All'></div>
                                </div>
                                <div class='msgFrom sep'>
                                    <a class='msgFromTo' style='display: none;'>To</a><a>From</a>
                                    <div class='horde-split-left'></div>
                                </div>
                                <div class='msgSubject sep' id='anonymous_element_7'>
                                    <a>Subject</a>
                                    <div class='horde-split-left'></div>
                                    <span class='horde-popdown' id='anonymous_element_8'></span>
                                </div>
                                <div class='msgDate sep sortup' id='anonymous_element_9'>
                                    <a>Date</a>
                                    <div class='horde-split-left'></div>
                                    <span class='horde-popdown' id='anonymous_element_10'></span>
                                </div>
                                <div class='msgSize sep'>
                                    <a>Size</a>
                                    <div class='horde-split-left'></div>
                                </div>
                            </div>
                            <div class='horde-table-header' id='msglistHeaderVert' style='display:none'>
                                <div class='msgSort'>
                                    <a class='widget' id='vertical_sort'>Sort</a><span class='horde-popdown' id='anonymous_element_6'></span>
                                </div>
                                <div class='iconImg msgStatus'>
                                    <div class='iconImg msCheckAll msCheck' title='Select All'></div>
                                </div>
                            </div>
                        </div>
                        <div class='msglist' style='width: auto;'>";
                        $mails= array(
                            array(1,'john.ford@utc.fr','John Ford','[av01] retour vers le turfu','08/29/2019','21 KB','12:53:24 PM CEST',
                                'Bonjour, <br/><br/>
                                n\'oubliez pas de regarder le film pour le prochain cours, 
                                il pourra éventuellement y avoir des questions sur ce dernier 
                                et nous ferons une étude des différents plans 
                                <br/><br/>Bonne journée,<br/>John Ford'),
                            array(2,'jean-marie.kastrel@utc.fr','Jean-Marie Kastrel','[tn04] liste des projets','08/24/2019','54 KB','3:27:27 PM CEST',
                                'Bonjour,<br/><br/>
                                En raison de travaux, nous avons du déplacer les projets TN04 dans mon labo personnel, cela fait que vous ne pourrez pas y accéder avant la fin septembre.<br/>
                                Je vous remercie d\'avance pour votre compréhension, nous faisons le maximum pour que vous puissiez continuer à travailler dessus<br/><br/>
                                Cordialement, Jean-Marie<br/><br/>
                                -------------------<br/>
                                Jean-Marie Kastrel<br/>
                                Labo 53, Rue du Dr Schweitzer, 60200 Compiègne<br/>
                                +33321548482'),
                            array(3,'flandre.pause@utc.fr','Flandre Pause','[cm11] basique','05/29/2019','33 KB','7:33:12 PM CEST', 
                                'Bonsoir !<br/><br/>
                                Suite à un incident, je rappelle qu\'il est formellement interdit de boire les solutions lors des TPs ! MEME LES SOLUTIONS BASIQUES ! (simple)<br/><br/>
                                Je compte sur vous ! (du moins ceux qui sont encore là)<br/><br/>
                                F. Pause '),
                            array(4,'maraine.tannassy@utc.fr','Maraine Tannassy','[mt90] preparation a la premiere PLS','09/24/2018','32 KB','9:25:00 AM CEST',
                                'Bonjour<br/>
                                <br/>
                                Votre premier examen aura lieu en salle A500. Je rappelle que les calculatrices et documents sont interdits ! <br/>
                                Une équipe de secour\'UT sera présente pour vos PLS<br/><br/>
                                Cordialement,<br/>
                                Maraine Tannasy'),
                            array(5,'stephane.branly@etu.utc.fr','Stéphane Branly','[youa] YOUAre the best','01/27/2019','29 KB','9:05:33 AM CEST',
                                'Salut Nouvo !<br/>
                                Voici un aperçu de ta future boite mail, c\'est ici que tu recevras tes premiers résultats, que tu tchatcheras, que tu contacteras les profs et bien plus encore !<br/><br/>
                                Je parle bien d\'un aperçu car en réalité tu es dans un escape game réalisé par un Youa ! Ca m\'a pris pas mal de temps à réfléchir aux différentes enigmes, les concevoir, les tester ! Tout retour est apprécié :) C\'est même pour toi l\'occasion de tester ta vraie boîte mail en essayant de m\'envoyer un petit mail :p (stephane.branly@etu.utc.fr).<br/><br/>
                                Ca me fera beaucoup plaisir de vous rencontrer en vrai ! Bien sûr je compte sur toi pour devenir Youa ! (mais même si tu ne l\'es pas je t\'aimerai quand même :p)<br/><br/>
                                A très bientôt à l\'integ ! (n\'hésite pas à venir me voir !)<br/>
                                Stéphane')
                            );
                        
                            foreach($mails as $un_mail)
                            {

                            echo"<a href='pc_mail.php?mail=$un_mail[0]&mdp=queuedefer&user=Vendetta'><div class='vpRowHoriz vpRow DragElt' id='VProw_6' style='background: none repeat scroll 0% 0%; -moz-user-select: none;'>
                                <div class='msgFrom sep' title='$un_mail[1]'>$un_mail[2]</div>
                                <div class='msgSubject sep' title='$un_mail[3]'>$un_mail[3]</div>
                                <div class='msgDate sep'>$un_mail[4]</div>
                                <div class='msgSize sep'>$un_mail[5]</div>
                            </div></a>";
                            }
                        echo "</div>
                    </div>
                </div>";
                if (isset($_GET['mail']))
                {
                    foreach($mails as $un_mail)
                    {
                        if($_GET['mail']==$un_mail[0])
                        {
                            echo "<div id='previewPane' style='height: 373px;'>
                            <div id='previewMsg' style=''>
                                <div class='msgHeaders'>
                                    <div id='msgHeadersColl'>
                                        <ul class='rightFloat'>
                                            <li>
                                                <div class='date'>$un_mail[4] ($un_mail[6])</div>
                                            </li>
                                            <li>
                                                <a id='preview_other'>
                                                <span class='iconImg' title='Other Options'></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <div class='iconImg' id='th_expand' title='Expand Headers'></div>
                                                <span class='subject allowTextSelection'>$un_mail[3]</span>
                                                from         <span class='from'>$un_mail[2]</span>
                                            </li>
                                        </ul>
                                    </div>
                                <div id='msgHeaders' style='display:none'>
                                    <div>
                                        <span class='subject allowTextSelection'>$un_mail[3]</span>
                                    </div>
                                </div>
                            </div>
                            <div id='messageBody' class='messageBody allowTextSelection'>
                                $un_mail[7]
                            </div>
                        </div>";
                        }
                    }
                }
                echo"
            </div>
        </div>
    </div>";
        }
        else
        {
            echo "<html lang='en-US'><head>
            <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
                  <link href='../design/style_pc.css' rel='stylesheet' type='text/css'> 
             </head>
            
             <body class='modal-form'>
            <div class='modal-form'>
            <label class='extras'>
                <br/><br/>
                Wrong username or password...
                <br/><br/>
            </label>

            <div class='extras'>
             <a href='pc_accueil.php' class='light' title='Back to homepage'>Back to homepage</a>
            </div>
            </form>
            </div>
            
            <br>
            <table width='100%''><tbody><tr><td align='center'>Powered by horde</td></tr></tbody></table>";
        }
?>

<a href='intro.php?debut=0'><div id='quitter_ordi'>Quitter l'ordinateur</div></a>
</body>
</html>