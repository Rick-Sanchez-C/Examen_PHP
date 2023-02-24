<?php
include "database.php";
#getdatafrom post
$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$address = $_POST['address'];
$password = password_hash($password, MHASH_MD5);

#check if user exists
$sql = "SELECT * FROM usuarios WHERE usuario = '$username'";
$result = mysqli_query($conn, $sql);
#if user not exist register
if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO usuarios (usuario, password, nombre, apellido, dni, addres)
    VALUES ('$username', '$password', '$nombre', '$apellido', '$dni', '$address')";
    if (mysqli_query($conn, $sql)) {
        echo "Usuario registrado correctamente";
        sleep(5);
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Usuario ya existente";
    header("Location: ../index.php");
}
?>