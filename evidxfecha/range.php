<?php
date_default_timezone_set("America/Bogota");
$con= mysqli_connect("bqsi5qvhtw94wy7jlelf-mysql.services.clever-cloud.com","up2wjqihx6mpndkf","up2wjqihx6mpndkf","fIPXckTHX1w5XF0vKHc2");
if($con)
{
    mysqli_select_db($con,"bqsi5qvhtw94wy7jlelf");
}
 else {
     echo "No se conectó la bd".die(mysqli_error($con));
}
?>
<?php
  
  if(ISSET($_POST['search'])){
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query=mysqli_query($connection, "SELECT fecha,name FROM `evidencia` WHERE `fecha` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
    $row=mysqli_num_rows($query);
    if($row>0){
      while($fetch=mysqli_fetch_array($query)){
?>
  <tr>
    <td><?php echo $fetch['fecha']?></td>
    <td><?php echo $fetch['name']?></td>
  </tr>
<?php
      }
    }else{
      echo'
      <tr>
        <td colspan = "4"><center>Registros no Existen</center></td>
      </tr>';
    }
  }else{
    $query=mysqli_query($connection, "SELECT fecha,name FROM evidencia ") or die(mysqli_error());
    while($fetch=mysqli_fetch_array($query)){
?>
  <tr>
    <td><?php echo $fetch['fecha']?></td>
    <td><?php echo $fetch['name']?></td>
  </tr>
<?php
    }
  }
?>