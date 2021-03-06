<h2>Equipment</h2>
<hr />
<table id="content" class="table table-striped table-hover dataTable">
        <thead class="thead-inverse">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Consumable</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Group</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($equipment as $equipment) : ?>
                <tr>
                        <td><a href="<?php echo site_url('/equipment/'. $equipment['eq_id']); ?>"><?php echo $equipment['eq_name']; ?></a></td>
                        <td><?php echo rtrim(mb_strimwidth($equipment['eq_description'], 0, 30)); ?></td>
                        <td><?php echo $equipment['eq_category']; ?></td>
                        <td><?php echo $equipment['eq_consumable']; ?></td>
                        <td><?php echo $equipment['eq_brand']; ?></td>
                        <td><?php echo $equipment['eq_model']; ?></td>
                        <td><a href="<?php echo site_url('/equipment-groups/'. $equipment['eqgroup_id']); ?>"><?php echo $equipment['eqgroup_name']; ?></td>
                        <td><a class="btn btn-warning btn-sm" role="button" href="equipment/edit/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<a class="btn btn-primary" role="button" href="/equipment/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>