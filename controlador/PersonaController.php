<?php
include '../modelo/Persona.php';
$persona = new Persona();
if($_POST['funcion']=="listar"){
    $persona->mostrar();
    $json = array();
    foreach ($persona->personas as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $id_persona = $_POST['id_persona'];
   $identificación = $_POST['identificación'];
   $nombrep = $_POST['nombrep'];  
   $telefono = $_POST['telefono'];
   $correo = $_POST['correo'];
   $tipop = $_POST['tipop'];
   $direccion = $_POST['direccion'];
   $codigo_municipio = $_POST['codigo_municipio'];
   $persona->editar($id_persona,$identificación,$nombrep,$telefono,$correo,$tipop,$direccion,$codigo_municipio);
   
}


