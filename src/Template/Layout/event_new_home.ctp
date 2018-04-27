<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chennaismile.com</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->Url->build('/newtheme/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo $this->Url->build('/newtheme/css/mdb.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/newtheme/css/bootstrap-tagsinput.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/newtheme/css/check-box.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/newtheme/css/thumbnail-slider.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/newtheme/css/thumbs2.css'); ?>" rel="stylesheet">
    
    <!-- Your custom styles (optional) -->
    <link href="<?php echo $this->Url->build('/newtheme/css/style.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/newtheme/custom/css/event.list.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/newtheme/custom/css/event.details.css'); ?>" rel="stylesheet">    

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <?php echo $this->Html->css(['daterangepicker']); ?>
</head>

<body>
    <input type="hidden" id="sub_category_api_url" name="sub_category_api_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'viewresult'));?>">
    <input type="hidden" id="event_list_url" name="event_list_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'eventlist'));?>">
    <input type="hidden" id="eventIndexUrl" name="event_index_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'index'));?>">
    <input type="hidden" id="event_view_url" name="event_view_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'chennai'));?>">
    <input type="hidden" id="search_area_url" name="search_area_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'search'));?>">
    <input type="hidden" id="search_etitle_url" name="search_etitle_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'searchbyeventtitle'));?>">
    <input type="hidden" id="eventPage" name="eventPage" value="<?php echo $this->request->params['action']; ?>">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark white scrolling-navbar cs-anchor">
            
            <a class="navbar-brand" href="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'index'));?>"><?php echo $this->Html->image('chennaismile-logo.png',array('alt' => 'Logo Chennai Smile')); ?></a>

            <div class="mobile-menu pull-right" id="mobileMenuBtn" data-direction='bottom'>
                <button type="button" class="btn btn-mdb-color btn-md">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>

            

            <!-- IPAD navbar links -->
            <ul class="navbar-nav pull-right ipad-nav-links">
              <?php if($this->request->session()->read('Auth.User')) { ?>
              <div class="dropdown ipad-user-profile">
                  <button class="btn btn-head btn-primary user-dropdown dropdown-toggle cs-dropbtn p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="avatar">
                        <?=  $this->Html->image('profile_thumbnail.jpg',array('alt' => 'Profile Picture','class' => 'img-fluid rounded-circle')); ?>
                      </div>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu4">                        
                      <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')).'My Account', array('controller' => 'UserProfile', 'action' => 'add','class' => 'dropdown-item'), array('escape' => false)) ?></li>
                      <li> <a href="#my-events" class="my-events dropdown-item filter-action" data="myevents"><i class="fa fa-calendar-o fa-fw"></i>My Events</a></li>
                      <li><a href="#liked-events" class="liked-events dropdown-item filter-action" data="likedevents"><i class="fa fa-thumbs-up fa-fw"></i>Liked Events</a></li>
                      <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out')).'Logout', array('controller' => 'Users', 'action' => 'logout','class' => 'dropdown-item'),array('escape' => false))?></li>
                  </div>
              </div>                  
              <?php } ?>
              <li class="nav-item dropdown nav-city-link">
                  <a class="nav-link btn-head btn btn-grey btn-md dropdown-toggle cs-city-btn" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Look your city</span></a>
                  <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="http://www.bangaloresmile.com">BangaloreSmile</a>
                      <a class="dropdown-item" href="http://www.mumbaismile.com">MumbaiSmile</a>
                      <a class="dropdown-item" href="http://www.punesmile.com">PuneSmile</a>
                  </div>
              </li>
              
              <?php if(!$this->request->session()->read('Auth.User')) { ?>
              <li class="nav-item">
                <a href="#" class="btn btn-head btn-md btn-primary cs_create_btn cs_login_btn cs-city-btn p-2" data-toggle="modal" data-target="#cs-login-modal">Create Events</a>
              </li>
              <?php } ?>

              <?php $user = $this->request->session()->read('Auth.User'); if($user && $user['group_id'] == 1) { ?>
              <li class="nav-item">                    
                <a href="#" class="btn btn-head btn-primary cs_create_btn cs_login_btn cs-city-btn p-2" data-toggle="modal" data-target="#orgSignup">Create events</a>                    
              </li>
              <?php } ?>

              <?php $user = $this->request->session()->read('Auth.User'); if($user && $user['group_id'] != 1) { ?>
              <li class="nav-item">                    
                <?= $this->Html->link(__('Create Events'), ['controller' => 'events', 'action' => 'add'], array('class' => 'btn btn-md btn-head btn-primary cs_create_btn cs_login_btn cs-city-btn p-2')); ?>                    
              </li>
              <?php } ?>
              
            </ul>
            <!-- IPAD navbar links ends -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto search-box">
                  <li class="search-category">
                    <div class="search-menu">
                      <button type="button" class="btn btn-head btn-primary btn-md cat-not-selected" type="button">
                        <label>Category</label>
                        <i class="fa fa-bars float-right"></i>
                      </button>
                    </div>
                    <div class="category-dropdown">
                        <div class="row">
                            <?php foreach ($categories as $key=> $category): ?>
                            <div class="col-md-4">
                                <div class="checkbox parent-category" data-id="<?php echo $category->id; ?>" data-text="<?php echo $category->name; ?>"><?php echo $category->name; ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="subcategory-dd list-group">
                        <div class="row" id="subCategoriesResp">

                        </div>
                    </div>
                  </li>
                  <li class="search-text-box">
                    <input id="eventCategorySearch" type="text" class="form-control search-input" placeholder="Search for events, parties, concerts and more">
                  </li>
                  <li class="search-button">
                      <button type="button" class="btn btn-head btn-md btn-primary btn-go btn-category-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </li>
                  <li class="nav-item dropdown nav-city-link">
                      <a class="nav-link btn btn-grey btn-sm dropdown-toggle cs-city-btn" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Look your city</a>
                      <div class="dropdown-menu dropdown-primary cs_city_drpdwn" aria-labelledby="navbarDropdownMenuLink">
                          <div class="row">
                      <div class="col-sm-4">
                        <a class="dropdown-item" href="http://www.bangaloresmile.com">BangaloreSmile</a>
                        <a class="dropdown-item" href="http://www.mumbaismile.com">MumbaiSmile</a>
                        <a class="dropdown-item" href="http://www.punesmile.com">PuneSmile</a>
                      </div>
                      <div class="col-sm-4">
                        <a class="dropdown-item" href="http://www.hyderabadsmile.com">HyderabadSmile</a>
                        <a class="dropdown-item" href="http://www.goasmile.com">GoaSmile</a>
                        <a class="dropdown-item" href="http://www.pondicherrysmile.com">PondicherrySmile</a>
                      </div>
                      <div class="col-sm-4">
                        <a class="dropdown-item" href="http://www.mangaloresmile.com">MangaloreSmile</a>
                        <a class="dropdown-item" href="http://www.mysoresmile.com">MysoreSmile</a>
                      </div>
                    </div>
                      </div>
                  </li>
                </ul>

                <?php if($this->request->session()->read('Auth.User')) { ?>
                <ul class="navbar-nav nav-cs-action">                  
                  <div class="dropdown ml-4">
                      <button class="btn btn-primary btn-head user-dropdown dropdown-toggle cs-dropbtn p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <div class="avatar">
                            <?=  $this->Html->image('profile_thumbnail.jpg',array('alt' => 'Profile Picture','class' => 'img-fluid rounded-circle')); ?>
                          </div>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu4">                        
                          <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')).'My Account', array('controller' => 'UserProfile', 'action' => 'add','class' => 'dropdown-item'), array('escape' => false)) ?></li>
                          <li> <a href="#my-events" class="my-events dropdown-item filter-action" data="myevents"><i class="fa fa-calendar-o fa-fw"></i>My Events</a></li>
                          <li><a href="#liked-events" class="liked-events dropdown-item filter-action" data="likedevents"><i class="fa fa-thumbs-up fa-fw"></i>Liked Events</a></li>
                          <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out')).'Logout', array('controller' => 'Users', 'action' => 'logout','class' => 'dropdown-item'),array('escape' => false))?></li>
                      </div>
                  </div>                  
                </ul>
                <?php } ?>

                <ul class="navbar-nav nav-cs-action pull-right">
                  <?php if(!$this->request->session()->read('Auth.User')) { ?>
                  <li class="nav-item">
                    <a href="#" class="btn btn-sm btn-primary cs_login_btn cs-city-btn p-2" data-toggle="modal" data-target="#cs-login-modal">Login/signup</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="btn btn-sm btn-primary cs_create_btn cs-city-btn p-2" data-toggle="modal" data-target="#cs-login-modal">Create Events</a>
                  </li>
                  <?php } ?>

                  <?php $user = $this->request->session()->read('Auth.User'); if($user && $user['group_id'] == 1) { ?>
                  <li class="nav-item">                    
                    <a href="#" class="btn btn-primary cs_create_btn cs-city-btn p-2" data-toggle="modal" data-target="#orgSignup">Create events</a>                   
                  </li>
                  <?php } ?>

                  <?php $user = $this->request->session()->read('Auth.User'); if($user && $user['group_id'] != 1) { ?>
                  <li class="nav-item">                    
                    <?= $this->Html->link(__('Create Events'), ['controller' => 'events', 'action' => 'add'], array('class' => 'btn btn-sm btn-primary cs_create_btn cs-city-btn p-2')); ?>                 
                  </li>
                  <?php } ?>
                </ul>
            </div>
        </nav>

    </header>
    <!--Main Navigation-->

    <!-- Start your project here-->
    <div class="container-fluid pr-0 pl-0">
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->Flash->render(); ?>
    </div>
    <!-- /Start your project here-->

    <!--Footer-->
    <footer class="page-footer font-small pt-4 mt-4 cs-footer">
      <div class="container">
        <div class="row">
          <div class="text-center cs-footer-social">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-fb mx-1">
                        <i class="fa fa-facebook"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-tw mx-1">
                        <i class="fa fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-gplus mx-1">
                        <i class="fa fa-google-plus"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-li mx-1">
                        <i class="fa fa-linkedin"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sm btn-dribbble mx-1">
                        <i class="fa fa-dribbble"> </i>
                    </a>
                </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="text-center cs-footer-social">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><?= $this->Html->link(__('About us'), ['controller' => 'events', 'action' => 'about'], array('class' => 'btn-floating btn-sm btn-tw mx-1')); ?></li>
                <li class="list-inline-item"><?= $this->Html->link(__('Terms of service'), ['controller' => 'events', 'action' => 'terms'], array('class' => 'btn-floating btn-sm btn-tw mx-1')); ?></li>
                <li class="list-inline-item"><?= $this->Html->link(__('Privacy Policy'), ['controller' => 'events', 'action' => 'privacy'], array('class' => 'btn-floating btn-sm btn-tw mx-1')); ?></li>
                <li class="list-inline-item"><?= $this->Html->link(__('Disclaimer'), ['controller' => 'events', 'action' => 'partnerwith'], array('class' => 'btn-floating btn-sm btn-tw mx-1')); ?></li>
                <li class="list-inline-item"><?= $this->Html->link(__('Contact us'), ['controller' => 'events', 'action' => 'contact'], array('class' => 'btn-floating btn-sm btn-tw mx-1')); ?></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.Footer Links-->

      <!--Copyright-->
      <div class="footer-copyright py-3 text-center">
          <div class="container-fluid">
              © 2017 Copyright: <a href="https://chennaismile.com/"> ChennaiSmile.com </a>
          </div>
      </div>
      <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


     <!-- Modal -->
    <div class="modal fade" id="orgSignup" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content con">
          <div class="modal-header" style="border-bottom: none;">
            <button type="button" class="close hide" data-dismiss="modal" style="color: #4abac5 !important;">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body" style="text-align: center;background: none;">
            <p >Do you want to upgrade your account as an event organizer?</p>
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
          </div>
          <div class="modal-footer" style="border-top: none;">
            <?= $this->Html->link(__('Promote'), ['controller' => 'events', 'action' => 'add'], array('class' => 'btn btn-default closebtn')); ?>
            <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  
    <!--Modal: Login / Register Form-->
    <div class="modal login-popup fade" id="cs-login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-2 light-blue darken-3 cs-login-modal-head" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body mb-1">
                                <?= $this->Form->create('',array('id' => 'loginForm2','class' => 'form-signin', 'url' => ['action' => 'login','controller' => 'users'])) ?>

                                    <div class="md-form form-sm mb-5">
                                        <!-- <label data-error="wrong" data-success="right" for="email">Your email</label> -->
                                        <!--  <i class="fa fa-envelope prefix"></i> -->
                                        <?= $this->Form->input('email', array('label' => 'Your Email','div' => false,'id' => 'email','class' => 'form-control form-control-sm validate','required' => true)) ?>   
                                    </div>

                                    <div class="md-form form-sm mb-5">
                                        <?= $this->Form->input('password',array('label' => 'Your Password','div' => false,'id' => 'password', 'class' => 'form-control form-control-sm validate','required' => true)) ?>
                                    </div>
                                        <?= $this->Form->submit(__('Log In'), array('id' => 'Login2', 'class' => 'btn btn-primary btn-lg cs-signup-button cs-signin-button')) ?>
                                  <?= $this->Form->end() ?>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panel8" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body">
                                <?= $this->Form->create('', array('id' => 'signupForm','class' => 'form-signup formheigh ', 'url' => ['action' => 'add','controller' => 'users'])) ?>

                                <input type="hidden" id="checkUrl" name="checkUrl" value="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'isemailexist'));?>">

                                <div class="md-form form-sm mb-4">
                                    <?= $this->Form->input('fullname', array('label' => 'Fullname','div' => false,'id' => 'fullname', 'class' => 'form-control form-control-sm validate','required' => true)) ?>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <?= $this->Form->input('email', array('label' => 'Email','div' => false,'id' => 'email', 'class' => 'form-control form-control-sm validate','required' => true)) ?>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <?= $this->Form->input('password',array('label' => 'Password','id' => 'new_password', 'class' => 'form-control form-control-sm validate','required' => true)) ?>

                                </div>
                                <div class="md-form form-sm mb-4">
                                    <?= $this->Form->input('confirm_password',array('label' => 'Re-type Password','div' => false,'id' => 'confirm_password', 'type' => 'password', 'class' => 'form-control form-control-sm validate','required' => true)) ?>

                                </div>
                                <?= $this->Form->hidden('group_id', array('controller' => 'users', 'action' => 'add'), ['options' => $groups], ['default' => '1']); ?>
                                  <p style="color:#333333;font-size: 11px;"  align="left">*By clicking Create Account means you're okay with ChennaiSmile Terms and Privacy Policy and Cookie Policy.</p>

                                <?= $this->Form->button(__('Create Account'), array('id' => 'signup', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>
                                <?= $this->Form->end() ?>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Login / Register Form-->

    <!-- Modal: Mobile Menus -->
    <div class="modal mobile-modal modal-mob-menus fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="list-group">
                        <?php if(!$this->request->session()->read('Auth.User')) { ?>
                        <li class="list-group-item"><span class="mob-open-login">Create Event</span></li>
                        <li class="list-group-item"><span class="mob-open-login">Login/Signup</span></li>
                        <?php }?>

                        <?php if($this->request->session()->read('Auth.User')) { ?>
                        <li class="list-group-item">
                          <a href="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'add'));?>">Create Event</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#my-events" class="my-events filter-action" data="myevents">My Events</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#liked-events" class="liked-events filter-action" data="likedevents">Liked Events</a>
                        </li>
                        <li class="list-group-item">
                          <a href="#past-events" class="past-events filter-action" data="pastevents">Past Event</a>
                        </li>
                        <li class="list-group-item">
                          <a href="<?php echo $this->Url->build(array('controller' => 'UserProfile', 'action' => 'add'));?>">My Profile</a>
                        </li>
                        <li class="list-group-item">
                          <a href="<?php echo $this->Url->build(array('controller' => 'Users', 'action' => 'logout'));?>">Logout</a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="mobile-footer" id="mobFooter">
        <div class="container">
            <div class="left"><a href="javascript:;" id="mobileFilterCategoryBtn">Search Events</a>
            </div>
            <div class="right"><a href="javascript:;" id="mobileFilterBtn" data-direction='bottom'>Filter</a>
            </div>
        </div>
    </div>
    <!-- Modal: Mobile Categories Menus -->
    <div class="modal mobile-modal modal-mob-filter-cat fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
                    <h4 class="modal-title">Category</h4>

                    <div class="btn-group pull-right btn-group-sm" role="group">
                        <button type="button" class="btn btn-mdb-color" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-blue-grey mob-cat-clear">Clear</button>
                        <button type="button" class="btn btn-default mob-cat-apply">Apply</button>
                    </div>                   
                </div>
                <div class="modal-body" style="background: none;">
                    <div class="mob-category-list">
                        <div class="form-group search-text-box">
                            <input id="mobEventCategorySearch" type="text" class="form-control" placeholder="Search for events, parties, concerts and more">
                        </div>
                        <ul class="list-group inner-mob-category-list">
                            <?php foreach ($categories as $key=> $category): ?>
                            <li class="list-group-item mob-cs-cat" data-id="<?php echo $category->id; ?>" data-text="<?php echo $category->name; ?>">
                                <?php echo $category->name; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="mob-sub-category-list">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group pull-right btn-group-sm" role="group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default mob-cat-clear">Clear</button>
                        <button type="button" class="btn btn-primary mob-cat-apply">Apply</button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal: Mobile Filter Menus -->
    <div class="modal mobile-modal modal-mob-filter fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
                    <h4 class="modal-title">Filters</h4>
                    <div class="btn-group pull-right btn-group-sm" role="group">
                        <button type="button" class="btn btn-blue-grey" data-dismiss="modal">Close</button>
                    </div>                    
                </div>
                <div class="modal-body">

                    <a href="javascript:;" class="mob-filter-date list-group-item" data="today">Today's Events</a>
                    <a href="javascript:;" class="mob-filter-date list-group-item" data="tomorrow">Tomorrow's Events</a>
                    <a href="javascript:;" class="mob-filter-date list-group-item" data="weekend">This Weekend Events</a>
                    <a href="javascript:;" class="mob-filter-date list-group-item" data="month">This Month Events</a>

                    <br>

                    <a href="javascript:;" class="list-group-item mob-filter-type" data-text="Booking Events" data="register">Booking Events</a>
                    <a href="javascript:;" class="list-group-item mob-filter-type" data-text="Free Events" data="freeEvents">Free Events</a>

                </div>
                <div class="modal-footer">
                    <div class="btn-group pull-right btn-group-sm" role="group">
                        <button type="button" class="btn btn-blue-grey" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
                

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/js/jquery-3.2.1.min.js'); ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/js/popper.min.js'); ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/js/bootstrap.min.js'); ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/js/mdb.min.js'); ?>"></script>    

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/lib/moment.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/lib/masonry.pkgd.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/lib/imagesloaded.pkgd.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/js/bootstrap-tagsinput.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/js/jquery.slimscroll.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/js/thumbnail-slider.js'); ?>"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

    <?php  echo $this->Html->script(['daterangepicker']);?>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/custom/js/common.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/custom/js/event.list.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/custom/js/mobile.event.list.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/custom/js/event.add.js'); ?>"></script>

    <script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCx2hb4R1uhaMbmlUAu1_lFasvl3gVHtnw"></script>

</body>
</html>
