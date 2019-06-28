<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>View Record</title>
</head>
<body>

</body>
</html>

<?php
require 'config.php';
$po_date = $_SESSION['po_date'];
$po_number =$_SESSION['po_number'];
$sql_select = "SELECT * FROM `po_records` WHERE `po_number`='$po_number' AND `date`='$po_date'";
$result=mysqli_query($db,$sql_select);
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}

?>