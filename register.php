<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location: data.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!-- POST TO register.php -->
<form action="backend/register.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="text" name="dni" placeholder="DNI">
    <input type="text" name="address" placeholder="address">
    <input type="submit" name="submit">
</form>
</body>
</html>