
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icono-logo.ico">
    <link rel="stylesheet" href="css/style.css">
    <title>Guardar datos usuario</title>
    <script type="text/javascript" src="JS/funcionesGrupo99.js"></script>
</head>
<body>
<p> <a href="index.html"> Regresar</a> </p>
 
 <!-- Message -->
 <div id="mensaje"></div>

<div class="col-8">
    <div class="text-container">
<?php

$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$direccion = $_POST["correo"];
$user = $_POST["usuario"];
$fechaNac = $_POST["fecNac"];
$pais = $_POST["pais"];
$provincia = $_POST["provincia"];
$contras = $_POST["contraseña"];


echo "  <p>Su Usuario es <strong>$user</strong>.</p>\n";
echo "\n";
echo "  <p>Su nombre es <strong>$nombre</strong>.</p>\n";
echo "\n";
echo "  <p>Su apellido es <strong>$apellido</strong> .</p>\n";
echo "\n";
echo "  <p>Su mail es <strong>$direccion</strong>.</p>\n";
echo "\n";
echo "  <p>Su fecha de nacimiento es <strong>$fechaNac</strong>.</p>\n";
echo "\n";
echo "  <p>Su pais es <strong>$pais</strong>.</p>\n";
echo "\n";
echo "  <p>Su provincia es <strong>$provincia</strong>.</p>\n";
echo "\n";



include("datosDB.php");
$con = mysqli_connect($host,$usuario,$clave,$basededatos) or die ("No se ha podido conectar al servidor de Base de datos");
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}



$db = mysqli_select_db($con, $basededatos) or die ( "Upps! no se ha podido conectar a la base de datos" );
$consulta = "INSERT INTO registro (Nombre, Apellido, Correo, FechaNacimiento, Pais, Provincia, Contraseña, usuario) VALUES ('$nombre', '$apellido', '$direccion', '$fechaNac','$pais', '$provincia', '$contras', '$user')";


if (mysqli_query ($con, $consulta)){
    echo "<h3>REGISTRO AGREGADO.</h3>";
    } else {
    echo "<h3>No se agregó nuevo registro</h3>";
    echo "Error: " . $consulta . "<br>" . mysqli_error($con);
 }
 mysqli_close($con);


?>



<input type='button' class="boton span" value='OK' onclick='paginaRedirect();'> <br/>

</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>