<?php session_start();
if (isset($_SESSION['usuario'])) {
	require 'views/index.php';
} else {
	header('Location: login.php');
}
?>