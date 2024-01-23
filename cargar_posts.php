<?php

$servername = "localhost";
$username = "id20925312_factor";
$password = "U*4rL@b9&zP2";
$dbname = "id20925312_forovilla"; 


$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
  die("Conexión fallida: " . mysqli_connect_error());  
}


$query = "SELECT id, titulo, fecha, contenido FROM posts ORDER BY id DESC LIMIT 1";


$resultado = mysqli_query($conexion, $query);


$post = mysqli_fetch_assoc($resultado);


if(!$post){
    $respuesta = array(
        'error' => 'No hay posts'
    );
    
    echo json_encode($respuesta);
    die();
}


$respuesta = array(
    'id' => $post['id'],
    'titulo' => $post['titulo'],
    'fecha' => $post['fecha'],
    'contenido' => $post['contenido'] 
);

echo json_encode($respuesta);
  
?>
