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
        $lados=array(5, 5, 8, 8);
        $area=($lados[1]*$lados[3])/2;
        $perimetro=($lados[2]+$lados[0])*2;

        echo "Area del Deltoide: $area <br />";
        echo "Perimetro de Deltoide: $perimetro";


       ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
