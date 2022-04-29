<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   

</head>
<body class="bg-info">
    <div class="div-menu">
       
    </div>
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-xs-1-12 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                <div class="row">
               
                </div>
                <form  method="post">
                    <div class="mb-4" >
                     <label for="txtNombre" class="form-label">Ingrese su nombre de usuario</label>
                    <input type="text"  class="form-control" required="required" pattern="[A-Za-z0-9]{1,20}"  name="txtNombre" id="txtNombre">
                    </div>
                    <div class="mb-4" >
                    <label for="txtContra" class="form-label">Ingrese su contraseña</label>
                        <input type="password" class="form-control"  name="txtContra" id="txtContra">
                    </div>
                   
                    <button type="submit" name="submit" id="enviar" class="btn btn-success w-100">Submit</button>
                
                </form>
                <?php
    include '../modelo/queryLogin.php';
        if (isset($_POST['submit'])) {
            $nombre= $_POST['txtNombre'];
            $pass= $_POST['txtContra'];
            $query=new queryLogin;
            $resultado= $query->verificarUsuario($nombre,$pass);
            if ($resultado==true) {
                $id=$query->getIdUsuario($nombre,$pass);
                session_start();
                $_SESSION['username']=$nombre;
                $_SESSION['idUsuario']=$id['idusuario'];
                header("location:../eventos\lineaDetiempo.php");
            }else {
                echo "<p>el usuario no existe,verifique sus credenciales</p>";
            }
        }
    ?>
                <p class="mb-0 text-center"> Aún no se ha registrado?<a href="../registro/registro.php" class="text-decoration-none">Registrate Aqui!</a> </p>
                
            </div>
            
        </div>
    </div>
   
</body>
</html>