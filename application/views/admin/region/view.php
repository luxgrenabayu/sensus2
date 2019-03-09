<br>
<table id="table" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no =1; ?>
		<?php foreach ($region as $rows_region) { ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $rows_region->name ?></td>
			<td>
				<a href="<?php echo base_url('region/update/').$rows_region->id;?>" title="Edit"><i class="fa fa-edit"></i></a>
				<a onclick="showhapus('<?php echo $rows_region->id;?>','<?php echo $rows_region->name;?>')" title="Delete"><i class="fa fa-trash"></i></a>
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