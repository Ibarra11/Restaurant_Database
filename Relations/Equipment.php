<?php

  include('connection.php');

  $sql = "SELECT * FROM Equipment";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Equipment_ID</th><th>Equipment_Type</th><th>Initial_Cost</th><th>Last_Maintenance_Date</th><th>Next_Maintenance_Date</th></tr>";

    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['equipment_id']. "</td>";
        $str .= "<td>". $row['equipment_type']. "</td>";
        $str .= "<td>". $row['initial_cost']. "</td>";
        $str .= "<td>". $row['last_maintenance_date']. "</td>";
        $str .= "<td>". $row['next_maintenance_date']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
