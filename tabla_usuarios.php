<?php
if($_POST){ 
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="usuario";

$conn = new mysqli($servername, $username, $password, $dbname);

echo "<table id='tabla' class='table table-striped'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Apellido1</th>";
echo "<th>Apellido2</th>";
echo "<th>Email</th>";
echo "<th>Nombre de Usuario</th>";
echo "</tr>";

$consulta = "SELECT nombre, primer_apellido, segundo_apellido, email, login FROM usuario";
$consultado = mysqli_query($conn, $consulta);

$personas = [];
while($row = mysqli_fetch_assoc($consultado)) {
    $personas[] = $row;
    echo "<tr>";
    echo "<td>" .$row["nombre"] ."</td>";
    echo "<td>" .$row["primer_apellido"] ."</td>";
    echo "<td>" .$row["segundo_apellido"] ."</td>";
    echo "<td>" .$row["email"] ."</td>";
    echo "<td>" .$row["login"]."</td>";
    echo "</tr>";
}
echo "</table>";

$conn->close();
}
?>











$consulta = "SELECT * FROM usuario";

$usuarios = mysqli_query($conexion, $consulta);
echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Registro completado</title>
        <link href='https://fonts.googleapis.com/css2?family=Raleway:wght@300;600&family=Roboto:wght@300&display=swap'
            rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'
            integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
        <link rel='stylesheet' type='text/css' href='estilos.css'>
    </head>
    
    <body class='fondo'>
    <div class='formulario container form-control py-4 shadow'>
        <table class='table table-striped' >
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Nombre de Usuario</th>
            </tr>";
while ($fila = mysqli_fetch_array($usuarios)) {
    echo "<tr>";
    echo "<td>" .$fila["nombre"] ." " .$fila["primerApellido"] ." " .$fila["segundoApellido"] ."</td>";
    echo "<td>" .$fila["email"] ."</td>";
    echo "<td>" .$fila["login"]."</td>";
    echo "</tr>";
}
$conexion->close();