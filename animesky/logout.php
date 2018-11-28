<?php
session_start();
/* Si l'usuari no està registrat redirigim a index.php */
session_start();
if(!isset($_SESSION["username"])) header("Location: index.php");
// Si està registrat procedim a tancar la sessió
// Esborrem tota la informació
$_SESSION = array();
// I les cookies pròpies de l'aplicació


  
// I finalment destruïm la sessió
session_destroy();
// I tornem a la pàgina principal
header("Location: index.php");
exit();
?>