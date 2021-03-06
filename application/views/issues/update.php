<h2 style="text-transform: uppercase;">Edit Issue <?php echo $issue['iss_id']; ?></h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('issues/update', $attributes); ?>
	<div class="form-group" style="display: none;">
		<label class="control-label col-sm-2">Issue ID</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="iss_id" value="<?php echo $issue['iss_id']; ?>" readonly>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Related Equipment</label>
		<div class="col-sm-10">
			<select id="iss_eq_id" name="iss_eq_id" class="form-control" >
				<?php foreach($equipment as $equipment): ?>
        				<option value="<?php echo $equipment['eq_id']; ?>"><?php echo $equipment['eq_name']; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
		<script>
			$(function() {
				$( '#iss_eq_id' ).val('<?php echo $issue['iss_eq_id']; ?>'); 
			});
		</script>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Issue Category</label>
		<div class="col-sm-10">
			<select id="iss_type" name="iss_type" class="form-control" >
					<option value="Repair/Fix"> Repair/Fix</option>
					<option value="Check/Inspection">Check/Inspection</option>
					<option value="Replacement">Replacement</option>
					<option value="Write Off">Write Off</option>
			</select>
			<script>
				$(function() {
					$( '#iss_type' ).val('<?php echo $issue['iss_type']; ?>'); 
				});
		</script>
		</div>
	</div>		
	<div class="form-group">
		<label class="control-label col-sm-2">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="iss_title" value="<?php echo $issue['iss_title']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<textarea rows="3" class="form-control" name="iss_description" value=""><?php echo $issue['iss_description']; ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Status</label>
		<div class="col-sm-10">
			<select id="iss_status" name="iss_status" class="form-control" >
				<option>New</option>
				<option>Current</option>
				<option>Referred</option>
				<option>Complete</option>
			</select>
			<script>
				$(function() {
					$( '#iss_status' ).val('<?php echo $issue['iss_status']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Reporting User</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="iss_reporter_id" value="<?php echo $issue['iss_reporter_id']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Assigned User</label>
		<div class="col-sm-10">
			<select id="iss_assigned_user" name="iss_assigned_user" class="form-control" >
				<?php foreach($usernames as $username): ?>
        				<option value="<?php echo $username['username']; ?>"><?php echo $username['username']; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
		<script>
			$(function() {
				$( '#iss_assigned_user' ).val('<?php echo $issue['iss_assigned_user']; ?>'); 
			});
		</script>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Reported Date</label>
		<div class="col-sm-10">
			<input id="iss_reported_date" type="text" class="form-control" name="iss_reported_date" value="<?php echo $issue['iss_reported_date']; ?>" readonly>
		</div>
	</div>

	<script type="text/javascript">
		//This script modifies the Mysql DATE field to be in the DD-MM-YYYY format instead of YYYY-MM-DD
		var parsed_date = moment('<?php echo $issue['iss_reported_date']; ?>').format('DD-MM-YYYY'); 
		$(function() {
			$( '#iss_reported_date' ).val(parsed_date); 
		});
    </script>

    <div class="form-group">
		<label class="control-label col-sm-2">Date Resolved</label>
	        <div class='input-group date' id='iss_resolution_date'>
	            <input type="text" class="form-control" name="iss_resolution_date" value="<?php echo $issue['iss_resolution_date']; ?>"/>
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#iss_resolution_date').datetimepicker({
            	useCurrent: true,
            	showTodayButton: true,
            	sideBySide: true,
            	format: 'YYYY-MM-DD'
            });
        });
    </script>
	<button type="submit" class="btn btn-outline-primary">Update</button>
	<a class="btn btn-outline-warning" role="button" href="/issues">Cancel</a>
</form>