<?php session_start();?>
<?php 
require 'config.php';
$po_date = $_REQUEST['po_date'];
$po_number =$_REQUEST['po_number'];
$_SESSION["po_date"]=$po_date;
$_SESSION["po_number"]=$po_number;

$sql_select = "SELECT * FROM `po_records` WHERE `po_number`='$po_number' AND `date`='$po_date'";

$select_result=mysqli_query($db,$sql_select);
if(mysqli_num_rows($select_result)>0){
  echo "Record with PO Number : $po_number of date : $po_date alredy exist in Database.<br>
  Do you want to view Record?<br>
  <button><a href='record_view.php'>YES</a></button>
  <button><a href='index.php'>NO</a></button>
  ";
}
else{
  echo "Record with PO Number : $po_number of date : $po_date doesnot exist in Database.<br>
  Do you want to create New Record?<br>
  <button><a href='recordcreate.php'>YES</a></button>
  <button><a href='index.php'>NO</a></button>
  ";
}
?>
