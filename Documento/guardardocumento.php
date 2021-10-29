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
        $asunto = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['asunto'])));
        $fecha = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['fecha'])));
        $folios = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['folios'])));
        $tipod= htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['tipod'])));
        $id_persona = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['id_persona'])));
        
        
        $insertqry = mysqli_query($con,"Insert into documento (asunto,fecha,folios,tipod,id_persona) values('$asunto','$fecha','$folios','$tipod','$id_persona')") or die(mysqli_error($con));
        if($insertqry)
        {
            echo '<script type="text/javascript">
            alert("Registro Exitoso");
            window.location.href="../loginr/index.php";
            </script>';
        }
    }
?>