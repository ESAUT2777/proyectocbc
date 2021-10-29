
    function error(message) {

      $('#error').show(500, function() {
      $('#error').html(message);

  })
}
function HideError(){
$('#error').hide(500, function() {});
}

function Validate(){
if(document.Myform.nombre.value ==""){
 error("Ingrese Nombre");
 document.Myform.nombre.focus()
 return false;
}
if(document.Myform.apellido.value ==""){
 error("Ingrese Apellido");
 document.Myform.apellido.focus();
 return false;
}
if(document.Myform.mobile.value ==""){
 error("Ingrese Telefono");
 document.Myform.mobile.focus();
 return false;
}
if(isNaN(document.Myform.mobile.value) || (document.Myform.mobile.value.legth > 15) ){
 error("Ingrese Numero Valido");
 document.Myform.mobile.focus();
 return false;
}
if(document.Myform.email.value == ""){
 error("Ingrese Correo Electrónico");
 document.Myform.email.focus();
 return false;
}
if(document.Myform.password.value >= 4){
 error("Contraseña debe contener mas de 4 caracteres");
 document.Myform.password.focus();
 return false;
}
if (atpos < 1 || ( dotpos - atpos < 2 )) 
{
   error("Please enter correct email ID")
   document.myform.email.focus() ;
   return false;
}
if(document.Myform.usertype.value =="Seleccione tipo de Usuario"){
 error("Please select privilege of user");
 
 return false;
}
return true;
}
    