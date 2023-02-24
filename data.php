<?php
#check if session exist
include "backend/database.php";
session_start();
if (isset($_SESSION['id'])) {
    #get data from database
    $sql = "SELECT * FROM usuarios WHERE id = $_SESSION[id]";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $username = $row['usuario'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $dni = $row['dni'];
            $address = $row['addres'];
        }
    }
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuario: <?php echo $username; ?></h1>
    <h1>Nombre: <?php echo $nombre; ?></h1>
    <h1>Apellido: <?php echo $apellido; ?></h1>
    <h1>DNI: <?php echo $dni; ?></h1>
    <h1>Dirección: <?php echo $address; ?></h1>
    <a href="backend/logout.php">Logout</a>
</body>
</html>
