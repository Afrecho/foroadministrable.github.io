
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
$imagen_url = $_POST['imagen_url'];
$video_url = $_POST['video_url'];
$tags = $_POST['tags'];


$sql = "INSERT INTO posts (titulo, fecha, user_id, contenido, imagen_url, video_url, tags)
        VALUES ('$titulo', '$fecha', $user_id, '$contenido', '$imagen_url', '$video_url', '$tags')";

if ($conn->query($sql) === TRUE) {
    echo "Datos ingresados con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// chau mrd
$conn->close();
?>
