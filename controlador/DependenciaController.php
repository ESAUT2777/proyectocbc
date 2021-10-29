<?php
include '../modelo/Dependencia.php';
$dependencia = new Dependencia();
if($_POST['funcion']=="listar"){
    $dependencia->mostrar();
    $json = array();
    foreach ($dependencia->dependencias as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $codigo_depe = $_POST['codigo_depe'];
   $dependencia = $_POST['dependencia'];  
   $telefonod = $_POST['telefonod'];
   $codigo_centro = $_POST['codigo_centro'];
   $dependencia->editar($codigo_depe,$dependencia,$telefonod,$codigo_centro);
   
}


