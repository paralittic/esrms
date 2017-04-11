<head>
	<title><?php echo $equipment['name']; ?> - Logi</title>
</head>
<h2><?php echo $equipment['name']; ?></h2>

<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Name</td><td><?php echo $equipment['name']; ?></td></tr>
	<tr><td style="font-weight: bold">Description</td><td><?php echo $equipment['description']; ?></td></tr>
	<tr><td style="font-weight: bold">Consumable?</td><td><?php echo $equipment['consumable']; ?></td></tr>
	<tr><td style="font-weight: bold">Category</td><td><?php echo $equipment['category']; ?></td></tr>
	<tr><td style="font-weight: bold">Size</td><td><?php echo $equipment['size']; ?></td></tr>
	<tr><td style="font-weight: bold">Brand</td><td><?php echo $equipment['brand']; ?></td></tr>
	<tr><td style="font-weight: bold">Supplier</td><td><?php echo $equipment['supplier']; ?></td></tr>
	<tr><td style="font-weight: bold">Item in service?</td><td><?php echo $equipment['in_service']; ?></td></tr>
	<tr><td style="font-weight: bold">Inspection Frequency</td><td><?php echo $equipment['inspection_frequency']; ?></td></tr>
	<tr><td style="font-weight: bold">Equipment ID</td><td><?php echo $equipment['equipmentID']; ?></td></tr>
	<tr><td style="font-weight: bold">Serial</td><td><?php echo $equipment['serial']; ?></td></tr>
	<tr><td style="font-weight: bold">Material ID</td><td><?php echo $equipment['ematerial_id']; ?></td></tr>
	<tr><td style="font-weight: bold">Barcode Number</td><td><?php echo $equipment['barcode_number']; ?></td></tr>
	<tr><td style="font-weight: bold">Barcode</td><td><img src="<?php echo site_url('/equipment/'. $equipment['barcode_url'].'.jpg'); ?>" /></td></tr>
	<tr><td style="font-weight: bold">QR</td><td><img src="<?php echo site_url('/equipment/'. $equipment['qr_url'].'.jpg'); ?>" /></td></tr>
</table>


<hr />
<a class="btn btn-default" role="button" href="<?php echo site_url('/equipment/create'); ?>">Create Equipment</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/equipment/edit/'. $equipment['equipmentID']); ?>">Edit Equipment</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/equipment/delete/'.$equipment['equipmentID'], $attributes); ?>
	<input type="submit" value="Delete Equipment" class="btn btn-danger"/>
</form>

