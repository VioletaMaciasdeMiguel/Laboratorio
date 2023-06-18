<?php
 if($_POST){
    $nombre =$_POST['nombre'];
    $apellido1 =$_POST['primer_apellido'];
    $apellido2 =$_POST['segundo_apellido'];
    $login =$_POST['login'];
    $password_user =$_POST['password'];
    $email =$_POST['email'];

    
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="usuario";

$conn = new mysqli($servername, $username, $password, $dbname);

function sololetras($text){
    $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    return preg_match($pattern, trim($text));
}

function mail_repetido($m){
    $query = "SELECT * FROM TABLEFORM WHERE mail='$m'";
    $resultado = $conn->query($query);
    if ($resultado->num_rows > 0) {
        return true;
      }
    else{
        return false;
    }
}  

if (empty($nombre)){
    echo "Es necesario introducir un nombre.";
} elseif (empty($email)){
    echo "Es necesario un mail.";
} elseif(empty($apellido1)){
    echo "Es necesario introducir un apellido.";
} elseif(empty($apellido2)){
    echo "Es necesario introducir un apellido.";
} elseif(empty($login)){
    echo "Es necesario introducir un nombre de login.";
} elseif(empty($password_user)){
    echo "Es necesario establecer una contraseña.";
}  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "{$email} no es un mail correcto, revise el formato.";
}  elseif(mail_repetido($email)) {
    echo "{$email} Este mail ya fue registrado.";
} elseif(!sololetras($nombre)){
    echo"{$nombre} no es un nombre correcto, este campo solo se permite letras, revise el formato.";
} elseif(!sololetras($apellido1)){
    echo"{$apellido1} no es un apellido correcto, este campo solo se permite letras, revise el formato.";
} elseif(!sololetras($apellido2)){
    echo"{$apellido2} no es un apellido correcto, este campo solo se permite letras, revise el formato.";
} elseif(4>strlen($password_user) || strlen($password_user)>8){
    echo"La contraseña debe tener entre 4 y 8 caracteres.";
}

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios(nombre, apellido1, apellido2, email, contrasenia
VALUES ('$nombre', '$apellido1', '$apellido2', '$email', '$password_user')";

if($conn->query($sql) === TRUE){
    echo "Registro completado con éxito";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>