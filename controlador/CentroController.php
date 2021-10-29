<?php
include '../modelo/Centro.php';
$centro = new Centro();
if($_POST['funcion']=="listar"){
    $centro->mostrar();
    $json = array();
    foreach ($centro->centros as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $codigo_centro = $_POST['codigo_centro'];
   $centro = $_POST['centro'];  
   $telefonoc = $_POST['telefonoc'];
   $direccionc = $_POST['direccionc'];
   $codigo_municipio = $_POST['codigo_municipio'];
   $centro->editar($codigo_centro,$centro,$telefonoc,$direccionc,$codigo_municipio);
   
}


