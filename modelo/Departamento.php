<?php
include_once 'conexion.php';
class Departamento{
    var $departamentos;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM departamento";
        $resultado = $this->acceso->query($sql);
        $this->departamentos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->departamentos;
    }
    function editar($codigo_dpto,$departamento){
        $sql="UPDATE departamento SET codigo_dpto='$codigo_dpto',departamento='$departamento' where codigo_dpto='$codigo_dpto'";
        $resultado = $this->acceso->query($sql);
    }
    
    

}