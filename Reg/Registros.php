<?php 

$nombre=$_POST['nombre'];
$apeP=$_POST['apeP'];
$apeM=$_POST['apeM'];
$correo=$_POST['correo'];
$poblacion=$_POST['poblacion'];
$provincia=$_POST['provincia'];
$edad=$_POST['edad'];
$com=$_POST['com'];
$com2=$_POST['com2'];
$com3=$_POST['com3'];
$hora=$_POST['hora'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=width, initial-sacle=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <style type="text/css">
  *{
font-family: Comic Sans Ms;
background: #FF0099;  
background: -webkit-linear-gradient(to right, #493240, #FF0099);
background: linear-gradient(to right, #493240, #FF0099);
margin: 1;
padding: 2;
box-sizing: border-box;
text-align: center;
  }

 </style>
    <title>Tabla</title>
</head>
<center><body  text="white">
  <div class="re" >
  <h2>Datos Ingresados</h2>
  <p>Nombre: <?php echo "$nombre";?> </p>
  <p>Apellido Paterno: <?php echo "$apeP";?> </p>
  <p>Apellido Materno: <?php echo "$apeM";?> </p>
  <p>Correo: <?php echo "$correo";?> </p>
  <p>Poblacion: <?php echo "$poblacion";?> </p>
  <p>Provincia: <?php echo "$provincia";?> </p>
  <p>Edad: <?php echo "$edad";?> </p>
  <p>Como nos conocio: <?php echo "$com";?> </p>
  <p>Cual es tu expectativa al terminar el curso de programacion: <?php echo "$com2";?> </p>
  <p>Sugerencia: <?php echo "$com3";?> </p>
  <p>Tiempo en internet: <?php echo "$hora";?> </p>

  </div>

<p style="font-size: 20px; color: yellow;">Los css no cargaron en el formulario, no se por que, pero bueno el funcionamiento es el mismo:)</p>
</body></center>
</html>

