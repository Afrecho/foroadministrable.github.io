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

// Consulta SQL para obtener los datos de la tabla 'posts' ordenados por ID en orden descendente
$sql = "SELECT * FROM posts ORDER BY post_id DESC";
$result = $conn->query($sql);

// Construir la respuesta en formato HTML
$response = "";
while ($row = $result->fetch_assoc()) {
    $fechaFormateada = date("d-m-Y", strtotime($row['fecha']));

    
    $response .= "<div class=\"post\">
                    <div class=\"miniatura\">
                        <img src=\"{$row['imagen_url']}\" alt=\"Imagen del post\">
                    </div>
                    <div class=\"contenidoMin\">
                        <div class=\"tiuloCajaPost\">
                            <h2 class=\"tituloPost\">{$row['titulo']}</h2>
                        </div>
                        <div class=\"postCajaFecha\">
                            <p class=\"fechapost\">{$fechaFormateada}</p>
                        </div>
                        <div class=\"nota\">
                            <p class=\"articuloCont\">{$row['contenido']}</p>
                        </div>
                        <div class=\"leer-mas\" onclick=\"expandirNota('nota1')\">Leer más . . . </div>
                    </div>
                </div>";
}

// Cerrar la conexión
$conn->close();

// Devolver la respuesta
echo $response;
?>
