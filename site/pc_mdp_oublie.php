<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <link href="../design/style_pc.css" rel="stylesheet" type="text/css"> 
 </head>

 <body class="modal-form">
<div class="modal-form">

<form name="horde_login" id="horde_login" method="post" action="pc_mdp_oublie.php">
<div class="horde-form-header">Forgot your password ?</div>
<div><label for="horde_user">Username</label></div>
<div>
 <input type="text" autocapitalize="off" autocorrect="off" id="horde_user" name="horde_user" style="direction:ltr">
</div>
<div>
 <input id="login-button" name="login_button" class="horde-default submit-button" value="Ask" type="submit">
</div>
<?php
    if(isset($_POST['horde_user']))
    {
        if($_POST['horde_user']=='wesh')
        {
            echo "<div class='extras'>Help: première attaque pikachu</div>";
        }
        else
        {
            echo "<div class='extras'>Help: can't help you with this username, sorry</div>";
        }
    }
?>
<div class="extras">
 <a href="PC_accueil.php" class="light" title="Back to homepage">Back to homepage</a>
</div>
</form>
</div>

<br>
<table width="100%"><tbody><tr><td align="center">Powered by horde</td></tr></tbody></table>

<a href='intro.php?debut=0'><div id='quitter_ordi'>Quitter l'ordinateur</div></a>
</body>
</html>