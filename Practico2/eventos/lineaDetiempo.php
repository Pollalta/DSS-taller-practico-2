<?php
   session_start();
   $usuario= $_SESSION['username'];
$idUsuario=$_SESSION['idUsuario'];
include '../modelo/queryEvento.php';
$query=new QueryEvento;
$eventos=$query->getEventoByIDUsuario($idUsuario);
$contador= count($eventos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/timeline.min.css" rel="stylesheet" />
    <title>Linea de tiempo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Eventos de <?php echo $usuario;?></h1>
    <a name="" id="" class="btn btn-primary" href="eventos.php" role="button">Ingresar Eventos</a>
    <a name="" id="" class="btn btn-primary" href="../cerrarSession.php" role="button">Cerrar session</a>
        <div class="panel panel-default">
    
    <div class="panel-body">
    <h1></h1>
    <?php if ($contador<1) {
        echo "no tiene Eventos Ingrese 1";
    }else {?>
        <div class="timeline">
        <div class="timeline__wrap">
            <div class="timeline__items">
                <?php 
                
                    foreach ($eventos as $event) {
                       echo" <div class='timeline__item'>";
                     echo" <div class='timeline__content'>";
                      echo  "<h1>Titulo: ".$event['Titulo']."</h1>";
                      echo  "<p>Descripcion: ".$event['Descripcion']."</p>";
                      echo  "<p>Fecha: ".$event['Fecha']."</p>";
                      echo "<a  class='btn btn-primary' href='update.php?id=".$event['idevento']."' role='button'>Editar evento</a>";
                      
                      echo "<a  class='btn btn-secondary' href='delete.php?id=".$event['idevento']."' role='button'>Eliminar evento</a>";
                    echo" </div>";
                    echo" </div>";
                        
                    }
                    ?>
            
                
            </div>
            
        </div>
    </div>
        </div>
    <?php    
    }
    ?>
        

    </div>
    </div>
    


</body>
<script src="dist/js/timeline.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script >
  timeline(document.querySelectorAll('.timeline'));
</script>


</html>