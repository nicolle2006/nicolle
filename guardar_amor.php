<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario por defecto en XAMPP
$password = "";     // Contraseña por defecto en XAMPP (normalmente vacía)
$dbname = "porcentaje"; // Tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el valor del formulario
$porcentaje_amor = $_POST['porcentaje_amor'];

// Insertar el valor en la base de datos
$sql = "INSERT INTO niveles_amor (porcentaje) VALUES ('$porcentaje_amor')";

if ($conn->query($sql) === TRUE) {
    echo "Nivel de amor guardado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>