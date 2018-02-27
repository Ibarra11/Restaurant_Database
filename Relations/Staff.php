<?php

  include('connection.php');

  $sql = "SELECT * FROM Staff";
  $result = $conn->query($sql);
  $str = '<table class="table table-bordered">';

  if($result->num_rows > 0){
    $str .= "<tr><th>Employee_ID</th><th>Job_Title</th><th>Full_Part</th></tr>";
    // Output Data for each row
    while($row = $result->fetch_assoc()) {
      $str .= "<tr>";
        $str .= "<td>". $row['employee_id']. "</td>";
        $str .= "<td>". $row['job_title']. "</td>";
          $str .= "<td>". $row['full_part']. "</td>";
      $str .= "</tr>";
    }
  }
  $str .= "</table>";
  echo $str;

  $conn->close();

 ?>
