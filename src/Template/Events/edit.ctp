<?php 
use Cake\Routing\Router;
use Cake\I18n\Time;
//echo "<pre>"; print_r($medialists);echo "</pre>";
?>

<?= $this->Form->create($event,array('enctype' => 'multipart/form-data', 'method' =>'post','novalidate' => true))?>
<?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
<?= $this->Form->hidden('active');?>

<div class="col-md-12 col-xs-12 mb-4 pr-0 pl-0 top-contain-add contain">
    <div class="background-img-container">
        <?php 
        if($event->banner) {
            echo $this->Html->image('banner/'.$event->banner, array('alt' => 'Cs-Static','class' => 'imgeff img-fluid static-banner' ,'id' => 'target'));
        }  else {
            echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'imgeff img-fluid static-banner' ,'id' => 'target'));
        }
        ?>
    </div>
    <div class="text-block">
        <div class="middle-image">
            <p class="head">Banner Image *</p>
            <label class="btn btn-outline-info-2 waves-effect btn-lg ">Update Banner Image
                <i class="fa fa-upload ml-3" aria-hidden="true"></i>
                <?=$this->Form->input('banner',['type' => 'file','style'=>'display:none;','label' => false,'accept' => 'image/*','onchange' => 'putBannerImage()', 'required']);?>
            </label>
            <p id="p3" style="color: #FF0000; font-size: 11px;"></p>
        </div>
    </div>
    <div class="container">
        <div class="event-title-container">
            <div class="md-form form-lg event-edit-title">
                <input type="text" id="titleId" class="form-control form-control-lg" name="title" value="<?=$event->title?>" placeholder="Please enter event title">
                <label for="form1">Event Title*</label>
            </div>
        </div>        
    </div>   
</div>

<div class="container add-event-container">
    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="col-md-14 cs_banner_container mb-5 contain">
                <?php 
                if($event->display) {
                    echo $this->Html->image('display/'.$event->display, array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg' ,'id' => 'disptarget'));
                }  else {
                    echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg' ,'id' => 'disptarget'));
                }
                ?>
                <div class="dispmiddle">
                    <p>Display Image *</p>
                    <label class="btn btn-outline-info btn-outline-info-3 waves-effect btn-lg ">Update Display Image
                        <i class="fa fa-upload ml-3" aria-hidden="true"></i>
                        <?=$this->Form->input('display',['type' => 'file','style'=>'display:none;','label' => false,'accept' => 'image/*','id' =>'display','onchange' => 'putDispImage()', 'class' => '', 'required']);?>
                    </label>
                    <p id="p4" style="color: #FF0000; font-size: 11px;"></p>
                </div>
            </div>


            <div class="col-md-12 pr-0 pl-0">
                <div class="d-flex flex-column cs_right_details_mob">
                    <div class="p-4 mb-4 flex-cont rounded ">
                        <div class="text-center">
                            <a href="javascript:;" class="btn buy-btn" data-toggle="modal" data-target="#modalSubscriptionForm">Update Tickets</a>
                        </div> 
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form rs-details-bold">
                                    <i class="fa fa-map-marker prefix"></i>
                                    <input type="text" id="Autocomplete" class="form-control area-name-class" name="areaname" value="<?=$event->Address->areaname;?>">
                                    <label for="Autocomplete">Locality*</label>
                                    <p id="p10" class="error-txt"></p>
                                </div>
                            </div>

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form rs-details-bold">
                                    <i class="fa fa-calendar prefix"></i>
                                    <input type="text" id="date" class="form-control datepicker date-input-class" name="date" value="<?php echo $event->date.' - '.$event->todate;?>">
                                    <label for="date">From Date - To Date*</label>
                                    <p id="p101" class="error-txt"></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form rs-details-bold">
                                    <i class="fa fa-clock-o prefix"></i>
                                    <input type="text" id="fromTime2" class="form-control datepicker time-input" name="time" value="<?=$event->time;?>">
                                    <label for="fromTime2">Start Time*</label>
                                    <p id="p102" class="error-txt"></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form rs-details-bold">
                                    <i class="fa fa-clock-o prefix"></i>
                                    <input type="text" id="toTime2" class="form-control datepicker time-input" name="totime" value="<?=$event->totime;?>">
                                    <label for="toTime2">End Time*</label>
                                    <p id="p103" class="error-txt"></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="md-form">
                    <?= $this->Form->input('categories_id',array('div' => false,'class' => 'form-control','options' => $categories_list, 'onChange' => 'checkForOther(this);', 'empty' => '(Select Categories)','label' => false, 'required'));?><p id="p5" style="color: #FF0000; font-size: 11px;"></p>
                </div>

                <div class="md-form">
                    <div id="subdiv" class="form-group" style="display: none;">
                        <?=$this->Form->input('Eventsubcategories.sub_categories',array( 'subcategory_id'=>'', 'class' => 'form-control','options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)','label' => false,'empty' => false));?>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <div class="p-4 mb-4 flex-cont cs-descr-box rounded ">
                        <h5 class="cs-title">Event Details *</h5>
                        <?= $this->Form->input('descriptioin',array('div' => false, 'label' => false,'class' => 'form-control md-textarea','placeholder' => 'Description about your event','rows' => '4', 'cols' => '50', 'resize'=> 'none','required' => true));?><p id="p8" style="color: #FF0000; font-size: 11px;"></p>
                    </div>
                    <div class="p-4 mb-4 flex-cont rounded ">
                        <h5 class="cs-title">Terms & Conditions</h5>
                    <?= $this->Form->input('descriptioin_more',array('div' => false, 'label' => false,'class' => 'form-control md-textarea','placeholder' => 'Terms and conditions if any','rows' => '4', 'cols' => '50', 'resize'=> 'none' ));?>
                    </div>

                    <div class="p-4 mb-4 flex-cont rounded ">
                        <h5 class="cs-title">Mediapartner Logo</h5>  
                        <?= $this->Form->input('Mediapartners[]',['type' => 'file','label' => false,'multiple' => 'false','id'=>'filesmedia','accept' => 'image/*']);?>
                        <?php foreach ($medialists as $medialist): $id = $medialist['id']; ?> 
                            <?php echo $this->Html->image('Mediapartners/'. $medialist->MediaPartners ,array('alt' => 'Mediapartners','class' => 'thumb'));  ?>
                            <a id ="delete"  class="remove_img_preview"  delete-href-url="<?=$this->Url->build(array('controller' => 'Mediapartners', 'action' => 'delete', $id)); ?>" confirm="Are you sure you want to delete # {0}?,$id"></a>

                        <?php endforeach; ?>
                    </div>

                    <div class="p-4 mb-4 flex-cont rounded">
                        <h5 class="cs-title">Sponsors Logo</h5>
                        <?=$this->Form->input('Sponsors[]',['type' => 'file','label' => false, 'multiple' => 'false','id'=>'filessponser','accept' => 'image/*']);?>
                        <?php foreach ($sponserlists as $sponserlist): $id = $sponserlist['id']; ?>
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
                        <a href="" class="btn buy-btn btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Update Ticketing</a>
                    </div>
                        
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form rs-details-bold">
                                <i class="fa fa-map-marker prefix"></i>
                                <input type="text" id="Autocomplete" class="form-control area-name-class" name="areaname" value="<?=$event->Address->areaname;?>">
                                <label for="Autocomplete">Locality*</label>
                                <p id="p10" class="error-txt"></p>
                            </div>
                        </div>

                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form rs-details-bold">
                                <i class="fa fa-calendar prefix"></i>
                                <input type="text" id="date" class="form-control datepicker date-input-class" name="date" value="<?php echo $event->date.' - '.$event->todate;?>">
                                <label for="date">From Date - To Date*</label>
                                <p id="p101" class="error-txt"></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form rs-details-bold">
                                <i class="fa fa-clock-o prefix"></i>
                                <input type="text" id="fromTime2" class="form-control datepicker time-input" name="time" value="<?=$event->time;?>">
                                <label for="fromTime2">Start Time*</label>
                                <p id="p102" class="error-txt"></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form rs-details-bold">
                                <i class="fa fa-clock-o prefix"></i>
                                <input type="text" id="toTime2" class="form-control datepicker time-input" name="totime" value="<?=$event->totime;?>">
                                <label for="toTime2">End Time*</label>
                                <p id="p103" class="error-txt"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column">
                <div class=" mb-4 flex-cont rounded cs_details_orgblock">
                    <p style=" margin-left: 100px;  font-weight: bold;">Organizer Details</p>
                    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document"> 
                        <div class="modal-header"> 
                            <?php 
                            if($event->OrganizersLogo) {
                                echo $this->Html->image('OrganizersLogo/'.$event->OrganizersLogo, array('alt' => 'avatar','class' => 'rounded-circle img-responsive org-img','id' => 'orgtarget'));
                            }
                            else {
                                echo $this->Html->image('org-logo.png',array('alt' => 'avatar','class' => 'rounded-circle img-responsive org-img','id' => 'orgtarget'));
                            }
                            ?>
                            <?php $this->Form->input('OrganizersLogo');?> 
                        </div>
                    </div>
          
                    <div class="md-form">
                        <div class="logo-upload-div">
                            <label class="btn btn-outline-info waves-effect btn-sm organizer-upload">Organizer Logo
                                <i class="fa fa-upload ml-3" aria-hidden="true"></i>
                                <?=$this->Form->input('OrganizersLogo',['type' => 'file','style'=>'display:none;','label' => false,'onchange' => 'putorgImage()','id' => 'org','accept' => 'image/*']);?>
                            </label>
                        </div>
                    </div> <br>
                    <div class="md-form">
                     <?= $this->Form->input('OrganizersName',array('label' => 'Organizers name','id'=>'OrganizersName','div' => false,'class' => 'form-control','placeholder' => 'Organizer Name *', 'required'));?>
                     <p id="p7" style="color: #FF0000; font-size: 11px;"></p>
                    </div>

                
                </div> 
            </div>

            <div class="d-flex flex-column">
                <div class="p-4 mb-4 flex-cont rounded ">
                    <div class="md-form">
                        <?= $this->Form->input('address_1',array('div' => false,'id'=>'address_1','label' => 'Address 1 *','class' => 'form-control', 'placeholder' => 'Enter address 1', 'required', 'value'=> $event->Address->address_1));?>
                         <p id="p6" style="color: #FF0000; font-size: 11px;"></p>
                    </div>

                    <div class="md-form">
                        <?= $this->Form->input('address_2',array('div' => false,'label' => 'Address 2','class' => 'form-control', 'placeholder' => 'Enter address 2', 'required', 'value'=>$event->Address->address_2));?>
                    </div>

                    <div class="md-form">
                        <?= $this->Form->input('landmark',array('div' => false,'label' => 'Landmark *','class' => 'form-control', 'placeholder' => 'Any Specific Landmark?', 'value'=>$event->Address->landmark));?>
                        <p id="p11" style="color: #FF0000; font-size: 11px;"></p>
                    </div>

                    <div class="md-form">
                        <?= $this->Form->input('contact_number',array('div' => false, 'id'=>'contact_number','label' => 'Contact Number *','class' => 'form-control','placeholder' => 'Enter Contact Number'));?>
                        <p id="p12" style="color: #FF0000; font-size: 11px;"></p>
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
                        <div style='height:330px;width:700px;'>
                            <h4> Advertisement </h4>
                        </div>
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
        <h5 class="modal-title" id="exampleModalLabel">Map</h5>        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: #4ABAC6;">&times;</span>
        </button>
        
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
<table class="table table-bordered table-striped table-hover ">
          <thead>
            <tr> 
              <th scope="col"><?= __('Ticket Type') ?>
               <!--  <?= $this->Paginator->sort('Select') ?> -->
              </th> 
                <th scope="col"><?= __('Ticket Name') ?>
              </th> 
                <th scope="col"><?= __('Ticket Price') ?>
              </th> 
                <th scope="col"><?= __('Commission') ?>
              </th> 
                <th scope="col"><?= __('Amount') ?>
              </th> 
                <th scope="col"><?= __('No.Of.Seats') ?>
              </th> 
                <th scope="col"><?= __('Booking StartDate') ?>
              </th> 
                <th scope="col"><?= __('Booking EndDate') ?>
              </th>  </tr>
          </thead>
          <tbody>
                  <?php foreach ($bookinglists as $bookinglist): 
                         if(!empty($bookinglist->name))   {
  //$bookid = $bookinglist['id'];
  $bookname = $bookinglist['name'];
  $booktype = $bookinglist['tickettype'];
  $bookprice = $bookinglist['price'];
  $bookseats = $bookinglist['noofseats'];
  $comper = $bookinglist['commission_per'];
  $comamt = $bookinglist['commission_amt'];
  $bookdate = $bookinglist['startdate'];
  $bookend = $bookinglist['enddate'];
  $bookstatus = $bookinglist['status'];
  //echo"$bookname";?> 
              <tr>
              <td>  <input type="text"  name="tickettype[]" value="<?php echo $booktype?>" class="form-control" style="width:200px;"> </td>
              <td>  <input type="text"  name="name[]" value="<?php echo $bookname?>" class="form-control" style="width:200px;"> </td>
              <td>  <input type="text" id="editprice" name="price[]" value="<?php echo $bookprice?>" class="form-control" style="width:70px;"> </td>
              <td>  <input type="text"  name="commission_per[]" value="<?php echo $comper?>" class="form-control my-editprice" style="width:50px;" > </td>
              <td>  <input type="text" id="editcommission_amt"  name="commission_amt[]" value="<?php echo $comamt?>" class="form-control"style="width:70px;"> </td>
              <td>  <input type="text"  name="noofseats[]" value="<?php echo $bookseats?>" class="form-control" style="width:70px;"> </td>
              <td>  <input type="text"  name="startdate[]" value="<?php echo $bookdate?>" class="form-control"style="width:100px;"> </td>
              <td>  <input type="text"  name="enddate[]" value="<?php echo $bookend?>" class="form-control" style="width:100px;"> </td>    </tr>
    <?php }
endforeach; ?></tbody> </table> 

   <h6>Do You Want to Add?</h6>
<div class="custom-control custom-radio custom-control-inline" style="margin-left: 40px;">
  <input type="radio" class="custom-control-input" onclick="javascript:yesnoCheck();" id="defaultInline1" name="inlineDefaultRadiosExample">
  <label class="custom-control-label" for="defaultInline1">Yes</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" onclick="javascript:yesnoCheck();" id="defaultInline2" name="inlineDefaultRadiosExample">
  <label class="custom-control-label" for="defaultInline2">No</label>
</div>
<br>
<div id="ifYes" style="visibility:hidden">
<div class="form-group dynamic-element" style="display:none">
  <div class="row">
  <!-- Replace these fields -->
  <div class="md-form col-md-10">
    <input type="text" id="tickettype"  name="tickettype[]" class="form-control">
    <label for="tickettype" >Ticket Type *</label><span>Eg: Adult,children,above 60</span>
</div>
 <div class="md-form col-md-10">
    <input type="text" id="name"  name="name[]" class="form-control">
    <label for="name" >Ticket Name *</label><span>Eg: earlybird,vip,couple entry</span>
</div>
<div class="md-form col-md-10">
    <input type="text" id="price" name="price[]" class="form-control">
    <label for="price" >Ticket Price *</label>
</div>
 <div class="col-md-6">
     <select id="commission_per" name="commission_per[]" class="form-control my-price">
  <option>Select percentage</option>
  <option value="5">5</option>
  <option value="10">10</option>  
  <option value="15">15</option>
  <option value="20">20</option>
  <option value="25">25</option>
  <option value="30">30</option>
  <option value="35">35</option>  
  <option value="40">40</option>
  <option value="45">45</option>
  <option value="50">50</option>
  <option value="55">55</option>
  <option value="60">60</option>  
  <option value="65">65</option>
  <option value="70">70</option>
  <option value="75">75</option>
</select>
</div>
<div class="md-form col-md-10">
    <input type="text" id="commission_amt" name="commission_amt[]" class="form-control" readonly>
    <label for="commission_amt" >Commission Amount</label>
</div>
<div class="md-form col-md-10">
    <input type="text" id="noofseats" name="noofseats[]" class="form-control">
    <label for="noofseats" >No.Of.Seats *</label>
</div>
<div class="md-form col-md-6">
     
     <input type="text" id="startdate" name="startdate[]" class="form-control date-input-class">
    <label for="startdate" >Booking Start&End Date *</label>
</div>
<!-- <div class="md-form col-md-6">
    <input type="text" id="enddate" name="enddate[]" class="form-control">
   <label for="'enddate" >End Date</label>
</div> -->

    <!-- End of fields-->
      <a href="#" class="btn btn-red pull-right delete" >Remove Ticket</a>      
  </div>
</div>
<!-- END OF HIDDEN ELEMENT -->
<div class="form-horizontal">
  <!-- Form Name -->
  <div class="dynamic-stuff">
    <!-- Dynamic element will be cloned here -->
    <!-- You can call clone function once if you want it to show it a first element-->
  </div>
  <!-- Button -->
     <a href="#" class="btn btn-green pull-right add-one" >Add Ticket</a> 
</div>
 </div></div>
            <div class="modal-footer d-flex justify-content-center modal-foot">
              <button type="button" class=" btn btn-deep-orange" data-dismiss="modal"> Start<i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>

        </div>
    </div>
</div>
<div class="container ">
    <div class="form-group">
        <?= $this->Form->button('Submit',array('id' => 'subbutton','class'=>'btn btn-secondary pull-centre sub-but')) ?>
    </div>
</div>
<?= $this->Form->end() ?> 
<div id="snackbar" >Please fill all the Required field....</div>
<script>
function yesnoCheck() {
    if (document.getElementById('defaultInline1').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}</script>
<!------ Include the above in your HEAD tag ---------->
     <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  //Clone the hidden element and shows it
$('.add-one').click(function(){
  $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show();
  attach_delete();
});
//Attach functionality to delete buttons
function attach_delete(){
  $('.delete').off();
  $('.delete').click(function(){
    console.log("click");
    $(this).closest('.form-group').remove();
  });
}
//mediapartners
$(document).ready(function() {

    $("#modalSubscriptionForm").on("change", ".my-price", function(e) {
        var commission_per = $(this).val(); 
        var ticPrice = $(this).parent().parent().find('#price').val();
        var x = commission_per/100 * (ticPrice);
        $(this).parent().parent().find("#commission_amt").val(x);
        $(this).parent().parent().find("#commission_amt").focus();
    });

      $("#modalSubscriptionForm").on("change", ".my-editprice", function(e) {
        var commission_per = $(this).val(); 
        var ticPrice = $(this).parent().parent().find('#editprice').val();
        var x = commission_per/100 * (ticPrice);
        $(this).parent().parent().find("#editcommission_amt").val(x);
        $(this).parent().parent().find("#editcommission_amt").focus();
    });

  if (window.File && window.FileList && window.FileReader) {
    $("#filesmedia").on("change", function(e) {
      var files = Array.from(e.target.files), filesLength = files.length;
      $("#filesMediaDisplay").html('');
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {

          var file = e.target;
          $("<span class=\"pip\"> &nbsp;&nbsp;" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\" value=\""+i+"\"></span>" +
            "</span>").appendTo("#filesMediaDisplay"); 

          $(".remove").click(function() {
            $(this).parent(".pip").remove();  
            files.splice($(this).attr('value'),1);
          });          
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

      $("#createEvent").submit(function(event){
        var status =true ;
          var x1 = document.getElementById("snackbar");
        if ($('#title').val() == '') {
            status = false;
             $("#title").focus();
             $('#p1').text("* Please Enter Your Event Title *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
  
         if ($('#banner').val() == '') {
            status = false;
             $("#banner").focus();
             $('#p3').text("* Please Select Your Banner Image   [Image Size: 1311px * 985px] *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
         if ($('#display').val() == '') {
            status = false;
             $("#display").focus();
             $('#p4').text("* Please Select Your Display Image [Size: 280px * 185px] *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
        if($("#categories_id option:selected").val() == ''){
            status = false;
             $("#categories_id").focus();
             $('#p5').text("* please Select event category *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
         if ($('#address_1').val() == '') {
            status = false;
             $("#address_1").focus();
             $('#p6').text("* Please Enter Address *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
     
         if ($('#OrganizersName').val() == '') {
            status = false;
             $("#OrganizersName").focus();
             $('#p7').text("* Please Enter Organizer Name *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
         if($("#descriptioin").val().length <=250){
            status = false;
             $("#descriptioin").focus();
             $('#p8').text("* please enter a description with minimum 120 characters *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
         if ($('#contact_number').val() == '') {
            status = false;       
             $("#contact_number").focus();
             $('#p12').text("* please Enter Contact Number *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
         if ($('#Autocomplete2').val() == '') {
            status = false;
             $("#Autocomplete2").focus();
             $('#p10').text("* please Select event Areaname *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
         if ($('#landmark').val() == '') {
            status = false;
             $("#landmark").focus();
             $('#p11').text("* please type landmark *"); 
             x1.className = "show";
     setTimeout(function(){ x1.className = x1.className.replace("show", ""); }, 3000);
        }
        return status;
    });
    </script>
