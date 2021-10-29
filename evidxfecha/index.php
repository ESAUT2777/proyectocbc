<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">
#viewdata table{
    border:1px solid #aaa;
}
#viewdata th{background:#aaa;}
#viewdata td{background:#efefef;}
#viewdata th,td{padding:5px;text-align:left;}
</style>
  </head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    </div>
  </nav>
  <div class="col-md-3"></div>
  <div class="col-md-6 well">
    <hr style="border-top:1px dotted #000;"/>
    <br>
    <button style="background-color:yellow; float: left;"><a href="../loginr/index.php">Volver</a></button>
    <br><br>
    <form class="form-inline" method="POST" action="">
      <label>Fecha Desde:</label>
      <input type="date" class="form-control" placeholder="Start"  name="date1"/>
      <label>Hasta</label>
      <input type="date" class="form-control" placeholder="End"  name="date2"/>
      <button class="btn btn-primary" name="search"><span class="">Consultar</span></button> <a href="index.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
    </form>
    <br /><br />
    <div class="table-responsive">            
      <table width="90%" border='1'id="viewdata" class="table table-bordered table-striped">
        <thead class="alert-info">
          <tr>
            <th width="20%">Fecha</th>
            <th width="60%">Nombre de la evidencia</th>
          </tr>
        </thead>
        <tbody>
          <?php include'range.php'?>    
        </tbody>
      </table>
    </div>    
  </div>
</body>
</html>
