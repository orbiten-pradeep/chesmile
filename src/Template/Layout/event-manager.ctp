<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $this->fetch('title') ?></title>
    <!-- Favicon-->
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo $this->Url->build('/dashboard/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo $this->Url->build('/dashboard/plugins/node-waves/waves.css'); ?>" rel="stylesheet">

    <!-- Animation Css -->
    <link href="<?php echo $this->Url->build('/dashboard/plugins/animate-css/animate.css'); ?>" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="<?php echo $this->Url->build('/dashboard/plugins/morrisjs/morris.css'); ?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo $this->Url->build('/dashboard/css/style.css'); ?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo $this->Url->build('/dashboard/css/themes/all-themes.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/dashboard/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/dashboard/plugins/bootstrap-select/css/bootstrap-select.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/dashboard/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css'); ?>" rel="stylesheet">


<style type="text/css">
    div.dataTables_wrapper div.dataTables_paginate{
        display: none !important;
    }
    .pagination{
        float: right;
    }
</style>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo $this->Url->build('/admin/images/user.png'); ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        $user = $this->request->session()->read('Auth.User');
                        if(!empty($user)) {
                            echo $user['fullname'];
                        }
                    ?>                            
                    </div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="active"><?php echo $this->Html->link( $this->Html->tag('i', 'home', array('class' => 'material-icons')).$this->Html->tag('span', 'Home'), ['controller' => 'AdminDashBoard', 'action' => 'index'], array('escape'=>false)); ?></li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Events</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link($this->Html->tag('span', 'List Events'), ['controller' => 'events', 'action' => 'adminindex'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Users</span>
                        </a>
                        <ul class="ml-menu">
                        <li><?php echo $this->Html->link($this->Html->tag('span', 'List Users'), ['controller' => 'users', 'action' => 'index'], array('escape'=>false)); ?></li>
                       <!--  <li><?php echo $this->Html->link($this->Html->tag('span', 'Add User'), ['controller' => 'users', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Groups</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'List Groups'), ['controller' => 'Groups', 'action' => 'index'], array('escape'=>false)); ?></li>

                            <!-- <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New Group'), ['controller' => 'Groups', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        </ul>
                    </li> 
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2019 <a href="javascript:void(0);">Chennaismile - Admin Panel</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>

    <section class="content">
        <div class="container-fluid">
            <?= $this->fetch('content') ?>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo $this->Url->build('/dashboard/plugins/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo $this->Url->build('/dashboard/plugins/bootstrap/js/bootstrap.js'); ?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo $this->Url->build('/dashboard/plugins/bootstrap-select/js/bootstrap-select.js'); ?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo $this->Url->build('/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js'); ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo $this->Url->build('/dashboard/plugins/node-waves/waves.js'); ?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo $this->Url->build('/dashboard/js/admin.js'); ?>"></script>
    <script src="<?php echo $this->Url->build('/dashboard/js/pages/index.js'); ?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo $this->Url->build('/dashboard/js/demo.js'); ?>"></script>
    <script src="<?php echo $this->Url->build('/dashboard/js/pages/tables/jquery-datatable.js'); ?>"></script>

    <script src="<?php echo $this->Url->build('/dashboard/plugins/jquery-datatable/jquery.dataTables.js'); ?>"></script>

     <script src="<?php echo $this->Url->build('/dashboard/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js'); ?>"></script>
</body>

</html>