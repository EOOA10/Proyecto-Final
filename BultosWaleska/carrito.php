<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$mensaje="";

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar':

            if(is_numeric(openssl_decrypt($_POST['id'],Codigo,KEY))){
                $ID=openssl_decrypt($_POST['id'],Codigo,KEY);
                $mensaje.="ID Correcto".$ID."</br>";
            }else{
                $mensaje.="ID Incorrecto".$ID."</br>";
            }
            if(is_string(openssl_decrypt($_POST['nombre'],Codigo,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],Codigo,KEY);
                $mensaje.="Nombre Correcto".$NOMBRE."</br>";
            }else{
                $mensaje.="Nombre Incorrecto".$NOMBRE."</br>";
            }
            if(is_numeric(openssl_decrypt($_POST['precio'],Codigo,KEY))){
                $PRECIO=openssl_decrypt($_POST['precio'],Codigo,KEY);
                $mensaje.="Precio Correcto".$PRECIO."</br>";
            }else{
                $mensaje.="Precio Incorrecto".$PRECIO."</br>";
            }
            if(is_numeric(openssl_decrypt($_POST['cantidad'],Codigo,KEY))){
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],Codigo,KEY);
                $mensaje.="Cantidad Correcta".$CANTIDAD."</br>";
            }else{
                $mensaje.="Cantidad Incorrecta".$CANTIDAD."</br>";
            }           


            if(!isset($_SESSION['CARRITO'])){
                $productos=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO
                );
                $_SESSION['CARRITO'][0]=$productos;
                $mensaje="Producto Agregado al carrito";
            }else{

                $idProductos=array_column($_SESSION['CARRITO'],"ID");

                if(in_array($ID,$idProductos)){
                    echo "<script>alert('El producto ya ha sido seleccionado')</script>";
                    $mensaje="";
                }else{
                    $NumeroProductos=count($_SESSION['CARRITO']);
                    $productos=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'CANTIDAD'=>$CANTIDAD,
                        'PRECIO'=>$PRECIO
                    );
                    $_SESSION['CARRITO'][$NumeroProductos]=$productos;
                    $mensaje="Producto Agregado al carrito";
             }
            }
            //$mensaje=print_r($_SESSION,true);
            $mensaje="Producto Agregado al carrito";

            break;

            case 'Eliminar':
                
            if(is_numeric(openssl_decrypt($_POST['id'],Codigo,KEY))){
                $ID=openssl_decrypt($_POST['id'],Codigo,KEY);
                
                foreach($_SESSION['CARRITO'] as $indice=>$productos){
                    if($productos['ID']==$ID){
                        unset($_SESSION['CARRITO'][$indice]);                        
                        //echo "<script>alert('Elemento Borrado');</script>";
                    }
                }
            }else{
                 $mensaje.="ID Incorrecto".$ID."</br>";
            }
            break;
    }
}


?>