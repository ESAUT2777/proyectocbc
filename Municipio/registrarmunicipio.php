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
<h2 style="text-align: center;">Registrar Municipio</h2>
<form name="Myform" id="Myform" action="../Municipio/guardarmunicipio.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:200px; margin-left: 30em;">
        <thead>
        <meta charset="UTF-8">
        <tbody>
        <tr>
                <td>Codigo</td>
                <td><input name="codigo_municipio" class="form-control" type="number"  aria-label="" required>
                </td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td><input name="municipio" class="form-control" type="text"  aria-label="" style="text-transform:uppercase;" required>
              </td>

            </tr>
            <tr>
                <td>Departamento</td>
                <td><select type="text" name="codigo_dpto" id="codigo_dpto" onkeydown="HideError()" required>
                        <option value="codigo_dpto" selected>Seleccione el Departamento</option>
                        <?php
                        $sql=$con->query("SELECT * FROM departamento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_dpto']."'>".$fila['departamento']."</option>";
                        
                        }
                         ?>
                    </select>
              </td>                    
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Agregar" /></td>
            </tr>
            </thead>
        </tbody>
    </table>
</form>