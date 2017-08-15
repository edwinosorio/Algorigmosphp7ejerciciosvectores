<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doble y Triple de un Numero.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">


      <?php
      $horas= array(4, 60, 60);
      $minutos=($horas[0]*$horas[1]);
      $segundos=($horas[1]*$horas[2]*$horas[0]);

      echo "Horas: $horas[0] <br />";
      echo "Horas a Minutos: $minutos <br />";
      echo "Horas a Segundos: $segundos";

       ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
