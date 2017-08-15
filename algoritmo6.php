<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Area y perimetro deltoide.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

<?php

$Notas = array (4.5,3.9,4.8,5.0,5.0,4.5,0.5,4.9);


$total = 0;
for ($i=0; $i<=count($Notas)-1; $i++) {
    $total += $Notas[$i];
}

$promedio = $total / count($Notas);

echo 'El promedio de las notas del estudiantes es : ' . $promedio;

?>
</div>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
