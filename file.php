<?php 
// 	$filelist = glob('*');
// 	foreach ($filelist as $filename) {
// 		echo $filename."<br>";
// 	}
	
// $path = "uploads/records";
// if(!rmdir($path))
//   {
//   echo ("Could not remove $path");
//   }
//   else{
//   	echo "removed folder";
//   }
$stages = array(
  '1' => 'PO_SCAN_COPY',
  '2' => 'PRODUCTION_RECORD',
  '3' => 'ROUTINE_TEST_REPORT',
  '4' => 'CALL_LETTER',
  '5' => 'SAMPLING_PLAN',
  '6' => 'ACCEPTANCE_TEST_REPORT',
  '7' => 'DIRECTOR_CHECK_REPORT',
  '8' => 'INSPECTION_CLEARANCE_CERTIFICATE',
  '9' => 'FINAL PACKING LIST',
  '10'=> 'INVOICE',
  '11'=> 'CHALLAN'
 );
  echo $stages[1];

?>