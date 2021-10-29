<?php
date_default_timezone_set("America/Bogota");
$con= mysqli_connect("bqsi5qvhtw94wy7jlelf-mysql.services.clever-cloud.com","up2wjqihx6mpndkf","fIPXckTHX1w5XF0vKHc2");
if($con)
{
    mysqli_select_db($con,"bqsi5qvhtw94wy7jlelf");
}
 else {
     echo "no se conectó la bd".die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">      
    <title>Envio de documentos</title>
<script>
  var centro;
  var nombreDocumento;
  var fecha= new Date();
  var imprimir;
function generarDocumento(){  
  centro=document.getElementById("centro").value;  
  document.write(fecha.getDate() + "/" + (fecha.getMonth()+1) + "/" + fecha.getFullYear()+"</br>"+"</br>"+"</br>");
  document.write("Destino:"+'&nbsp;'+centro+"<br>"+"<br>");
  
for (inicio=0; nombreDocumento != "m";) {
nombreDocumento=prompt('Ingrese Asunto del Documento');
document.write("Documento:  "+'&nbsp;'+nombreDocumento+'&nbsp;'+'&nbsp;'+'<br/>');
nombreDocumento=prompt('Ingrese "m" Para terminar o cualquier tecla para continuar'); 

} 
document.write('<button onclick="window.print()">Imprimir</button>');
}
generarDocumento()
</script>
<center><h2>Enviar Documentos </h2></center>
</head>

<body> 
  <center> 
    Destino: <br><select type="number" name="centro" id="centro" onkeydown="HideError()" required>
                        <option value="centro" selected>Seleccione el Centro</option>
                        <?php
                        $sql=$con->query("SELECT * FROM centro");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['centro']."'>".$fila['centro']."</option>";
                        
                        }
                         ?>
                    </select><br><br>
   <input type="button"  name="Continuar" onclick="generarDocumento()"   value="Continuar"/>
</center>
</body>
</html>