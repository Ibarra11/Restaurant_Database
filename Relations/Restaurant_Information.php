<?php
  include('connection.php');

  $sql = "SELECT * FROM Restaurant_Information";
  $result = $conn->query($sql);
  $str = '';
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){

    $str .= "<tr><th>Type</th><th>Name</th><th>License_Number</th><th>Address</th><th>Phone_No</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['type']. "</td>";
        $str .= "<td>". $row['name']. "</td>";
        $str .= "<td>". $row['license_Number']. "</td>";
        $str .= "<td>". $row['address']. "</td>";
        $str .= "<td>". $row['phone_no']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
