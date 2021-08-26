<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q De Camisetas</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
</head>

<body>
    <div id="content">
 <!-- barra lateral -->
        <aside id="lateral">

            <div id="login" class="block_aside">
            <!-- si no existe la session identify -->
                <?php if(!isset($_SESSION['identity'])): ?>
                <h3>Entrar a la web</h3>
                <!-- en action tenemos que pasar el nombre del controlador y el metodo al cual va ingresar -->
                <form action="<?=base_url?>usuario/login" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="" />
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="" />
                    <input type="submit" value="Enviar" />
                </form>
                <!-- osea si existe una sesssion identify quiere decir que se logro logear -->
                <?php else: ?>
                <h3><?=$_SESSION['identity']->nombre?><?=' '?><?=$_SESSION['identity']->apellidos?></h3>
                <?php endif; ?>
                <ul>   
                    <!-- si existe la sesion de un administrador -->
                     <?php if(isset($_SESSION['admin'])): ?>
                        <li><a href="<?=base_url?>producto/gestion">Gestionar Productos</a></li>
                    <?php endif; ?>
                    <!-- si se indentifica un usuario en general entonces que aparasca el enlace de cerrar sesion -->
                    <?php if(isset($_SESSION['identity'])): ?>
                          
                    <li><a href="<?=base_url?>usuario/logout">Cerrar sessión</a></li>
                    <?php else: ?>
                        <li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </aside>

        <!-- contenido central -->
