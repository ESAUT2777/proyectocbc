<?php
session_start();
    date_default_timezone_set("America/Bogota");
    $fecha_actual=date("Y-m-d h:i:s");    
    ?>
<center><form action= "../Subir/Subirproceso.php" method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1"
cellspacing="1" class="box">
<tr>
<h1 style="color:green;">Cargar Evidencia de Movimiento</h1>
</tr>
<br>
<tr>
    <td>Fecha<input type="datetime" name="fecha" width="100" id="fecha" value="<?=$fecha_actual?>" onkeydown="HideError()" required/></td>
</tr>
<br><br>
<tr><td></td></tr>
<tr>
<td>
<input name="userfile" type="file" id="userfile"> 
</td>
<td><input name="subir"type="submit" class="box" id="subir" value=" Cargar "></td>
</tr>
</table>
</form></center>
