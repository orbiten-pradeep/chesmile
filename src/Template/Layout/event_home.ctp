<html>
<head>
<style type="text/css">
   
    ul {
  list-style-type: none;
}


/* footer social icons */
ul.social-network {
  list-style: none;
  display: inline;
  margin-left:0 !important;
  padding: 0;
}
ul.social-network li {
  display: inline;
  margin: 0 5px;
}
.btn-hide{
  display: none;
}

.mobhide{
  display: none !important;
}

 @media only screen and (min-width: 768px)
 and (max-width:980px){
  .btn-hide{
  display: inline;
}
.mobhide{
  display: inline !important;
}
.logores{
  width: 250px;
 }

.navbar-collapse .navbar-nav .form-control {
    display: block;
    width: 250px !important;
    height: 36px !important;
    padding: 6px 12px !important;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
     margin-bottom: 6px;
}
.btn-go {
    padding: 6px 10px !important;
    margin-left: -4px !important;
    margin-bottom: 7px !important;
}
.nav .navbar-nav{
  margin-top: 0px !important;
}
.nav .category_btn{
    padding: 8px 20px !important;
    background-color: #337ab7;
    color:#ffffff;
}
}



ul.social {list-style:none;}
ul.social li {display:inline; padding: 0; margin:0 5px;}
ul.social li a {display:inline-block; margin:0 auto; -moz-border-radius:50%; -webkit-border-radius:50%; border-radius:50%; text-align:center; width: 30px; height: 30px; font-size:15px; position:relative;}
ul.social li a i {color:#FFF; text-align: center; margin:0; line-height:30px; -webkit-transition: all 0.8s; -moz-transition: all 0.8s; -o-transition: all 0.8s; -ms-transition: all 0.8s; transition: all 0.8s;}
ul.social li a:hover i { -moz-transform: rotate(360deg); -webkit-transform: rotate(360deg); -ms--transform: rotate(360deg); transform: rotate(360deg);
                         -webkit-transition: all 0.2s; -moz-transition: all 0.2s; -o-transition: all 0.2s; -ms-transition: all 0.2s; transition: all 0.2s;}

.social li a.instagram:hover {background-color: #F56505;}
.social li a.face:hover {background-color:#3B5998;}
.social li a.twit:hover {background-color:#33ccff;}
.social li a.google:hover {background-color:#BD3518;}
.social li a.linkedin:hover {background-color:#007bb7;}

a {
 background-color: #D3D3D3;   
}
   .social{

        padding: 0 !important;

    }

    .social-network{

        padding: 0 !important;

    }

body{
  overflow-x: hidden;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    /*right: 0;*/
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown {
    float: left;
    position: relative;
    display: inline-block;
    
}

/*.nav .category_btn:hover{
  background-color: #4A94C5;
}
.nav .category_btn:hover:active{
  background-color: #4A94C5;
}
.category_dropdown.list-group:hover{
background-color: #4fa8b1;
}*/
.foot{
  display: inline !important;
  color: white !important;
  font-size: 11px !important;
}

.nav .category_btn:hover {
    color: #fff;
    background-color: #286090;
    border-color: #204d74;
}
.category_dropdown.list-group{
  background-color: #337AB7 !important;
  width: 590px !important;
}

/*.list-group .checkbox label:hover{
  color: black !important;
}*/

.list-group .checkbox{
  padding: 2px;
}
.sub_category1.list-group{
  width: 620px !important;
}
.cs-cat:hover{
background-color: #286090;
}

.cs-subcat:hover{
  background-color: #348890;
}

.checkbox{
  margin-bottom: 0px !important;
}

</style>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Chennai Smile</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<?php echo $this->Html->css(['style', 'custom', 'checkbox', 'daterangepicker', 'bootstrap-tagsinput']); ?>
</head>
<body>
  <input type="hidden" id="sub_category_api_url" name="sub_category_api_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'viewresult'));?>">
  <input type="hidden" id="event_list_url" name="event_list_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'eventlist'));?>">
  <input type="hidden" id="eventIndexUrl" name="event_index_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'index'));?>">
  <input type="hidden" id="event_view_url" name="event_view_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'view'));?>">
  <input type="hidden" id="search_area_url" name="search_area_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'search'));?>">
  <input type="hidden" id="search_etitle_url" name="search_etitle_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'searchbyeventtitle'));?>">
  <input type="hidden" id="invite_sendmail_url" name="invite_sendmail_url" value="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'sendemail'));?>">
  <input type="hidden" id="filterDateVal" name="filterDateVal" value="">
  <input type="hidden" id="apiAction" name="apiAction" value="">
  <input type="hidden" id="eventPage" name="eventPage" value="<?php echo $this->request->params['action']; ?>">
  <input type="hidden" id="areaSearch" name="areaSearch" value="">
  <input type="hidden" id="eventTitle" name="eventTitle" value="">
  <input type="hidden" id="customDate" name="customDate" value="">
  <input type="hidden" id="mobFilter" name="mobFilter" value="false">

<nav class="navbar mobile-navbar one-edge-shadow navbar-default visible-xs">
  <div class="navbar-header">
    <div class="mobile-menu pull-right" id="mobileMenuBtn" data-direction='right'>
      <button type="button" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
    </div>
  

  <div class="mobile-logo"><?php echo $this->Html->image('chennaismile-logo.png',array('alt' => 'Logo Chennai Smile','class' => 'img-responsive mobile-logo-img','url' => array('controller' => 'events', 'action' => 'index') )); ?></div>
  </div>  
</nav>

<nav class="navbar navbar-default hidden-xs">  

    <div class="navbar-header">
      <?php echo $this->Html->image('chennaismile-logo.png',array('alt' => 'Logo Chennai Smile','class' => 'img-responsive logores','url' => array('controller' => 'events', 'action' => 'index') )); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  <div  class="col-md-offset-3" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <div class="dropdown" style="margin-right: 15px;">
        <?php
        $user = $this->request->session()->read('Auth.User');
        if(!empty($user['Photo'])) {
        echo $this->Html->image('profile/'.$user['Photo'],array('alt' => 'Logo Chennai Smile','class' => 'dropbtn','width' => '41px', 'height' => '41px','onclick' => 'largedrop()'));
        } else
        {
        echo $this->Html->image('profile_thumbnail.jpg',array('alt' => 'Logo Chennai Smile','class' => 'dropbtn','onclick' => 'largedrop()'));
        }
        ?> 
        <div id="mylargeDropdown" class="dropdown-content">
          <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')).'My Account', array('controller' => 'UserProfile', 'action' => 'add'), array('escape' => false)) ?>

          <a href="#my-events" class="my-events"><i class="fa fa-calendar-o fa-fw"></i>My Events</a>
          <a href="#liked-events" class="liked-events"><i class="fa fa-thumbs-up fa-fw"></i>Liked Events</a>
          <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out')).'Logout', array('controller' => 'Users', 'action' => 'logout'),array('escape' => false))?>
          <!-- <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?> -->
        </div>
      </div>

      <li><a href="#past-events" class="btn btn-primary past-events">View past events</a></li>
      <li><?= $this->Html->link(__('Create events'), ['controller' => 'events', 'action' => 'add'], array('class' => 'btn btn-primary')); ?></li>
    </ul>
    <ul class="nav navbar-nav search-nav">
      <li class="dropdown category_btn">
          <label style="font-weight: normal;">Category</label>
          <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>
      </li>
      <li class="search-box-li">
       <form class="navbar-form navbar-left" action="<?php echo $this->Url->build(['action' =>'index']);?>" method="post">
        <div class="form-group">
          <input id="eventCategorySearch" type="text" class="form-control" placeholder="Search for events, parties, concerts and more">   
          <input type="hidden" name="parent_category_id" id="parent_category_id">
          <input type="hidden" name="sub_categories_id" id="sub_categories_id">        
        </div>
        <button type="button" class="btn btn-primary btn-go" onclick="getEventListByFilter();">GO</button>
      </form>
      </li>
      <li class="mobhide">
       
      </li>
    </ul>
    <div class="category_dropdown list-group">
      <div class="row">
        <?php foreach ($categories as $key => $category): ?>
          <?php //echo "<pre>";print_r($category); echo "</pre>";?>
          <?php $i=0; if(($i%5)==0) {echo '<div class="col-md-4">';} ?>           
              <div class="checkbox cs-cat" data-id="<?php echo $category->id; ?>" data-text="<?php echo $category->name; ?>">
               <label><?php echo $category->name; ?></label>
              </div>  
              <?php if($i!= 0) { echo "<br>";} $i++; ?>
            </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="sub_category1 list-group sub sub_category_dropdown">
      <div class="row" id="subCategoriesResp">

      </div>
    </div>




    </div><!-- /.navbar-collapse -->
  <!-- </div> --><!--.container-fluid-->
</nav>   
<div class="container-content">
  <?php echo $this->Flash->render(); ?>
  <?= $this->fetch('content') ?>
</div>
           

<div align="center" class="footer main-footer" style="font-size: 11px;">

  <div style="margin-bottom:3px; vertical-align:middle;" class="col-md-12">
    <ul class="social-network social-circle social">
    <li><a href="#" class="face" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#" class="twit" title="Twitter"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#" class="google" title="Google +"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
    </ul> 

  </div>
  <div>
    <ul class="social" style="color:#ffffff !important;">
      <li><?= $this->Html->link(__('About us'), ['controller' => 'events', 'action' => 'about'], array('class' => 'foot')); ?></li>
      <li><?= $this->Html->link(__('Terms of service'), ['controller' => 'events', 'action' => 'terms'], array('class' => 'foot')); ?></li>
      <li><?= $this->Html->link(__('Privacy Policy'), ['controller' => 'events', 'action' => 'privacy'], array('class' => 'foot')); ?></li>                
      <li><?= $this->Html->link(__('Partner with us'), ['controller' => 'events', 'action' => 'partnerwith'], array('class' => 'foot')); ?></li>                
      <li><?= $this->Html->link(__('Career'), ['controller' => 'events', 'action' => 'career'], array('class' => 'foot')); ?></li>                
    </ul> 
  </div>
  <p style="" class="copyrights">Copyright © 2017 ChennaiSmile</p><!--End container-->
</div>
<div class="mobile-footer visible-xs" id="mobFooter">
  <div class="container">
    <div class="left"><a href="javascript:;" id="mobileFilterCategoryBtn" ><span class="glyphicon glyphicon-menu-hamburger"></span> Menu</a></div>
    <div class="right"><a href="javascript:;" id="mobileFilterBtn" data-direction='bottom'><span class="glyphicon glyphicon-filter"></span> Filter</a></div>
  </div>
</div>
<div class="modal modal-mob-filter-cat fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--> 

        <div class="btn-group pull-right btn-group-sm" role="group">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default mob-cat-clear">Clear</button>
          <button type="button" class="btn btn-primary mob-cat-apply">Apply</button>
        </div>

        <h4 class="modal-title">Category</h4>
      </div>
      <div class="modal-body">
        <div class="mob-category-list">
          <div class="form-group">
            <input id="mobEventCategorySearch" type="text" class="form-control" placeholder="Search for events, parties, concerts and more">         
          </div>
          <ul class="list-group inner-mob-category-list"> 
          <?php foreach ($categories as $key => $category): ?>          
              <li class="list-group-item mob-cs-cat" data-id="<?php echo $category->id; ?>" data-text="<?php echo $category->name; ?>"><?php echo $category->name; ?></li>            
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
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal modal-mob-filter fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--> 

        <div class="btn-group pull-right btn-group-sm" role="group">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default mob-clear-filter">Clear</button>
          <button type="button" class="btn btn-primary mob-apply-filter">Apply</button>
        </div>

        <h4 class="modal-title">Filters</h4>
      </div>
      <div class="modal-body">
        <div class="f-sections">
            <div class="f-item filter-date">
                <label></label>
                <span class="glyphicon glyphicon-remove filter-date-clear"></span>
            </div>
            <div class="f-item filter-area">
                <label></label>
                <span class="glyphicon glyphicon-remove filter-area-clear"></span>
            </div>
            <div class="f-item filter-etitle">
                <label></label>
                <span class="glyphicon glyphicon-remove filter-etitle-clear"></span>
            </div>                   
        </div>
        <form id="searchbyarea2" class="sx_location"> 
            <div class="form-group"> <span class="twitter-typeahead" style="position: relative; display: inline-block;">
              <input class="tt-hint dropdown_hint" type="text" autocomplete="off" spellcheck="off" disabled style="">
               <?php echo $this->Form->input('areaname2', array('id' => 'homeAutocomplete2', 'required','class' => 'form-control tt-query dropdown_input','label' => false,'placeholder' => 'Search by location/Area')); ?>
              <span style="" class="dropdown_txt1"></span> <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span>
            </div>
        </form>

        <form id="searchbytitle2" >
            <div class="form-group"> <span class="twitter-typeahead" style="position: relative; display: inline-block;">
              <input class="tt-hint dropdown_hint" type="text" autocomplete="off" spellcheck="off" disabled style="">
               <?php echo $this->Form->input('eventTitle2', array('id' => 'eTitleAutocomplete2', 'required','class' => 'form-control tt-query dropdown_input','label' => false,'placeholder' => 'Search by event title')); ?>
              <span style="" class="dropdown_txt1"></span> 
              <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span>
              </span>
            </div>
        </form>

        <a href="javascript:;" class="filterDate list-group-item" data="today">Today's Events</a>
        <a href="javascript:;" class="filterDate list-group-item" data="tomorrow">Tomorrow's Events</a>
        <a href="javascript:;" class="filterDate list-group-item" data="weekend">This Weekend Events</a>
        <a href="javascript:;" class="filterDate list-group-item" data="month">This Month Events</a>
        <br/>
        <p class="text-primary">Specific Date Events</p>
        <div id="mobreportrange"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i> <span></span>
        <b class="caret"></b>
        </div>
      </div>
      <div class="modal-footer">
        <div class="btn-group pull-right btn-group-sm" role="group">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default mob-clear-filter">Clear</button>
          <button type="button" class="btn btn-primary mob-apply-filter">Apply</button>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal modal-mob-menus fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body"> 
          <ul class="list-group">
            <li class="list-group-item"><a href="<?php echo $this->Url->build(array('controller' => 'events', 'action' => 'add'));?>" >Create Event</a></li>
            <li class="list-group-item"><a href="<?php echo $this->Url->build(array('controller' => 'events'));?>#past-events" >Past Event</a></li>
            <li class="list-group-item"><a href="<?php echo $this->Url->build(array('controller' => 'UserProfile', 'action' => 'add'));?>" >My Profile</a></li>
          </ul>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
      <script type="text/javascript">
  function copyTextValue(subcat) {
      var text1 = document.getElementById("sub11");
                if(subcat.checked)
                {
                  var text1 = document.getElementById("sub11").value;
                  document.getElementById('Name2').value = document.getElementById("sub11").innerText;
                }
                else
                document.getElementById('Name2').value ='';

                //document.getElementById('Name2').value = document.getElementById("sub11").innerText;
                }
        </script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function smalldrop() { 
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function largedrop() {
    document.getElementById("mylargeDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script> -->
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCx2hb4R1uhaMbmlUAu1_lFasvl3gVHtnw"></script>

<?php  echo $this->Html->script(['general','moment.min', 'daterangepicker', 'bootstrap-tagsinput', 'readmore.min', 'jquery.slimscroll.min','jquery.validate.min', 'additional-methods', 'mobile-filters', 'custom','jquery.cropit']);?> 


<script type="text/javascript">
  function hide(eventid, userid) {
        $.ajax({
            type: "POST",
            data: {
                "eventid": eventid,
                "userid": userid
            },
            ContentType: 'application/json',
            dataType: 'json',
            url: "<?php echo $this->Url->build(['action' =>'likes']); ?>",
            async: true,
            success: function(data) {
                document.getElementById(eventid).textContent = data; 
            },
            error: function(tab) {
                //$select.html('<option id="-1">none available</option>');
            }
        });
        return false;
    }

    function autoHeight() {
            $('.content').css('min-height', 0);
            $('.content').css('min-height', ($(document).height() - $('#header').height() - $('.footer').height()));
        }
        // onDocumentReady function bind
    $(document).ready(function() {
        autoHeight();
        
        if ($(window).width() > 767) { 
          $('.search-nav .bootstrap-tagsinput').slimScroll({
              axis: 'x',
              height: '42px',
              size: '7px',
              position: 'left',
              color: '#286090',
              allowPageScroll: false
          });
        } 
    });
    // onResize bind of the function
    $(window).resize(function() {
        autoHeight();
    });

</script>
</body>
</html>