
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
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
</head>
<body>

<h1>Posts</h1>

<table border="1" id="tablaPosts">
  <tr>
    <th>ID</th>
    <th>Título</th>
    <th>Fecha</th>
    <th>User ID</th>
    <th>Contenido</th>
    <th>Imagen URL</th>
    <th>Video URL</th>
    <th>Tags</th>
  </tr>
  <?php echo $response; ?>
</table>

<script>
  // Cargar datos mediante AJAX
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Insertar los datos en la tabla
      document.getElementById("tablaPosts").innerHTML += this.responseText;
    }
  };
  xhr.open("GET", "leetabla.php", true);
  xhr.send();
</script>

</body>
</html>

