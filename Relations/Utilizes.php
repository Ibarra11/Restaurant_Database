<?php

  include('connection.php');

  $sql = "SELECT * FROM Utilizes";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Employee_ID</th><th>Equipment_ID</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['employee_id']. "</td>";
        $str .= "<td>". $row['equipment_id']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
