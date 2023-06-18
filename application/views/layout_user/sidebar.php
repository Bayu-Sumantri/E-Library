<?php $uri_1 = $this->uri->segment(1) ?>
<?php $uri_2 = $this->uri->segment(2) ?>
<?php $uri_3 = $this->uri->segment(3) ?>

<style>
    .main-sidebar {
        background-color: #E3F2C1 !important;
    }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-success elevation-4">

    <!-- Brand Logo -->
    <a href="<?= base_url('Dash/') ?>" class="brand-link" style="text-decoration: none;">
        <img src="<?= base_url('assets/adminlte/') ?>dist/img/bayu.png" class="avatar" size="1" style="opacity: .8;   vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;">
        <span class="brand-text font-weight-light">E-Library</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=base_url('assets/ennocuy/foto/'.$this->session->userdata('pic_user'))?>" class="avatar" size="1" style="opacity: .8;   vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;">
            </div>
            <div class="info">
                <a style="text-decoration: none;" href="<?= base_url('Dash/admin')?>" class="d-block"><?=$this->session->userdata('username')?> (<?=$this->session->userdata('id_user')?>)</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        

       <!--  <li class="nav-item <?php if ($uri_2 == 'input' || $uri_2 == 'list_account' || $uri_2 == 'admin' || $uri_2 == 'ginjal_1' ) {
                echo 'menu-open';
            } ?>">
            <a href="" class="nav-link <?php if ($uri_2 == 'input' || $uri_2 == 'list_account' || $uri_2 == 'admin' || $uri_2 == 'ginjal_1') {
                echo 'active';
            } ?>">  
        </a> -->

        <!-- Sidebar Menu -->

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    <a href="<?= base_url('Dash') ?>" class="nav-link">
                    <i class="nav-icon" data-feather="home"></i>
                    <p>
                        Home Page
                    </p>
                </a>
            </li>
        </li>
    </ul>

                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    <a href="<?= base_url('Dash/admin') ?>" class="nav-link <?php if ($uri_2 == 'admin') {
                        echo 'active';
                    } ?>">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                        Account
                    </p>
                </a>
            </li>
        </li>
    </ul>

<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    <a href="<?= base_url('Dash/input') ?>" class="nav-link <?php if ($uri_2 == 'input') {
                        echo 'active';
                    } ?>">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        List Buku
                    </p>
                </a>
            </li>
        </ul>

        <?php if($this->session->userdata('id_level')=='1'){ ?>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    <a href="<?= base_url('Dash/list_account') ?>" class="nav-link <?php if ($uri_2 == 'list_account') {
                        echo 'active';
                    } ?>">
                    <i class="nav-icon fa fa-users"></i>
                    <p>
                        List Account
                    </p>
                </a>
            </li>
        </ul>
    <?php } ?>  

</li>
</nav>
<!-- /.sidebar-menu -->
</div>
<center style="margin-top: 15px; width: 50%;">
    <?= anchor('login/logout', '<button type="button" class="btn btn-danger";><i class="fa fa-arrow-circle-left "> logout</i></button>'); ?>

</center>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
