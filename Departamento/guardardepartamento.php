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

<?php
        
    if(isset($_POST['submit'])){
        $codigo_dpto = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['codigo_dpto'])));
        $departamento = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['departamento'])));
               
        
        $insertqry = mysqli_query($con,"Insert into departamento (codigo_dpto,departamento) values('$codigo_dpto','$departamento')") or die(mysqli_error($con));
        if($insertqry)
        {
            echo '<script type="text/javascript">
            alert("Registro exitoso");
            window.location.href="../loginr/index.php";
            </script>';
        }
    }
?>