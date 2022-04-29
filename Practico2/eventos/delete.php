<?php
session_start();
$usuario= $_SESSION['username'];
$idUsuario=$_SESSION['idUsuario'];
$id= $_GET['id'];
include '../modelo/queryEvento.php';

if(!empty($_GET)){
    $query = new QueryEvento;
    $query->deleteEvento($id);
    header("location:lineaDetiempo.php");
}
?>