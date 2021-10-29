<?php
include '../modelo/Municipio.php';
$municipio = new Municipio();
if($_POST['funcion']=="listar"){
    $municipio->mostrar();
    $json = array();
    foreach ($municipio->municipios as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $codigo_municipio = $_POST['codigo_municipio'];
   $municipio = $_POST['municipio'];  
   $codigo_dpto = $_POST['codigo_dpto'];
   $direccionc = $_POST['direccionc'];
   $codigo_municipio = $_POST['codigo_municipio'];
   $municipio->editar($codigo_municipio,$municipio,$codigo_dpto);
   
}


