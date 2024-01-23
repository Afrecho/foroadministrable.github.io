<?php

$servername = "localhost";
$username = "id20925312_factor";
$password = "U*4rL@b9&zP2";
$dbname = "id20925312_forovilla";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$titulo = $_POST['titulo'];
$fecha = date('Y-m-d');
$user_id = $_POST['user_id'];
$contenido = $_POST['contenido'];
$video_url = $_POST['video_url'];
$tags = $_POST['tags'];

$imagen_dir = "imgUpload/";
$imagen_nombre = $_FILES['imagen']['name'];
$imagen_temp = $_FILES['imagen']['tmp_name'];
$imagen_ruta = $imagen_dir . $imagen_nombre;

if (move_uploaded_file($imagen_temp, $imagen_ruta)) {
    $sql = "INSERT INTO posts (titulo, fecha, user_id, contenido, imagen_url, video_url, tags)
            VALUES ('$titulo', '$fecha', $user_id, '$contenido', '$imagen_ruta', '$video_url', '$tags')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos ingresados con éxito.";
    } else {
        echo "Error en la inserción: " . $conn->error;
    }
} else {
    echo "Error al subir la imagen.";
}

$conn->close();
?>
