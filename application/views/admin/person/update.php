<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layouts/head'); ?>
</head>
<body>
    <div class="container">
        <?php $this->load->view('layouts/navbar'); ?>
    </div>
    <div class="container">
        <div class="row">
            <?php $this->load->view('layouts/sidebar'); ?> 
            <div class="col-9">
                <ol class="breadcrumb alert bg-light text-left">
                    <li><a href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
                    <li> &nbsp; / <?php echo $judul;?> </li>
                </ol>

                <!-- Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col">
                                <form role="form" action="<?php echo base_url('person/update/'.$person->id);?>" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label>Nama *</label>
										<input type="text" name="name" value="<?php echo $person->name;?>" class="form-control" placeholder="Masukan Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Region *</label>
                                        <select class="form-control" name="region_id" id="region">
											    <option value="">-- Pilih Region --</option>
                                                <?php foreach ($region as $rows_region): ?>
                                                    <option value="<?php echo $rows_region->id;?>" <?php if($rows_region->id == $person->id) echo 'selected="selected"'; ?> > <?php echo $rows_region->name; ?></option>
                                                <?php endforeach; ?>
										</select>
									</div>
                                    <div class="form-group">
										<label>Alamat *</label>
										<textarea name="address" class="form-control" rows="6" placeholder="Masukan Alamat Lengkap" required=""><?php echo $person->address;?></textarea>
                                    </div>
                                    <div class="form-group">
										<label>Income *</label>
										<input type="number" name="income" value="<?php echo $person->income;?>" class="form-control" placeholder="0" required>
                                    </div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-sm" id="simpan"><i class="fa fa-save"></i> Simpan</button>
										<a href="<?php echo base_url('person');?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- /.container konten-->

    <?php $this->load->view('layouts/footer'); ?>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#region')select2();    
        });

        $("#simpan").click(function() {
            var region = $('#region').val();
            if (region == '') {
                alert ('Region tidak boleh Kosong');
			}
        });
           
    </script>
</body>
</html>