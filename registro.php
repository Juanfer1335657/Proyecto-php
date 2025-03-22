<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "tienda_devops";
$conn = new mysqli($servidor, $usuario, $password, $basededatos);
// Verificar conexión
if ($conn->connect_error) {
die("Error de conexión: " . $conn->connect_error);
}
// Verificar si se recibió el dato del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['telefono'])) {
$nombre = $conn->real_escape_string($_POST['nombre']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);

// Cambia el nombre de la tabla si es necesario
$sql = "INSERT INTO cliente (Nombre, Email, Telefono ) VALUES ('$nombre', '$email', '$telefono')";



if ($conn->query($sql) === TRUE) {
echo "Cliente guardado exitosamente.";
} else {
echo "guardar cliente" . $conn->error;
}
} else {
echo "cliente guardado";
}
}
$conn->close();
?>