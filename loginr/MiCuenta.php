<?php
session_start();
include 'Usuarios.php';
$user = new User();
if(isset($_POST['signupSubmit'])){
	
    if(!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
		
        if($_POST['password'] !== $_POST['confirm_password']){
            $sessData['estado']['type'] = 'error';
            $sessData['estado']['msg'] = 'Confirmar que la contraseña debe coincidir con la contraseña.'; 
        }else{
            $prevCon['where'] = array('email'=>$_POST['email']);
            $prevCon['return_type'] = 'count';
            $prevUser = $user->getRows($prevCon);
            if($prevUser > 0){
                $sessData['estado']['type'] = 'error';
                $sessData['estado']['msg'] = 'Email existe, Por favor otro email.';
            }else{
                $userData = array(
                    'nombres' => $_POST['nombres'],
                    'apellidos' => $_POST['apellidos'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'telefono' => $_POST['telefono']
                );
                $insert = $user->insert($userData);
                if($insert){
                    $sessData['estado']['type'] = 'success';
                    $sessData['estado']['msg'] = 'Te registraste exitosamente, inicia sesión con tus credenciales.';
                }else{
                    $sessData['estado']['type'] = 'error';
                    $sessData['estado']['msg'] = 'Ha ocurrido algún problema, por favor intente de nuevo.';
                }
            }
        }
    }else{
        $sessData['estado']['type'] = 'error';
        $sessData['estado']['msg'] = 'Todos los campos son obligatorios, por favor complete todos los campos.'; 
    }
    $_SESSION['sessData'] = $sessData;
    $redirectURL = ($sessData['estado']['type'] == 'success')?'index.php':'Registro.php';
	
    header("Location:".$redirectURL);
}elseif(isset($_POST['loginSubmit'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
		
        $conditions['where'] = array(
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'estado' => '1'
        );
        $conditions['return_type'] = 'single';
        $userData = $user->getRows($conditions);
        if($userData){
            $sessData['userLoggedIn'] = TRUE;
            $sessData['userID'] = $userData['id'];
            $sessData['estado']['type'] = 'success';
            $sessData['estado']['msg'] = 'Bienvenido '.$userData['first_name'].'!';
        }else{
            $sessData['estado']['type'] = 'error';
            $sessData['estado']['msg'] = 'Email o contraseña incorrectos, por favor intente de nuevo.'; 
        }
    }else{
        $sessData['estado']['type'] = 'error';
        $sessData['estado']['msg'] = 'Ingrese email y password.'; 
    }
    $_SESSION['sessData'] = $sessData;
    header("Location:index.php");
}elseif(isset($_POST['forgotSubmit'])){
    if(!empty($_POST['email'])){
		$prevCon['where'] = array('email'=>$_POST['email']);
		$prevCon['return_type'] = 'count';
		$prevUser = $user->getRows($prevCon);
		if($prevUser > 0){
			$uniqidStr = md5(uniqid(mt_rand()));;
			$conditions = array(
				'email' => $_POST['email']
			);
			$data = array(
				'olvido_pass_iden' => $uniqidStr
			);
			$update = $user->update($data, $conditions);
			
			if($update){
				$resetPassLink = 'https://localhost/doc_cbc/loginr/ReiniciarPassword.php?fp_code='.$uniqidStr;
				
				
				$con['where'] = array('email'=>$_POST['email']);
				$con['return_type'] = 'single';
				$userDetails = $user->getRows($con);
				
				
				$to = $userDetails['email'];
				$subject = "Solicitud de actualización de contraseña";
				$mailContent = 'Estimado '.$userDetails['nombres'].', 
				<br/>Recientemente se envió una solicitud para restablecer una contraseña para su cuenta. Si esto fue un error, simplemente ignore este correo electrónico y no pasará nada.
				<br/>Para restablecer su contraseña, visite el siguiente enlace: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
				<br/><br/>Saludos,
				<br/>';
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				
				$headers .= 'From: esaut19681@gmail.com' . "\r\n";
				
				mail($to,$subject,$mailContent,$headers);
				
				$sessData['estado']['type'] = 'success';
				$sessData['estado']['msg'] = 'Por favor revise su correo electrónico, hemos enviado un enlace de restablecimiento de contraseña a su correo electrónico registrado.';
			}else{
				$sessData['estado']['type'] = 'error';
				$sessData['estado']['msg'] = 'Ocurrio algun problema, intentelo de nuevo.';
			}
		}else{
			$sessData['estado']['type'] = 'error';
			$sessData['estado']['msg'] = 'El correo electrónico dado no está asociado con ninguna cuenta.'; 
		}
		
    }else{
        $sessData['estado']['type'] = 'error';
        $sessData['estado']['msg'] = 'Ingrese el correo electrónico para crear una nueva contraseña para su cuenta.'; 
    }
    $_SESSION['sessData'] = $sessData;
    header("Location:EnviarPassword.php");
}elseif(isset($_POST['resetSubmit'])){
	$fp_code = '';
	if(!empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['fp_code'])){
		$fp_code = $_POST['fp_code'];
        if($_POST['password'] !== $_POST['confirm_password']){
            $sessData['estado']['type'] = 'error';
            $sessData['estado']['msg'] = 'Confirmar que la contraseña debe coincidir con la contraseña.'; 
        }else{
            $prevCon['where'] = array('olvido_pass_iden' => $fp_code);
            $prevCon['return_type'] = 'single';
            $prevUser = $user->getRows($prevCon);
            if(!empty($prevUser)){
				$conditions = array(
					'olvido_pass_iden' => $fp_code
				);
				$data = array(
					'password' => md5($_POST['password'])
				);
				$update = $user->update($data, $conditions);
				if($update){
					$sessData['estado']['type'] = 'success';
                    $sessData['estado']['msg'] = 'La contraseña de su cuenta se ha restablecido con éxito. Por favor inicie sesión con su nueva contraseña.';
				}else{
					$sessData['estado']['type'] = 'error';
					$sessData['estado']['msg'] = 'Ha ocurrido algún problema, por favor intente de nuevo.';
				}
            }else{
                $sessData['estado']['type'] = 'error';
                $sessData['estado']['msg'] = 'No está autorizado a restablecer una nueva contraseña de esta cuenta.';
            }
        }
    }else{
        $sessData['estado']['type'] = 'error';
        $sessData['estado']['msg'] = 'Todos los campos son obligatorios, por favor complete todos los campos.'; 
    }
    $_SESSION['sessData'] = $sessData;
    $redirectURL = ($sessData['estado']['type'] == 'success')?'index.php':'ReiniciarPassword.php?fp_code='.$fp_code;
	
    header("Location:".$redirectURL);
}elseif(!empty($_REQUEST['logoutSubmit'])){
	
    unset($_SESSION['sessData']);
    session_destroy();
    $sessData['estado']['type'] = 'success';
    $sessData['estado']['msg'] = 'Has salido exitosamente de tu cuenta.';
    $_SESSION['sessData'] = $sessData;
    header("Location:index.php");
}else{
    header("Location:index.php");
}