<?php
include_once 'conexion.php';
class Movimiento{
    var $movimientos;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM movimiento,documento,dependencia,persona where movimiento.id_doc=documento.id_doc and movimiento.codigo_depe=dependencia.codigo_depe and movimiento.id_persona=persona.id_persona";
        $resultado = $this->acceso->query($sql);
        $this->movimientos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->movimientos;
    }
    function editar($id_mov,$fecham,$id_mov,$codigo_depe,$id_persona){
        $sql="UPDATE movimiento SET id_mov='$id_mov',fecham='$fecham', id_doc='$id_doc', codigo_depe='$codigo_depe', id_persona='$id_persona', where id_mov='$id_mov'";
        $resultado = $this->acceso->query($sql);
    }
    
    

}