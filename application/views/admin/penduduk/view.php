<br>
<table id="table" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Penduduk</th>
			<th>Gaji</th>
			<th>Region</th>
        </tr>
	</thead>
	<tbody>
		<?php $no =1; ?>
		<?php foreach ($person as $rows_person) { ?>
		<tr>
			<td><?php echo $no++; ?></td>
            <td><?php echo $rows_person->name ?></td>
            <td><?php echo $rows_person->income ?></td>
            <td><?php echo $rows_person->name_region ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>