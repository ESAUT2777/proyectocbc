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
<script type="text/javascript"></script>
<h2 style="text-align: center;">Registrar Subsedes</h2>
<form name="Myform" id="Myform" action="../Subsede/guardarsubsede.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:500px; margin-left: 30em;">
        <thead>
        <meta charset="UTF-8">
        <tbody>
            <tr>
                <td>Nombre</td>
                <td><input name="nombres" class="form-control" type="text"  aria-label="" style="text-transform:uppercase;" required></td>
            </tr>
            <tr>
            <td>Telefono</td>
                <td><input name="telefonos" class="form-control" type="text"  aria-label="" required></td>
            </tr>
            <tr>
                <td>Centro</td>
                <td><select type="number" name="codigo_centro" id="codigo_centro" onkeydown="HideError()" required>
                        <option value="codigo_centro" selected>Seleccione el Centro</option>
                        <?php
                        $sql=$con->query("SELECT * FROM centro");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_centro']."'>".$fila['centro']."</option>";
                        
                        }
                         ?>
                    </select></td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><select type="text" name="codigo_municipio" id="codigo_municipio" onkeydown="HideError()">
                        <option value="codigo_municipio" selected>Municipio donde está ubicada la subsede</option>
                        <?php
                        $sql=$con->query("SELECT * FROM municipio");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_municipio']."'>".$fila['municipio']."</option>";
                        
                        }
                         ?>
                    </select></td>
            </tr>
                <tr>
                <td style="color:#F8F8FF;"></td>
                <td><input type="submit" name="submit" value="Agregar" /></td>
            </tr>
            </thead>
        </tbody>
    </table>
</form>