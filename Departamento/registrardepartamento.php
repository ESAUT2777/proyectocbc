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
<h2 style="text-align: center;">Registrar Departamento</h2>
<form name="Myform" id="Myform" action="../Departamento/guardardepartamento.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:500px; margin-left: 30em;">
        <thead>
        <meta charset="UTF-8">
        <tbody>
        <tr>
                <td>Codigo</td>
                <td><input name="codigo_dpto" class="form-control" type="number"  aria-label="">
                </td>
            </tr>
            <tr>
                <td>Departamento</td>
                <td><input name="departamento" class="form-control" type="text"  aria-label=""></td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;"></td>
                <td><input type="submit" name="submit" value="Agregar" /></td>
            </tr>
            </thead>
        </tbody>
    </table>
</form>