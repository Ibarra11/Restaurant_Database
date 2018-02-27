<?php
include('Connection.php');
$sql = "SELECT * FROM Restaurant";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table border='1'>";
    echo "<tr><td>Restaurant_Type</td><td>Business_License_Number</td><td>Business_Address</td> <td>Business_Name</td> <td>Business_Phone_Number</td> </tr>";
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
		echo "<td>".$row["Restaurant_Type"]. "</td>";
		echo "<td>".$row["Business_License_Number"]. "</td>";
		echo "<td>".$row["Business_Address"]. "</td>";
		echo "<td>".$row["Business_Name"]. "</td>";
		echo "<td>".$row["Business_Phone_Number"]. "</td>";
  echo "<tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
