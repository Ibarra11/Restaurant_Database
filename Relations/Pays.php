<?php

  include('connection.php');

  $sql = "SELECT * FROM Pays";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>License_Number</th><th>Invoice_Number</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['license_Number']. "</td>";
        $str .= "<td>". $row['invoice_number']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
