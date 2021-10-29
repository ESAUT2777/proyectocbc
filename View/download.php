
<?php
include '../connection.php';
if(isset($_GET['id_evidencia'])) 
{
    $id_evidencia =$_GET['id_evidencia'];
$query = "SELECT name, type, size, content " .
         "FROM evidencia WHERE id_evidencia = '$id_evidencia'";
$result = mysqli_query($con,$query) or die('Error, falló la consulta');
list($name, $type, $size, $content) = mysqli_fetch_array($result);
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
ob_clean();
flush();
echo $content;
mysqli_close($con);
exit;
}
?>
