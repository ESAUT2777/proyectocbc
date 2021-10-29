<?php
include_once 'conexion.php';
class Centro{
    var $centros;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM centro,municipio where centro.codigo_municipio=municipio.codigo_municipio";
        $resultado = $this->acceso->query($sql);
        $this->centros = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->centros;
    }
    function editar($codigo_centro,$centro,$telefonoc,$direccionc,$codigo_municipio){
        $sql="UPDATE centro SET codigo_centro='$codigo_centro',centro='$centro',  telefonoc='$telefonoc', direccionc='$direccionc', codigo_municipio='$codigo_municipio' where codigo_centro='$codigo_centro'";
        $resultado = $this->acceso->query($sql);
    }
       

}