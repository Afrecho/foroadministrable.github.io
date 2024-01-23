

<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "id20925312_factor";
$password = "U*4rL@b9&zP2";
$dbname = "id20925312_forovilla"; 


$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT post_id, titulo, fecha, contenido FROM posts ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["post_id"]."__".$row["titulo"]."_".$row["fecha"]."__".$row["contenido"]."<br>";
    }
} else {
    echo "Nadies escribio nada pipipipi";
}

mysqli_close($conn);
?>