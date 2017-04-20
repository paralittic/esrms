<head>
	<title>Edit Vehicle - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Edit Vehicle <?php echo strtoupper($vehicle['name']); ?></h2>
<!--Fields must be added to this form if an extra field is added to the vehicles table in the-->
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('vehicles/update', $attributes); ?>
	<div class="form-group">
		<input type="hidden" name="vehID" value="<?php echo $vehicle['vehID']; ?>">
		<label class="control-label col-sm-2">Vehicle Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name" placeholder="Eg. HBY18" value="<?php echo strtoupper($vehicle['name']); ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Vehicle Rego</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="rego" placeholder="Eg. BK95LD" value="<?php echo strtoupper($vehicle['rego']); ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Make</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="make" placeholder="Eg. Mitsubishi" value="<?php echo $vehicle['make']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Year</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="year" placeholder="Eg. 2007" value="<?php echo $vehicle['year']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Model</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="model" placeholder="Eg. Pajero" value="<?php echo $vehicle['model']; ?>">
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Capacity</label>
		<div class="col-sm-10">
			<select id="capacity" name="capacity" class="form-control" >
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
			</select>
			<script>
				$(function() {
					$( '#capacity' ).val('<?php echo $vehicle['capacity']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Category</label>
		<div class="col-sm-10">
			<select id="category" name="category" class="form-control" >
				<option>Light Storm</option>
				<option>Medium Storm</option>
				<option>Heavy Storm</option>
				<option>Light GLR</option>
				<option>Medium GLR</option>
				<option>Heavy GLR</option>
				<option>Recon</option>
				<option>Transport</option>
			</select>
			<script>
				$(function() {
					$( '#category' ).val('<?php echo $vehicle['category']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">License Type</label>
		<div class="col-sm-10">
			<select id="license_type" name="license_type" class="form-control" value="<?php echo $vehicle['license_type']; ?>">
				<option>None</option>
				<option>C</option>
				<option>LR</option>
				<option>MR</option>
			</select>
			<script>
				$(function() {
					$( '#license_type' ).val('<?php echo $vehicle['license_type']; ?>'); 
				});
		    </script>			
		</div>
	</div>
	<button type="submit" class="btn btn-default">Update</button>
	<a class="btn btn-info" role="button" href="/vehicles">Cancel</a>
</form>