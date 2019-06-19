<html>
<head>
	<link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
	<meta charset="UTF-8">
</head>

<body onmousemove="avoircoordonnees(event);">
    <script type="text/javascript" src="../services/maths2d.js"></script>
    <script type="text/javascript" src="../services/coffre_fort.js"></script>
	<section>
        <img onDragStart="return false" onmousemove="tourner_serrure(event);" id='serrure1' class='serrure_coffre' src='../ressources/Serrure_coffre_fort.png'/>
        <p id='coord_clic'>Coordonnées : x ; y </p>
        <p id='coord_clic_maintenu'>Coordonnées : x ; y </p>
        <p id='status'></p>
        <p id='distance'>a</p>
        <p id='angleini'>a</p>
        <p id='angleact'>a</p>
    </section>
    <section>
        <p id='coord'>Coordonnées : x ; y </p>
    </section>
</body>
</html>

