<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap.css">
    <link rel="stylesheet" href="lib/datatables.min.css">
    <title>Datatables</title>
</head>
<body>
  <button style="background-color:yellow; float: center;"><a href="loginr/index.php">Volver</a></button>  
    <!-- Modal -->    
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar persona</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-editar">
              <div class="form-group">
                  <label for="">Persona: </label>
                  <input type="hidden" id="id_persona">
                  <input type="text" id="identificación_persona" class="form-control">
                  <input type="text" id="nombrep_persona" class="form-control">
                  <input type="text" id="telefono_persona" class="form-control">
                  <input type="text" id="correo_persona" class="form-control">
                  <input type="text" id="tipop_persona" class="form-control">
                  <input type="text" id="direccion_persona" class="form-control">
                  <input type="text" id="codigo_municipio_persona" class="form-control">  
              </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
        </div>
      </div>
    </div>
  </div> 

      </div>
    </div>
  </div>
    <div class="container">
        <br><br>
        <center><h2>Personas registradas</h2></center>
        <table id="example"class="display table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Identificación</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Direccion</th>
                    <th>Municipio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <script src="lib/jquery.min.js"></script>
    <script src="lib/bootstrap.js"></script>
    <script src="lib/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
            var funcion='listar';
    let datatable = $('#example').DataTable({
        "ajax": {
            "url": "controlador/PersonaController.php",
            "method": "POST",
            "data":{funcion:funcion}
        },
        "columns": [
            { "data": "identificación" },
            { "data": "nombrep" },
            { "data": "telefono" },
            { "data": "correo" },
            { "data": "tipop" },
            { "data": "direccion" },
            { "data": "municipio" },
            { "defaultContent": `<button class="editar btn btn-success" type="button" data-toggle="modal" data-target="#editar">Editar</button>
                                ` }
        ],
        "language": espanol
    });
    $('#example tbody').on('click','.editar', function(){
      let data = datatable.row($(this).parents()).data();
      $('#id_persona').val(data.id_persona);
      $('#identificación_persona').val(data.identificación);
      $('#nombrep_persona').val(data.nombrep);
      $('#telefono_persona').val(data.telefono);
      $('#correo_persona').val(data.correo);
      $('#tipop_persona').val(data.tipop);
      $('#direccion_persona').val(data.direccion);
      $('#codigo_municipio_persona').val(data.codigo_municipio);  
    })
    $('#form-editar').submit(e=>{
      let id_persona =$('#id_persona').val();
      let identificación=$('#identificación_persona').val();
      let nombrep=$('#nombrep_persona').val();
      let telefono=$('#telefono_persona').val();
      let correo=$('#correo_persona').val();
      let tipop=$('#tipop_persona').val();
      let direccion=$('#direccion_persona').val();
      let codigo_municipio=$('#codigo_municipio_persona').val();
      funcion='editar';
      $.post('controlador/PersonaController.php',{id_persona,identificación,nombrep,telefono,correo,tipop,direccion,codigo_municipio,funcion},(response)=>{
        
      })
      
    })
    
} );
let espanol = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
};
    </script>
</body>
</html>