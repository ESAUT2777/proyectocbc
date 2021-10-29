<?php
include_once 'conexion.php';
class Municipio{
    var $municipios;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM municipio,departamento where municipio.codigo_dpto=departamento.codigo_dpto";
        $resultado = $this->acceso->query($sql);
        $this->municipios = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->municipios;
    }
    function editar($codigo_municipio,$municipio,$codigo_dpto){
        $sql="UPDATE municipio SET codigo_municipio='$codigo_municipio',municipio='$municipio', codigo_dpto='$codigo_dpto' where codigo_municipio='$codigo_municipio'";
        $resultado = $this->acceso->query($sql);
    }
   
    

}