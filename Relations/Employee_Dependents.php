<?php

  include('connection.php');

  $sql = "SELECT * FROM Employee_Dependents";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Employee_ID</th><th>Name</th><th>Gender</th><th>DOB</th><th>Relationship</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['employee_id']. "</td>";
        $str .= "<td>". $row['dependent_name']. "</td>";
        $str .= "<td>". $row['dependent_gender']. "</td>";
        $str .= "<td>". $row['DOB']. "</td>";
        $str .= "<td>". $row['relationship']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
