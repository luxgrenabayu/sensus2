<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $this->session->userdata('username');?> Arkademy - Sensus</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico.png');?>">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/dataTables.bootstrap4.min.css'); ?>">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('assets/images/ico.png'); ?>" width="40" height="40" alt="Arkademy Sensus" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav> 
<header class="py-5 mb-5 bg-primary">
    <div class="container text-center text-white">
        <h2 class="title py-3">Sensus Penduduk </h2>
        <p>Situs yang menyediakan data sensus penduduk Indonesia.</p>
    </div>
</header>
<section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-align-justify"></i> Data Summary Daerah</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name Region</th>
                                <th>Jumlah Penduduk</th>
                                <th>Total Pendapatan</th>
                                <th>Rata - Rata Pendapatan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =1; ?>
                            <?php foreach ($summary as $rows_summary) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $rows_summary->name ?></td>
                                <td><?php echo $rows_summary->jumlahPenduduk ?></td>
                                <td>
                                    <?php if (($rows_summary->totalPendapatan) == 0 ) {
                                        echo "0";
                                    }else{
                                         echo rupiah($rows_summary->totalPendapatan);
                                    }?>
                                </td>
                                <td>
                                    <?php if (($rows_summary->rataPendapatan) == 0 ) {
                                        echo "0";
                                    }else{
                                         echo rupiah($rows_summary->rataPendapatan);
                                    }?>
                                </td>
                                <td>
                                    <?php if (($rows_summary->rataPendapatan) < 1700000) { ?>
                                        <span class="badge badge-danger">Merah</span>
                                    <?php } elseif (($rows_summary->rataPendapatan >= 1700000) && ($rows_summary->rataPendapatan) <= 2200000) { ?>
                                        <span class="badge badge-warning">Kuning</span>
                                    <?php } elseif ($rows_summary->rataPendapatan > 2200000) { ?>
                                        <span class="badge badge-success">Hijau</span>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </section>

    <?php $this->load->view('layouts/footer'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
</body>
</html>