<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "id20925312_factor";
$password = "U*4rL@b9&zP2";
$dbname = "id20925312_forovilla"; 


$conn = new mysqli($servername, $username, $password, $dbname);


// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla 'posts'
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

// Construir la respuesta en formato HTML
$response = "";
while ($row = $result->fetch_assoc()) {
    $response .= "<tr>
        <td>{$row['post_id']}</td>
        <td>{$row['titulo']}</td>
        <td>{$row['fecha']}</td>
        <td>{$row['user_id']}</td>
        <td>{$row['contenido']}</td>
        <td>{$row['imagen_url']}</td>
        <td>{$row['video_url']}</td>
        <td>{$row['tags']}</td>
    </tr>";
}

// Cerrar la conexión
$conn->close();

// Devolver la respuesta
echo $response;
?>