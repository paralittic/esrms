<h2 style="text-transform: uppercase;">Create Equipment Group</h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('equipment-groups/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
	<div class="form-group">
		<label class="control-label col-sm-2">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eqgroup_name" placeholder="Eg. Height Safety Kit (1 of 2)">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eqgroup_description" placeholder="Eg. Large Red Felling Axe, wooden handle">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Inspection Frequency</label>
		<div class="col-sm-10">
			<select id="eq_inspection_frequency" name="eqgroup_inspection_frequency" class="form-control">
				<option value="1 Week">1 Week</option>
				<option value="1 Month">1 Month</option>
				<option value="6 Months">6 Months</option>
				<option value="1 Year">1 Year</option>
				<option value="2 Years">2 Years</option>
			</select>
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Last Inspection</label>
        <div class='input-group date col-sm-10' id='eqgroup_last_checked'>
            <input type='text' class="form-control" name="eqgroup_last_checked"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
	    <script type="text/javascript">
			$(function () {
			    $('#eqgroup_last_checked').datetimepicker({
			    	useCurrent: true,
			    	showTodayButton: true,
			    	sideBySide: true,
			    	format: 'YYYY-MM-DD',
			    });
			});
    	</script>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2">Category</label>
		<div class="col-sm-10">
			<select id="eqgroup_category" name="eqgroup_category" class="form-control" >
				<?php foreach($categories as $category): ?>
        				<option value="<?php echo $category['eqcat_name']; ?>"><?php echo $category['eqcat_name']; ?></option>
        		<?php endforeach; ?>
        	</select>
		</div>
	</div>
	<!--Implement autocomplete search for a select box from the locations table-->
	<div class="form-group">
		<label class="control-label col-sm-2">Location</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="eqgroup_locationasset_number" id="eqgroup_location">
		</div>
	</div>
	<button type="submit" class="btn btn-outline-primary">Create</button>
</form>