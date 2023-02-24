<?php
include 'backend/database.php';
session_start();
#if session set redirect to data.php
if (isset($_SESSION['id'])) {
    header("Location: data.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<!-- CREATE FORM TO login.php-->
<form action="backend/login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>                                		                            