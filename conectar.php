<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Establecer conexion con la base
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "velas";

    $conn = new mysqli($servername, $username, $password, $dbname);
//verificamos conexion
if($conn ->connect_error){
    die("conexion fallida". $conn->connect_error);

}
//obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];


$sql = "INSERT INTO vendedores(
nombre,
email,
telefono


)
VALUES
(
    '$nombre',
    '$email',
    '$telefono'
    

)";

if($conn-> query($sql)){
    echo "Registro exitoso";
}else {
    echo "Error al registrar empleado: " .$conn->error;
    exit;
}
}