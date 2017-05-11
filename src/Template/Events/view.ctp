<?php 
use Cake\Routing\Router;
use Cake\I18n\Time;
?>


<?php
$bgImage = $event->banner;
if(!empty($bgImage)){
    $bgCoverImg = $this->Url->image('banner/'.$bgImage);
}
else {
    $bgCoverImg = $this->Url->image('cover_pic.jpg');
}
?>

<!-- <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=58fdbf6acaaba30012e7e564&product=sticky-share-buttons' async='async'></script> -->
<style type="text/css">
    .icon{
        height: 120px; 
        width: 45px;
    }

    #lightbox .modal-content {
    display: inline-block;
    text-align: center;   
}
/*.modal-open body{
    padding-right: 0 !important;
}
*/
.modal{
    overflow-y: auto;
}
.modal-open{
    overflow: auto;
}
body{
    width: 100% !important;
}
#lightbox .close {
    opacity: 1;
    color: rgb(255, 255, 255);
    background-color: rgb(25, 25, 25);
    padding: 5px 8px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    position: absolute;
    top: -15px;
    right: -55px;
    z-index:1032;
}
a {
    color:white;
}
.img-overlay{
    border: 1px solid #e6e9ed;
    background-color: #fafafa;
    filter: grayscale(1);
    -webkit-filter: grayscale(1);
    -moz-filter: grayscale(1);
    -o-filter: grayscale(1);
    -ms-filter: grayscale(1);
    padding:30px;
}

.img-overlay:hover{
    filter: grayscale(0);
    -webkit-filter: grayscale(0);
    -moz-filter: grayscale(0);
    -o-filter: grayscale(0);
    -ms-filter: grayscale(0);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    opacity: 0.7;
    padding:30px;
}
.address-info p {
    font-size: 13px;
    margin-bottom: 5px;
}
.address-info {
    margin: 10px 10px 15px 10px !important;
}
address {
    margin-bottom: 0 !important;
}
.glyphicon-calendar{
    font-size: 21px !important;
}

.glyphicon-time{
    font-size: 21px !important;
}

.date-txt{
   /* font-size:25px;*/
}
.date{
    font-weight: normal;
}
.time-txt{
   /* font-size:25px;*/
}

    .float-label-control { position: relative; margin-bottom: 1.5em; }
    /*.float-label-control ::-webkit-input-placeholder { color: transparent; }
    .float-label-control :-moz-placeholder { color: transparent; }
    .float-label-control ::-moz-placeholder { color: transparent; }
    .float-label-control :-ms-input-placeholder { color: transparent; }*/
    .float-label-control input:-webkit-autofill,
    .float-label-control textarea:-webkit-autofill { background-color: transparent !important; -webkit-box-shadow: 0 0 0 1000px white inset !important; -moz-box-shadow: 0 0 0 1000px white inset !important; box-shadow: 0 0 0 1000px white inset !important; }
    .float-label-control input, .float-label-control textarea, .float-label-control label { font-size: 1.2em; box-shadow: none; -webkit-box-shadow: none; }
        .float-label-control input:focus,
        .float-label-control textarea:focus { box-shadow: none; -webkit-box-shadow: none; border-bottom-width: 2px; padding-bottom: 0; background: none; }
        .float-label-control textarea:focus { padding-bottom: 4px; }
    .float-label-control input, .float-label-control textarea { display: block; width: 100%; padding: 0.1em 0em 1px 0em; border: none; border-radius: 0px; border-bottom: 1px solid #aaa; outline: none; margin: 0px; background: none;font-size: 14px; }
    .float-label-control textarea { padding: 0.1em 0em 5px 0em; }
    .float-label-control label { position: absolute; font-weight: normal; top: -1.0em; left: 0.08em; color: #aaaaaa; z-index: -1; font-size: 0.85em; -moz-animation: float-labels 300ms none ease-out; -webkit-animation: float-labels 300ms none ease-out; -o-animation: float-labels 300ms none ease-out; -ms-animation: float-labels 300ms none ease-out; -khtml-animation: float-labels 300ms none ease-out; animation: float-labels 300ms none ease-out; /* There is a bug sometimes pausing the animation. This avoids that.*/ animation-play-state: running !important; -webkit-animation-play-state: running !important; }
    .float-label-control input.empty + label,
    .float-label-control textarea.empty + label { top: 0.1em; font-size: 1.5em; animation: none; -webkit-animation: none; }
    .float-label-control input:not(.empty) + label,
    .float-label-control textarea:not(.empty) + label { z-index: 1; }
    .float-label-control input:not(.empty):focus + label,
    .float-label-control textarea:not(.empty):focus + label { color: #aaaaaa; }
    .float-label-control.label-bottom label { -moz-animation: float-labels-bottom 300ms none ease-out; -webkit-animation: float-labels-bottom 300ms none ease-out; -o-animation: float-labels-bottom 300ms none ease-out; -ms-animation: float-labels-bottom 300ms none ease-out; -khtml-animation: float-labels-bottom 300ms none ease-out; animation: float-labels-bottom 300ms none ease-out; }
    .float-label-control.label-bottom input:not(.empty) + label,
    .float-label-control.label-bottom textarea:not(.empty) + label { top: 3em; }


@keyframes float-labels {
    0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: -1em; opacity: 1; }
}

@-webkit-keyframes float-labels {
    0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: -1em; opacity: 1; }
}

@keyframes float-labels-bottom {
    0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: 3em; opacity: 1; }
}

@-webkit-keyframes float-labels-bottom {
    0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: 3em; opacity: 1; }
}

.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 30px auto 25px;
    margin-top: 0px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    /*-moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);*/
    height: auto;
}

@media only screen and (max-width:1280px){
    .cover-pic {
    /*height: 38% !important;*/
    background: url('../img/cover_pic.jpg') center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    position: relative;
}

}
.btn-tag{
    background: linear-gradient(to top, rgba(0, 0, 0, 0.55) 50%, rgba(0, 0, 0, 0.63) 50%) !important;
    border-color: #e2e2e2 !important;
}

.marg-card{
    margin-top: -20px !important;
}
.user-pic{
    background: rgba(0, 0, 0, 0) url(<?=$bgCoverImg?>) no-repeat scroll center center / cover;
}

@media screen and (max-width: 400px){
.view-btn{
    float: left !important;
}
}

.btn-reg{
    margin-top: 35px;
    
}
.heigh{
    height: 35px !important;
}
</style>



<div class="cover-picdiv">
<div class="cover-pic img-responsive user-pic">
        <div class="container-fluid heading_txt" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.63) 50%);position: absolute;bottom: 0;z-index: 1;width: 100%;box-sizing: border-box;">
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-tag"><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></button> <?php echo $this->Html->image('card/'.$event->category->card, array('width' => '65px', 'height' => '65px', 'class' => 'marg-card' ,'alt'=>'Card')); ?>
                    <h1 class="tagline" style="color: #FFFFFF"><?= h($event->title) ?></h1>
                </div>
            </div>
        </div>

</div>
</div>

<div class="cover-detail">
    <div class="container-fluid">
        <?php
        $organizerLogoImage = $event->OrganizersLogo;
        if(!empty($organizerLogoImage)){
            $organizerLogoImageUrl = $this->Url->image('OrganizersLogo/'.$organizerLogoImage);
        }
        else {
            $organizerLogoImageUrl = $this->Url->image('profile.png');
        }
        ?>

        <div class="row">
            <div class="col-md-8 col-sm-8 lft_container event-details">
                <h2><img src="<?=$organizerLogoImageUrl?>" class="img-thumbnail profile-img organizer-logo"><?= h($event->OrganizersName) ?></h2>
                <div id="eventDescription" style="height:100px; overflow: hidden;"><?=  $this->Text->autoParagraph(h($event->descriptioin));?></div>
                <p class="margin25" style="font-size: 20px;"><!-- <span class="glyphicon glyphicon-calendar calender_txt" aria-hidden="true"></span> -->
                <?php echo $this->Html->image('cal.png')?><span style="margin-left: 7px;"><?= date_format($event->date, "j-M-Y") ?></span></p>
                <p style="font-size: 20px;">
                    <!-- <span class="glyphicon glyphicon-time" aria-hidden="true"></span> --><?php echo $this->Html->image('final.png')?><span style="margin-left: 5px;"><?= h($event->time)." AM"; ?></span>
                </p>
                <div class="btn-reg">
                <button class="btn btn-primary" style="float: right; background-color: #4ABAC5;border-color: #e2e2e2;" data-toggle="modal" href="#Register-modal">Register Online</button>
            <button class="btn btn-primary view-btn" style="float: right;margin-right: 10px;background-color: #4ABAC5;border-color: #e2e2e2;" data-toggle="modal" href="#view-more">View more</button>
             </div>
          
            </div>
            <?php
            //echo $event->google_map; exit;
            $geoCode = (!empty($event->google_map)) ? $event->google_map : '13.0595365,80.24247919999993';

            ?>
            <div class="col-md-4 col-sm-4 text-center rgt_container">
                <address>
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:330px;width:100%;'><div id='gmap_canvas' style='height:330px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https:/disclaimergenerator.net">disclaimer example</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(<?=$geoCode;?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?=$geoCode;?>)});}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </address>
                <address class="address-info">
                    <p class="text-center"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></p>
                    <p>
                        <?php echo empty(!$address->address_1) ? $address->address_1. ", " : ''; ?>
                        <?php echo empty(!$address->address_2) ? $address->address_2. ", " : ''; ?>
                        <?php echo empty(!$address->landmark) ? $address->landmark. ", " : ''; ?>
                        <?php echo empty(!$address->areaname) ? $address->areaname : ''; ?>
                    </p>
                    <p><?php echo $address->city; ?></p>
                    <p><?php echo h($event->contact_number).", ".h($event->mobile_number) ?></p> 
                </address>
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->

    </div>

</div>

                            <div class="event-detail">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-8 lft_container">
                                                
                                                    <!-- Client 1 -->
                                                    <?php
                                                    // code for show the sponsers 
                                                    $ival = 0;
                                                    foreach ($sponsors as $sponsor) {
                                                        $ival++;
                                                    }
                                                    if($ival==1){
                                                        foreach ($sponsors as $sponsor) {
                                                            if(strpos($sponsor->Sponsors,'jpg') !== false || strpos($sponsor->Sponsors,'png') !== false){
                                                                $ival=1;
                                                                // image available
                                                            }else{
                                                                $ival=0;
                                                                //image not available
                                                            }
                                                        }
                                                    }
                                                    $count_sponser = $ival;
                                                    if($count_sponser > 0){
                                                       echo '<h3 class="heading margin25">Sponsors<span></span></h3>';
                                                        foreach ($sponsors as $sponsor) {
                                                            echo '<div class="col-sm-6 col-xs-12 col-md-3 col-lg-3" style="visibility: visible;width: 270px; margin-bottom: 10px;"><a href="#">';
                                                            echo $this->Html->image("Sponsors/".$sponsor->Sponsors, array("alt"=>"Sponsors","class" =>"img-overlay","height" => "152px", "width" => "250px"));
                                                            echo '</a></div>';
                                                        }
                                                    }
                                                    ?>

                                                     <!-- <?php //foreach ($sponsors as $sponsor): ?>
                                                    <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3" style="visibility: visible;width: 270px; margin-bottom: 10px;">
                                                        <a href="#">
                                                        <?php //echo $this->Html->image('Sponsors/'.$sponsor->Sponsors, array('alt'=>'Sponsors','class' =>'img-overlay','height' => '150px', 'width' => '250px')); ?>
                                                    </a>
                                                    </div> -->
                                                    <?php //endforeach; ?> 
                                                    <div class="clearfix"></div>
                                                    <?php
                                                    $jval = 0;
                                                    foreach ($mediapartners as $mediapartner) {
                                                        $jval++;
                                                    }
                                                    if($jval==1){
                                                        foreach ($mediapartners as $mediapartner) {
                                                            if(strpos($mediapartner->MediaPartners,'jpg') !== false || strpos($mediapartner->MediaPartners,'png') !== false){
                                                                $jval=1;
                                                                // image available
                                                            }else{
                                                                $jval=0;
                                                                //image not available
                                                            }
                                                        }
                                                    }
                                                    $count_mepar = $jval;
                                                    if($count_mepar > 0){

                                                        echo '<h3 class="heading margin25">Media Partners<span></span></h3>';
                                                        foreach ($mediapartners as $mediapartner) {
                                                            echo '<div class="col-sm-6 col-xs-12 col-md-3" style="visibility: visible;width: 270px;margin-bottom: 10px;"><a href="#">'.$this->Html->image("Mediapartners/".$mediapartner->MediaPartners, array("alt"=>"Mediapartners","class" => "img-overlay","height" => "152px", "width" => "250px"));
                                                            echo '</a></div>';
                                                        }
                                                    }
                                                    ?>
                                                    
                                                    <!-- Client 1 -->
                                                    <!-- <?php //foreach ($mediapartners as $mediapartner): ?>
                                                    <div class="col-sm-6 col-xs-12 col-md-3" style="visibility: visible;width: 270px;margin-bottom: 10px;">
                                                        <a href="#">
                                                        <?php //echo $this->Html->image('Mediapartners/'.$mediapartner->MediaPartners, array('alt'=>'Mediapartners','class' => 'img-overlay','height' => '150px', 'width' => '250px')); ?>
                                                        </a>
                                                    </div>
                                                    <?php// endforeach; ?> -->
                                                    <!-- Client 2 -->

                                                    <div class="clearfix"></div>
                                                    <?php 
                                                    $today = date('n/j/y');
                                                    // echo "today".$today;
                                                    $eventdate = $event->date;
                                                    // echo "D-".$eventdate;

                                                    if($today >= $eventdate) {
                                                        $status = "available";
                                                    ?>
                                                    <div class="clearfix"></div>
                                                     <div style="display: '<?php if(empty($galaries)) { echo "none;";  } ?>'">
                                                     <h3 class="heading margin25">Event Galaries<span></span></h3>
                                                    <!-- Client 1 -->
                                                    <?php 
                                                    $i = 0;
                                                    foreach ($galaries as $galary):

                                                    $i++;
                                                    echo "ival"+$i; ?>
                                                    <div class="col-sm-6 col-xs-12 col-md-3" style="visibility: visible; ">
                                                        <a href="#">
                                                        <?php echo $this->Html->image('Galary/'.$galary->galary, array('alt'=>'Galary','class' => 'img-overlay','height' => '150px', 'width' => '250px')); ?>
                                                        </a>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <!-- Client 2 -->
                                                    <div class="clearfix"></div>
                                                    <h3 class="heading margin25">Thank You Note:<span></span></h3>
                                                    <p><?= $this->Text->autoParagraph(h($event->note));?></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                     <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="display: <?php if($event->note=="" && $status!="" && $u_id == $event->user_id ) { echo 'inline-block;'; }else{echo 'none;';} ?>">Open Modal</button>

                                                     <?php } ?>
                                                     <!-- Modal -->
                                                  <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
                                                    <div class="modal-dialog">
                                                    
                                                      <!-- Modal content-->
                                                      <div class="modal-content">
                                                        <div class="modal-body">
                                                              
                                                              <?= $this->Form->create('', array('enctype' => 'multipart/form-data', 'url' => ['controller' => 'Galaries', 'action' => 'add'])) ?>
                                                                <?=  $this->Form->hidden('events_id',array('div' => false, 'label' => false, 'class' => 'form-control form-element','default' => $event->id));?>
                                                              <div class="form-group">
                                                                <label>
                                                           <?= $this->Form->input('galary[]',['type' => 'file', 'multiple' => 'true','label' => 'Galary']);?>
                                                                </label>
                                                            </div>
                                                                
                                                                 <div class="form-group float-label-control">
                                                                       <label for="">Thank you note :</label>
                                                                      <?= $this->Form->input('note',array('div' => false, 'label' => false,'class' => 'form-control form-element','placeholder' => 'Thank you note','rows' => '1' ));?>
                                                                </div>
                                                            <?= $this->Form->button(__('Submit')) ?>
                                                            <?= $this->Form->end() ?>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>  

            <div class="col-sm-4 lft_container">
                        <div class="invite_email">
                              <div class="form-group">
                                <input type="email" class="form-control" id="invite" placeholder="Email address">
                              </div>
                              <div id="statusMsg"></div>
                              <button  onclick="sendemail(<?php echo $event->id; ?>);" class="btn btn-primary form-control">Invite Friends</button>
                        </div>                          
                    <div class="clearfix"></div>

                    <p class="text-primary"><b>Interested in this Event</b></p>
                    <small><span class="glyphicon glyphicon-thumbs-up"></span> <?= h($number) ?> People are interested</small>
                    
                    <!-- <div class="panel bs-example side_panel margin25"> 
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Twitter Updates</h3> 
                        </div> 
                        <div class="panel-body"> 
                             <div class="list-group">
                                <p>Tweet updates coming here</p>
                            </div>                  
                        </div> 
                    </div> -->

            </div>      
                    </div>

            </div>
    </div>   
 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
<?php if($u_id == $event->user_id){ ?>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <?php } ?>
        </ul>
</nav> 

          <div class="container">

          <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <div class="modal fade" id="Register-modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Register online</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12 col-lg-7">
                      <div class="card">
                      
                          <?= $this->Form->create('$marathon', array('url' => ['controller' => 'Marathon','action' => 'add'])) ?>
        
         
            <div class="form-group float-label-control">
             
             <label for="">Firstname</label>
             <?= $this->Form->input('firstname', array('div' => false, 'class' => 'form-control form-element text','label' => false,'placeholder' => 'Firstname', 'required' => true)) ?>
            </div>
       
            <div class="form-group float-label-control">
             
             <label for="">Lastname</label>
             <?= $this->Form->input('lastname', array('div' => false,'class' => 'form-control form-element text','label' => false,'placeholder' => 'Lastname', 'required' => true)) ?>
            </div>
    

        <div class="form-group">
                <label>
           <?= $this->Form->input('date', array('type' => 'text','class' => 'form-control date','placeholder' => 'Date of birth','label' => false));?>
           </label>
           <span id="person_type" style="color: #00FF00;"></span>
           </div>

       <div class="form-group">
            <?php $sex = ['Male' => 'Male', 'Female' => 'Female'];
             echo $this->Form->select('sex', $sex, array('empty' => '(Select Gender)', 'class' => 'form-control heigh'));?>
        </div>
            
            <div class="form-group float-label-control">
             
             <label for="">Email</label>
             <?= $this->Form->input('email', array('div' => false,'class' => 'form-control form-element text','label' => false,'placeholder' => 'Email address', 'required' => true)) ?>
            </div>
     

      
            <div class="form-group float-label-control">
             <label for="">Mobile number</label>
             <?= $this->Form->input('mobile_number', array('div' => false,'class' => 'form-control form-element text','label' => false,'placeholder' => 'Mobile number', 'required' => true)) ?>
            </div>
     
            <div class="form-group">
            <label> Distance </label>
         <?php $km = ['2 KM' => '2 KM', '5 KM' => '5 KM'];
           echo $this->Form->select('KM', $km, array('default' => '2 KM','class' => 'form-control heigh'));?>
           </div>

           <div class="form-group">
           <label> Select your tshirt size </label>
           <?php $tshirt = ['S' => 'S', 'M' => 'M', 'L' => 'L', 'XL' => 'XL', 'XXL' => 'XXL', 'XXXL' => 'XXXL'];
           echo $this->Form->select('TSHIRT', $tshirt, array('default' => 'S', 'class' => 'form-control heigh'));?>
           </div>

        <div class="">
          <div class="form-group text-center">
           <?= $this->Form->button(__('Submit'),array('class' => "btn btn-info btn-block")) ?>
    <?= $this->Form->end() ?>
          </div>
        </div>
  
    <?= $this->Form->end() ?>
                      </div>
                  </div>
                  <div class="col-xs-9 col-lg-5">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                          <li><a href="/read-more/"><u>Read more</u></a></li>
                      </ul>
                      <p><a href="/new-customer/" class="btn btn-info btn-block">Yes please, register now!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
            

  <!-- <div class="modal fade" id="Register-modal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content card">
        <div class="row">
              
            </div>
        <div class="modal-header" style="border-bottom: none;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register your Details.</h4>
        </div>
        <div class="modal-body">
          <?= $this->Form->create('', array('id' => 'forgotpassform', 'url' => ['action' => 'forgetpassword'])) ?>

           <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
            <div class="form-group float-label-control">
             
             <label for="">Firstname</label>
             <?= $this->Form->input('Firstname', array('div' => false,'id' => 'email', 'class' => 'form-control form-element text','label' => false,'placeholder' => 'Enter your firstname', 'required' => true)) ?>
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
            <div class="form-group float-label-control">
             
             <label for="">Lastname</label>
             <?= $this->Form->input('Lastname', array('div' => false,'id' => 'email', 'class' => 'form-control form-element text','label' => false,'placeholder' => 'Enter your lastname', 'required' => true)) ?>
            </div>
        </div>

        <div class="form-group">
                <label>
           <?= $this->Form->input('date', array('type' => 'text','class' => 'form-control date','placeholder' => 'Date','label' => false));?>
           </label>
           <span id="person_type" style="color: #00FF00;"></span>
           </div>

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">  
             <label>Sex</label>
             <ul>
              <li  style="list-style:none;">
                <input type="radio" name="custom_type" value="public" />
                Male
                <input type="radio" name="custom_type" 
                value="private" id="custom_venuetype_private" />
                Female
              </li>
            </ul>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
            <div class="form-group float-label-control">
             
             <label for="">Email</label>
             <?= $this->Form->input('Email', array('div' => false,'id' => 'email', 'class' => 'form-control form-element text','label' => false,'placeholder' => 'Enter your email address', 'required' => true)) ?>
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
            <div class="form-group float-label-control">
             <label for="">Mobile number</label>
             <?= $this->Form->input('Mobilenumber', array('div' => false,'id' => 'email', 'class' => 'form-control form-element text','label' => false,'placeholder' => 'Enter your mobile number', 'required' => true)) ?>
            </div>
        </div>

         <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10"> 
             <label>KMs</label>
             <ul>
              <li  style="list-style:none;">
                <input type="radio" name="custom_type" 
                value="private" id="custom_venuetype_private" checked="checked"/>
                2 KM
                 <input type="radio" name="custom_type" 
                value="private" id="custom_venuetype_private" />
                5 KM
              </li>
            </ul>
            </div>
      
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
        <label>Tshirt size</label>
            <div class="form-group float-label-control">
            
            <select>
              <option value="volvo">S</option>
              <option value="saab">M</option>
              <option value="opel">L</option>
              <option value="audi">XL</option>
              <option value="audi">XXL</option>
              <option value="audi">XXXL</option>
            </select>
            </div>
        </div>


        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
          <div class="form-group text-center">
          <?= $this->Form->submit(__('Register'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>

          </div>
        </div>
  
    <?= $this->Form->end() ?>

        </div>
        <div class="modal-footer" style="border-top: none;">
         
        </div> 
      </div>
      
    </div>
  </div> -->
  
</div>

       <div class="container">
  <!-- Trigger the modal with a button -->
 <!--  <button type="button" class="btn btn-info btn-lg" id="alertbox">Click here</button> -->

  <!-- Modal -->
  <div class="modal fade" id="view-more" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: none;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Event Description</h4>
        </div>
        <div class="modal-body">
          <?=  $this->Text->autoParagraph(h($event->descriptioin));?>

        </div>
        <div class="modal-footer" style="border-top: none;">
         <!--  <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button> -->
        </div>
      </div>
      
    </div>
  </div>
  
</div>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">


$(document).ready(function(){
    var event_id = '<?=$event->id;?>';
    if(event_id==123){
        if($(document).width() < 400){
            console.log("mobile");
            $(".cover-picdiv").css('height', '200px');
            // rgba(0, 0, 0, 0) url(/chesmile/img/banner/banner_mob_mar.png) no-repeat scroll center center / cover
            $(".user-pic").css('background', 'rgba(0, 0, 0, 0) url("../../../chesmile/img/banner/banner_mob_mar.png") no-repeat scroll center center / cover');
        }else if($(document).width()< 800){
            console.log("tab");
            $(".cover-picdiv").css('height', '300px');
            $(".user-pic").css('background', 'rgba(0, 0, 0, 0) url("../../../chesmile/img/banner/banner_tab_mar.png") no-repeat scroll center center / cover');
        }else{
            console.log("default");
            $(".cover-picdiv").css('height', '400px');
            $(".user-pic").css('background', 'rgba(0, 0, 0, 0) url("../../../chesmile/img/banner/banner_def_mar.png") no-repeat scroll center center / cover');        
        }
    }

});

// function autoHeight() {
//             $('.content').css('min-height', 0);
//             $('.content').css('min-height', ($(document).height() - $('#header').height() - $('.footer').height()));
//         }
$( function() {
        $('#date').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1950:2017',
            maxDate: '+60Y',
            minDate: new Date(1950, 10 - 1, 25),
            onSelect: function (dateText, inst) {
                var dob_year = dateText.split('/');
                var curyear = 2017;
                var year = curyear-dob_year[2];
                if(year<=14){
                    $("#person_type").text("Kids"+", Rs. 200");
                }else{
                    $("#person_type").text("Adults"+", Rs.300");
                }
                
            }

            });
      } );
    /* Float Label Pattern Plugin for Bootstrap 3.1.0 by Travis Wilson
**************************************************/
(function ($) {
    $.fn.floatLabels = function (options) {

        // Settings
        var self = this;
        var settings = $.extend({}, options);


        // Event Handlers
        function registerEventHandlers() {
            self.on('input keyup change', 'input, textarea', function () {
                actions.swapLabels(this);
            });
        }


        // Actions
        var actions = {
            initialize: function() {
                self.each(function () {
                    var $this = $(this);
                    var $label = $this.children('label');
                    var $field = $this.find('input,textarea').first();

                    if ($this.children().first().is('label')) {
                        $this.children().first().remove();
                        $this.append($label);
                    }

                    var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

                    $label.data('placeholder-text', placeholderText);
                    $label.data('original-text', $label.text());

                    if ($field.val() == '') {
                        $field.addClass('empty')
                    }
                });
            },
            swapLabels: function (field) {
                var $field = $(field);
                var $label = $(field).siblings('label').first();
                var isEmpty = Boolean($field.val());

                if (isEmpty) {
                    $field.removeClass('empty');
                    $label.text($label.data('original-text'));
                }
                else {
                    $field.addClass('empty');
                    $label.text($label.data('placeholder-text'));
                }
            }
        }


        // Initialization
        function init() {
            registerEventHandlers();

            actions.initialize();
            self.each(function () {
                actions.swapLabels($(this).find('input,textarea').first());
            });
        }
        init();


        return this;
    };

    $(function () {
        jQuery('.form-element').each(function(){
          if($(this).parent().hasClass('required')){
             jQuery('.form-element').unwrap();
          }
        });

        setTimeout(function(){
            $('.float-label-control').floatLabels();
        },1000);
    });
})(jQuery);
</script>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
         <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <?php if($u_id == $event->user_id){ ?>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <?php } ?>
       <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?> </li> 
    </ul
</nav> -->
<!-- <script type="text/javascript">
    $(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});
</script> -->
<!-- <div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $event->has('user') ? $this->Html->link($event->user->id, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($event->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($event->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banner') ?></th>
            <td><?= h($event->banner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Display') ?></th>
            <td><?= h($event->display) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrganizersName') ?></th>
            <td><?= h($event->OrganizersName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrganizersLogo') ?></th>
            <td><?= h($event->OrganizersLogo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($event->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $event->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descriptioin') ?></h4>
        <?= $this->Text->autoParagraph(h($event->descriptioin)); ?>
    </div>
    <div class="row">
        <h4><?= __('Venue') ?></h4>
        <?= $this->Text->autoParagraph(h($event->Venue)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sub Categories') ?></h4>
        <?php if (!empty($event->sub_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Categories Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->sub_categories as $subCategories): ?>
            <tr>
                <td><?= h($subCategories->id) ?></td>
                <td><?= h($subCategories->categories_id) ?></td>
                <td><?= h($subCategories->name) ?></td>
                <td><?= h($subCategories->active) ?></td>
                <td><?= h($subCategories->created) ?></td>
                <td><?= h($subCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SubCategories', 'action' => 'view', $subCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubCategories', 'action' => 'edit', $subCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubCategories', 'action' => 'delete', $subCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
 -->