<?php 
include '../controlador/conexion.php';
class queryRegistro{
    public function insertarUsuario($nombre,$contraseña,$usuario)
    {
        $connection = new Conection(); 
        $db = $connection->_getConection(); 
        $sql="INSERT INTO usuario( Nombre, contra, username) VALUES (:Nombre,:contra,:username)";
        $statement = $db->prepare($sql); 
        $statement->bindParam(":Nombre",$nombre);
        $statement->bindParam(":contra",$contraseña);
        $statement->bindParam(":username",$usuario);
        if(!$statement){
            return null; 
        }else{
            $statement->execute();
            
        } 
    }
}
?>