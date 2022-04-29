<?php 
include '../controlador\conexion.php';

class QueryEvento{

    public function getEventos(){
        $model = new Conection();
        $connection  = $model->_getConection();
        $sql = "SELECT * FROM evento";
        $sentencia= $connection->prepare($sql);

        if(!$sentencia){
            return null;
        }else{
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
            
        }
    }
    public function getEventoByID($idEvento){
        $model = new Conection();
        $connection  = $model->_getConection();
        $sql = "SELECT * FROM evento WHERE IdEvento = :id";
        $sentencia= $connection->prepare($sql);
        $sentencia->bindParam(":id", $idEvento); 
        if(!$sentencia){
            return null;
        }else{
            $sentencia->execute();
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $resultado;
            
        }
    }
    public function getEventoByIDUsuario($idUsuario){
        $model = new Conection();
        $connection  = $model->_getConection();
        $sql = "SELECT * FROM evento WHERE idusuario =:id  ORDER BY Fecha DESC ";
        $sentencia= $connection->prepare($sql);
        $sentencia->bindParam(":id", $idUsuario); 
        if(!$sentencia){
            return null;
        }else{
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
            
        }
    }

    public function insertEvento($titulo, $descripcion, $fecha, $idUsuario){
        $model = new Conection();
        $connection  = $model->_getConection();
        $sql = "INSERT INTO evento (Titulo, Descripcion, Fecha, idusuario) VALUES(:titulo,:descripcion,:fechas,:idusuario) ";
        $sentencia= $connection->prepare($sql);
        $sentencia->bindParam(":titulo", $titulo);
        $sentencia->bindParam(":descripcion", $descripcion);
        $sentencia->bindParam(":fechas", $fecha);
        $sentencia->bindParam(":idusuario", $idUsuario);
        if(!$sentencia){
            return false;
        }else{
            $sentencia->execute();
            return true;
        }
    }

    public function updateEvento( $titulo, $descripcion, $fecha, $id){


        $model = new Conection();
        $connection  = $model->_getConection();
        $sql = "UPDATE evento SET Titulo = :titulo, Descripcion = :descripcion, Fecha = :fechas WHERE idEvento = :id";
        $sentencia= $connection->prepare($sql);
        $sentencia->bindParam(":titulo", $titulo);
        $sentencia->bindParam(":descripcion", $descripcion);
        $sentencia->bindParam(":fechas", $fecha);
        $sentencia->bindParam(":id", $id);
        if(!$sentencia){
            return false;
        }else{
            $sentencia->execute();
            return true;
        }
    }
    public function deleteEvento($id){
        $model = new Conection();
        $connection  = $model->_getConection();
        $sql = "DELETE FROM evento WHERE idEvento = :id";
        $sentencia= $connection->prepare($sql);
        $sentencia->bindParam(":id", $id);
        if(!$sentencia){
            return false;
        }else{
            $sentencia->execute();
            return true;
        }
    }

}

?>