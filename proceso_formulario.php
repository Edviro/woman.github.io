<?php
$conexion = new mysqli("localhost", "root", "", "mensajes");
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}
?>
<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
$conexion->query($sql);
?>
