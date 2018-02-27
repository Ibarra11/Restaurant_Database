<?php

  include('connection.php');

  $sql = "SELECT * FROM Delivers";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Supplier_ID</th><th>Order_No</th><th>Item_ID</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['supplier_id']. "</td>";
        $str .= "<td>". $row['order_no']. "</td>";
          $str .= "<td>". $row['item_id']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
