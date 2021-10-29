<?php
include_once 'conexion.php';
class Documento{
    var $documentos;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql="SELECT * FROM documento,persona where documento.id_persona=persona.id_persona";
        $resultado = $this->acceso->query($sql);
        $this->documentos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $this->documentos;
    }
    function editar($id_doc,$asunto,$fecha,$folios,$tipod,$id_persona){
        $sql="UPDATE documento SET id_doc='$id_doc',asunto='$asunto', fecha='$fecha', folios='$folios', tipod='$tipod', id_persona='$id_persona' where id_doc='$id_doc'";
        $resultado = $this->acceso->query($sql);
    }
    
    

}