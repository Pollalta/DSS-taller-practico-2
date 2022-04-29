<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    
</head>
<body>
<body class="bg-info">
   
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-xs-1-12 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                <div class="row">
               
                </div>
                <form action="" method="post">
                    <div class="mb-4" >
                     <label for="txtNombre" class="form-label">Ingrese su nombre</label>
                    <input type="text"  class="form-control" name="txtNombre" id="txtNombre">
                    </div>
                   
                   
                    <div class="mb-4" >
                     <label for="txtUsuario" class="form-label">Ingrese su nombre de usuario</label>
                    <input type="text"  class="form-control" name="txtUsuario" id="txtUsuario">
                    </div>
                    <div class="mb-4" >
                 
                    </div>

                    <div class="mb-4" >
                    <label for="txtContra" class="form-label">Ingrese su Contraseña</label>
                        <input type="password" class="form-control" name="txtContra" id="txtContra">
                    </div>
                    <div class="mb-4" >
                  
                    <div id="alerta">

                    </div>
                    
                    <button type="submit" name="submit" id="enviar" class="btn btn-success w-100">Registrarse</button>
                    <?php
                        include '../modelo/queryRegistro.php';
                        
                        if (isset($_POST['submit'])) {
                            $query=new queryRegistro;
                            $nombre=$_POST['txtNombre'];
                            $user=$_POST['txtUsuario'];
                            $pass=$_POST['txtContra'];
                            

                           $query->insertarUsuario($nombre,$pass,$user);
                           header("location:../login/login.php");
                        }

                       
                    ?>
                </form>
                
                
            </div>
            
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</body>
    
</body>
</html>