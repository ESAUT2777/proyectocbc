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
          <h5 class="modal-title" id="exampleModalLabel">Editar Centro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-editar">            
              <div class="form-group">
                  <label for="">Centro: </label>
                  <input type="number" id="codigo_centro">
                  <input type="text" id="centro" class="form-control">
                  <input type="text" id="telefonoc" class="form-control">
                  <input type="text" id="direccionc" class="form-control">
                  <input type="text" id="codigo_municipio" class="form-control">
                   
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
        <center><h2>Centros registrados</h2></center>
        <table id="example"class="display table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Codigo_Centro</th>
                    <th>Centro</th>
                    <th>Telefono</th>                    
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
            "url": "controlador/CentroController.php",
            "method": "POST",
            "data":{funcion:funcion}
        },
        "columns": [
            { "data": "codigo_centro" },
            { "data": "centro" },            
            { "data": "telefonoc" },
            { "data": "direccionc" },
            { "data": "municipio" },
            { "defaultContent": `<button class="editar btn btn-success" type="button" data-toggle="modal" data-target="#editar">Editar</button>
                                ` }
        ],
        "language": espanol
    });
    $('#example tbody').on('click','.editar', function(){
      let data = datatable.row($(this).parents()).data();
      $('#codigo_centro').val(data.codigo_centro);
      $('#centro').val(data.centro);
      $('#telefonoc').val(data.telefonoc);
      $('#direccionc').val(data.direccionc);
      $('#codigo_municipio').val(data.codigo_municipio);  
    })
    $('#form-editar').submit(e=>{
      let codigo_centro =$('#codigo_centro').val();
      let centro=$('#centro').val();
      let telefonoc=$('#telefonoc').val();
      let direccionc=$('#direccionc').val();
      let codigo_municipio=$('#codigo_municipio').val();
      funcion='editar';
      $.post('controlador/CentroController.php',{codigo_centro,centro,telefonoc,direccionc,codigo_municipio,funcion},(response)=>{
        
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