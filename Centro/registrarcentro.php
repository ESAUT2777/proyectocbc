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
<h2 style="text-align: center;">Registrar Centros</h2>

<form name="Myform" id="Myform" action="../Centro/guardarcentro.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:400px; margin-left: 33em;">
        <thead>
        <meta charset="UTF-8">
        <tbody>
        <tr>
                <td>Codigo</td>
                <td><input name="codigo_centro" class="form-control" type="number"  aria-label="" required >
                </td>
            </tr>
            <tr>
                <td>Centro</td>
                <td><input name="centro" class="form-control" type="text"  aria-label="" style="text-transform:uppercase;" required></td>
            </tr>
            <tr>
            <td>Telefono</td>
                <td><input name="telefonoc" class="form-control" type="text"  aria-label="" required></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><input name="direccionc" class="form-control" type="text"  aria-label="" style="text-transform:uppercase;" required></td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td><select type="text" name="codigo_municipio" id="codigo_municipio" onkeydown="HideError()" required>
                        <option value="codigo_municipio" selected>Seleccione el Municipio</option>
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