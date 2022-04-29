<?php

class Conection{

    public function _getConection(){

        

        //SERVIDOR LOCALHOST
        $user = "root";
        $pass = "";
        $host = "localhost";
        $db = "eventos";
        
        try{
            $conectar = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
            //echo "Conexion lograda"; 
        }catch(PDOException $e){
            echo $e->getMessage(); 
           // echo "error al conectar";
        }
        
        
        return $conectar;
    }
}

?>