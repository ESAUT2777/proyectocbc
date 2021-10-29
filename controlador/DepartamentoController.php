<?php
include '../modelo/Departamento.php';
$departamento = new Departamento();
if($_POST['funcion']=="listar"){
    $departamento->mostrar();
    $json = array();
    foreach ($departamento->departamentos as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $codigo_dpto = $_POST['codigo_dpto'];
   $departamento = $_POST['departamento']; 
   $departamento->editar($codigo_dpto,$departamento);
   
}

