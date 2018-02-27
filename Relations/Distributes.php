<?php

  include('connection.php');

  $sql = "SELECT * FROM Distributes";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Employee_ID</th><th>Item_ID</th><th>Item_Name</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['employee_id']. "</td>";
        $str .= "<td>". $row['item_id']. "</td>";
        $str .= "<td>". $row['item_name']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
