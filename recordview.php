<?php session_start();?>
<?php
require 'config.php';
global $po_number;
global $po_date;
global $id;
$po_date = $_SESSION['po_date'];
$po_number =$_SESSION['po_number'];
$id=$po_number."_".$po_date;
$stages = array(
	'1' => '1_PO_SCAN_COPY',
	'2' => '2_PRODUCTION_RECORD',
	'3' => '3_ROUTINE_TEST_REPORT',
	'4' => '4_CALL_LETTER',
	'5' => '5_SAMPLING_PLAN',
	'6' => '6_ACCEPTANCE_TEST_REPORT',
	'7' => '7_DIRECTOR_CHECK_REPORT',
	'8' => '8_INSPECTION_CLEARANCE_CERTIFICATE',
	'9' => '9_FINAL_PACKING_LIST',
	'10'=> '10_INVOICE',
	'11'=> '11_CHALLAN'
);
$stages_name =array(
	'1' => 'PURCHASE ORDER SCAN COPY',
	'2' => 'PRODUCTION RECORD (INPROCESS)',
	'3' => 'ROUTINE TEST REPORT',
	'4' => 'CALL LETTER',
	'5' => 'SAMPLING PLAN',
	'6' => 'ACCEPTANCE TEST REPORT',
	'7' => 'DIRECTOR CHECK REPORT',
	'8' => 'INSPECTION CLEARANC CERTIFICATE',
	'9' => 'FINAL PACKING LIST',
	'10'=> 'INVOICE',
	'11'=> 'CHALLAN'
);
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Record</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		h2{
			margin:0px !important;
		}
	</style>
</head>
<body>
	<div class="container">
		
		<div class="panel panel-default"  >
			<div class="panel-heading dislplay-4" style="font-family: serif;"><center><h2>RECORD DETAILS</h2></center></div>

			<div class="panel-body">
				<div class="row" style="margin-bottom: 8px; font-size: 22px; font-family: serif;">
					<div class="col-md-8 btn-primary">
						Purchase Order No. : &nbsp;<?php echo $po_number;?>
					</div>
					<div class="col-md-4 right btn-success">
						<?php $date=date_create($po_date);?>
						Date : &nbsp;<?php echo date_format($date,"dS F Y");?>
					</div>
				</div>

				<div class="panel-group" id="accordion">

					<?php foreach($stages_name as $key=>$value){
						?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="<?php echo '#'.$stages[$key]?>">
										<?php echo $value?></a>
									</h4>
								</div>

								<div id="<?php echo $stages[$key]?>" class="panel-collapse collapse <?php if($key==1){echo 'in';}?>">
									<div class="panel-body">
										
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="<?php echo '#'.$stages[$key].'_'.$key?>" id="btn_<?php echo $stages[$key]?>">+ Add File</button>
										<?php
										$filelist = glob('uploads/records/$id/*');
										echo "uploads/records/$id/$stages[$key]/*";
										foreach ($filelist as $filename) {
										echo $filename."<br>";
										}
										?>
									<!-- Modal -->
									<div id="<?php echo $stages[$key].'_'.$key?>" class="modal fade" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">File Upload Details</h4>
												</div>
												<div class="modal-body">
													<!-- Form -->
													<form method='post' action='' enctype="multipart/form-data">
														Select file : <input type='file' name='file[]' id='file' class='form-control' multiple><br>
														<input type='button' class='btn btn-info' value='Upload' id='upload'>
													</form>

													<!-- Preview-->
													<div id='preview'></div>
												</div>

											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					<?php }?>

					<button class="btn btn-primary" onclick="document.location.href='index.php'" style="margin: auto; display: block; margin-bottom: 20px; margin-top: 20px;"> GO TO HOME PAGE</button>
				</div>

			</div>
		</body>
		</html>

