<?php

  include('connection.php');

  $sql = "SELECT * FROM Food_Drink_Stock";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Item_ID</th><th>Item_Name</th><th>Item_Type</th><th>Quantity</th><th>Storage_Location</th><th>Receive_Date</th><th>Expiration_Date</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['item_id']. "</td>";
        $str .= "<td>". $row['item_name']. "</td>";
        $str .= "<td>". $row['item_type']. "</td>";
        $str .= "<td>". $row['quantity']. "</td>";
        $str .= "<td>". $row['storage_location']. "</td>";
        $str .= "<td>". $row['receive_date']. "</td>";
        $str .= "<td>". $row['expiration_date']. "</td>";


      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
