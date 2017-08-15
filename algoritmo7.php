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
      $p_neta = array(160, 20000, 800000);
      $r=($p_neta[0]*$p_neta[1]-$p_neta[2]);

      echo "Horas Trabajadas: $p_neta[0] <br />";
      echo "Tarifa de Horas: $p_neta[1] <br />";
      echo "Impuestos: $p_neta[2] <br />";
      echo "Paga Neta: $r";


       ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
