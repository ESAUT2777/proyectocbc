<?php
include_once 'conexion.php';
class Subsedes{
    var $subsedes;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM sub_sede,centro,municipio where sub_sede.codigo_centro=centro.codigo_centro and sub_sede.codigo_municipio=municipio.codigo_municipio";
        $resultado = $this->acceso->query($sql);
        $this->subsedes = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->subsedes;
    }
    function editar($id,$nombres,$telefonos,$codigo_centro,$codigo_municipio){
        $sql="UPDATE sub_sede SET id='$id',nombres='$nombres',  telefonos='$telefonos', codigo_centro='$codigo_centro', codigo_municipio='$codigo_municipio' where id='$id'";
        $resultado = $this->acceso->query($sql);
    }
    function eliminar($id_persona){
        $sql="DELETE FROM persona where id_persona='$id_persona'";
        $resultado = $this->acceso->query($sql);
    }
    

}