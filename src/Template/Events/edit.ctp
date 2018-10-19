<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventsubcategories'), ['controller' => 'Eventsubcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Eventsubcategory'), ['controller' => 'Eventsubcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('title');
            echo $this->Form->input('slug');
            echo $this->Form->input('slug_status');
            echo $this->Form->input('active');
            echo $this->Form->input('price');
            echo $this->Form->input('categories_id', ['options' => $categories]);
            echo $this->Form->input('descriptioin');
            echo $this->Form->input('descriptioin_more');
            echo $this->Form->input('register_online');
            echo $this->Form->input('booking_online');
            echo $this->Form->input('commamount');
            echo $this->Form->input('settamount');
            echo $this->Form->input('todate');
            echo $this->Form->input('totime');
            echo $this->Form->input('date');
            echo $this->Form->input('time');
            echo $this->Form->input('note');
            echo $this->Form->input('google_map');
            echo $this->Form->input('contact_number');
            echo $this->Form->input('mobile_number');
            echo $this->Form->input('banner');
            echo $this->Form->input('display');
            echo $this->Form->input('OrganizersName');
            echo $this->Form->input('OrganizersLogo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->

<?php 
use Cake\Routing\Router;
use Cake\I18n\Time;
?>
  <?= $this->Form->create($event,array('enctype' => 'multipart/form-data', 'method' =>'post','novalidate' => true))?>
<!-- <?= $this->Form->create($event,array('id' => 'createEvent','name' => 'createEvent','type' => 'file','onsubmit'=>'return validateForm()', 'method' =>'post','novalidate' => true)) ?> -->
<?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
<?= $this->Form->hidden('active');?>

<div class="col-md-12 col-xs-12 mb-4 pr-0 pl-0 contain">
   <?php if($event->banner) {
                echo $this->Html->image('banner/'.$event->banner, array('alt' => 'Cs-Static','class' => 'imgeff img-fluid static-banner' ,'id' => 'target'));
            }  else {
                echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'imgeff img-fluid static-banner' ,'id' => 'target'));
            }
            ?>

        <div class="text-block">
         <!--   <?=$this->Form->input('banner',['type' => 'file','label' => false,'accept' => 'image/*','onchange' => 'putImage()', 'class' => 'cs_browse_btn', 'required']);?> -->
  <div class="middle">
  <p>Banner Image</p>
   <label class="btn btn-outline-info waves-effect btn-lg ">Change Banner Image<i class="fa fa-upload ml-3" aria-hidden="true"></i>
 <?=$this->Form->input('banner',['type' => 'file','style'=>'display:none;','label' => false,'accept' => 'image/*','onchange' => 'putImage()', 'class' => 'img-fluid static-banner','default'=> $event->banner]);?></label>
 <?php $this->Form->input('banner');?> 
  </div>
  </div>
  <div class="desk-container">
    <div class="container">
      <div class="cs-tag-title-add">
      
          <div class="md-form">
            <?php echo $this->Form->input('title',array('label' => 'Event Title','div' => false,'id' => 'title', 'class' => 'form-control title-form', 'placeholder' => 'Please enter your event title')); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="mob-container">
    <div class="container">
      <div class="cs-tag-titlemob-add">
        <div class="md-form">
            <?php echo $this->Form->input('title',array('label' => 'Event Title','div' => false, 'class' => 'form-control title-formmob', 'placeholder' => 'Please enter your event title')); ?>
        </div>
      </div>
    </div>
  </div>  -->
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 mb-4">
    <div class="col-md-14 cs_banner_container mb-5 contain">
         <?php if($event->display) {
                echo $this->Html->image('display/'.$event->display, array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg' ,'id' => 'disptarget'));
            }  else {
                echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg' ,'id' => 'disptarget'));
            }
            ?>
  <!--   <?php echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg','id' => 'disptarget' )); ?> -->
    <div class="dispmiddle "><label class="btn btn-outline-info waves-effect btn-lg ">Upload Display Image<i class="fa fa-upload ml-3" aria-hidden="true"></i>
    <?=$this->Form->input('display',['type' => 'file','style'=>'display:none;','label' => false,'accept' => 'image/*','id' =>'display','onchange' => 'putDispImage()', 'class' => '', 'required']);?></label><?php $this->Form->input('display');?> 
   <p>Display Image</p>
</div>
      </div>
    <div class="col-md-12 pr-0 pl-0">
        <div class="d-flex flex-column cs_right_details_mob">
            <div class="p-4 mb-4 flex-cont rounded ">
              <div class="text-center">
                <!-- <h5>₹ 700</h5> -->
                <a href="javascript:;" class="btn buy-btn" data-toggle="modal" data-target="#modalSubscriptionForm">Get Tickets</a>
              </div>

<!--Grid row-->
                <div class="row">
                <div class="md-form rs-details-bold "> <i class="fa fa-map-marker prefix" style="font-size:23px;"></i>
                 <?php echo $this->Form->input('Address.areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control form-element','label' => false,'placeholder' => 'Areaname' ,'style'=>'margin-left:15px;'));?>
                <!--   <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control','placeholder' => 'Areaname','style'=>'margin-left:15px;'));?> --></div>

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold"><span><i class="fa fa-calendar prefix" style="font-size:20px; margin-left: -20px; top:15px;"></i></span>
                         
                        <?= $this->Form->input('date', array('type' => 'text','id' => 'date','class' => 'form-control datepicker date-input','placeholder' => 'From Date'));?>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold ">
                       <?= $this->Form->input('todate', array('type' => 'text','id' => 'todate','class' => 'form-control datepicker date-input','placeholder' => 'To Date'));?> 
                          <!--   <input type="text" id="email" name="email" class="form-control" placeholder="To Date">
                            <label for="email" class="">To Date</label> -->
                        </div>
                    </div>

                     <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold">
                        <i class="fa fa-clock-o prefix" style="font-size:20px; margin-left: -20px; top:15px;"></i>
                        <?= $this->Form->input('time', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => 'From Time'));?>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold ">
                        <?= $this->Form->input('totime', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => 'To Time'));?> 
                           <!--  <input type="text" id="email" name="email" class="form-control" placeholder="To Time">
                            <label for="email" class="">To Time</label> -->
                        </div>
                    </div>
</div></div>
            </div>
        <div class="md-form">
                    <?=  $this->Form->input('categories_id',array('div' => false,'class' => 'form-control','options' => $categories_list, 'onChange' => 'checkForOther(this);', 'empty' => '(Select Categories)','label' => false, 'required'));?>
                </div>
                <div class="md-form">
                  <div id="subdiv" class="form-group" style="display: none;">
                      <?=$this->Form->input('Eventsubcategories.sub_categories',array( 'subcategory_id'=>'', 'class' => 'form-control','options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)','label' => false,'empty' => false));?>
                    </div>
                </div>
        <div class="d-flex flex-column">
        <div class="p-4 mb-4 flex-cont cs-descr-box rounded">
                <h5 class="cs-title">Event Details</h5>
                <?= $this->Form->input('descriptioin',array('div' => false, 'label' => false,'class' => 'form-control md-textarea','placeholder' => 'Description about your event','rows' => '4', 'cols' => '50', 'resize'=> 'none','required' => true));?>
            </div>
            <div class="p-4 mb-4 flex-cont rounded ">
                <h5 class="cs-title">Terms & Conditions</h5>
                <?= $this->Form->input('descriptioin_more',array('div' => false, 'label' => false,'class' => 'form-control md-textarea','placeholder' => 'Terms and conditions if any','rows' => '4', 'cols' => '50', 'resize'=> 'none' ));?>
            </div>

            <div class="p-4 mb-4 flex-cont rounded ">
                <h5 class="cs-title">Mediapartner Logo</h5>  
<?= $this->Form->input('Mediapartners[]',['type' => 'file','label' => false,'multiple' => 'false','id'=>'filesmedia','accept' => 'image/*']);?>
<?php foreach ($medialists as $medialist): 
  $id = $medialist['id'];
  //echo"$medid";?> 
      <?php echo $this->Html->image('Mediapartners/'. $medialist->MediaPartners ,array('alt' => 'Mediapartners','class' => 'thumb'));  ?><a id ="delete"  class="remove_img_preview"  delete-href-url="<?=$this->Url->build(array('controller' => 'Mediapartners', 'action' => 'delete', $id)); ?>" confirm="Are you sure you want to delete # {0}?,$id"></a>
     
               <?php endforeach; ?>
            </div>
 <!-- <?= $this->Form->postLink(
                __(''),
                ['controller' => 'Mediapartners','action' => 'delete', $id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $id)
                ,'class' => 'remove_img_preview']
            );
        ?> -->
            <div class="p-4 mb-4 flex-cont rounded">
                <h5 class="cs-title">Sponsors Logo</h5>
                <?=$this->Form->input('Sponsors[]',['type' => 'file','label' => false, 'multiple' => 'false','id'=>'filessponser','accept' => 'image/*']);?>
                <?php foreach ($sponserlists as $sponserlist): 
  $id = $sponserlist['id'];
  //echo"$medid";?>
      <?php echo $this->Html->image('Sponsors/'. $sponserlist->Sponsors ,array('alt' => 'Sponsors','class' => 'thumb'));  ?> <a id ="delete"  class="remove_img_preview"  delete-href-url="<?=$this->Url->build(array('controller' => 'Sponsors', 'action' => 'delete', $id)); ?>" confirm="Are you sure you want to delete # {0}?,$id"></a>
     
               <?php endforeach; ?>
            </div>
        </div>
      </div>
    </div>
      <div class="col-md-4 mb-4">
      <div class="d-flex flex-column cs_right_details_desk">
          <div class="p-4 mb-4 flex-cont rounded cs_details_rightblock-add">
          <div class="text-center">
              <!-- <h5>₹ 699</h5> -->
            <a href="" class="btn buy-btn btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Edit Ticketing</a>  </div>
            
<!--Grid row-->
                <div class="row">
                <div class="md-form rs-details-bold "> <i class="fa fa-map-marker prefix" style="font-size:23px;"></i><?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control','placeholder' => 'Areaname','style'=>'margin-left:15px;'));?></div>

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold"><span><i class="fa fa-calendar prefix" style="font-size:20px; margin-left: -20px; top:15px;"></i></span>
                        <?= $this->Form->input('date', array('type' => 'text','id' => 'date','name' => 'date','class' => 'form-control datepicker date-input','placeholder' => 'MM/DD/YYYY'));?>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold ">
                      <!--   <?= $this->Form->input('todate', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => 'To Date'));?> -->
                            <input type="text" id="email" name="email" class="form-control date-input" placeholder="To Date">
                            <label for="email" class="">To Date</label>
                        </div>
                    </div>

                     <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold">
                        <i class="fa fa-clock-o prefix" style="font-size:20px; margin-left: -20px; top:15px;"></i>
                        <?= $this->Form->input('time', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => '00:00 AM'));?>
                           </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold ">
                       <!--  <?= $this->Form->input('totime', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => 'To Time'));?> -->
                            <input type="text" id="email" name="email" class="form-control date-input" placeholder="To Time">
                            <label for="email" class="">To Time</label>
                        </div>
                    </div>
</div>
              </div>
      </div>

        
  <div class="d-flex flex-column">
          <div class=" mb-4 flex-cont rounded cs_details_orgblock">
            <p style=" margin-left: 100px;  font-weight: bold;">Organizer Details</p>
      <!--Modal: Login with Avatar Form-->
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
       
            <!--Header-->
            <div class="modal-header">
              <!--   <?php echo $this->Html->image('org-logo.png',array('alt' => 'avatar','class' => 'rounded-circle img-responsive','id' => 'orgtarget', 'style'=>'height:130px;' )); ?> -->
      <?php if($event->OrganizersLogo) {
                echo $this->Html->image('OrganizersLogo/'.$event->OrganizersLogo, array('alt' => 'avatar','class' => 'rounded-circle img-responsive org-img','id' => 'orgtarget'));
            }  else {
                echo $this->Html->image('org-logo.png',array('alt' => 'avatar','class' => 'rounded-circle img-responsive org-img','id' => 'orgtarget'));
            }
            ?><?php $this->Form->input('OrganizersLogo');?> 
            </div>
             
        </div>
            <!--Body-->
          <div class="md-form">  
              <?=$this->Form->input('OrganizersLogo',['type' => 'file','label' => false,'onchange' => 'putorgImage()','id' => 'org','accept' => 'image/*']);?>
            </div><div class="md-form">
                  <?=  $this->Form->input('OrganizersName',array('label' => 'Organizers name','div' => false,'class' => 'form-control','placeholder' => 'Please enter Organizer Name', 'required'));?></div>        
  </div>
        <!--/.Content-->
    </div>

<!--Modal: Login with Avatar Form-->


      <div class="d-flex flex-column">
          <div class="p-4 mb-4 flex-cont rounded ">
         
                  <div class="md-form">
                     <?= $this->Form->input('Address.address_1',array('div' => false,'label' => false,'class' => 'form-control form-element', 'placeholder' => 'Enter address 1'), ['value' => $address['address_1']]);?>
                 <!--  <?= $this->Form->input('address_1',array('div' => false,'label' => 'Address 1','class' => 'form-control', 'placeholder' => 'Enter address 1', 'required'));?> -->
            </div>

            <div class="md-form">
               <?= $this->Form->input('Address.address_2',array('div' => false,'label' => false,'class' => 'form-control form-element', 'placeholder' => 'Enter address 2'), ['value' => $address['address']]);?>
                 <!--  <?= $this->Form->input('address_2',array('div' => false,'label' => 'Address 2','class' => 'form-control', 'placeholder' => 'Enter address 2', 'required'));?> -->
            </div>

            <div class="md-form">
                <?= $this->Form->input('Address.landmark',array('div' => false,'label' => false,'class' => 'form-control form-element', 'placeholder' => 'Any Specific Landmark?'), ['value' => $address['landmark']]);?> <span id="area_error" style="color: #FF0000; font-size: 11px;"></span>
                   <!--  <?= $this->Form->input('landmark',array('div' => false,'label' => 'Landmark','class' => 'form-control', 'placeholder' => 'Any Specific Landmark?'));?>   -->
            </div>

            <div class="md-form">
                  <?= $this->Form->input('contact_number',array('div' => false, 'label' => 'Contact Number','class' => 'form-control','placeholder' => 'Enter Contact Number'));?>
                </div>
                <div class="md-form">
                  <?= $this->Form->input('mobile_number',array('id' => 'mobile_number', 'div' => false,'label' => 'Mobile Number','class' => 'form-control','placeholder' => 'Enter Mobile Number'));?>
                </div>

            <input type="text" class="form-control map" id="googleMapID" name="google_map" placeholder="" readonly="" style="color: black !important; display: none;">
                  <input type="button" data-toggle="modal" data-target="#myModal" class="btn launch-map" value="Launch Map" style="background-color: #337AB7;"/>
        </div>
      </div>
      <div class="d-flex flex-column">
          <div class="p-4 mb-4 flex-cont rounded cs_details_advertblock">
            <div style='overflow:hidden;height:330px;width:100%;'>
              <div  style='height:330px;width:700px;'> <h4>
            Advertisement
          </h4></div>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: #4ABAC6;">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Map</h5>        
      </div>
      <div class="modal-body">
        <div id="mapPanel">            
            <input class="form-control text plac" id="city_country" type="textbox" value="Mylapore, Chennai" placeholder="Search your area..." style="color: black !important;">
            <input class="btn btn-md btn-primary botton" type="button" value="search" onclick="codeAddress()">            
        </div>  
        <div id="mapCanvas" style="width: 100%; height: 350px;"></div>
        <div id="infoPanel">
            <!--<b>Marker status:</b>
            <div id="markerStatus"><i>Click and drag the marker.</i></div>
            <b>Current position:</b>
            <div id="info"></div>-->
            <!-- <b>Closest matching address:</b>
            <div id="address"></div> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #337AB7;color: white;">Close</button>
       <!--  <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Ticketing Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
<div class="md-form input-group">
  <div class="input-group-prepend">
   <!--   <?= $this->Form->input('tickettype_1',array( 'label'=> false,'class' => 'form-control validate ','placeholder' => 'Ticket Type' ,'style' => 'width: 90%;'));?> -->

    <input type="text" id="tickettype_1" name="tickettype_1" class="form-control validate" placeholder="Ticket Type" >

  </div>&nbsp;&nbsp;&nbsp;&nbsp;

 <!--  <?= $this->Form->input('ticketprice_1',array('label'=> false,'class' => 'form-control validate ','placeholder' => 'Ticket Price', 'style' => 'width: 90%;'));?>
  -->  
    <input type="text" id="ticketprice_1" name="ticketprice_1" class="form-control validate" placeholder="Ticket Price" >
</div>
<div class="md-form input-group">
  <div class="input-group-prepend">
   <!--   <?= $this->Form->input('tickettype_2',array( 'label'=> false,'class' => 'form-control validate ','placeholder' => 'Ticket Type' ,'style' => 'width: 90%;'));?> -->

       <input type="text" id="tickettype_2" name="tickettype_2" class="form-control validate" placeholder="Ticket Type" >
  </div>&nbsp;&nbsp;&nbsp;&nbsp;

  <!-- <?= $this->Form->input('ticketprice_2',array('label'=> false,'class' => 'form-control validate ','placeholder' => 'Ticket Price', 'style' => 'width: 90%;'));?> -->
     <input type="text" id="ticketprice_2" name="ticketprice_2" class="form-control validate" placeholder="Ticket Price" >
</div>


            </div>
            <div class="modal-footer d-flex justify-content-center modal-foot">
                <button class="btn btn-deep-orange">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <?= $this->Form->button('Submit',array('id' => 'subbutton','class'=>'btn btn-secondary pull-centre sub-but')) ?>
</div>
<?= $this->Form->end() ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
//mediapartners
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#filesmedia").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\"> &nbsp;&nbsp;" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\"></span>" +
            "</span>").insertAfter("#filesmedia");
          // $(".remove").click(function(){
          //   $(this).parent(".pip").remove();
          // });
          $(".remove").click(function(){
        $(this).parent(".pip").remove();
       $('#filesmedia').val(); 
       // $('input:file#upload')[1].files
      });
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
//Sponser
var count=0;
  $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#filessponser").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
         count++; 
 $("<span class=\"pip\"> &nbsp;&nbsp;" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\"></span>" +
            "</span>").insertAfter("#filessponser");
          $(".remove").click(function(){
            // var inval = count--;
            // alert(inval)
        $(this).parent(".pip").remove();
        $('#filessponser').val(); 
 //$('input:file#filessponser')[1].files
       // $('input:file#upload')[1].files
      });
         });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});    
  //banner image
function showImage(src, target) {
            var fr = new FileReader();

             fr.onload = function(){
      target.src = fr.result;
    }
           fr.readAsDataURL(src.files[0]);

        }
        function putImage() {
            var src = document.getElementById("banner");
            var target = document.getElementById("target");
            showImage(src, target);
        }
//display image
    function showDispImage(src1, target1) {
            var fro = new FileReader();

             fro.onload = function(){
      target1.src = fro.result;
    }
           fro.readAsDataURL(src1.files[0]);

        }
        function putDispImage() {
            var src1 = document.getElementById("display");
            var target1 = document.getElementById("disptarget");
            showImage(src1, target1);
        }

        //organizer logo
          function showorgImage(src2, target2) {
            var f = new FileReader();

             f.onload = function(){
      target2.src = f.result;
    }
           f.readAsDataURL(src2.files[0]);

        }
        function putorgImage() {
            var src2 = document.getElementById("org");
            var target2 = document.getElementById("orgtarget");
            showImage(src2, target2);
        }

        $('.launch-map').on('click', function () {
    var loc = $("#landmark").val() + $("#areaname").val();
    $("#city_country").val(loc);
      $('#myModal').modal({
          backdrop: 'static',
          keyboard: false
      }).on('shown.bs.modal', function () {
          codeAddress();
      });
  });

        $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
          $(document).ready(function(){
    var date_input=$('input[name="todate"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
    </script>
     <script type="text/javascript">
                        $(document).ready(function() {
  //alert(1);
  $('.remove_img_preview').click(function(){
    //alert(2);
    $('a#delete').attr('href', $(this).attr('delete-href-url')); // better if you add an id to anchor & then
    // $('a#add').attr('href',  $(this).attr('add-href-url')); // better if you add an id to anchor & then $('a#idofAnchor')
  });
});</script>