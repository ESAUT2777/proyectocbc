<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['estado']['msg'])){
    $statusMsg = $sessData['estado']['msg'];
    $statusMsgType = $sessData['estado']['type'];
    unset($_SESSION['sessData']['estado']);
}
include('header.php');
?>                   
        <?php
			if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'Usuarios.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
		?>     
		<?php
date_default_timezone_set("America/Bogota");
$con= mysqli_connect('bqsi5qvhtw94wy7jlelf-mysql.services.clever-cloud.com','up2wjqihx6mpndkf','up2wjqihx6mpndkf','fIPXckTHX1w5XF0vKHc2');
if($con)
{
    mysqli_select_db($con,'bqsi5qvhtw94wy7jlelf');
}
 else {
     echo "No se conectó la bd".die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
    <head>        
        <link rel="stylesheet" href="../css/index1.css">
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
                    <h1 style="text-align: center;color: green;"><span><img src="../image/Sena.png" width="100" height="100"alt="logo"/></span>Documentos Subdirección CBC</h1>   
                </div>
                </div>
                <div style=»float:left;»>
                <div id="footer">                               
                <img src="../image/usu.png" width="90" height="50" alt=""><a href="Registro.php">.</a>  <img src="../imagenesnuevas/uploads/02[208].png" width="90" height="50" style="background-color:white;"><a href="../indexu.php" onclick="getPage('')">.</a>
            </div>			
            <div id="menu" ><br>
                <ul>               
                <li>Evidencias
                <ul>
                <li><a href="#" onclick="getPage('../Subir/Subir.php')">Cargar evidencia</a></li>
                <li><a href="../View/View.php" onclick="getPage('')">Ver evidencias</a></li>
                <li><a href="../imagenesnuevas" onclick="getPage('')">Subir imagen</a></li>
                <li><a href="http://localhost/doc_cbc/imagenesnuevas/uploads/" onclick="getPage('')">Ver imagenes</a></li>
                </ul>
                </li>
                <li>Personas
                <ul>
                <li><a href="#" onclick="getPage('../Persona/registrarpersona.php')">Nueva Persona</a></li>
                <li><a href="../indexp.php" onclick="getPage('')">Consultar Persona</a></li>
                </ul> 
                </li>
                <li>Documentos
                <ul>
                <li><a href="#" onclick="getPage('../Documento/registrardocumento.php')">Registrar documento</a></li>
                <li><a href="../indexdocu.php" onclick="getPage('')">Consultar documento</a></li>
                </ul>
                </li>
                <li>Movimientos
                <ul>
                <li><a href="../Movimiento/otro.php" onclick="getPage('')">Enviar Documentos</a></li>
                <li><a href="../agregardocumento/filasdinamicas.php" onclick="getPage('')">Movimiento</a></li>
                </ul>
                </li>
                <li>Reportes
                <ul>
                    <li><a href="../evidxfecha" onclick="getPage('')">Reporte evidencias por fecha</a></li>
                    <a href="../reportexfecha">Reporte documentos por Fecha</a>
                    <a href="../fpdf/indexE.php">Reporte Documentos Salida</a>
                    <a href="../fpdf">Reporte Documento Entrada</a>
                </ul>
                </li>
                <li>Gestion Administrativa
                <ul>
                <li><a href="#" onclick="getPage('../Municipio/registrarmunicipio.php')">Nuevo Municipio</a></li>
                <li><a href="../indexmu.php" onclick="getPage('')">Ver Municipio</a></li>
                <li><a href="#" onclick="getPage('../Dependencia/registrardepen.php')">Nueva Dependencia</a></li>
                <li><a href="../indexdepen.php" onclick="getPage('')">Ver Dependencias</a></li>
                <li><a href="#" onclick="getPage('../Subsede/registrarsubsede.php')">Nueva Subsede</a></li>
                <li><a href="../indexsub.php" onclick="getPage('')">Ver Subsedes</a></li>
                <li><a href="../indexdepar.php" onclick="getPage('')">Ver Departamento</a></li>
                <li><a href="#" onclick="getPage('../Departamento/registrardepartamento.php')">Nuevo Departamento</a></li>
                <li><a href="#" onclick="getPage('../Centro/registrarcentro.php')">Nuevo Centro</a></li>
                <li><a href="../indexcentro.php" onclick="getPage('')">Ver Centros</a></li>
                </ul>
                </li>
                <li>Manuales
                <ul>
                <li><a href="https://sway.office.com/xRUnHxWirBC5sUx2?ref=Link" onclick="getPage('')">Manual de Tecnico</a></li>  
                <li><a href="https://sway.office.com/odgI9kIBIYTIgYtz?authoringPlay=true&publish"onclick="getPage('')">Manual de Usuario</a></li>
                </ul>
                </li>
                   <li>____________________________________________________________________________________</li>       
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
        <?php }else{ ?>
		<h2>Acceder a mi Cuenta</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="MiCuenta.php" method="post">
				<input type="email" name="email" placeholder="EMAIL" required="">
				<input type="password" name="password" placeholder="CONTRASEÑA" required="">
				<div class="send-button">
					<input type="submit" name="loginSubmit" value="INICIAR SESION">
				</div>
				<a href="EnviarPassword.php">Reiniciar Contraseña?</a>
			</form>            
		</div>
        <?php } ?>
</div>
</div>
<?php include('footer.php');?>