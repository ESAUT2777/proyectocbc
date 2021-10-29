<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['estado']['msg'])){
    $statusMsg = $sessData['estado']['msg'];
    $statusMsgType = $sessData['estado']['type'];
    unset($_SESSION['sessData']['estado']);
}
include('header.php');
?>
  <h2>REGISTRO DE USUARIO  </h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="MiCuenta.php" method="post">
				<input type="text" name="nombres" placeholder="NOMBRES" required="">
				<input type="text" name="apellidos" placeholder="APELLIDOS" required="">
				<input type="email" name="email" placeholder="EMAIL" required="">
				<input type="text" name="telefono" placeholder="TELEFONO" required="">
				<input type="password" name="password" placeholder="CONTRASEÑA" required="">
				<input type="password" name="confirm_password" placeholder="CONFIRMAR CONTRASEÑA" required="">
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="CREAR CUENTA">
				</div>
			</form>
		</div>
	</div>  
<div class="col-sm-3 text wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
</div>
<?php include('footer.php');?>