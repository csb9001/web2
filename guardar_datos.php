<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "id21038354_caar";
$password = "Tu233bf_";
$dbname = "id21038354_xar";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// Insertar los datos en la tabla de la base de datos
$sql = "INSERT INTO tbl_datos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>