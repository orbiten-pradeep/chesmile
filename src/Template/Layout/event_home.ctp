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
.navbar-right{
  display: none;
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

.list-group .checkbox label:hover{
  color: #337AB7 !important;
}
</style>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<title>Chennai Smile</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<?php echo $this->Html->css(['style', 'custom', 'checkbox', 'daterangepicker', 'bootstrap-tagsinput']); ?>
</head>
<body>
<nav class="navbar navbar-default">
  <input type="hidden" id="sub_category_api_url" name="sub_category_api_url" value="<?php echo $this->Url->build(['action' =>'viewresult']);?>">
  <input type="hidden" id="event_list_url" name="event_list_url" value="<?php echo $this->Url->build(['action' =>'eventlist']);?>">
  <input type="hidden" id="event_view_url" name="event_view_url" value="<?php echo $this->Url->build(['action' =>'view']);?>">
  <input type="hidden" id="filterDateVal" name="filterDateVal" value="">
    <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <?php echo $this->Html->image('logo.png',array('alt' => 'Logo Chennai Smile','class' => 'img-responsive logores')); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  <div  class="collapse navbar-collapse col-md-offset-3" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav search-nav">
        <li class="dropdown category_btn">
            <label>Category</label>
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
          <div class="dropdown">
          <img onclick="smalldrop()" class="dropbtn" src="img/profile_thumbnail.jpg">
                <div id="myDropdown" class="dropdown-content">
               <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')).'My Account', array('controller' => 'UserProfile', 'action' => 'add'), array('escape' => false)) ?>

                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-calendar-o fa-fw')).'My Events', array('controller' => 'Events', 'action' => 'myevents'), array('escape' => false)) ?>

                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-thumbs-up fa-fw')).'Liked Events', array('controller' => 'Events', 'action' => 'likedevents'), array('escape' => false)) ?>
                </div>
            </div>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="dropdown" style="margin-right: 15px;">
         <img onclick="largedrop()" class="dropbtn" src="img/profile_thumbnail.jpg">
                <div id="mylargeDropdown" class="dropdown-content">
                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')).'My Account', array('controller' => 'UserProfile', 'action' => 'add'), array('escape' => false)) ?>

                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-calendar-o fa-fw')).'My Events', array('controller' => 'Events', 'action' => 'myevents'), array('escape' => false)) ?>

                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-thumbs-up fa-fw')).'Liked Events', array('controller' => 'Events', 'action' => 'likedevents'), array('escape' => false)) ?>
              <!--  <a href="profile.html"><i class="fa fa-user fa-fw"></i>My Account</a> -->
              <!--  <?= $this->Html->link(__('My Events'), ['controller' => 'Events', 'action' => 'myevents']) ?> -->
               <!-- <a href="order-history.php"><i class="fa fa-calendar-o fa-fw"></i>My Events</a> -->
               <!-- <?= $this->Html->link(__('Liked Events'), ['controller' => 'Events', 'action' => 'likedevents']) ?> -->
               <!--  <a href="order-history.php"><i class="fa fa-thumbs-up fa-fw"></i>Liked Events</a> -->
                </div>
            </div>
  
<li> <?= $this->Html->link(__("View past events"), ['controller' => 'events','action' => 'index', '?' => ['query' => 'Past']], array('class' => 'btn btn-primary'))?> </li>
    <li><?= $this->Html->link(__('Create events'), ['controller' => 'events', 'action' => 'add'], array('class' => 'btn btn-primary')); ?></li>
      </ul>

 
    <div class="category_dropdown list-group">
      <div class="row">
        <?php foreach ($categories as $key => $category): ?>
          <?php //echo "<pre>";print_r($category); echo "</pre>";?>
          <?php $i=0; if(($i%5)==0) {echo '<div class="col-md-4">';} ?>           
              <div class="checkbox" data-id="<?php echo $category->id; ?>" data-text="<?php echo $category->name; ?>">
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
     <div class="container-fluid">
        <div class="row btn-hide">
    <?= $this->Html->link(__("View past events"), ['controller' => 'events','action' => 'index', '?' => ['query' => 'Past']], array('class' => 'btn btn-primary'))?> 
    <?= $this->Html->link(__('Create events'), ['controller' => 'events', 'action' => 'add'], array('class' => 'btn btn-primary pull-right')); ?>
        </div>
      </div>
        
         <?= $this->fetch('content') ?>
           

           <div align="center" class="footer" style="font-size: 11px;">
   
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" "></script>

<?php  echo $this->Html->script(['general','moment.min', 'daterangepicker', 'bootstrap-tagsinput', 'custom']);?> 

</body>

</html>
        
























