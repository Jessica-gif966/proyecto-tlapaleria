<?php
include 'conexion.php';


$datos  = array();
$consulta="select * from productos ";

$resultado=$conexion->query($consulta);

while($fila=$resultado->fetch_array()){
    $id_producto=$fila['id_producto'];
    $nombre_producto=$fila['nombre_producto'];
    $precio=$fila['precio'];
    $descripcion=$fila['descripcion'];
    $existencia=$fila['existencia'];
    $id_proveedor=$fila['id_proveedor'];
    
    
    $arrayName = array('id_producto' =>$id_producto ,
    'nombre_producto'=>$nombre_producto, 'precio'=>$precio,'descripcion'=>$descripcion,'existencia'=>$existencia,'id_proveedor'=>$id_proveedor);
    
    array_push($datos, $arrayName);
}
    echo json_encode($datos);
    $resultado->close();


?>