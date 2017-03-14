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
ul.social li a {display:inline-block; margi:0 auto; -moz-border-radius:50%; -webkit-border-radius:50%; border-radius:50%; text-align:center; width: 30px; height: 30px; font-size:15px; position:relative;}
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

</style>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<title>Chennai Smile</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" "></script>

<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<?php echo $this->Html->css(['style', 'custom', 'checkbox', 'daterangepicker']); ?>
</head>
<body>
<nav class="navbar navbar-default">
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
     <ul class="nav navbar-nav">
        <li class="dropdown category_btn">
          Category 
            <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </div>
      
         
        </li>
        <li>
         <form class="navbar-form navbar-left">
          <div class="form-group">
            <input id="Name2" type="text" class="form-control" placeholder="Search for events, parties, concerts and more">           
          </div>
          <button type="submit" class="btn btn-primary btn-go">GO</button>
        </form>
        </li>
        <li class="mobhide">
          <div class="dropdown">
          <img onclick="smalldrop()" class="dropbtn" src="/chesmile/img/profile_thumbnail.jpg">
                <div id="myDropdown" class="dropdown-content">
               <a href="profile.html"><i class="fa fa-user fa-fw"></i>My Account</a>
               <a href="order-history.php"><i class="fa fa-calendar-o fa-fw"></i>My Events</a>
                <a href="order-history.php"><i class="fa fa-thumbs-up fa-fw"></i>Liked Events</a>
                </div>
            </div>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="dropdown" style="margin-right: 60px;">
         <img onclick="largedrop()" class="dropbtn" src="/chesmile/img/profile_thumbnail.jpg">
                <div id="mylargeDropdown" class="dropdown-content">
               <a href="profile.html"><i class="fa fa-user fa-fw"></i>My Account</a>
               <a href="order-history.php"><i class="fa fa-calendar-o fa-fw"></i>My Events</a>
                <a href="order-history.php"><i class="fa fa-thumbs-up fa-fw"></i>Liked Events</a>
                </div>
            </div>
  
<li> <?= $this->Html->link(__("View past events"), ['controller' => 'events','action' => 'index', '?' => ['query' => 'Past']], array('class' => 'btn btn-primary'))?> </li>
    <li><?= $this->Html->link(__('Create events'), ['controller' => 'events', 'action' => 'add'], array('class' => 'btn btn-primary')); ?></li>
      </ul>

 
<div class="category_dropdown list-group">
    <div class="row">
    <?php foreach ($categories as $key => $category): ?>
      <?php $i=0; if(($i%5)==0) {echo '<div class="col-md-4">';} ?>
       
            
            <div class="checkbox">
             <label>
             <input type="checkbox" value="" class="category1">
              <?php echo $category->name; ?>
              </label>
            </div>  
            <?php if($i!= 0) 
                { echo "<br>";} 
              $i++; 
              ?>
         </div>
<?php endforeach; ?>
        
        
    </div>
</div>

    <div class="sub_category1 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label id="sub11">
                        <input  type="checkbox" class="category" onchange="copyTextValue(this);"/>
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Architecture</label>
        </div> 
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Art and Photography</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Calligraphy</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Clay and Pottery</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Handcrafts</label>
        </div>
        </div>

        <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Literary Arts</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Origami</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Painting</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Photography</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Poetry</label>
        </div>  
        </div>

        <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Sculpture</label>
        </div>
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Workshops</label>
        </div>
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>
        </div>


    </div>
        
        
    </div>

    <div class="sub_category2 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Drama</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Mime Show</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Standup comedy shows</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>
        </div> 


    </div>
    </div>

    <div class="sub_category3 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Belly Dance</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Classical</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Dance Classes</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Folk</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Traditional</label>
        </div>
        </div>

          <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Tribal</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Western</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Zumba</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>
        </div>  


    </div>
    </div>


    <div class="sub_category4 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Classical/ Carnatic</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Concerts</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Ghazals</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Instrumental</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Latin Festival</label>
        </div>
        </div>

          <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Music Classes</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Music Festival</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Sacred Music</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Trance</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Vocal, Carnatic, and Keyboard</label>
        </div>

        </div>  

           <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Western</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>
        
        </div>  


    </div>
    </div>

    <div class="sub_category5 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Children's Day</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Environmental Day</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Fathers Day</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Friendship Day</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Health Day</label>
        </div>
        </div>

          <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Independence Day</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            International Yoga Day</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            May Day</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Mothers Day</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Republic Day</label>
        </div>

        </div>  

           <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Teachers Day</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Valentines Day</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Woman's Day</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>
        
        
        </div>  


    </div>
    </div>

    <div class="sub_category6 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Christmas</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Diwali</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Dussehra/Navaratri</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Holi</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            New Year</label>
        </div>
        </div>

          <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Onam</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Pongal</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Ramzan</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>

        </div>   


    </div>
    </div>

    <div class="sub_category7 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Agriculture</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Automobiles</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Conferences and Expo</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Corporate Fest</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Electrical and Electronics</label>
        </div>
        </div>

          <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Entrepreneurship</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Fabrics/ Textiles</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Food & Beverage</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Investors Meet</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Job Fair</label>
        </div>

        </div>   

        <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Medical</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Metal, Metallurgy, and Machinery</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Pharmaceuticals, Healthcare</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Real-estate</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Seminars</label>
        </div>

        </div> 

         <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Start Up meets</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Technology Events</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Trading</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Training/ Workshops</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>

        </div> 


    </div>
    </div>

    <div class="sub_category8 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Boot Camps</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           College Fest</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Education Fair</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Management</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Seminars and Conferences</label>
        </div>
        </div>

          <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Technical Symposiums</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Technology</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Training</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Workshops</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>

        </div>   

      </div>
    </div>

    <div class="sub_category9 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Holidays</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Rafting</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Theme Parks</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Treks</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Wild Life</label>
        </div>
        </div>

          <div class="col-md-3">
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>

      </div>
    </div>

    <div class="sub_category10 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Acting</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Dance</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Singing</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>

      </div>
    </div>

     <div class="sub_category11 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Art and Attire</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Auto Expo</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Book Fair</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Consumer show</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Decor Home Fair</label>
        </div>
        </div>

         <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Electronics</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Exhibition and Sales</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Food Expo</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Furniture</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Garments</label>
        </div>
        </div>

        <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Handloom and Handicrafts</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Home appliances </label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Interior and Architecture</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           International Expo</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Jewellery & Accessories</label>
        </div>
        </div>

        <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Job Fair</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Property Expo </label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Robotics</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Wedding Event</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>

      </div>
    </div>

    <div class="sub_category12 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Cooking</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Dance</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Debate</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Drawing</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Fashion</label>
        </div>
        </div>

         <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Painting</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Photography</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Quiz</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Rangoli (Kolam)</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Singing</label>
        </div>
        </div>

        <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div>  
        </div>

      </div>
    </div>

    <div class="sub_category13 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Cause</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>

      </div>
    </div>

    <div class="sub_category14 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Aerobics</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Awareness Programs</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Blood Camps</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Fitness</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Kidathon</label>
        </div>
        </div>

         <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Marathon</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Medical Events</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Meditation</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Walkathon</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Yoga</label>
        </div>
        </div>

        <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Zumba</label>
        </div>  
        <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Others</label>
        </div> 
        </div>

      </div>
    </div>

    <div class="sub_category15 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Badminton</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Basketball</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Cricket</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Cycling</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Football</label>
        </div>
        </div>

         <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Indoor</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Kidathon</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Marathon</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Outdoor</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Running</label>
        </div>
        </div>

        <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Skating</label>
        </div>  
        <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Tennis</label>
        </div> 
        <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Walkathon</label>
        </div> 
        </div>

      </div>
    </div>

    <div class="sub_category16 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Attire</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Beauty and Wellness</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Cosmetics</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Fashion</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Hand Embroidery</label>
        </div>
        </div>

         <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Jewellery</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>
        
      </div>
    </div>

    <div class="sub_category17 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Bakes and Cakes</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Cooking Classes</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Culinary and Cuisine</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Desserts</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Drinks Fest</label>
        </div>
        </div>

         <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Food Fests</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Food walk</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Street Food</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>
        
      </div>
    </div>

    <div class="sub_category18 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Bike Stunt</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Cycling Rally</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Go-Kart</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Stunt Shows</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>
        
      </div>
    </div>

    <div class="sub_category20 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Audio launches</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Circus</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Creativity workshops</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Film Fests</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Games</label>
        </div>
        </div>

        <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Inaugural Launch</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Magic Shows</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Puppet Show</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Ramp Walk</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>
        
      </div>
    </div>

    <div class="sub_category21 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Arts and Crafts</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Awareness Programs</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Dance </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Drawing</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Kidathon</label>
        </div>
        </div>

        <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Painting</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Singing</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Summer Camps</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Tiny Tots</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Winter Camps</label>
        </div>
        </div>

        <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Writing</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>
        
      </div>
    </div>

    <div class="sub_category22 list-group sub">
        <div class="row">
            <div class="col-md-3">
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            DJ Nights</label>
        </div>  
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Drinks</label>
        </div>
        
        <div class="checkbox">
         <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
        Night Life Events </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Pubs</label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="" class="category">
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Others</label>
        </div>
        </div>
        
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
      <ul class="social" style="color:#ffffff;">
                <li>About Us</li>
                <li>Terms of Services</li>
                <li>Privacy Policy</li>                
                <li>Partner With Us</li>                
                <li>Career</li>                
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

<?php  echo $this->Html->script(['general','moment.min', 'daterangepicker', 'custom']);?> 

</body>

</html>
        
























