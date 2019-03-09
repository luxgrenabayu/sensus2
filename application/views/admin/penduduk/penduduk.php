<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layouts/head'); ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/dataTables.bootstrap4.min.css'); ?> ">

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
                            <div class="col" id="tampil_data"></div>                       
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
            $("#tampil_data").load('<?php echo base_url('penduduk/view');?>');
        });
    </script>

</body>
</html>