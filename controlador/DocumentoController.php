<?php
include '../modelo/Documento.php';
$documento = new Documento();
if($_POST['funcion']=="listar"){
    $documento->mostrar();
    $json = array();
    foreach ($documento->documentos as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $id_doc = $_POST['id_doc'];
   $asunto = $_POST['asunto'];
   $fecha = $_POST['fecha'];  
   $folios = $_POST['folios'];
   $tipod = $_POST['tipod'];
   $id_persona = $_POST['id_persona'];
   $documento->editar($id_doc,$asunto,$fecha,$folios,$tipod,$id_persona);
   
}


