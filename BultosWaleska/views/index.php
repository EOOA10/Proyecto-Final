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
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    

</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="img/logomamon.png" width="125px" alt="Menumamado"> </a>
                </div>
                <nav>
                    <ul id="MenuItems">                        
                        <li><a href="Productos.php">Productos</a></li> 
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

            <div class="row">
                <div class="col-2">
                    <h1>Me voy a Tirar por la ventana <br>si esto no Funciona</h1>
                    <p>Porfavor funciona pagina pitera</p>
                    <a href="" class="btn">Explorar Ahora &#8594</a>
                </div>
                <div class="col-2">
                    <img src="Img/Titi2.png" alt="El Eduardito">
                </div>
            </div>
        </div>
    </div>

    <div class="categorias">
        <h2 class="titulo">Categorias</h2>
        <div class="minicontainer">
            <div class="row">
                <div class="col-3">
                    <img src="Img/category-1.jpg" alt="Cat1">
                    <a href="Pantallas/ProductosPantalones.php" class="btn">Explorar Pantalones &#8594</a>
                </div>
                <div class=" col-3 ">
                    <img src="Img/category-2.jpg" alt="Cat2">
                    <a href="Pantallas/ProductosZapatos.php" class="btn">Explorar Zapatos &#8594</a>
                </div>
                <div class="col-3 ">
                    <img src="Img/category-3.jpg" alt="Cat3">
                    <a href="Pantallas/ProductosCamisas.php" class="btn">Explorar Camisas &#8594</a>
                </div>
                
            </div>
        </div>
    </div>

    <div class="minicontainer ">
        <h2 class="titulo ">Productos Destacados</h2>
        <?php echo $mensaje?>
        <div class="row ">     
            <?php
                $sentencia=$pdo ->prepare("SELECT * FROM productos where id_producto between 1 and 4");
                $sentencia->execute();
                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                //print_r($listaProductos); 
            ?>           
            <?php foreach($listaProductos as $productos){ ?>
                <div class="col-4 ">     
                    <img src="<?php echo $productos['imagen'];?>"  height="300px" width="300px" alt="llorar"/>
                    <h4> <?php echo $productos['Nombre_producto'];?> </h4>
                    <p>Lps <?php echo $productos['precio'];?> </p>
                    
                    <form action="" method="post">
                    <input type="hidden" name ="id" id="id" value="<?php echo openssl_encrypt($productos['id_producto'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="nombre" id="nombre" value="<?php echo openssl_encrypt($productos['Nombre_producto'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="precio" id="precio" value="<?php echo openssl_encrypt($productos['precio'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,Codigo,KEY) ;?>">
                    <button  class="btn" 
                    name="btnAccion"                       
                    value="Agregar" 
                    type="submit" 
                    > 
                    Comprar Ahora 
                    </button>                    
                    </form>            
                </div>             
                <?php } ?>                  
        </div>
        <h2 class="titulo ">Productos Recientes</h2>
        <?php echo $mensaje?>
        <div class="row ">     
            <?php
                $sentencia=$pdo ->prepare("SELECT * FROM productos where id_producto > 4 and id_producto <9 and  id_Cat!=4 ");
                $sentencia->execute();
                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                //print_r($listaProductos);
            ?>           
            <?php foreach($listaProductos as $productos1){ ?>
                <div class="col-4 ">     
                    <img src="<?php echo $productos1['imagen'];?>"  height="300px" width="300px" alt="llorar"/>
                    <h4> <?php echo $productos1['Nombre_producto'];?> </h4>
                    <p>Lps <?php echo $productos1['precio'];?> </p>
                    <form action="" method="post">
                    <input type="hidden" name ="id" id="id" value="<?php echo openssl_encrypt($productos1['id_producto'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="nombre" id="nombre" value="<?php echo openssl_encrypt($productos1['Nombre_producto'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="precio" id="precio" value="<?php echo openssl_encrypt($productos1['precio'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,Codigo,KEY) ;?>">
                    <button  class="btn" 
                    name="btnAccion"                       
                    value="Agregar" 
                    type="submit" 
                    > 
                    Comprar Ahora 
                    </button>                    
                    </form>            
                </div>             
                <?php 
            } ?>                  
        </div>
    </div>  

    <div class="offer ">
        <div class="minicontainer ">
            <div class="row ">
            <?php
                $sentencia=$pdo ->prepare("SELECT * FROM productos where id_producto=7");
                $sentencia->execute();
                $listaOferta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                //print_r($listaProductos);
            ?>  
             <?php foreach($listaOferta as $oferta){ ?>
                <div class="col-2 ">
                    <img src="Img/Daug.png" class="offer-img " alt="Reloj Generico">
                </div>
             
                <div class="col-2 ">                    
                    <h1>Hasta los perros tienen Facha Asegurada!</h1>
                    <h2><?php echo $oferta['Nombre_producto'];?></h2>       
                    <small>Perro no Incluido</small> 
                    <form action="" method="post">
                    <input type="hidden" name ="id" id="id" value="<?php echo openssl_encrypt($oferta['id_producto'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="nombre" id="nombre" value="<?php echo openssl_encrypt($oferta['Nombre_producto'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="precio" id="precio" value="<?php echo openssl_encrypt($oferta['precio'],Codigo,KEY) ;?>">
                    <input type="hidden" name ="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,Codigo,KEY) ;?>">
                    <button  class="btn" 
                    name="btnAccion"                       
                    value="Agregar" 
                    type="submit" 
                    > 
                    Comprar Ahora 
                    </button>                    
                    </form>     
                </div>
            </div>
            <?php 
            } ?> 
        </div>
    </div>

    <div class="opiniones ">
        <div class="minicontainer ">
            <div class="row ">
                <div class="col-3 ">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta recusandae quam aspernatur est ad consequuntur inventore laboriosam harum hic mollitia, fugit dolorum accusantium fugiat nesciunt. Illum laudantium itaque quasi hic.</p>
                    <div class="rating ">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
                    </div>
                    <img src="Img/Yuji.jpg" alt="Yuji">
                    <h3>Yuji Itadori</h3>
                </div>
                <div class="col-3 ">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta recusandae quam aspernatur est ad consequuntur inventore laboriosam harum hic mollitia, fugit dolorum accusantium fugiat nesciunt. Illum laudantium itaque quasi hic.</p>
                    <div class="rating ">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
                    </div>
                    <img src="Img/Megumi.jpg" alt="Megumi">
                    <h3>Megumi Fushigoro</h3>
                </div>
                <div class="col-3 ">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta recusandae quam aspernatur est ad consequuntur inventore laboriosam harum hic mollitia, fugit dolorum accusantium fugiat nesciunt. Illum laudantium itaque quasi hic.</p>
                    <div class="rating ">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
                    </div>
                    <img src="Img/Nobara.jpg" alt="Nobara">
                    <h3>Nobara Kugisaki</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="sponsors ">
        <div class="minicontainer ">
            <div class="row ">
                <div class="col-5 ">
                    <img src="Img/CocaCola.png" alt="Logo CocaCola">
                </div>
                <div class="col-5 ">
                    <img src="Img/logo-philips.png" alt="Logo Phillips">
                </div>
                <div class="col-5 ">
                    <img src="Img/Paypal.png" alt="Logo Paypal">
                </div>
            </div>
        </div>
    </div>


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

