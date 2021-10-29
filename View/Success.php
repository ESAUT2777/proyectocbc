<!DOCTYPE html>
<html>
<head>
<title>Docs | Exito</title>
<link rel="stylesheet" href="../css/login1.css">
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;">CBC_DOC | <span style="color:green">Mensaje</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> Exito</h1>
    <h2 style="color: green">Has eliminado correctamente al usuario</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
&copy;Centro Biotecnológico del Caribe | 2021
</div>
</div>
</body>
</html>
<?php
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>