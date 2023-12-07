<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carros";


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : "";
$correo_electronico = isset($_POST['correo_electronico']) ? $_POST['correo_electronico'] : "";
$edad = isset($_POST['edad']) ? $_POST['edad'] : "";

// Insertar datos en la base de datos
$sql = "INSERT INTO carros (nombre, apellidos, correo_electronico, edad) VALUES ('$nombre', '$apellidos', '$correo_electronico', $edad)";


if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
