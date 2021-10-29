<?php
session_start();
include_once '../connection.php';
$sql="SELECT * FROM evidencia";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
?>

<table id="viewdata" class="table table-bordered table-striped">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Fecha</th>
<th>Imagen</th>
<th></th>
</tr>
<?php
while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>";
echo $row['id_evidencia'];
echo "</td><td>";
echo $row['name'];
echo "</td><td>";
echo $row['fecha'];
echo "</td><td>";
echo '<img src="data:image/png;base64,'.base64_encode($row['content']).'"/>';
}
mysqli_close($con);
?>
</table>