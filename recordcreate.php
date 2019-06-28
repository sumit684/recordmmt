<?php session_start();?>
<?php
require 'config.php';
$po_date = $_SESSION['po_date'];
$po_number =$_SESSION['po_number'];
$id=$po_number."_".$po_date;
$sql_insert ="INSERT INTO `po_records`(`id`, `date`, `po_number`, `po_file`) VALUES ('$id','$po_date','$po_number',default)";
if(mysqli_query($db,$sql_insert)){
header("Location: recordview.php");
}
else{
	echo "Error: RECORD was not inserted!!!!<br>";
	echo "<button>Go to Home</button>"
}
?>