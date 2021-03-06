<head>
	<title><?php echo $loangroup['loangroup_name']; ?> - Logi</title>
</head>
<h2 style="text-transform: uppercase;">Loan - <?php echo $loangroup['loangroup_name']; ?> - <?php echo $loangroup['member_name']; ?></h2>

<table class="table table-striped table-hover ">
	<tr><td style="font-weight: bold">Loan Group ID</td><td><?php echo $loangroup['loangroup_id']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Name</td><td><?php echo $loangroup['loangroup_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Member</td><td><a href="<?php echo site_url('/members/'. $loangroup['member_id']); ?>"><?php echo $loangroup['member_name']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Last Modified</td><td><?php echo $loangroup['loangroup_last_modified']; ?></a></td></tr>
	<tr><td style="font-weight: bold">Loan Group Last Modified by</td><td><?php echo $loangroup['ModifiedUserName']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Created Date</td><td><?php echo $loangroup['loangroup_created_date']; ?></td></tr>
	<tr><td style="font-weight: bold">Loan Group Created By</td><td><?php echo $loangroup['CreatedUserName']; ?></td></tr>
</table>

<hr />

<h3>Loaned Items</h3>

<table class="table table-striped table-hover ">

	<thead>
		<tr>
			<th>Loan ID</th>
			<th>Item Name</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($loans as $loan) : ?>
			<tr>
				<td><a href="<?php echo site_url('/loans/'. $loan['loan_id']); ?>"><?php echo $loan['loan_id']; ?></a></td>
				<td><a href="<?php echo site_url('/equipment/'. $loan['eq_id']); ?>"><?php echo $loan['eq_name']; ?></a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>



<a class="btn btn-default" role="button" href="<?php echo site_url('/loan-groups/create'); ?>">Create Loan Group</a>
<a class="btn btn-info" role="button" href="<?php echo site_url('/loan-groups/edit/'. $loangroup['loangroup_id']); ?>">Edit Loan Group</a>
<?php $attributes = array('class' => 'form-inline', 'style' => 'display: inline;'); ?>
<?php echo form_open('/loan-groups/'.$loangroup['loangroup_id'], $attributes); ?>
	<input type="submit" value="Delete Loan Group" class="btn btn-danger"/>
</form>

