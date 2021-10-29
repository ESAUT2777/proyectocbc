<?php
class Conexion{
    public static function conectar(){
        $conexion = new mysqli('bqsi5qvhtw94wy7jlelf-mysql.services.clever-cloud.com','up2wjqihx6mpndkf','fIPXckTHX1w5XF0vKHc2','bqsi5qvhtw94wy7jlelf');
        $conexion->set_charset('utf8');
        return $conexion;
    }
}