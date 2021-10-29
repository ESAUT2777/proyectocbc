<?php
    include '../connection.php';
    if(isset($_POST['subir'])&&$_FILES['userfile']['size']>0)
    {
        $filefecha = $_POST['fecha'];
        $fileName = $_FILES['userfile']['name'];
        $tmpName  = $_FILES['userfile']['tmp_name'];
        $fileSize = $_FILES['userfile']['size'];
        $fileType = $_FILES['userfile']['type'];
        $fileType=mysqli_real_escape_string($con,
        stripslashes ($fileType));
        $fp      = fopen($tmpName, 'r');
        $content = fread($fp, filesize($tmpName));
        $content = addslashes($content);
        fclose($fp);
        $fileName = addslashes($fileName);
        if($con){
        $query = "INSERT INTO evidencia (name,fecha, size, type, content ) ".
        "VALUES ('$fileName', '$filefecha','$fileSize', '$fileType', '$content')";
        mysqli_query($con,$query) or die('Error, falló la consulta'); 
        mysqli_close($con);
        header('location:Exito.php');
        }
        else { 
         header('location:../loginr/View/View.php');   
        }
    } 
?>
