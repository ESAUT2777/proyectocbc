<?php
date_default_timezone_set("America/Bogota");
$con= mysqli_connect("localhost","root","1234");
if($con)
{
    mysqli_select_db($con,"doccbc");
}
 else {
     echo "no se conectó la bd".die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doc_cbc | Inicio</title>
        <link rel="stylesheet" href="css/index1.css">
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>         
        <script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }
        </script>        
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <div id="logo">
                    <h1 style="text-align: center;color: green;"><span><img src="image/Sena.png" width="100" height="100"alt="logo"/></span>Documentos Subdirección CBC</h1>   
                </div>
                </div>
                <div style=»float:left;»>
                <div id="footer">                               
                <img src="image/usu.png" width="120" height="70" alt="">  <img src="imagenesnuevas/uploads/02[208].png" width="120" height="70" style="background-color:white;">
            </div>
            <div id="menu" ><br>
                <ul>
                <li>Usuarios
                <ul>
                    <li><a href="#" onclick="getPage('User/Registration.php')">Nuevo usuario</a></li>
                    <li><a href="indexu.php" onclick="getPage('')">Ver usuarios</a></li>
                </ul>
                </li>
                <li>Evidencias
                <ul>
                <li><a href="#" onclick="getPage('Subir/Subir.php')">Nueva evidencia</a></li>
                <li><a href="View/View.php" onclick="getPage('')">Ver evidencias</a></li>
                <li><a href="imagenesnuevas" onclick="getPage('')">Subir imagen</a></li>
                <li><a href="imagenesnuevas/uploads" onclick="getPage('')">Ver imagenes</a></li>
                
                </ul>
                </li>
                <li>Personas
                <ul>
                <li><a href="#" onclick="getPage('Persona/registrarpersona.php')">Nueva Persona</a></li>
                <li><a href="indexp.php" onclick="getPage('')">Consultar Persona</a></li>
                </ul> 
                </li>
                <li>Documentos
                <ul>
                <li><a href="#" onclick="getPage('Documento/registrardocumento.php')">Registrar documento</a></li>
                <li><a href="indexdocu.php" onclick="getPage('')">Consultar documento</a></li>
                </ul>
                </li>
                <li>Movimientos
                <ul>
                <li><a href="#" onclick="getPage('Movimiento/otro.php')">Nuevo movimiento</a></li>
                <li><a href="https://docs.google.com/forms/d/11Eks79L3WflpCdZj1lU2b7AJ6X1uxJe_lpi_wwbXBxs/edit" onclick="getPage('')">Nuevo formulario</a></li>
                <li><a href="https://docs.google.com/document/d/1vyQFz0fe8VfzPp5Hxo9eIncrOsHjSU8btUpPbcqhO7U/edit" onclick="getPage('')">Nuevo formu</a></li>
                </ul>
                </li>
                <li>Reportes
                <ul>
                    <li><a href="evidxfecha" onclick="getPage('')">Reporte evidencias por fecha</a></li>
                    <a href="reportexfecha">Reporte documentos por Fecha</a>
                    <a href="fpdf/indexE.php">Reporte Documentos Salida</a>
                    <a href="fpdf">Reporte Documento Entrada</a>
                </ul>
                </li>
                <li>Gestion Administrativa
                <ul>
                <li><a href="#" onclick="getPage('User/Municipio/registrarmunicipio.php')">Nuevo Municipio</a></li>
                <li><a href="indexmu.php" onclick="getPage('')">Ver Municipio</a></li>
                <li><a href="#" onclick="getPage('Dependencia/registrardepen.php')">Nueva Dependencia</a></li>
                <li><a href="indexdepen.php" onclick="getPage('')">Ver Dependencias</a></li>
                <li><a href="#" onclick="getPage('Centro/Subsede/registrarsubsede.php')">Nueva Subsede</a></li>
                <li><a href="indexsub.php" onclick="getPage('')">Ver Subsedes</a></li>
                <li><a href="indexdepar.php" onclick="getPage('')">Ver Departamento</a></li>
                <li><a href="#" onclick="getPage('User/Municipio/Departamento/registrardepartamento.php')">Nuevo Departamento</a></li>
                <li><a href="#" onclick="getPage('Centro/registrarcentro.php')">Nuevo Centro</a></li>
                <li><a href="indexcentro.php" onclick="getPage('')">Ver Centros</a></li>
                </ul>
                </li>
                <li><a href="https://sway.office.com/xRUnHxWirBC5sUx2?ref=Link" onclick="getPage('')">Manual de Usuario</a></li>
                <li><a href="../doc_cbc/loginr/index.php">Cerrar sesion</a></li>              
                </ul>
                <br>
                
            </div>
            <div id="main">
            <div id="content">
                    </div> 
                     
            </div>                
            <div class= "clear"></div>
            </div>            
        </div> 
    
    </body>
      
</html>
