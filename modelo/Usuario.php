<?php
include_once 'conexion.php';
class Usuario{
    var $usuarios;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM usuarios";
        $resultado = $this->acceso->query($sql);
        $this->usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->usuarios;
    }
    function editar($id,$nombres,$apellidos,$telefono,$email,$estado){
        $sql="UPDATE usuarios SET id='$id',nombres='$nombres', apellidos='$apellidos',telefono='$telefono', email='$email',estado='$estado' where id='$id'";
        $resultado = $this->acceso->query($sql);
    }
    function eliminar($id){
        $sql="DELETE FROM usuarios where id='$id'";
        $resultado = $this->acceso->query($sql);
    }
    

}