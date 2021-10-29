<?php
include_once 'conexion.php';
class Persona{
    var $personas;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM persona,municipio where persona.codigo_municipio=municipio.codigo_municipio";
        $resultado = $this->acceso->query($sql);
        $this->personas = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->personas;
    }
    function editar($id_persona,$identificación,$nombrep,$telefono,$correo,$tipop,$direccion,$codigo_municipio){
        $sql="UPDATE persona SET identificación='$identificación',nombrep='$nombrep',  telefono='$telefono', correo='$correo', tipop='$tipop', direccion='$direccion', codigo_municipio='$codigo_municipio' where id_persona='$id_persona'";
        $resultado = $this->acceso->query($sql);
    }
    
    

}