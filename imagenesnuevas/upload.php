<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "El archivo es una imagen - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "El archivo no es una imagen.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "El archivo ya existe.";
  $uploadOk = 0;
}


if ($_FILES["fileToUpload"]["size"] > 15000000) {
  echo "Su archivo es demasiado largo.";
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Solo se admiten archivos,JPG, JPEG, PNG & GIF.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Su archivo no ha sido subido.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "El archivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ha sido cargado.";
  } else {
    echo "Error al cargar el archivo.";
  }
}
header('location:../Documento/exit.php');

?>
