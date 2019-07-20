<html>
    <head>
        <link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <section id='main'>
            <div id='taxi'>
                <div id='destination'>
                    <form action="taxi.php" method="post">
                        Bonjour Vendetta, je vous emmène où ?<br/><br/>
                        <label for="address">Adresse : </label><br/>
                        <input type="text" autocapitalize="off" autocorrect="off" id="address" name="address"><br/><br/>
                        <input class="submit_button" name="login_button" value="Demander" type="submit">
                    </form>
                    <?php
                        if(isset($_POST['address']))
                        {
                            if($_POST['address']=='Labo 53, Rue du Dr Schweitzer, 60200 Compiègne')
                            {
                                echo "<div id='Reponse'>Il y a 5 minutes de trajet, vous voulez y aller ? <a href=''><input class='submit_button' value=\"C'est parti\"></a></div>";
                            }
                            else
                            {
                                $excuse = array("Mince, je n'arrive pas à trouver cette adresse...",
                                "Je crois que cette adresse n'existe pas...",
                                "Il n'y a pas cette adresse dans Compicity",
                                "Vous êtes sûr de l'adresse ?! C'est à 450km !",
                                "Vous devriez vérifier l'adresse");
                                $rand_excuse = array_rand($excuse, 1);
                                echo "<div id='reponse'>$excuse[$rand_excuse]</div>";
                            }
                        }
                    ?>
                </div>
                <a href='intro.php?debut=0'><p class='fleche fleche_left' title='Rentrer au studio'></p></a>
            </div>
        </section>
    </body>
</html>

<script type="text/javascript" src="../services/general.js"></script>
<script type="text/javascript" src="../services/intro.js"></script>