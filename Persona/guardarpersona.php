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

<?php
        
    if(isset($_POST['submit'])){
        $identificación = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['identificación'])));
        $nombrep = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['nombrep'])));
        $telefono= htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['telefono'])));
        $correo = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['correo'])));
        $tipop = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['tipop'])));
        $direccion = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['direccion'])));
        $codigo_municipio = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['codigo_municipio'])));
    
        
        
        $insertqry = mysqli_query($con,"Insert into persona (identificación,nombrep,telefono,correo,tipop,direccion,codigo_municipio) values('$identificación','$nombrep','$telefono','$correo','$tipop','$direccion','$codigo_municipio')") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:../loginr/index.php');
        }
    }
?>