<?php
// function makedir($fname){
// 	$path = "uploads/".$fname;
// 	if(!is_dir($path)){
// 		mkdir($path);
// 	}
// 	else{
// 		echo "Folder with same name already exist";
// 	}

// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Record Management System</title>
	<?php include 'include/link.html'?>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<style type="text/css">
  	/*body{
  		margin: 50px;
  		}*/
  		.col-auto{
  			margin:auto;
  		}
  		.input-group-text{
  			width:180px;
  		}
  		.box{
  			margin:auto;
  			margin-top: 100px;
  			border: 1px solid grey;
  			padding: 20px;
  			width:400px;
  		}
  	</style>
  </head>
  <body>

  	<div class="container" >
  		<div class="box">
  			<form style="text-align: center;" method="post" action="confirmation.php">
  				<div class="form-row align-items-center">
  					<div class="col-auto">

  						<div class="input-group mb-2">
  							<div class="input-group-prepend">
  								<div class="input-group-text"><b>Purchase Order No.</b></div>
  							</div>
  							<input type="text" name="po_number" class="form-control" placeholder="Enter PO Number." autocomplete="off" required>
  						</div>
  					</div>
  				</div>
  				<div class="form-row align-items-center">
  					<div class="col-auto">

  						<div class="input-group mb-2">
  							<div class="input-group-prepend">
  								<div class="input-group-text"><b>Date of P.O.</b> </div>
  							</div>
  							<input type="date" name="po_date" class="form-control" placeholder="dd-mm-yyyy" min='2018-01-01' max="<?php echo date('Y-m-d');?>" required>
  						</div>
  					</div>
  				</div>
  				<div class="form-row align-items-center" style="margin: auto; display: block;">
  					<div class="col-auto">
  						<button type="submit" name="submit" class="btn btn-primary mb-2">GO</button>
  					</div>
  				</div>

  			</form>
  		</div>
  	</div>
  </body>
  </html>
