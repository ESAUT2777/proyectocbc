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
        $codigo_municipio = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['codigo_municipio'])));
        $municipio = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['municipio'])));
        $codigo_dpto= htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['codigo_dpto'])));  
        
        
        $insertqry = mysqli_query($con,"Insert into municipio (codigo_municipio,municipio,codigo_dpto) values('$codigo_municipio','$municipio','$codigo_dpto')") or die(mysqli_error($con));
        if($insertqry)
        {
            echo '<script type="text/javascript">
            alert("Registro exitoso");
            window.location.href="../loginr/index.php";
            </script>';
        }
    }
?>