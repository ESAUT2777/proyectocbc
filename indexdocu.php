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
          <h5 class="modal-title" id="exampleModalLabel">Editar Documento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-editar">
              <div class="form-group">
                  <label for="">Documento: </label>
                  <input type="number" id="id_doc">
                  <input type="text" id="asunto" class="form-control">
                  <input type="datetime" id="fecha" class="form-control">
                  <input type="number" id="folios" class="form-control">
                  <input type="text" id="tipod" class="form-control">
                  <input type="number" id="id_persona" class="form-control">
                   
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
        <center><h2>Documentos registrados</h2></center>
        
        <table id="example"class="display table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Asunto</th>
                    <th>Fecha</th>                    
                    <th>Folios</th>
                    <th>Tipo Doc</th>
                    <th>Persona</th>
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
            "url": "controlador/DocumentoController.php",
            "method": "POST",
            "data":{funcion:funcion}
        },
        "columns": [
            { "data": "id_doc" },
            { "data": "asunto" },            
            { "data": "fecha" },
            { "data": "folios" },
            { "data": "tipod" },
            { "data": "nombrep" }
        ],
        "language": espanol
    });
    $('#example tbody').on('click','.editar', function(){
      let data = datatable.row($(this).parents()).data();
      $('#id_doc').val(data.id_doc);
      $('#asunto').val(data.asunto);
      $('#fecha').val(data.fecha);
      $('#folios').val(data.folios); 
      $('#tipod').val(data.tipod);
      $('#id_persona').val(data.id_persona);
    })
    $('#form-editar').submit(e=>{
        let id_doc =$('#id_doc').val();
      let asunto =$('#asunto').val();
      let fecha=$('#fecha').val();
      let folios=$('#folios').val();
      let tipod=$('#tipod').val();
      let id_persona=$('#id_persona').val();
      funcion='editar';
      $.post('controlador/DocumentoController.php',{id_doc,asunto,fecha,folios,tipod,id_persona,funcion},(response)=>{
        
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