<?php
$servidor="mysql:dbname=".Base.";host=".Servidor;

try {
    $pdo = new PDO($servidor,Usuario,Password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
        //    echo"<script>alert('Si ves esto es porque funciona')</script>";
} catch (PDOException $e) {
    //echo"<script>alert('Maldito inutil nada te sale bien')</script>";
}
?>