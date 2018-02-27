<?php

  include('connection.php');

  $sql = "SELECT * FROM Contacts";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Employee_ID</th><th>Supplier_ID</th><th>Contact_Date</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['employee_id']. "</td>";
        $str .= "<td>". $row['supplier_id']. "</td>";
        $str .= "<td>". $row['contact_date']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
