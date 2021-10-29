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
        
        $codigo_depe = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['codigo_depe'])));
        $dependencia = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['dependencia'])));
        $telefonod = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['telefonod'])));
        $codigo_centro = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['codigo_centro'])));      
       


        $insertqry = mysqli_query($con,"Insert into dependencia (codigo_depe,dependencia,telefonod,codigo_centro) values('$codigo_depe','$dependencia','$telefonod','$codigo_centro')") or die(mysqli_error($con));
        if($insertqry)
        {
            echo '<script type="text/javascript">
            alert("Registro exitoso");
            window.location.href="../loginr/index.php";
            </script>';
        }
    }
?>