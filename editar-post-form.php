<?php
$servername = "localhost";
$username = "id20925312_factor";
$password = "U*4rL@b9&zP2";
$dbname = "id20925312_forovilla"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $postId = $_GET['id'];

    $sql = "SELECT * FROM posts WHERE post_id = $postId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Muestra el formulario de edición con los campos prellenados
        $row = $result->fetch_assoc();
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="estilo-formulario.css">
            <title>Editar Post</title>
        </head>
        <body>
            <form id="editPostForm" action="actualizar-post.php" method="post">
                <!-- Campos de edición prellenados con la información actual del post -->
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>" required>

                <!-- Repite lo mismo para los demás campos -->

                <input type="hidden" name="postId" value="<?php echo $postId; ?>">
                
                <button type="button" onclick="actualizarPost()">Actualizar Datos</button>
            </form>

            <script>
                function actualizarPost() {
                    const form = document.getElementById('editPostForm');
                    const formData = new FormData(form);

                    fetch('actualizar-post.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(message => {
                        alert(message);
                    })
                    .catch(error => {
                        console.error('Error al actualizar datos:', error);
                    });
                }
            </script>
        </body>
        </html>
<?php
    } else {
        echo "Post no encontrado.";
    }
}

$conn->close();
?>
