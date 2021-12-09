<?php
include 'Global/config.php';
include 'Global/conexion.php';
include 'carrito.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bultos Waleska| Los Mejores usados</title>
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">
        <div class="navbar">
            <div class="logo">
            <a href="index.php"><img src="img/logomamon.png" width="125px" alt="Menumamado"> </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="SobreNosotros.php">Sobre Nosotros</a></li>                          
                    <li><a href="cerrar.php">Cerrar Sesion</a></li>
                </ul>
            </nav>
            <a href="mostrarcarrito.php"><img src="Img/cart.png" width="30px" height="30px" alt="Comprar xd"></a>
                <img src="Img/menu.png" class="menu-icon" onclick="menutoggle()" alt="menu">
                <a><?php
                    echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?></a>
        </div>
    </div>

    <div class="offer ">
        <div class="minicontainer ">
            <div class="row ">

                <div class="col-2 ">
                    <img src="Img/Listo.png" class="offer-img " alt="Te quiero mucho bolita amarilla">
                </div>
             
                <div class="col-2 ">                    
                    <h1>¡Todo listo!</h1>                     
                    <h3>Gracias por elegirnos</h3>                                       
                    <div id="paypal-button-container"></div>

                </div>
                
            </div>
          
        </div>
    </div>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>        
        <br/>
        <br/>
        <br/>
        <br/>        
        <br/>
        <br/>
        <br/>
        <br/>        
        <br/>
        <br/>
        <br/>
        <br/>        
        <br/>
        <br/>

    <div class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="footer-col-1 ">
                    <h3>Descarga Nuestra App</h3>
                    <p>Descargar App para telefonos IOS y Android</p>
                    <div class="app-logo ">
                        <img src="Img/app-store.png" alt="Apple">
                        <img src="Img/play-store.png" alt="Android">
                    </div>
                </div>
                <div class="footer-col-2 ">
                    <img src="Img/logomamon.png " alt="logomamado">
                    <p>Nuestro Proposito es lograr llegar a vender nuestras mejores prendas de segunda mano</p>
                </div>
                <div class="footer-col-3 ">
                    <h3>Enlaces Utiles</h3>
                    <ul>
                        <li>Cupones</li>
                        <li>Blog</li>
                        <li>Devoluciones</li>
                        <li>Unirse a Patrocinadores</li>
                    </ul>
                </div>
                <div class="footer-col-4 ">
                    <h3>Siguenos</h3>
                    <ul>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright ">Copyright 2021-Grupo 1</p>
        </div>
    </div>

    





    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px "
            } else {
                MenuItems.style.maxHeight = "0px "
            }
        }
    </script>
</body>

</html>
