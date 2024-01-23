<?php
$servername = "localhost";
$username = "id20925312_factor";
$password = "U*4rL@b9&zP2";
$dbname = "id20925312_forovilla"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['postId'])) {
    $postId = $_POST['postId'];

    $sql = "SELECT * FROM posts WHERE post_id = $postId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Devuelve la información del post como JSON u otro formato según tus necesidades
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "Post no encontrado.";
    }
}

$conn->close();
?>
