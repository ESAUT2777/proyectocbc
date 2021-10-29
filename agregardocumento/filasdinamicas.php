<?php 
    date_default_timezone_set("America/Bogota");
    $fecha_actual=date("Y-m-d h:i:s");    
    ?>
<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title></title>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	
<style>
	#content{
		position: absolute;
		min-height: 50%;
		width: 90%;
		top: 5%;
		left: 5%;
	}

	.selected{
		cursor: pointer;
	}
	
	
</style>
<script>
	
	$(document).ready(function(){
		$('#bt_add').click(function(){
			agregar();
		});
		$('#bt_del').click(function(){
			eliminar(id_fila_selected);
		});
		$('#bt_delall').click(function(){
			eliminarTodasFilas();
		});
		

	});
	var cont=0;
	function agregar(){
		cont++;
		var fila='<tr class="selected" id="fila'+cont+'" onclick="seleccionar(this.id);"><td>'+cont+'</td><td><input type="text" style="width:570px;"></td><td><input type="text" style="width:300px;"></td><td><input type="text" style="width:350px;"></td></tr>';
		$('#tabla').append(fila);
		reordenar();
	}


	function eliminar(id_fila){
		/*$('#'+id_fila).remove();
		reordenar();*/
		for(var i=0; i<id_fila.length; i++){
			$('#'+id_fila[i]).remove();
		}
		reordenar();
	}

	function reordenar(){
		var num=1;
		$('#tabla tbody tr').each(function(){
			$(this).find('td').eq(0).text(num);
			num++;
		});
	}
	function eliminarTodasFilas(){
$('#tabla tbody tr').each(function(){
			$(this).remove();
		});

	}
	

</script>
</head>
<body>
	<div id="content">
		<center><img src="../image/logoSena.png" width="5%" heigth="5%"alt=""><h1>Centro Biotecnológico del Caribe</h1></center>
		<center><h3>Documentos enviados</h3></center>
		<button id="bt_add" class="btn btn-success">Agregar</button>
		<button id="bt_delall" class="btn btn-danger">Eliminar todo</button>
		<table id="tabla" class="table table-bordered">
		<thead>
			
		Fecha: <input type="datetime"value="<?=$fecha_actual?>" onkeydown="HideError()" required/><br><br>
		<button id="bt_delall" class="btn btn-default"><a href="../loginr/index.php">Volver</a></button>	
		<tr>
				<td>Nº</td>
				<td width="30%">Documento</td>
				<td width="30%">Persona</td>
				<td width="40%">Firma</td>
			</tr>
		</thead>
	</table>
	</div>


</body>
</html>
















