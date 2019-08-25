<?php
    session_start();
    $_SESSION["page_actu"]="pc_accueil.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <link href="../design/style_pc.css" rel="stylesheet" type="text/css"> 
 </head>

 <body class="modal-form">
<div class="modal-form">


<form name="horde_login" id="horde_login" method="post" action="pc_mail.php">

<div><label for="horde_user">Username</label></div>
<div>
 <input type="text" autocapitalize="off" autocorrect="off" id="horde_user" name="horde_user" style="direction:ltr">
</div>
<div><label for="horde_pass">Password</label></div>
<div>
 <input type="password" id="horde_pass" name="horde_pass" value="" style="direction:ltr">
</div>
<div id="horde-login-pass-capslock" style="display:none">
 Warning: Your Caps Lock key is on!</div>
<div id="horde_select_view_div" style="">
 <div><label for="horde_select_view">Mode</label></div>
 <div>
  <select id="horde_select_view" name="horde_select_view">
   <option value="auto">Automatic</option>
  </select>
 </div>
</div>

<div><label for="new_lang">Language</label></div>
<div><select id="new_lang" name="new_lang">
        <option value="en_US" selected="selected">‭English</option>
		<option value="en_US">‭Anglais</option>
		<option value="en_US">‭Inglesa</option>
</select></div>

<div>
 <input id="login-button" name="login_button" class="horde-default submit-button" value="Log in" type="submit">
</div>


<div class="extras">

 <a href="pc_mdp_oublie.php" class="light" title="Forgot your password?">Forgot your password?</a>
</div>

</form>
</div>

<br>
<table width="100%"><tbody><tr><td align="center">Powered by Horde</td></tr></tbody></table>

<a href='intro.php'><div id='quitter_ordi'>Quitter l'ordinateur</div></a>
<div id='info_simulation'>C'est un jeu (NE PAS mettre ses identifiants persos)</div>
</body></html>