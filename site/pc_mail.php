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
        if(preg_match('/[Qq]ueue(.|)de(.|)[Ff]er/',$mdp) && $user=='Vendetta')
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
                        <div class='msglist' style='width: auto;'>
                            <a href='pc_mail.php?mail=1&mdp=queuedefer&user=Vendetta'><div class='vpRowHoriz flagList vpRow DragElt' id='VProw_1' style='-moz-user-select: none;'>
                                <div class='msgFrom sep' title='elhajjah@utc.fr'>Ahmad EL HAJJ</div>
                                <div class='msgSubject sep' title='[mt22] exercices corrigés'>[mt22] exercices corrigés</div>
                                <div class='msgDate sep'>09:51:10 PM</div>
                                <div class='msgSize sep'>4.6 MB</div>
                            </div></a>
                            <a href='pc_mail.php?mail=2&mdp=queuedefer&user=Vendetta'><div class='vpRowHoriz flagAnswered flagPersonal vpRow DragElt' id='VProw_4' style='background: rgb(204, 255, 204) none repeat scroll 0% 0%; -moz-user-select: none;'>
                                <div class='msgFrom sep' title='bvidolov@utc.fr'>bvidolov</div>
                                <div class='msgSubject sep' title='RE: TN05 - Votre resultat'>RE: TN05 - Votre resultat</div>
                                <div class='msgDate sep'>06/21/2019</div>
                                <div class='msgSize sep'>13 KB</div>
                            </div></a>
                            <a href='pc_mail.php?mail=3&mdp=queuedefer&user=Vendetta'><div class='vpRowHoriz flagHighpriority flagList vpRow DragElt' id='VProw_6' style='background: rgb(255, 204, 204) none repeat scroll 0% 0%; -moz-user-select: none;'>
                                <div class='msgFrom sep' title='marie-anne.traisnel@utc.fr'>Marie-Anne Traisnel</div>
                                <div class='msgSubject sep' title='[ingenieur-p2019] RAPPEL attention annonce vague de forte chaleur la semaine prochaine'>[ingenieur-p2019] RAPPEL attention annonce vague de forte chaleur la semaine prochaine</div>
                                <div class='msgDate sep'>06/21/2019</div>
                                <div class='msgSize sep'>19 KB</div>
                            </div></a>
                            <a href='pc_mail.php?mail=4&mdp=queuedefer&user=Vendetta'><div class='vpRowHoriz flagPersonal vpRow DragElt' id='VProw_7' style='-moz-user-select: none;'>
                                <div class='msgFrom sep' title='cap+messages_moodle@utc.fr'>Merci de ne pas répondre à ce courriel (via moodle.utc.fr)</div>
                                <div class='msgSubject sep' title='Vous avez remis votre travail pour le devoir Dépôt du troisième rapport de TP'>Vous avez remis votre travail pour le devoir Dépôt du troisième rapport de TP</div>
                                <div class='msgDate sep'>06/20/2019</div>
                                <div class='msgSize sep'>4 KB</div>
                            </div></a>
                        </div>
                    </div>
                </div>
                <div id='previewPane' style='height: 373px;'>
                    <div id='previewMsg' style=''>
                        <div class='msgHeaders'>
                            <div id='msgHeadersColl'>
                                <ul class='rightFloat'>
                                    <li>
                                        <div class='date'>06/21/2019 (12:59:41 PM CEST)</div>
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
                                        <span class='subject allowTextSelection'>Re: [mt22] P18</span>
                                        from         <span class='from'>Ahmad EL HAJJ</span>
                                    </li>
                                </ul>
                            </div>
                        <div id='msgHeaders' style='display:none'>
                            <div>
                                <span class='subject allowTextSelection'>Re: [mt22] P18</span>
                            </div>
                        </div>
                    </div>
                    <div id='messageBody' class='messageBody allowTextSelection'>
                        Contenu du mail
                    </div>
                </div>
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
             <a href='PC_accueil.php' class='light' title='Back to homepage'>Back to homepage</a>
            </div>
            </form>
            </div>
            
            <br>
            <table width='100%''><tbody><tr><td align='center'>Powered by horde</td></tr></tbody></table>";
            echo "";
        }
?>

<a href='intro.php?debut=0'><div id='quitter_ordi'>Quitter l'ordinateur</div></a>
</body>
</html>