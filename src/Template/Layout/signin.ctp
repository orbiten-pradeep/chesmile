<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  
  /* .forgotpass { display: none;}*/

   /* Smartphone Portrait and Landscape */

   @media only screen

   and (min-device-width : 320px)

   and (max-device-width : 480px){ .forgotpass { display: inline;}
}
  @media only screen

   and (min-device-width : 320px)

   and (max-device-width : 480px){ .forghide { display: none;}
}
@media only screen and (min-width: 768px)
and (max-width: 800px){
/*  .cs-signup-button {
    padding: 13px 25px 13px !important;
}
.btn-lg{
  font-size: 14px !important;
  }*/
  .sizelog{
  width: 275px !important;
}
}
    .social{

        padding: 0 !important;

    }

    .social-network{

        padding: 0 !important;

    }
/*@media  only screen and (max-width: 360px) {

  .cs-signup-button {
    padding: 11px 25px 11px !important;
}
.btn-lg{
  font-size: 11px !important;
  }
p{
    font-size: 9px !important;
}


}
@media  only screen and (min-width: 1680px) {
  .cs-signup-wrapper{
    max-width: 20% !important;
    margin-left: 245px !important;
  }
  }*/

/*#footer{
  position:absolute;
   bottom:0;
   width:100%;
   height:120px;   
}*/
/*.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
 
  height: 120px;
  background-color: #f5f5f5;
}*/
/* footer social icons */
/*ul.social-network {
  list-style: none;
  display: inline;
  margin-left:0 !important;
  padding: 0;
}
ul.social-network li {
  display: inline;
  margin: 0 5px;
}*/


/* footer social icons */

/*.social-network a.icoFacebook:hover {
  background-color:#3B5998;
}
.social-network a.icoTwitter:hover {
  background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
  background-color:#BD3518;
}
.social-network a.icoInstagram:hover {
 background: #f09433;
 background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
 background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
 background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
 color: white;
}
.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoInstagram:hover i {
  color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
  color:#44BCDD;
}

.social-circle li a {
  display:inline-block;
  position:relative;
  margin:0 auto 0 auto;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
  border-radius:50%;
  text-align:center;
  width: 50px;
  height: 50px;
  font-size:15px;
}
.social-circle li i {
  margin:0;
  line-height:50px;
  text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}
.social-circle i {
  color: #fff;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}*/
.navbar-brand {
    float: left;
        padding-top: 5px !important;
        padding-right: 15px;
        padding-bottom: 5px !important;
        padding-left: 15px;
    font-size: 18px;
    line-height: 20px;
}

.login-bg{
  background-image: url('<?=$this->Url->image('cs-homepage-BG.jpg')?>');
  background-size: cover;
}

@media screen and (max-width: 700px){
  .login-bg{
  background-image: url('<?=$this->Url->image('mobile-bg.png')?>');
  background-size: cover;
}

}

</style>


<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
 <?php echo $this->Html->script(['jquery']); ?>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php echo $this->Html->css(['bootstrap.min', 'loginstyle', 'font-awesome']); ?>
<?php echo $this->Html->script(['jquery.validate.min']); ?>
</head>
<body class="login-bg">

 <?= $this->fetch('content') ?>
 <?php echo $this->Flash->render(); ?>
<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  &nbsp;<br>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  &nbsp;<br>
  
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  &nbsp;<br>
  
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  &nbsp;<br>
  
  </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  &nbsp;<br>
  
  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  &nbsp;<br>
  
  </div> -->
<!--     <div class="container-fluid">
  <div class="row">
  &nbsp;
  </div>
  </div>
    <div class="container-fluid">
  <div class="row">
  &nbsp;
  </div>
  </div>
    <div class="container-fluid">
  <div class="row">
  &nbsp;
  </div>
  </div>
    <div class="container-fluid">
  <div class="row">
  &nbsp;
  </div>
  </div>
    <div class="container-fluid">
  <div class="row">
  &nbsp;
  </div>
  </div>
    <div class="container-fluid">
  <div class="row">
  &nbsp;
  </div>
  </div>
    <div class="container-fluid">
  <div class="row">
  &nbsp;
  </div>
  </div>
    <div class="container-fluid">
  <div class="row">
  &nbsp;
  </div>
  </div> -->

  

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

  
  
<!--          <footer class="footer" style="background-color: #4abac5;">
     <div class="container-fluid" >
        <div class="row">
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-7 col-sm-offset-2 col-lg-offset-2 text-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>       
          </div>


         <div class="col-xs-9 col-sm-9 col-md-9 col-lg-7 col-sm-offset-2 col-lg-offset-4 text-center">

           
              <ul class="nav navbar-nav">
                <li><a href="#" style="background-color: transparent; color: white; font-size: 11px;">AboutUs</a></li>
                <li><a href="#" style="background-color: transparent; color:white; font-size: 11px; ">Terms of Services</a></li>
                <li><a href="#" style="background-color: transparent; color:white; font-size: 11px;">Privacy Policy</a></li>
                <li><a href="#" style="background-color: transparent; color:white; font-size: 11px;">Help&support </a></li>
                <li><a href="#" style="background-color: transparent; color:white; font-size: 11px;">Events</a></li>
                <li><a href="#" style="background-color: transparent; color:white; font-size: 11px;">Career</a></li>
                <li><a href="#" style="background-color: transparent; color:white; font-size: 11px;">Blog</a></li>
              </ul>

          </div>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9 col-lg-7 col-sm-offset-2 col-lg-offset-2 text-center" style="font-size: 11px; color:#f7f7f7;">
           <p class="text-center" >Copyright © 2016 ChennaiSmile</p>
           </div>
        </div>
    
  </footer> -->
	
  
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>
	<script>
		$( "#carnival" ).mouseover(function() {
			var myPolygon = d3.select(document.getElementById('my-polygon'))
    myPolygon
	  .transition()
      .duration(1500)
      .ease("elastic")
      .attr('fill','green')
      .attr('points','70,35 100,40 100,30')
	});
	
	$( "#carnival" ).mouseout(function() {
			var myPolygon = d3.select(document.getElementById('my-polygon'))
	myPolygon
	  .transition()
      .duration(1500)
      .ease("elastic")
      .attr('fill','green')
      .attr('points','130,35 100,40 100,30')
	
  });

  </script> -->



<!-- 
 /*
function magic() {
    document.getElementById("animdiv").style.width = "600px";
	document.getElementById("animdiv").style.height = "250px";
	document.getElementById("animdiv").style.margin = "-10px -100px";
	document.getElementById("contents1").style.visibility = "hidden";
	document.getElementById("contents2").style.opacity= "1";
	document.getElementById("contents2").style.transitionDelay= "1s";
}
function magic1() {
	document.getElementById("contents2").style.opacity= "0";
	document.getElementById("contents2").style.transitionDelay= "0s";
	document.getElementById("contents2").style.transitionDuration= "0.1s";
    document.getElementById("animdiv").style.width = "400px";
	document.getElementById("animdiv").style.height = "450px";
	document.getElementById("animdiv").style.margin = "0";
	document.getElementById("contents1").style.visibility = "visible";


}
*/ -->






</body>
</html>































