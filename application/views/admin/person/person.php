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
                            <div class="col-md-12">
                                <?php echo $this->session->flashdata('msg_success'); ?>
                                <a href="<?php echo site_url('person/create'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Tambah Data</a>
                            </div> 
                            <div class="col-md-12" id="tampil_data"></div>                       
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- /.container konten-->

    <?php $this->load->view('layouts/footer'); ?>

    <!-- modal hapus -->
    <div class="modal fade" id="modal_showhapus">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">Peringatan!</h3>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus <span class="show_detail"></span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" id="hapus"><span class="fa fa-trash"></span> Hapus</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><span class="fa fa-close"></span> Close</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#tampil_data").load('<?php echo base_url('person/view');?>');
        });

        // function hapus
        function showhapus(ID, NAMA) {
            var id = ID;
            var name = NAMA;
            $("#modal_showhapus").modal('show');
            $(".show_detail").html(name);
            $("#hapus").click(function() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('person/delete');?>",
                    data: "id=" + id,
                    success: function(data) {
                        $("#tampil_data").load('<?php echo base_url('person/view');?>');
                        $("#modal_showhapus").modal('hide');
                        $("#success-text").html('Data Berhasil Dihapus!');
                    }
                });
            });
        };
    </script>

</body>
</html>