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
if (isset($_POST['tienda_devops'])) {
$tienda_devops = $conn->real_escape_string($_POST['tienda_devops']);
// Cambia el nombre de la tabla si es necesario
$sql = "INSERT INTO tienda_devops (ID_Cliente, Nombre, Email, Telefono ) VALUES ('$tienda_devops')";



if ($conn->query($sql) === TRUE) {
echo "Tienda guardada exitosamente.";
} else {
echo "guardar la tienda: " . $conn->error;
}
} else {
echo "Tienda guardada exitosamente.";
}
}
$conn->close();
?>