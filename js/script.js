$(document).ready(function(){

    var dataTable = $('#persona').DataTable({
     "language": {
     "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
     },
     "processing" : true,
     "serverSide" : true,
     "order" : [],
     "ajax" : {
      url:"Persona/datos.php",
      type:"POST"
     }
    });
   
    $('#persona').on('draw.dt', function(){/*`personal_nombre``personal_edad``personal_salario`*/
     $('#persona').Tabledit({
      url:'Persona/edicion.php',
      dataType:'json',
      columns:{
       identifier : [0, 'id_persona'],
       editable:[[1, 'identificación'], [2, 'nombre'], [3, 'telefono'],[4, 'correo'],[5, 'tipo'],[6, 'direccion'],[7, 'codigo_municipio']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#' + data.id_persona).remove();
        $('#persona').DataTable().ajax.reload();
       }
      }
     });
    });
     
   }); 