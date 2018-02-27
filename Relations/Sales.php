<?php
  include('connection.php');

  $sql = "SELECT * FROM Sales";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>receipt_id</th><th>date_of_sale</th><th>time_of_sale</th><th>price</th><th>payment_type</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['receipt_id']. "</td>";
        $str .= "<td>". $row['date_of_sale']. "</td>";
        $str .= "<td>". $row['time_of_sale']. "</td>";
        $str .= "<td>". $row['price']. "</td>";
        $str .= "<td>". $row['payment_type']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
