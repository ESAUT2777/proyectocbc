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
  <br><br>
  <button style="background-color:yellow; float: center;"><a href="../doc_cbc/loginr/index.php">Volver</a></button>
    <!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-editar">
              <div class="form-group">
                  <label for="">Usuario: </label>
                  <input type="hidden" id="id">
                  <input type="text" id="nombres" class="form-control">
                  <input type="text" id="apellidos" class="form-control">
                  <input type="text" id="telefono" class="form-control">
                  <input type="text" id="email" class="form-control">
                  <input type="text" id="estado" class="form-control">  
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
  
    <div class="container">
        <br><br>
        <center><h2>Usuarios Registrados</h2></center>
        <table id="example"class="display table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Estado</th>                   
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
            "url": "controlador/UsuarioController.php",
            "method": "POST",
            "data":{funcion:funcion}
        },
        "columns": [
            { "data": "id" },
            { "data": "nombres" },
            { "data": "apellidos" },
            { "data": "telefono" },
            { "data": "email" },
            { "data": "estado" },
            { "defaultContent": `<button class="editar btn btn-success" type="button" data-toggle="modal" data-target="#editar">Editar</button>
            
            ` }
        ],
        "language": espanol
    });
    $('#example tbody').on('click','.editar', function(){
      let data = datatable.row($(this).parents()).data();
      $('#id').val(data.id);
      $('#nombres').val(data.nombres);
      $('#apellidos').val(data.apellidos);
      $('#telefono').val(data.telefono);
      $('#email').val(data.email);
      $('#estado').val(data.estado);  
    })
    $('#form-editar').submit(e=>{
      let id =$('#id').val();
      let nombres=$('#nombres').val();
      let apellidos=$('#apellidos').val();
      let telefono=$('#telefono').val();
      let email=$('#email').val();
      let estado=$('#estado').val();
      funcion='editar';
      $.post('controlador/UsuarioController.php',{id,nombres,apellidos,telefono,email,estado,funcion},(response)=>{
        
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