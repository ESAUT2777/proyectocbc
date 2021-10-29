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
<div class="col-sm-3 r-form-1-box wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
<div class="col-sm-6 r-form-1-box wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
    
		<h4>Reiniciar contraseña de su cuenta</h4>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="MiCuenta.php" method="post">
				<input type="password" name="password" placeholder="CONTRASEÑA" required="">
				<input type="password" name="confirm_password" placeholder="CONFIRMAR CONTRASEÑA" required="">
				<div class="send-button">
					<input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
					<input type="submit" name="resetSubmit" value="REINICIAR CONTRASEÑA">
				</div>
			</form>
		</div>
</div>   
<!--Inicia columna 7-->
<div class="col-sm-3 text wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
</div>
<?php include('footer.php');?>