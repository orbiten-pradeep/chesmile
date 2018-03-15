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
    <!-- Your custom styles (optional) -->
    <link href="<?php echo $this->Url->build('/newtheme/css/style.css'); ?>" rel="stylesheet">

    <link href="<?php echo $this->Url->build('/newtheme/custom/css/event.list.css'); ?>" rel="stylesheet">
</head>

<body>
 <input type="hidden" id="sub_category_api_url" name="sub_category_api_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'viewresult'));?>">
  <input type="hidden" id="event_list_url" name="event_list_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'eventlist'));?>">
  <input type="hidden" id="eventIndexUrl" name="event_index_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'index'));?>">
  <input type="hidden" id="event_view_url" name="event_view_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'chennai'));?>">
  <input type="hidden" id="search_area_url" name="search_area_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'search'));?>">
  <input type="hidden" id="search_etitle_url" name="search_etitle_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'searchbyeventtitle'));?>">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark white scrolling-navbar">
            <?php echo $this->Html->image('chennaismile-logo.png',array('alt' => 'Logo Chennai Smile','class' => 'navbar-brand','width' => '80%','url' => array('controller' => 'events', 'action' => 'index') )); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
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

    <script type="text/javascript" src="<?php echo $this->Url->build('/newtheme/custom/js/event.list.js'); ?>"></script>

    <script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCx2hb4R1uhaMbmlUAu1_lFasvl3gVHtnw"></script>

</body>
</html>
