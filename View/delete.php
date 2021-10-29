<?php
include_once '../connection.php';
$sql2="DELETE FROM evidencia WHERE id_evidencia=".$_REQUEST['data'];
$res2=mysqli_query($con,$sql2) or die(mysqli_error($con));
if($res2)
{
echo true;
}
mysqli_close($con);
?> 
