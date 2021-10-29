<?php
date_default_timezone_set("America/Bogota");
$con= mysqli_connect("bqsi5qvhtw94wy7jlelf-mysql.services.clever-cloud.com","up2wjqihx6mpndkf","up2wjqihx6mpndkf","fIPXckTHX1w5XF0vKHc2");
if($con)
{
    mysqli_select_db($con,"bqsi5qvhtw94wy7jlelf");
}
 else {
     echo "No se conectó la bd".die(mysqli_error($con));
}
?>
<script type="text/javascript"></script>
<?php 
    date_default_timezone_set("America/Bogota");
    $fecha_actual=date("Y-m-d h:i:s");    
    ?>
<h2 style="text-align: center;">Registrar Documento</h2>
<form name="Myform" id="Myform" action="../Documento/guardardocumento.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 33em;">
        <thead></thead>
        <meta charset="UTF-8">
        <tbody>
            <tr>
                <td>Asunto</td>
                <td><input type="text" name="asunto" id="asunto" style="text-transform:uppercase;" onkeydown="HideError()" required/></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><input type="datetime" name="fecha" id="fecha" value="<?=$fecha_actual?>" onkeydown="HideError()" required/></td>
            </tr>
            <tr>
                <td>Folios</td>
                <td><input type="int" name="folios" id="folios"  onkeydown="HideError()" required/></td>
            </tr>
            <tr>
                <td>Tipo Documento</td>
                <td>
                    <select name="tipod" id="tipod" onkeydown="HideError()" required>
                        <option value="tipod" selected>Tipo de Documento</option>
                        <option value="Entrada">Entrada</option>
                        <option value="Salida" >Salida</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Destinatario/Remitente</td>
                <td>
                <select name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected>Seleccione una Persona</option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";
                        
                        }
                         ?>
                    </select>
                    </td>
                    </tr>
            <tr>
                <td style="color:#F8F8FF;"></td>
                <td><input type="submit" name="submit" value="Agregar" /></td>
            </tr>        
        </tbody>
    </table>
</form>

