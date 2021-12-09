<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bultos Waleska| Los Mejores usados</title>
    <link rel="stylesheet" href="Css/style2.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="Home.html"><img src="img/logomamon.png" width="125px" alt="Menumamado"> </a>
            </div>
            <img src="Img/menu.png" class="menu-icon" onclick="menutoggle()" alt="menu">
        </div>
    </div>


    <div class="pagina-cuenta">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="Img/Smile.png" alt="Logo xd" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="Ingreso()">Login</span>
                            <span onclick="Registro()">Register</span>
                            <hr id="Indicador">
                        </div>

                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login" id="LoginForm">
                            <input type="text" name="usuario" class="usuario" placeholder="Username">
                            <input type="password" name="password" class="password_btn" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <?php if(!empty($errores)): ?>
				                <div>
					                <ul>
						                <?php echo $errores; ?>
					                </ul>
				                </div>
			                <?php endif; ?>
                        </form>

                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login" id="RegForm">
                            <input type="text" name="usuario" class="usuario" placeholder="Username">
                            <input type="email" name="correo" id="correo" placeholder="Email">
                            <input type="password" name="password" class="password" placeholder="password">
                            <input type="password" name="password2" class="password_btn"placeholder="Confirm password">
                            <button type="submit" class="btn">Register</button>
                            <?php if(!empty($error)): ?>
				                <div>
					                <ul>
						                <?php echo $error; ?>
					                </ul>
				                </div>
			                <?php endif; ?>
                        </form>
                    </div>
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

    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicador = document.getElementById("Indicador");

        function Registro() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicador.style.transform = "translateX(100px)";
        }

        function Ingreso() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translate(300px)";
            Indicador.style.transform = "translateX(0px )";
        }
    </script>
</body>

</html>