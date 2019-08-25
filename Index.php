<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<link href="./design/style.css" rel="stylesheet" media="all" type="text/css">
	<link rel="icon" href="./Ressources/images/favicon.ico" type="image/x-icon"/>
    <head>
        <title>Youarille Escape Game - UTC</title>
        <meta charset="UTF-8">
	</head>
	
	<frameset COLS = "100%" ROWS="auto">
		<?php 
			if(isset($_SESSION["page_actu"]))
			{
				$derniere_page=$_SESSION["page_actu"];
			}
			else
			{
				$derniere_page="intro.php";
			}
			echo "<frame src='./site/$derniere_page' name='game'>";
		?>
	</frameset>
</html>

<script type="text/javascript" src="services/index.js"></script>