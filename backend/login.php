<?php
include "database.php";
#getdatafrom post
$username = $_POST['username'];
$password = $_POST['password'];
#check if user exists
$sql = "SELECT * FROM usuarios WHERE usuario = '$username'";
$result = mysqli_query($conn, $sql);
#if user exist password_verify
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            echo "Login correcto";
            #set session to user id
            session_start();
            $_SESSION['id'] = $row['id'];
            header("Location: ../index.php");
        } else {
            echo "Login incorrecto";
        }
    }
} else {
    echo "Usuario no existente";
    header("Location: ../register.php");
}
?>