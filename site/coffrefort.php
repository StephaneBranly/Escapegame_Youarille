<html>
<head>
	<link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
	<meta charset="UTF-8">
</head>

<body onmousemove="avoircoordonnees(event);">
	<section>
        <img onDragStart="return false" onmousemove="tourner_serrure(event,0);" id='serrure0' class='serrure_coffre' src='../ressources/Serrure_coffre_fort.png'/>
        <img onDragStart="return false" onmousemove="tourner_serrure(event,1);" id='serrure1' class='serrure_coffre' src='../ressources/Serrure_coffre_fort.png'/>
        <img onDragStart="return false" onmousemove="tourner_serrure(event,2);" id='serrure2' class='serrure_coffre' src='../ressources/Serrure_coffre_fort.png'/>
        <img onDragStart="return false" onmousemove="tourner_serrure(event,3);" id='serrure3' class='serrure_coffre' src='../ressources/Serrure_coffre_fort.png'/>
        <!--<p id='coord_clic'>Coordonnées : x ; y </p>
        <p id='coord_clic_maintenu'>Coordonnées : x ; y </p>
        <p id='status'></p>
        <p id='distance'>a</p>
        <p id='angleini'>a</p>
        <p id='angleact'>a</p>-->
    </section>
    <section>
        <p id='coord'>Coordonnées : x ; y </p>
    </section>
</body>
</html>

<script type="text/javascript" src="../services/elements_infos.js"></script>
<script type="text/javascript" src="../services/maths2d.js"></script>
<script type="text/javascript" src="../services/coffre_fort.js"></script>