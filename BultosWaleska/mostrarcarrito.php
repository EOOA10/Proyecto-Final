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
    <link rel="stylesheet" href="Css/style2.css">
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
            <img src="Img/menu.png" class="menu-icon" onclick="menutoggle()" alt="menu">
        </div>
    </div>

    <?php if(!empty($_SESSION['CARRITO'])){?>
    <div class="minicontainer carrito">
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>     
            <?php $total=0; ?>
            <?php $Subtotal=0; ?>
            <?php foreach($_SESSION['CARRITO'] as $indice=>$productos){?>
            <tr>
                <td>
                <div class="detalles-carrito">                
                    <div>
                        <p><?php echo $productos['NOMBRE']?></p>
                        <small>Precio:<?php echo $productos['PRECIO']?></small>
                        <br>
                        <form action="" method="post">
                        <input type="hidden" 
                        name ="id" 
                        id="id" 
                        value="<?php echo openssl_encrypt($productos['ID'],Codigo,KEY) ;?>">

                            <button                        
                            class="btn"
                            type="submit"
                            name="btnAccion"
                            value="Eliminar"
                            >Remover</button>
                        </form>
                    </div>
                </div>
                </td>
                <td><?php echo $productos['CANTIDAD']?></td>
                <td><?php echo $productos['PRECIO']?></td>
                <td  width: 200px;><?php echo number_format($productos['CANTIDAD']*$productos['PRECIO'])?></td>
            </tr>       
            <?php $Subtotal=$Subtotal+($productos['CANTIDAD']*$productos['PRECIO']); ?>
            <?php $Impuestos=$Subtotal*0.15; ?>
            <?php $total=$Subtotal+$Impuestos; ?>
        <?php } ?>    
        </table>
      
        <div class="total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td><?php echo number_format($Subtotal,2);?></td>
                </tr>
                <tr>
                    <td>Impuestos</td>
                    <td><?php echo number_format($Impuestos,2);?></td>
                </tr>
                <tr>    
                    <td>Total</td>
                    <td><?php echo number_format($total,2);?></td>
                </tr>
                  
            </table>
            
        </div>        
        <form action="pago.php" method=post> 
                        <label for="my-input">Correo de contacto:</label>
                        <input id="email" name="email" class="form-control" type="email" placeholder="Por Favor ingrese su correo" required>
                        <small id="emailHelp"> Los productos se cobraran via paypal con este correo</small>
                        <button  class="btn" 
                            name="btnAccion"                       
                            value="Proceder" 
                            type="submit" >Proceder a Pagar </button>
         </form>
            

             
    </div>
    

<?php }else{?>
    <div class="minicontainer carrito">
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>     

            <tr>
                <td>
                <div class="detalles-carrito">
                    <p></p>
                    <small>No hay articulos agregados...</small>
                    <br>
                    <a></a>
                </div>
                </td>
                <td>---</td>
                <td>--</td>
                <td>--</td>
            </tr>           
        </table>

        <div class="total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Impuestos</td>
                    <td>--</td>
                </tr>
                <tr>    
                    <td>Total</td>
                    <td>--</td>
                </tr>
            </table>
        </div>        
    </div>
    <?php } ?>
 
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
