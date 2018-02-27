<?php
  include('connection.php');
  $sql = "SELECT * FROM Orders";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';


  if($result->num_rows > 0){
    $str .= "<tr><th>Order_Number</th><th>Order_Date</th><th>Delivery_Date</th><th>Quantity</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['order_no']. "</td>";
        $str .= "<td>". $row['order_date']. "</td>";
        $str .= "<td>". $row['delivery_date']. "</td>";
        $str .= "<td>". $row['quantity']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;
 ?>
