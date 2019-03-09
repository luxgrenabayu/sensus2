<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy - Sensus</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico.png');?>">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/login.css'); ?>" >
   
</head>
<body>
    
    <form class="form-signin" action="<?php echo base_url('login'); ?>" method="POST" enctype="multipart/form-data">
        <div class="text-center mb-4">
            <img class="" src="<?php echo base_url('assets/images/logo.svg')?>" alt="" width="120" height="120">
            <h3>Sistem Login</h3>
            <p>Masuk untuk memulai sensus bersama Arkademy.</p>
            <?php echo $this->session->flashdata('msg_gagal'); ?>
        </div>
        <div class="form-label-group">
            <input type="email" class="form-control" name="email" placeholder="Email address" required autofocus>
            <label>Email address</label>
        </div>
        <div class="form-label-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <label>Password</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; Arkademy Sistem Sensus - 2019</p>
    </form>
        
    <!-- js-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
