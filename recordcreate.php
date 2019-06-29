<?php session_start();?>
<?php
require 'config.php';
define(RECORD_PATH, "uploads/records/");

$stages = array(
	'1' => '1_PO_SCAN_COPY',
	'2' => '2_PRODUCTION_RECORD',
	'3' => '3_ROUTINE_TEST_REPORT',
	'4' => '4_CALL_LETTER',
	'5' => '5_SAMPLING_PLAN',
	'6' => '6_ACCEPTANCE_TEST_REPORT',
	'7' => '7_DIRECTOR_CHECK_REPORT',
	'8' => '8_INSPECTION_CLEARANCE_CERTIFICATE',
	'9' => '9_FINAL PACKING LIST',
	'10'=> '10_INVOICE',
	'11'=> '11_CHALLAN'
);
$po_date = $_SESSION['po_date'];
$po_number =$_SESSION['po_number'];
$id=$po_number."_".$po_date;
$sql_insert ="INSERT INTO `po_records`(`id`, `date`, `po_number`) VALUES ('$id','$po_date','$po_number')";
if(mysqli_query($db,$sql_insert)){
	createdir($po_number,$po_date,$stages);
	header("Location: recordview.php");
}
else{
	echo "Error: ".mysqli_error($db)."<br>RECORD was not inserted!!!!<br>";
	echo "<button ><a href=\"index.php\">Go to Home</a></button>";
}
?>

<?php
function createdir($po_number,$po_date,$stages){
	$id=$po_number."_".$po_date;
	mkdir(RECORD_PATH.$id);
	foreach ($stages as $value) {
		$directoryName = RECORD_PATH.$id."/".$value;
		if(!is_dir($directoryName)){
			mkdir($directoryName, 0755,true);
		}
	}
}
?>