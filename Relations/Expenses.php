<?php
  include('connection.php');

  $sql = "SELECT * FROM Expenses";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Invoice_Number</th><th>Type</th><th>Cost</th><th>Date</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['invoice_number']. "</td>";
        $str .= "<td>". $row['type']. "</td>";
        $str .= "<td>". $row['cost']. "</td>";
        $str .= "<td>". $row['date']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();



 ?>
