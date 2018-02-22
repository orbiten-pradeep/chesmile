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
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Chennaismile - <?= $this->fetch('title') ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            <div> <button type="button" class="btn btn-primary waves-effect">Add</button>
     <button type="button" class="btn btn-primary waves-effect">View</button>
      <button type="button" class="btn btn-primary waves-effect">Edit</button>
       <button type="button" class="btn btn-primary waves-effect">Activate</button>
        <button type="button" class="btn btn-primary waves-effect">Deactivate</button>
    </div>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section><!-- menu bar for admin panel -->
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php
                    
                      echo $this->Url->build('/dashboard/images/user.png');?>" width="48" height="48" alt="User" />

                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        $user = $this->request->session()->read('Auth.User');
                        if(!empty($user)) {
                            echo $user['fullname'];
                        
                    ?>                            
                    </div>
                    <div class="email">
                    <?php echo $user['email'];
                     }
                    ?> </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'person', array('class' => 'material-icons')).$this->Html->tag('span', 'Profile'), ['controller' => 'user-profile', 'action' => 'adminadd'], array('escape'=>false)); ?></li>
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
<?php
                        $user = $this->request->session()->read('Auth.User');
                        if($user && $user['group_id'] == 4) {
                          //  echo $user['fullname'];
                                            ?>                            
                        <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="active"><?php echo $this->Html->link( $this->Html->tag('i', 'home', array('class' => 'material-icons')).$this->Html->tag('span', 'Home - Super Admin'), ['controller' => 'AdminDashBoard', 'action' => 'index'], array('escape'=>false)); ?></li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Groups</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'List Groups'), ['controller' => 'Groups', 'action' => 'index'], array('escape'=>false)); ?></li>
 <li><?php echo $this->Html->link($this->Html->tag('span', 'List Users'), ['controller' => 'users', 'action' => 'index'], array('escape'=>false)); ?></li>
                           <!--  <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New Group'), ['controller' => 'Groups', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        </ul>
                    </li>
 <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Chennai Smile Users</span>
                        </a>
                        <ul class="ml-menu">
                        <li><?php echo $this->Html->link($this->Html->tag('span', 'List Admin'), ['controller' => 'users', 'action' => 'adminmanager'], array('escape'=>false)); ?></li>
                        <li><?php echo $this->Html->link($this->Html->tag('span', 'List EventManagers'), ['controller' => 'users', 'action' => 'emanagerindex'], array('escape'=>false)); ?></li>
                        <li><?php echo $this->Html->link($this->Html->tag('span', 'List Event Organizer'), ['controller' => 'users', 'action' => 'organizerindex'], array('escape'=>false)); ?></li>
                        <li><?php echo $this->Html->link($this->Html->tag('span', 'List Users'), ['controller' => 'users', 'action' => 'userlist'], array('escape'=>false)); ?></li>
                        <!-- <li><?php echo $this->Html->link($this->Html->tag('span', 'Add User'), ['controller' => 'users', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        </ul>
                    </li>

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
                            <i class="material-icons">web</i>
                            <span>Categories</span>
                        </a>
                        <ul class="ml-menu">
                           <li><?php echo $this->Html->link( $this->Html->tag('i', 'view_list', array('class' => 'material-icons')).$this->Html->tag('span', 'List Categories'), ['controller' => 'Categories', 'action' => 'index'], array('escape'=>false)); ?></li>

                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New Category'), ['controller' => 'Categories', 'action' => 'add'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Subcategories</span>
                        </a>
                        <ul class="ml-menu">
                           <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'List Sub Categories'), ['controller' => 'SubCategories','action' => 'index'], array('escape'=>false)); ?></li>

                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New SubCategory'), ['controller' => 'SubCategories', 'action' => 'add'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Ticket Details'), ['controller' => 'Tickets','action' => 'index'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Settlements'), ['controller' => '','action' => ''], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Contact Query'), ['controller' => 'Contact','action' => 'index'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'exit_to_app', array('class' => 'material-icons')).$this->Html->tag('span', 'Logout'), ['controller' => 'Users', 'action' => 'logout'], array('escape'=>false)); ?></li>
<<<<<<< .mine
                </ul>
            </div>
            <!-- #Menu -->
            <?php }
                       //$user = $this->request->session()->read('Auth.User');
                        elseif($user['group_id'] == 2) {
                                            ?>                            
 <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="active"><?php echo $this->Html->link( $this->Html->tag('i', 'home', array('class' => 'material-icons')).$this->Html->tag('span', 'Home - Event Organizer'), ['controller' => 'AdminDashBoard', 'action' => 'index'], array('escape'=>false)); ?></li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Events</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link($this->Html->tag('span', 'My Events'), ['controller' => 'events', 'action' => 'organizerevents'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'My Ticket Details'), ['controller' => 'tickets','action' => 'mytickets'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'My Settlements'), ['controller' => '','action' => ''], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Feedback'), ['controller' => 'events','action' => 'contact'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'exit_to_app', array('class' => 'material-icons')).$this->Html->tag('span', 'Logout'), ['controller' => 'Users', 'action' => 'logout'], array('escape'=>false)); ?></li>

                </ul>
            </div>
            <!-- #Menu -->
<?php }
  elseif($user['group_id'] == 6) {
                                            ?>    <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="active"><?php echo $this->Html->link( $this->Html->tag('i', 'home', array('class' => 'material-icons')).$this->Html->tag('span', 'Home - Event Manager'), ['controller' => 'AdminDashBoard', 'action' => 'index'], array('escape'=>false)); ?></li>
                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Event Organizers</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'List EventOrganizers'), ['controller' => 'Users', 'action' => 'organizerindex'], array('escape'=>false)); ?></li>

                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New EventOrgenizers'), ['controller' => 'Users', 'action' => 'add'], array('escape'=>false)); ?></li>
                        </ul>
                    </li> 
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Events</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link($this->Html->tag('span', 'List Events'), ['controller' => 'events', 'action' => 'adminindex'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>

                    <!--  <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Users</span>
                        </a>
                        <ul class="ml-menu">
                        <li><?php //echo $this->Html->link($this->Html->tag('span', 'List Users'), ['controller' => 'users', 'action' => 'index'], array('escape'=>false)); ?></li>
                       <!--  <li><?php //echo $this->Html->link($this->Html->tag('span', 'Add User'), ['controller' => 'users', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        <!-- </ul>
                    </li> --> 

                   <!--  <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Subcategories</span>
                        </a>
                        <ul class="ml-menu">
                           <li><?php //echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'List Sub Categories'), ['controller' => 'SubCategories','action' => 'index'], array('escape'=>false)); ?></li>

                            <li><?php //echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New SubCategory'), ['controller' => 'SubCategories', 'action' => 'add'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>
                     <li><?php //echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Ticket Details'), ['controller' => 'Tickets','action' => 'index'], array('escape'=>false)); ?></li>-->

                   <!-- 
                    <li><?php //echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Settlements'), ['controller' => '','action' => ''], array('escape'=>false)); ?></li>
 -->
                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Contact Query'), ['controller' => 'Contact','action' => 'index'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'exit_to_app', array('class' => 'material-icons')).$this->Html->tag('span', 'Logout'), ['controller' => 'Users', 'action' => 'logout'], array('escape'=>false)); ?></li>
||||||| .r379
=======
                </ul>
            </div>
            <!-- #Menu -->
            <?php }
                       //$user = $this->request->session()->read('Auth.User');
                        elseif($user['group_id'] == 2) {
                                            ?>                            
 <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="active"><?php echo $this->Html->link( $this->Html->tag('i', 'home', array('class' => 'material-icons')).$this->Html->tag('span', 'Home - Event Organizer'), ['controller' => 'AdminDashBoard', 'action' => 'index'], array('escape'=>false)); ?></li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Events</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link($this->Html->tag('span', 'My Events'), ['controller' => 'events', 'action' => 'myevents'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'My Ticket Details'), ['controller' => '','action' => ''], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'My Settlements'), ['controller' => '','action' => ''], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Feedback'), ['controller' => 'events','action' => 'contact'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'exit_to_app', array('class' => 'material-icons')).$this->Html->tag('span', 'Logout'), ['controller' => 'Users', 'action' => 'logout'], array('escape'=>false)); ?></li>

                </ul>
            </div>
            <!-- #Menu -->
<?php }
  elseif($user && $user['group_id'] == 6) {
                                            ?>    <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <li class="active"><?php echo $this->Html->link( $this->Html->tag('i', 'home', array('class' => 'material-icons')).$this->Html->tag('span', 'Home - Event Manager'), ['controller' => 'AdminDashBoard', 'action' => 'index'], array('escape'=>false)); ?></li>
                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Event Organizers</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'List EventOrganizers'), ['controller' => 'Users', 'action' => 'organizerindex'], array('escape'=>false)); ?></li>

                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New EventOrgenizers'), ['controller' => 'Users', 'action' => 'add'], array('escape'=>false)); ?></li>
                        </ul>
                    </li> 
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Events</span>
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link($this->Html->tag('span', 'List Events'), ['controller' => 'events', 'action' => 'adminindex'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>

                    <!--  <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Users</span>
                        </a>
                        <ul class="ml-menu">
                        <li><?php //echo $this->Html->link($this->Html->tag('span', 'List Users'), ['controller' => 'users', 'action' => 'index'], array('escape'=>false)); ?></li>
                       <!--  <li><?php //echo $this->Html->link($this->Html->tag('span', 'Add User'), ['controller' => 'users', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        <!-- </ul>
                    </li> --> 

                   <!--  <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Subcategories</span>
                        </a>
                        <ul class="ml-menu">
                           <li><?php //echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'List Sub Categories'), ['controller' => 'SubCategories','action' => 'index'], array('escape'=>false)); ?></li>

                            <li><?php //echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New SubCategory'), ['controller' => 'SubCategories', 'action' => 'add'], array('escape'=>false)); ?></li>
                        </ul>
                    </li>
                     <li><?php //echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Ticket Details'), ['controller' => 'Tickets','action' => 'index'], array('escape'=>false)); ?></li>-->

                   <!-- 
                    <li><?php //echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Settlements'), ['controller' => '','action' => ''], array('escape'=>false)); ?></li>
 -->
                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Contact Query'), ['controller' => 'Contact','action' => 'index'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'exit_to_app', array('class' => 'material-icons')).$this->Html->tag('span', 'Logout'), ['controller' => 'Users', 'action' => 'logout'], array('escape'=>false)); ?></li>
>>>>>>> .r384
                    
                </ul>
            </div>
            <!-- #Menu -->
           
<?php }
  elseif($user && $user['group_id'] == 5) {?>
        <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

<<<<<<< .mine
                    <li class="active"><?php echo $this->Html->link( $this->Html->tag('i', 'home', array('class' => 'material-icons')).$this->Html->tag('span', 'Home - Super Admin'), ['controller' => 'AdminDashBoard', 'action' => 'index'], array('escape'=>false)); ?></li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Groups</span>
||||||| .r379
                    <!-- <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
=======
                    <li class="active"><?php echo $this->Html->link( $this->Html->tag('i', 'home', array('class' => 'material-icons')).$this->Html->tag('span', 'Home - Admin Manager'), ['controller' => 'AdminDashBoard', 'action' => 'index'], array('escape'=>false)); ?></li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Groups</span>
>>>>>>> .r384
                        </a>
                        <ul class="ml-menu">
                            <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'List Groups'), ['controller' => 'Groups', 'action' => 'index'], array('escape'=>false)); ?></li>
 
                           <!--  <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New Group'), ['controller' => 'Groups', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        </ul>
                    </li>
 <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Chennai Smile Users</span>
                        </a>
                        <ul class="ml-menu">
                        <li><?php echo $this->Html->link($this->Html->tag('span', 'List EventManagers'), ['controller' => 'users', 'action' => 'emanagerindex'], array('escape'=>false)); ?></li>
                        <li><?php echo $this->Html->link($this->Html->tag('span', 'List Event Organizer'), ['controller' => 'users', 'action' => 'organizerindex'], array('escape'=>false)); ?></li>
                        <li><?php echo $this->Html->link($this->Html->tag('span', 'List Users'), ['controller' => 'users', 'action' => 'userlist'], array('escape'=>false)); ?></li>
                        <!-- <li><?php echo $this->Html->link($this->Html->tag('span', 'Add User'), ['controller' => 'users', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        </ul>
                    </li>

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
                            <i class="material-icons">web</i>
                            <span>Categories</span>
                        </a>
                        <ul class="ml-menu">
                           <li><?php echo $this->Html->link( $this->Html->tag('i', 'view_list', array('class' => 'material-icons')).$this->Html->tag('span', 'List Categories'), ['controller' => 'Categories', 'action' => 'index'], array('escape'=>false)); ?></li>

                           <!--  <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New Category'), ['controller' => 'Categories', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">web</i>
                            <span>Subcategories</span>
                        </a>
                        <ul class="ml-menu">
                           <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'List Sub Categories'), ['controller' => 'SubCategories','action' => 'index'], array('escape'=>false)); ?></li>

                           <!--  <li><?php echo $this->Html->link( $this->Html->tag('i', 'widgets', array('class' => 'material-icons')).$this->Html->tag('span', 'New SubCategory'), ['controller' => 'SubCategories', 'action' => 'add'], array('escape'=>false)); ?></li> -->
                        </ul>
                    </li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Ticket Details'), ['controller' => 'Tickets','action' => 'index'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Settlements'), ['controller' => '','action' => ''], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'layers', array('class' => 'material-icons')).$this->Html->tag('span', 'Contact Query'), ['controller' => 'Contact','action' => 'index'], array('escape'=>false)); ?></li>

                    <li><?php echo $this->Html->link( $this->Html->tag('i', 'exit_to_app', array('class' => 'material-icons')).$this->Html->tag('span', 'Logout'), ['controller' => 'Users', 'action' => 'logout'], array('escape'=>false)); ?></li>
                </ul>
            </div>           <!-- #Menu -->
<?php }
//else{
     //$this->Flash->error(__('Sry You dont have access!.'));
     //$this->viewBuilder()->layout('admin_login');
     //return $this->redirect(['controller' => 'Events','action' => 'index']);
     //return $this->redirect(array('controller' => 'Events', 'action' => 'index'));
//}
?>           
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

     <script src="<?php echo $this->Url->build('/dashboard/js/pages/forms/advanced-form-elements.js'); ?>"></script>
</body>

</html>