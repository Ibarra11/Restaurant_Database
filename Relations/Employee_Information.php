<?php
include('connection.php');
$sql = "SELECT * FROM Employees";
$result = $conn->query($sql);
$str = '<table class="table table-bordered">';

if ($result->num_rows > 0) {
    // output data of each row
     $str .= "<tr><th>Employee_Id</th><th>First_name</th><th>last_name</th><th>DOB</th><th>SSN</th><th>address</th><th>Phone_No</th><th>Email</th></tr>";
     while($row = $result->fetch_assoc()) {
       $str .= "<tr>";
         $str .= "<td>". $row['employee_id']. "</td>";
         $str .= "<td>". $row['first_name']. "</td>";
         $str .= "<td>". $row['last_name']. "</td>";
         $str .= "<td>". $row['DOB']. "</td>";
         $str .= "<td>". $row['SSN']. "</td>";
         $str .= "<td>". $row['address']. "</td>";
         $str .= "<td>". $row['phone_no']. "</td>";
         $str .= "<td>". $row['email_address']. "</td>";
       $str .= "</tr>";
     }
   }
   $str .= "</table>";
   echo $str;
   $conn->close();
?>
