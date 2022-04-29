<?php
session_start();
$usuario= $_SESSION['username'];
$idUsuario=$_SESSION['idUsuario'];
echo $usuario."  ".$idUsuario;

?>