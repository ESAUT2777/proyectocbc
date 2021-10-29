
<?php
session_start();
include_once '../connection.php';
$sql="SELECT * FROM evidencia order by fecha desc";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
?>
<html>
<head>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
#viewdata table{
    border:1px solid #aaa;
}
#viewdata th{background:#aaa;}
#viewdata td{background:#efefef;}
#viewdata th,td{padding:5px;text-align:left;}
</style><br><br>
<button style="background-color:yellow; float: center;"><a href="../loginr/index.php">Volver</a></button><br>
<div class="panel panel-primary">
    <div class="panel-heading"><center>Evidencias de Movimientos</center></div>
<table id="viewdata" class="table table-bordered table-striped">
<tr>
<th width="10%">Nombre</th>
<th width="10%">Fecha</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($res))
{
echo "</td><td>";
echo $row['name'];
echo "</td><td>";
echo $row['fecha'];
echo "<tr><td>";
echo '<img width="900" height="450" src="data:image/png;base64,'.base64_encode($row['content']).'"/>';

echo "
<td><a href='../View/download.php?id_evidencia=".$row['id_evidencia']."'>Descargar</a></td></tr>";
}
mysqli_close($con);
?>
</table>

<script>
	$(document).ready(function(){
		$('.del_doc').click(function(e){
			e.preventDefault();
			var loc = $(this).attr('href');
			$.ajax({
				url:loc,
				error:err=>{
					alert("Ha ocurrido un error");
					console.log(err)
				},
				success:function(resp){
					if(resp == 1){
						alert("Archivo eliminado correctamente");
						getPage('<?php echo $path ?>View/View.php')
					}
				}
			})
		})
	})
	
</script>