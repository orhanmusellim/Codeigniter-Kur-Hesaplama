<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>Kur Hesaplayıcı</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		.row{
			margin-bottom:50px;
		}
	</style>
	
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-3 hidden-xs"></div>
		<div class="col-md-6 col-xs-12">
		<form method="post" action="kurhesap">
		  <div class="form-group text-center">
		    <label for="exampleInputEmail1"><h3>Para Birimini Seçin</h3></label>
			  <select class="form-control" id="sel1" name="kurtipi">
			    <?php foreach ($currentys as $currenty) { ?>
			    	<option value="<?php echo $currenty['Kod']; ?>"><?php echo $currenty->Isim; ?></option>
			    <?php } ?>
			  </select>
		  </div> 
		  <button type="submit" class="btn btn-primary col-xs-12">Kur Hesapla</button>
		</form>
		</div>
		<div class="col-md-3 hidden-xs"></div>
	</div>

	<?php if ($sorguvar) { ?>	
	<div class="row">	
		<div class="col-md-3 hidden-xs"></div>	
		<div class="col-md-6 col-xs-12 text-center">
		<h2>1 <?php echo $dovizadi; ?></h2>
			<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<th class="text-center">Alış</th>
						<th class="text-center">Satış</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $dovizalis; ?> TL</td>
						<td><?php echo $dovizsatis; ?> TL</td>
					</tr>
				</tbody>
			</table>

		</div>	
		<div class="col-md-3 hidden-xs"></div>		
	<?php } ?>



	</div>
	<div class="row text-center">
		<small>*Günlük kur değerleri Türkiye Cumhuriyeti Merkez Bankasından çekilmektedir.</small>
	</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>