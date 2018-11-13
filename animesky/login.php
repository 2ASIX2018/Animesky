<?php
session_start();

// Logins validos
$users=["admin","user"];

// Variables del formulario
$user=$_REQUEST["name"];
$pass=$_REQUEST["password"];

// Comprobación de usuario y contraseña
if ($pass=="123456789" && in_array($users, $user)) {

    

    // Rol del usuario que inicia sesión

    $_SESSION['username']=$user;

    if ($user=="admin")
        $_SESSION['role'] = "admin";
    else if ($user=="user")
        $_SESSION['role'] = "user";
}

header ("Location: index.php");
?>
