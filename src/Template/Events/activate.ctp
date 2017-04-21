<?php use Cake\Routing\Router; ?>
<style type="text/css">
    .icon{
        height: 120px; 
        width: 45px;
    }

    #lightbox .modal-content {
    display: inline-block;
    text-align: center;   
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
}
</style>

<?php
$bgImage = $event->banner;
if(!empty($bgImage)){
    $bgCoverImg = $this->Url->image('banner/'.$bgImage);
}
else {
    $bgCoverImg = $this->Url->image('cover_pic.jpg');
}
?>
<div class="cover-pic" style="background: rgba(0, 0, 0, 0) url(<?=$bgCoverImg?>) no-repeat scroll center center / cover">
        <div class="container-fluid heading_txt" style="background: rgba(49,51,53,.5);position: absolute;bottom: 0;z-index: 1;width: 100%;box-sizing: border-box;">
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-tag"><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></button> <?php echo $this->Html->image('card/'.$event->category->card, array('width' => '100px', 'height' => '100px','alt'=>'Card')); ?>
                    <h1 class="tagline" style="color: #FFFFFF"><?= h($event->title) ?></h1>
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
            <div class="col-sm-8 lft_container">
                <h2><img src="<?=$organizerLogoImageUrl?>" class="img-thumbnail profile-img"><?= h($event->OrganizersName) ?></h2>
                <p><?= $this->Text->autoParagraph(h($event->descriptioin));?></p>
                <p class="margin25"><span class="glyphicon glyphicon-calendar calender_txt" aria-hidden="true"></span><?= h($event->date) ?></p>
                <p>
                    <span class="glyphicon glyphicon-time time_txt" aria-hidden="true"></span><?= h($event->time) ?>
                </p>
            </div>
            <?php
            //echo $event->google_map; exit;
            $geoCode = (!empty($event->google_map)) ? $event->google_map : '13.0595365,80.24247919999993';

            ?>
            <div class="col-sm-4 text-center rgt_container">
                <address>
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:630px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https:/disclaimergenerator.net">disclaimer example</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(<?=$geoCode;?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?=$geoCode;?>)});infowindow = new google.maps.InfoWindow({content:''});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </address>
                <address>
                <div class="text-center"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></div>
                   <!-- <strong>Kishore</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br> -->
                   <!--  <?= $this->Text->autoParagraph(h($event->Venue)); ?> -->
                   <br><?php echo $address->address_1. ", ".$address->address_2.","; ?>
                    <br><?php echo $address->landmark. ", ".$address->areaname.","; ?>
                    <br><?php echo $address->city.", ".$address->state.", ".$address->country; ?>
                    <br><?= h($event->contact_number) ?>
                    <br><?= h($event->mobile_number) ?>
                    <br>
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
                                                <h3 class="heading margin25">Sponsors<span></span></h3>
                                                    <!-- Client 1 -->

                                                    <?php foreach ($sponsors as $sponsor): ?>
                                                    <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3" style="visibility: visible; ">
                                                        <a href="#">
                                                        <?php echo $this->Html->image('Sponsors/'.$sponsor->Sponsors, array('alt'=>'Sponsors','class' =>'img-overlay','height' => '150px', 'width' => '250px')); ?>
                                                    </a>
                                                    </div>

                                                    <!-- Client 2 -->
                                                    <!-- <div class="col-sm-6 col-xs-4 col-md-3" style="visibility: visible; ">
                                                        <a href="#"><img src="img/logos/4.png" class="img-responsive clients-img" alt="Client 4"></a>
                                                    </div>

                                                    <!-- Client 3 -->
                                                    <!-- <div class="col-sm-6 col-xs-4 col-md-3" style="visibility: visible; ">
                                                        <a href="#"><img src="img/logos/5.png" class="img-responsive clients-img" alt="Client 5"></a>
                                                    </div>

                                                    <!-- Client 4 -->
                                                    <!-- <div class="col-sm-6 col-xs-4 col-md-3" style="visibility: visible; ">
                                                        <a href="#"><img src="img/logos/6.png" class="img-responsive clients-img" alt="Client 6"></a>
                                                    </div> -->
                                                    <?php endforeach; ?>
                                                    <div class="clearfix"></div>

                                                    <h3 class="heading margin25">Media Partners<span></span></h3>
                                                    <!-- Client 1 -->
                                                    <?php foreach ($mediapartners as $mediapartner): ?>
                                                    <div class="col-sm-6 col-xs-12 col-md-3" style="visibility: visible; ">
                                                        <a href="#">
                                                        <?php echo $this->Html->image('Mediapartners/'.$mediapartner->MediaPartners, array('alt'=>'Mediapartners','class' => 'img-overlay','height' => '150px', 'width' => '250px')); ?>
                                                        </a>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <!-- Client 2 -->

                                                    <div class="clearfix"></div>
                                                    <div style="display: '<?php if(empty($galaries)) { echo "none;";  } ?>'>
                                                     <h3 class="heading margin25">Event Galaries<span></span></h3>
                                                    <!-- Client 1 -->
                                                    <?php foreach ($galaries as $galary): ?>
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

                                                     <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="display: <?php if(!empty($galaries)) { echo "none;"; } ?>">Open Modal</button>
                                                    <div class="clearfix"></div>
                                                    <?= 
                                                    $this->Form->create('',array('url' => ['controller' => 'Events', 'action' => 'activate',$event->id]));?>
                                                    <?= $this->Form->radio('active', ['DeActivate','Activate']);
                                                    ?>
                                                    
                                                    <?= $this->Form->button(__('Submit')); ?>
                                                    <?= $this->Form->end() ?>
                                                    <div class="clearfix"></div>

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
                              
                              <button  onclick="sendemail(<?php echo $event->id; ?>);" class="btn btn-primary form-control">Invite Friends</button>
                        </div>                          
                    <div class="clearfix"></div>

                    <p class="text-primary"><b>Interested in this Event</b></p>
                    <small><span class="glyphicon glyphicon-thumbs-up"></span> <?= h($number) ?> People are interested</small>
                    
            </div>      
                    </div>

            </div>
    </div>   

    <script type="text/javascript">
    function sendemail(eventid, e) {
        
       var email = document.getElementById("invite").value;
        if(email === "")
        {
            alert("Please Enter An Email id");
            return false;
        }
        $.ajax({
            type: "POST",
            data: {
                "eventid": eventid,
                "email": email
            },
            ContentType: 'application/json',
            dataType: 'json',
            url: "<?php echo $this->Url->build(['action' =>'sendemail']); ?>",
            success: function(data) {
                document.getElementById("invite").value = "";
                alert('Your Friend Invited');
                //document.getElementById(eventid).textContent = data; 
            },
            error: function(tab) {
                //$select.html('<option id="-1">none available</option>');
            }
        });
        return false;
    }
    </script>   


