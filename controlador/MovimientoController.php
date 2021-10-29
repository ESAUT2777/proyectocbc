<?php
include '../modelo/Movimiento.php';
$movimiento = new Movimiento();
if($_POST['funcion']=="listar"){
    $movimiento->mostrar();
    $json = array();
    foreach ($movimiento->movimientos as $data) {
       $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=="editar"){
   $id_mov = $_POST['id_mov'];
   $fecham = $_POST['fecham'];
   $id_doc = $_POST['id_doc'];
   $codigo_depe = $_POST['codigo_depe'];  
   $id_persona = $_POST['id_persona'];
   $movimiento->editar($id_mov,$fecham,$id_doc,$codigo_depe,$id_persona);
   
}


