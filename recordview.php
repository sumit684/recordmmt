<?php session_start();?>
<?php
require 'config.php';
global $po_number;
global $po_date;
$po_date = $_SESSION['po_date'];
$po_number =$_SESSION['po_number'];

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
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								PURCHASE ORDER SCAN </a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								PO Order Files



							</div>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								PRODUCTION RECORD (INPROCESS)</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								
								PRODUCTION RECORD FILES

							</div>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								ROUTINE TEST REPORT</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
								TEST REPORTS


							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
								CALL LETTER</a>
							</h4>
						</div>
						<div id="collapse4" class="panel-collapse collapse">
							<div class="panel-body">
								CALL LETTER
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
								SAMPLING PLAN</a>
							</h4>
						</div>
						<div id="collapse5" class="panel-collapse collapse">
							<div class="panel-body">
								
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
								ACCEPTANCE TEST REPORT</a>
							</h4>
						</div>
						<div id="collapse6" class="panel-collapse collapse">
							<div class="panel-body">
								
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
								DIRECTOR TEST CHECK REPORT</a>
							</h4>
						</div>
						<div id="collapse7" class="panel-collapse collapse">
							<div class="panel-body">
								
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
								INSPECTION CLEARANCE CERTIFICATE</a>
							</h4>
						</div>
						<div id="collapse8" class="panel-collapse collapse">
							<div class="panel-body">
								
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
								DISPATCH CLERANCE</a>
							</h4>
						</div>
						<div id="collapse9" class="panel-collapse collapse">
							<div class="panel-body">
								
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
								FINAL PACKING LIST</a>
							</h4>
						</div>
						<div id="collapse10" class="panel-collapse collapse">
							<div class="panel-body">
								
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
								INVOICE</a>
							</h4>
						</div>
						<div id="collapse11" class="panel-collapse collapse">
							<div class="panel-body">
								
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
								CHALLAN</a>
							</h4>
						</div>
						<div id="collapse12" class="panel-collapse collapse">
							<div class="panel-body">
								
							</div>
						</div>
					</div>
				</div>


			</div>
			<button class="btn btn-primary" onclick="document.location.href='index.php'" style="margin: auto; display: block; margin-bottom: 20px;"> GO TO HOME PAGE</button>
		</div>

	</div>
</body>
</html>

