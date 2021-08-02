<?php
include 'conexion.php';


$id_producto=$_POST['id_producto'];
$nombre_producto=$_POST['nombre_producto'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$existencia=$_POST['existencia'];
$id_proveedor=$_POST['id_proveedor'];




$consulta="insert into productos(id_producto,nombre_producto, precio, descripcion, existencia, id_proveedor) values 
('".$id_producto."','".$nombre_producto."','".$precio."','".$descripcion."','".$existencia."','".$id_proveedor."')";

mysqli_query($conexion, $consulta) or die("Problemas al insertar".mysqli_error($conexion));
mysqli_close($conexion);

?>