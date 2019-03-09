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
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('email');?></a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="<?php echo site_url('auth/logout');?>">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav> 