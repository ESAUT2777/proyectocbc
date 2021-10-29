<?php
include '../modelo/Subsede.php';
$sub_sede = new Subsedes();
if($_POST['funcion']=="listar"){
    $sub_sede->mostrar();
    $json = array();
    foreach ($sub_sede->subsedes as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $id = $_POST['id'];
   $nombres = $_POST['nombres'];  
   $telefonos = $_POST['telefonos'];
   $codigo_centro = $_POST['codigo_centro'];
   $codigo_municipio = $_POST['codigo_municipio'];
   $sub_sede->editar($id,$nombres,$telefonos,$codigo_centro,$codigo_municipio);
   
}


