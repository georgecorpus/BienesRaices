<?php
//conectamos con el servidor
$conectar=@mysql_connect('localhost', 'root', '');
//verificamos la conexion
if(!$conectar){
    echo"No se pudo conectar con el servidor";
}else{

    $base=mysql_select_db('contacto');
    if(!$base){
        echo"No se encontro la base de datos";
    }
}
//recuperar las variables
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
//hacemos la secuencia de sql
$sql="INSERT INTO datos VALUES('$nombre',
                               '$email',      
                               '$telefono',
                               '$mensaje',
                               '$cantidad',
                               '$fecha',
                               '$hora')";
//ejecutamos la secuencia de sql
$ejecutar=mysql_query($sql);
//verificamos la conexion
if(!$ejecutar){
    echo"Hubo algun error";
}else{
    echo"Datos guardados perfectamente<br><a href='contacto.html'>Volver </a>";
}
?>