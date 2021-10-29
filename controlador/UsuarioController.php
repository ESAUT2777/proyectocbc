<?php
include '../modelo/Usuario.php';
$usuarios = new Usuario();
if($_POST['funcion']=="listar"){
    $usuarios->mostrar();
    $json = array();
    foreach ($usuarios->usuarios as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $id = $_POST['id'];
   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];  
   $telefono = $_POST['telefono'];
   $email = $_POST['email'];
   $estado = $_POST['estado'];
   $usuarios->editar($id,$nombres,$apellidos,$telefono,$email,$estado);
   
}


