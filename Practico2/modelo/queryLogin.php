<?php
include '../controlador/conexion.php';
    class queryLogin{
        public function verificarUsuario($username,$pass)
        {
            $connection = new Conection(); 
            $db = $connection->_getConection(); 
           
            $sql="SELECT username,contra FROM usuario WHERE username=:Username AND contra=:Password";
            $statement=$db->prepare($sql);
            $statement->bindParam(":Username",$username);
            $statement->bindParam(":Password",$pass);
            $statement->execute();
            $contador= $statement->rowCount();
            if ($contador>0) {
                return true;
            }else {
                return false;
            }
        }
        public function getIdUsuario($username,$pass)
        {
            $connection = new Conection(); 
            $db = $connection->_getConection(); 
            $sql="SELECT idusuario FROM usuario WHERE username=:Username AND contra=:Password";
            $statement=$db->prepare($sql);
            $statement->bindParam(":Username",$username);
            $statement->bindParam(":Password",$pass);
            $statement->execute();
            if(!$statement){
                return null;
            }else{
                $statement->execute();
                $resultado = $statement->fetch(PDO::FETCH_ASSOC);
                return $resultado;
                
            }
        }
    }
?>