<!doctype html>
<html>
<head>
    <title>Temperatura</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
//A parte de for(), existe el while(): ciclo mientras
$temperatura = 0;
//a diferencia del for(), el while () requerie indicar el contador o sumador
//mientras más próximo al valor 100 pintar en  un tono rojo más fuerte
while($temperatura <= 255){
    echo"<span style='color :rgb($temperatura,0,0);'>La temperatura es:  $temperatura </span>";
    $temperatura++;
}
?>
</body>
</html>
