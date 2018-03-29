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
    
    <!-- Your custom styles (optional) -->
    <link href="<?php echo $this->Url->build('/newtheme/css/style.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/newtheme/custom/css/event.list.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->Url->build('/newtheme/custom/css/event.details.css'); ?>" rel="stylesheet">
</head>

<body>
 <input type="hidden" id="sub_category_api_url" name="sub_category_api_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'viewresult'));?>">
  <input type="hidden" id="event_list_url" name="event_list_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'eventlist'));?>">
  <input type="hidden" id="eventIndexUrl" name="event_index_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'index'));?>">
  <input type="hidden" id="event_view_url" name="event_view_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'chennai'));?>">
  <input type="hidden" id="search_area_url" name="search_area_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'search'));?>">
  <input type="hidden" id="search_etitle_url" name="search_etitle_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'searchbyeventtitle'));?>">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark white scrolling-navbar cs-anchor">
            <?php echo $this->Html->image('chennaismile-logo.png',array('alt' => 'Logo Chennai Smile','class' => 'navbar-brand','width' => '95%','url' => array('controller' => 'events', 'action' => 'index'))); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto search-box">
                    <li class="search-category">
                      <div class="search-menu">
                        <button type="button" class="btn btn-primary cat-not-selected" type="button">
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
                        <button type="button" class="btn btn-primary btn-go btn-category-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </li>
                </ul>

                <?php if(!$this->request->session()->read('Auth.User')) { ?>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="#" class="btn btn-default btn-rounded btn-sm" data-toggle="modal" data-target="#cs-login-modal">Login/Signup</a>
                    </li>
                    

                </ul>
                <?php }  else { ?>
                <ul class="navbar-nav nav-flex-icons">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle cs-dropbtn p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar">
                                <?=  $this->Html->image('profile_thumbnail.jpg',array('alt' => 'Logo Chennai Smile','class' => 'img-fluid rounded-circle')); ?>
                            </div>
                        </button>
                       
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
                            <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')).'My Account', array('controller' => 'UserProfile', 'action' => 'add','class' => 'dropdown-item'), array('escape' => false)) ?></li>
                            <li> <a href="#my-events" class="my-events dropdown-item"><i class="fa fa-calendar-o fa-fw"></i>My Events</a></li>
                            <li><a href="#liked-events" class="liked-events dropdown-item"><i class="fa fa-thumbs-up fa-fw"></i>Liked Events</a></li>
                            <li><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out')).'Logout', array('controller' => 'Users', 'action' => 'logout','class' => 'dropdown-item'),array('escape' => false))?></li>
                        </div>
                    </div>
                </ul>
                  <?php } ?>
                <ul class="navbar-nav nav-flex-icons">
                    <!-- <li class="nav-item">
                      <i class="fa fa-user-circle fa-3x" aria-hidden="true"></i>
                    </li> -->
                    <!-- <li class="nav-item">
                        <button type="button" class="btn btn-primary">Create Events</button>
                    </li> -->
                    <li class="nav-item">
                        <?= $this->Html->link(__('Create events'), ['controller' => 'events', 'action' => 'add'], array('class' => 'btn btn-primary')); ?>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-default">Past Events</button>
                    </li>
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
    <footer class="page-footer font-small blue pt-4 mt-4">
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


    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="cs-login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <!-- <div class="md-form form-sm mb-5">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                                </div> -->
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <!-- <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                </div> -->
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
                                <!-- <div class="md-form form-sm mb-5">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                                </div> -->

                                <!-- <div class="text-center form-sm mt-2">
                                    <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                                </div> -->

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <!-- <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                </div> -->
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

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/custom/js/event.list.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/custom/js/event.add.js'); ?>"></script>

    <script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCx2hb4R1uhaMbmlUAu1_lFasvl3gVHtnw"></script>

</body>
</html>
