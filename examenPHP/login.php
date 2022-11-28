<?php

if (isset($_POST['enviar'])) {
    $usuario = $_POST['meter_user'];
    $password = $_POST['meter_password'];

    if (empty($usuario) || empty($password)) {
        echo $error = "Debes introducir un usuario y contraseña";
        include "index.php";
    } else {
        if ($usuario == "usuario" && $password == "usuario") {
            session_start();
            $_SESSION['user'] = $usuario;
            $_SESSION['password'] = $password;
            include "main.php";
        } else if ($usuario == "admin" && $password == "admin") {
            session_start();
            $_SESSION['user'] = $usuario;
            $_SESSION['password'] = $password;
            include "mainAdmin.php";
        } else {
            echo $error = "Usuario o contraseña no válidos!";
            include "index.php";
        }
    }
}
?>