<h2 style="text-transform: uppercase;">Locations</h2>
<hr />
<table id="content" class="table table-striped table-hover table-condensed dataTable">
	<thead class="thead-inverse">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Manager</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($locations as $location) : ?>
			<tr>
				<td><a href="<?php echo site_url('/locations/'. $location['loc_id']); ?>"><?php echo $location['loc_id']; ?></a></td>
				<td><a href="<?php echo site_url('/locations/'. $location['loc_id']); ?>"><?php echo $location['loc_name']; ?></td>
				<td><?php echo $location['loc_manager']; ?></td>
				<td><a class="btn btn-warning btn-sm" role="button" href="locations/edit/<?php echo $location['loc_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a class="btn btn-primary" role="button" href="locations/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>
