<?php 
session_start();
$usuario= $_SESSION['username'];
$idUsuario=$_SESSION['idUsuario'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Eventos</title>
    <link rel="stylesheet" href="../css/eventos.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-xs-1-12 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                <div class="row">
               
                </div>
                <form action="" method="post">
                    <div class="mb-4" >
                     <label for="txtNombre" class="form-label">Ingrese el titulo del evento</label>
                    <input type="text"  class="form-control" name="titulo" id="titulo">
                    </div>
                   
                   
                    <div class="mb-4" >
                     <label for="txtUsuario" class="form-label">Ingrese descripción del evento</label>
                    <input type="text"  class="form-control" name="descripcion" id="descripcion">
                    </div>
                    <div class="mb-4" >
                 
                    </div>

                    <div class="mb-4" >
                    <label for="txtContra" class="form-label">Ingrese Fecha de Evento</label>
                    <input type="date"  class="form-control" name="fechas" id="fechas">
                    </div>
                    <div id="alerta">
                    </div>
                    
                    <button type="submit" name="submit" id="enviar" class="btn btn-success w-100">Crear Evento</button>
                    <?php
                        include '../modelo/queryEvento.php';
                        
                        if (isset($_POST['submit'])) {
                            $query = new QueryEvento;
                            $titulo=$_POST['titulo'];
                            $descripcion=$_POST['descripcion'];
                            $fecha=$_POST['fechas'];
                            
                           $query->insertEvento($titulo, $descripcion, $fecha, $idUsuario);
                           header("location:lineaDetiempo.php");
                        }      
                    ?>
                </form>
                              
            </div>
            
        </div>
    </div>
</body>
</html>