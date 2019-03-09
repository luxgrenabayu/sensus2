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
                <h1>conten</h1>
                
            </div>
        </div>
    </div>
    <!-- /.container konten-->

    <?php $this->load->view('layouts/footer'); ?>
</body>
</html>