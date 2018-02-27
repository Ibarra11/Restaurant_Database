<?php
  include('connection.php');

  $sql = "SELECT * FROM Supplier";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){

    $str .= "<tr><th>Supplier_ID</th><th>Name</th><th>Address</th><th>Email</th><th>Phone_No</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['supplier_id']. "</td>";
        $str .= "<td>". $row['name']. "</td>";
        $str .= "<td>". $row['address']. "</td>";
        $str .= "<td>". $row['email']. "</td>";
        $str .= "<td>". $row['phone_no']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
