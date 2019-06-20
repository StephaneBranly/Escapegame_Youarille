<html>
<head>
	<link href="../design/style.css" rel="stylesheet" media="all" type="text/css">
	<meta charset="UTF-8">
</head>

<body onmousemove="avoircoordonnees(event);">
	<section id='main'>
        <div id='les_serrures_coffre'>
            <img onDragStart="return false" onmousemove="tourner_serrure(event,0);" id='serrure0' class='serrure_coffre' src='../ressources/images/Serrure_coffre_fort.png'/>
            <img onDragStart="return false" onmousemove="tourner_serrure(event,1);" id='serrure1' class='serrure_coffre' src='../ressources/images/Serrure_coffre_fort.png'/>
            <img onDragStart="return false" onmousemove="tourner_serrure(event,2);" id='serrure2' class='serrure_coffre' src='../ressources/images/Serrure_coffre_fort.png'/>
            <img onDragStart="return false" onmousemove="tourner_serrure(event,3);" id='serrure3' class='serrure_coffre' src='../ressources/images/Serrure_coffre_fort.png'/>
        </div>
    </section>
    <section id='text_section'>
        <p id='coord'>Coordonnées : x ; y </p>
        <form>
            <input type='number' id='angle0'/>
            <input type='number' id='angle1'/>
            <input type='number' id='angle2'/>
            <input type='number' id='angle3'/>
        </form>
    </section>
    
</body>
</html>

<script type="text/javascript" src="../services/elements_infos.js"></script>
<script type="text/javascript" src="../services/maths2d.js"></script>
<script type="text/javascript" src="../services/coffre_fort.js"></script>