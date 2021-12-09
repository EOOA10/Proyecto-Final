<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    /*
    FILTER_SANITIZE_STRING: este nos ayuda para ignorar caracteres que no son validos
    strlower: nos permite que el dato que queramos ingresar lo estamos colocando en mayuscula entonces esta
    comando convierte las letras en minusculas.
    */
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$correo= $_POST['correo'];

	$error = '';

	if (empty($usuario) or empty($password) or empty($password2)) {
		$error .= '<li>Por favor rellena todos los datos</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=login', 'root', 'tatoch2001');
		} catch (PDOExeption $e) {
			echo "Error: " . $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();




		
		if ($resultado != false) {
			$error .= '<li>El nombre de usuario ya existe</li>';
		}
		//HASS DE LA CONTRASEñA (encriptar)
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		if ($password != $password2) {
			$error .= '<li>Las contraseñas no son iguales</li>';
		}
	}
	if ($error == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (correo,usuario, pass) VALUES (:correo,:usuario, :pass)');
		$statement->execute(array(':correo' => $correo,':usuario' => $usuario, ':pass' => $password));

		header('Location: login.php');
	}
}
require_once 'views/Cuenta.php';
?>