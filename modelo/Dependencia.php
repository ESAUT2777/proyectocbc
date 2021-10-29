<?php
include_once 'conexion.php';
class Dependencia{
    var $dependencias;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM dependencia,centro where dependencia.codigo_centro=centro.codigo_centro";
        $resultado = $this->acceso->query($sql);
        $this->dependencias = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->dependencias;
    }
    function editar($codigo_depe,$dependencia,$telefonod,$codigo_centro){
        $sql="UPDATE dependencia SET codigo_centro='$codigo_centro',dependencia='$dependencia',  telefonod='$telefonod', codigo_centro='$codigo_centro' where codigo_depe='$codigo_depe'";
        $resultado = $this->acceso->query($sql);
    }
    
    

}