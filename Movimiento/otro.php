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
<?php 
    date_default_timezone_set("America/Bogota");
    $fecha_actual=date("Y-m-d h:i:s");    
    ?>
<h1 style="text-align: center;color:green;">Documentos enviados</h1>
<h2 style="text-align: center;color:green;">Centro Biotecnológico del Caribe</h2>
<button style="background-color:yellow; float: center;"><a href="../loginr/index.php">Volver</a></button>
<form name="Myform" id="Myform" action="" class="form-control" method="post" onsubmit="return(Validate());">
    
    <meta charset="UTF-8">
        <thead></thead>
        <tbody>
               Fecha: <input style="width:270px; height:30px;border:solid;"type="datetime" name="fecham" width="100" id="fecham" value="<?=$fecha_actual?>" onkeydown="HideError()" required/>
                      
            <table  width="75%">
            <tr>
            <th  style="color:green;">DOCUMENTOS</th>
            <th  style="color:green;">DEPENDENCIA</th>
            <th  style="color:green;">PERSONA</th>
            <th  style="color:green;">FIRMA</th>
        </tr> 
        <br><br>
        <tr>
          <td><select style="width:570px; height:30px;border:solid" type="text" name="id_doc" id="id_doc" onkeydown="HideError()" required>
          <option value="id_doc" selected>Seleccione un Documento</option>
          <?php
                        $sql=$con->query("SELECT * FROM documento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_doc']."'>".$fila['asunto']."</option>";     
                        }
                         ?>
                    </select></td>
                    <td><select style="width:350px; height:30px;border:solid" type="text"  name="codigo_depe" id="codigo_depe" onkeydown="HideError()" required>
                    <option value="codigo_depe" selected>Seleccione la Dependencia</option>
                    <?php
                        $sql=$con->query("SELECT * FROM dependencia");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_depe']."'>".$fila['dependencia']."</option>";                        
                        }
                         ?>
                    </select></td>
                    <td><select style="width:280px;height:30px;border:solid" type="text" name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected>Seleccione una Persona</option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";     
                        }
                         ?>
                    </select></td> 
                    <td><input type="text"style="width:250px;height:30px;border:solid"></td> 
                    <tr>
            <td><select style="width:570px; height:30px;border:solid" name="id_doc" id="id_doc" onkeydown="HideError()" required>
                        <option value="id_doc" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM documento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_doc']."'>".$fila['asunto']."</option>";     
                        }
                         ?>
                    </select></td>
                    <td><select style="width:350px; height:30px;border:solid"type="text"  name="codigo_depe" id="codigo_depe" onkeydown="HideError()" required>
                        <option value="codigo_depe" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM dependencia");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_depe']."'>".$fila['dependencia']."</option>";                        
                        }
                         ?>
                    </select></td>
                    <td><select style="width:280px;height:30px;border:solid"type="text" name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";     
                        }
                         ?>
                    </select></td> 
                    <td><input type="text"style="width:250px;height:30px;border:solid"></td> 
                    <tr>
            <td><select style="width:570px; height:30px;border:solid" name="id_doc" id="id_doc" onkeydown="HideError()" required>
                        <option value="id_doc" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM documento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_doc']."'>".$fila['asunto']."</option>";     
                        }
                         ?>
                    </select></td>
                    <td><select style="width:350px; height:30px;border:solid"type="text"  name="codigo_depe" id="codigo_depe" onkeydown="HideError()" required>
                        <option value="codigo_depe" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM dependencia");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_depe']."'>".$fila['dependencia']."</option>";                        
                        }
                         ?>
                    </select></td>
                    <td><select style="width:280px;height:30px;border:solid"type="text" name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";     
                        }
                         ?>
                    </select></td> 
                    <td><input type="text"style="width:250px;height:30px;border:solid"></td> 
                    <tr>
            <td><select style="width:570px; height:30px;border:solid;"name="id_doc" id="id_doc" onkeydown="HideError()" required>
                        <option value="id_doc" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM documento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_doc']."'>".$fila['asunto']."</option>";     
                        }
                         ?>
                    </select></td>
                    <td><select style="width:350px; height:30px;border:solid;"type="text"  name="codigo_depe" id="codigo_depe" onkeydown="HideError()" required>
                        <option value="codigo_depe" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM dependencia");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_depe']."'>".$fila['dependencia']."</option>";                        
                        }
                         ?>
                    </select></td>
                    <td><select style="width:280px;height:30px;border:solid;"type="text" name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";     
                        }
                         ?>
                    </select></td> 
                    <td><input type="text"style="width:250px;height:30px;border:solid;"></td> 
                    <tr>
            <td><select style="width:570px; height:30px;border:solid" name="id_doc" id="id_doc" onkeydown="HideError()" required>
                        <option value="id_doc" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM documento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_doc']."'>".$fila['asunto']."</option>";     
                        }
                         ?>
                    </select></td>
                    <td><select style="width:350px; height:30px;border:solid"type="text"  name="codigo_depe" id="codigo_depe" onkeydown="HideError()" required>
                        <option value="codigo_depe" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM dependencia");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_depe']."'>".$fila['dependencia']."</option>";                        
                        }
                         ?>
                    </select></td>
                    <td><select style="width:280px;height:30px;border:solid;"type="text" name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";     
                        }
                         ?>
                    </select></td> 
                    <td><input type="text"style="width:250px;height:30px;border:solid"></td> 
                    <tr>
            <td><select style="width:570px; height:30px;border:solid" name="id_doc" id="id_doc" onkeydown="HideError()" required>
                        <option value="id_doc" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM documento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_doc']."'>".$fila['asunto']."</option>";     
                        }
                         ?>
                    </select></td>
                    <td><select style="width:350px; height:30px;border:solid"type="text"  name="codigo_depe" id="codigo_depe" onkeydown="HideError()" required>
                        <option value="codigo_depe" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM dependencia");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_depe']."'>".$fila['dependencia']."</option>";                        
                        }
                         ?>
                    </select></td>
                    <td><select style="width:280px;height:30px;border:solid"type="text" name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";     
                        }
                         ?>
                    </select></td> 
                    <td><input type="text"style="width:250px;height:30px;border:solid"></td> 
                    <tr>
            <td><select style="width:570px; height:30px;border:solid" type="text" name="id_doc" id="id_doc" onkeydown="HideError()" required>
                        <option value="id_doc" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM documento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_doc']."'>".$fila['asunto']."</option>";     
                        }
                         ?>
                    </select></td>
                    <td><select style="width:350px; height:30px;border:solid"type="text"  name="codigo_depe" id="codigo_depe" onkeydown="HideError()" required>
                        <option value="codigo_depe" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM dependencia");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_depe']."'>".$fila['dependencia']."</option>";                        
                        }
                         ?>
                    </select></td>
                    <td><select style="width:280px;height:30px;border:solid"type="text" name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";     
                        }
                         ?>
                    </select></td> 
                    <td><input type="text"style="width:250px;height:30px;border:solid"></td> 
                    <tr>
            <td><select style="width:570px; height:30px;border:solid" type="text" name="id_doc" id="id_doc" onkeydown="HideError()" required>
                        <option value="id_doc" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM documento");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_doc']."'>".$fila['asunto']."</option>";     
                        }
                         ?>
                    </select></td>
                    <td><select style="width:350px; height:30px;border:solid"type="text"  name="codigo_depe" id="codigo_depe" onkeydown="HideError()" required>
                        <option value="codigo_depe" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM dependencia");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['codigo_depe']."'>".$fila['dependencia']."</option>";                        
                        }
                         ?>
                    </select></td>
                    <td><select style="width:280px;height:30px;border:solid"type="text" name="id_persona" id="id_persona" onkeydown="HideError()" required>
                        <option value="id_persona" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM persona");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['id_persona']."'>".$fila['nombrep']."</option>";     
                        }
                         ?>
                    </select></td> 
                    <td><input type="text"style="width:250px;height:30px;border:solid"></td> 
                        

            </table>
            <br>
            <td>Enviado por:<select style="width:280px;height:30px;border:solid"type="text" name="id" id="id" onkeydown="HideError()" required>
                        <option value="id" selected></option>
                        <?php
                        $sql=$con->query("SELECT * FROM usuarios");
                        while($fila=$sql->fetch_array()){
                          echo "<option value='".$fila['nombres']."'>".$fila['nombres']."  ".$fila['apellidos']."</option>";     
                        }
                         ?>
                    </select></td>
            
            <br><br>
            
                
            </tr>
        
        </tbody>
    
</form>
