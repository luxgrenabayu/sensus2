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
                                <form role="form" action="<?php echo base_url('region/update/'.$region->id);?>" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label>Nama Region *</label>
										<input type="text" name="name" value="<?php echo $region->name;?>" class="form-control" placeholder="Masukan Nama Region" required>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
										<a href="<?php echo base_url('region');?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Batal</a>
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
</body>
</html>