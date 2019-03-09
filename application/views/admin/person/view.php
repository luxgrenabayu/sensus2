<br>
<table id="table" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Region</th>
			<th>Address</th>
			<th>Income</th>
            <th>Aksi</th>
        </tr>
	</thead>
	<tbody>
		<?php $no =1; ?>
		<?php foreach ($person as $rows_person) { ?>
		<tr>
			<td><?php echo $no++; ?></td>
            <td><?php echo $rows_person->name ?></td>
            <td><?php echo $rows_person->name_region ?></td>
            <td><?php echo $rows_person->address ?></td>
            <td><?php echo $rows_person->income ?></td>
			<td>
				<a href="<?php echo base_url('person/update/').$rows_person->id;?>" title="Edit"><i class="fa fa-edit"></i></a>
				<a onclick="showhapus('<?php echo $rows_person->id;?>','<?php echo $rows_person->name;?>')" title="Delete"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>