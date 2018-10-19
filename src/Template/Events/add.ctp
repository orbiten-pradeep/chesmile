<?php 
use Cake\Routing\Router;
use Cake\I18n\Time;
?>

<?= $this->Form->create($event,array('id' => 'createEvent','name' => 'createEvent','type' => 'file', 'method' =>'post','novalidate' => true)) ?>
<?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
<?= $this->Form->hidden('active');?>

<div class="col-md-12 col-xs-12 mb-4 pr-0 pl-0 contain">
    <?php echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'imgeff img-fluid static-banner','id' => 'target')); ?>
    <div class="text-block">
   
    <div class="middle">
    <p>Banner Image</p>
    <!-- <style>
        input[type="file"]{
            display:none;
        }
    </style> -->
    <label class="btn btn-outline-info waves-effect btn-lg ">Upload Banner Image<i class="fa fa-upload ml-3" aria-hidden="true"></i>
      
 <?=$this->Form->input('banner',['type' => 'file','style'=>'display:none;','label' => false,'accept' => 'image/*','onchange' => 'putImage()', 'class' => 'img-fluid static-banner', 'required']);?></label>
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
        <?php echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid  rounded cs_banner_bg','id' => 'disptarget' )); ?>
        <div class="dispmiddle"> <p>Display Image</p>
            <label class="btn btn-outline-info waves-effect btn-lg ">Upload Display Image<i class="fa fa-upload ml-3" aria-hidden="true"></i>
        <?=$this->Form->input('display',['type' => 'file','style'=>'display:none;','label' => false,'accept' => 'image/*','id' =>'display','onchange' => 'putDispImage()', 'class' => '', 'required']);?></label>
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
                <div class="md-form rs-details-bold "> <i class="fa fa-map-marker prefix" style="font-size:23px;"></i><?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control','placeholder' => 'Areaname','style'=>'margin-left:15px;'));?></div>

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
                        <?= $this->Form->input('todate', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => 'To Date'));?>
                        <!--     <input type="text" id="email" name="email" class="form-control" placeholder="To Date">
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
                       <!--  <?= $this->Form->input('totime', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => 'To Time'));?> -->
                            <input type="text" id="email" name="email" class="form-control" placeholder="To Time">
                            <label for="email" class="">To Time</label>
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
                <div class="p-4 mb-4 flex-cont cs-descr-box rounded ">
                            <h5 class="cs-title">Event Details</h5>
                            <?= $this->Form->input('descriptioin',array('div' => false, 'label' => false,'class' => 'form-control md-textarea','placeholder' => 'Description about your event','rows' => '4', 'cols' => '50', 'resize'=> 'none','required' => true));?>
                        </div>
                        <div class="p-4 mb-4 flex-cont rounded ">
                            <h5 class="cs-title">Terms & Conditions</h5>
                            <?= $this->Form->input('descriptioin_more',array('div' => false, 'label' => false,'class' => 'form-control md-textarea','placeholder' => 'Terms and conditions if any','rows' => '4', 'cols' => '50', 'resize'=> 'none' ));?>
                        </div>

                        <div class="p-4 mb-4 flex-cont rounded ">
                            <h5 class="cs-title">Mediapartner Logo</h5>
                            <!-- <?php echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'thumb' )); ?><output id="list"></output>-->

                             <?= $this->Form->input('Mediapartners[]',['type' => 'file','label' => false,'multiple' => 'true','id'=>'filesmedia','accept' => 'image/*']);?>
                        </div>

                        <div class="p-4 mb-4 flex-cont rounded ">
                            <h5 class="cs-title">Sponsors Logo</h5>
                           <!--  <?php echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'thumb' )); ?> <output id="list1"></output>-->
                            <?=$this->Form->input('Sponsors[]',['type' => 'file','label' => false, 'multiple' => 'true','id'=>'filessponser','accept' => 'image/*']);?>
                        </div>
                </div>
            </div>
        </div>
            <div class="col-md-4 mb-4">
            <div class="d-flex flex-column cs_right_details_desk">
                <div class="p-4 mb-4 flex-cont rounded cs_details_rightblock-add">
                <div class="text-center">
                        <!-- <h5>₹ 699</h5> -->
                        <a href="" class="btn buy-btn btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Start Ticketing</a>    </div>
                    
<!--Grid row-->
                <div class="row">
                <div class="md-form rs-details-bold "> <i class="fa fa-map-marker prefix" style="font-size:23px;"></i><?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control','placeholder' => 'Areaname','style'=>'margin-left:15px;'));?></div>

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold"><span><i class="fa fa-calendar prefix" style="font-size:20px; margin-left: -20px; top:15px;"></i></span>
                        <?= $this->Form->input('date', array('type' => 'text','id' => 'date','name' => 'date','class' => 'form-control datepicker date-input','placeholder' => 'YYYY/MM/DD'));?>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold ">
                        <?= $this->Form->input('todate', array('type' => 'text','class' => 'form-control datepicker date-input','name'=> 'todate','placeholder' => 'YYYY/MM/DD'));?> 
                            <!-- <input type="text" id="email" name="email" class="form-control date-input" placeholder="To Date">
                            <label for="email" class="">To Date</label> -->
                        </div>
                    </div>

                     <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold">
                        <i class="fa fa-clock-o prefix" style="font-size:20px; margin-left: -20px; top:15px;"></i>
                        <?= $this->Form->input('time', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => '0:00 AM'));?>
                           </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 rs-details-bold ">
                         <?= $this->Form->input('totime', array('type' => 'text','class' => 'form-control datepicker date-input','placeholder' => '0:00 AM'));?> 
                           <!--  <input type="text" id="email" name="email" class="form-control date-input" placeholder="To Time">
                            <label for="email" class="">To Time</label> -->
                        </div>
                    </div>
</div>
                        </div>
            </div>

               <!--  <div class="d-flex flex-column">
                <div class=" mb-4 flex-cont rounded cs_details_orgblock">
                    
 <p style="font-weight: bold">Organizer Details</p>
    <?php echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'org-img','id' => 'orgtarget' )); ?>
            <?=$this->Form->input('OrganizersLogo',['type' => 'file','label' => false,'onchange' => 'putorgImage()','id' => 'org','accept' => 'image/*']);?> 
                            <div class="md-form">
                                <?=  $this->Form->input('OrganizersName',array('label' => 'Organizers name','div' => false,'class' => 'form-control','placeholder' => 'Please enter Organizer Name', 'required'));?></div>
                </div>
            </div> -->
            <div class="d-flex flex-column">
                <div class=" mb-4 flex-cont rounded cs_details_orgblock">
                    <p style=" margin-left: 100px;  font-weight: bold;">Organizer Details</p>
            <!--Modal: Login with Avatar Form-->
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
       
            <!--Header-->
            <div class="modal-header">
                <?php echo $this->Html->image('org-logo.png',array('alt' => 'avatar','class' => 'rounded-circle img-responsive','id' => 'orgtarget', 'style'=>'height:130px;' )); ?>
            </div>
            <label class="btn btn-outline-info waves-effect btn-sm pull-right ">Organizer Logo<i class="fa fa-upload ml-3" aria-hidden="true"></i>
                    <?=$this->Form->input('OrganizersLogo',['type' => 'file','style'=>'display:none;','label' => false,'onchange' => 'putorgImage()','id' => 'org','accept' => 'image/*']);?> 
                </label> 
        </div>
            <!--Body-->
          
                <div class="md-form">
                     <?=  $this->Form->input('OrganizersName',array('label' => 'Organizers name','div' => false,'class' => 'form-control','placeholder' => 'Please enter Organizer Name', 'required'));?></div>
                
  </div>
        <!--/.Content-->
    </div>

            <div class="d-flex flex-column">
                <div class="p-4 mb-4 flex-cont rounded ">
               
                    <div class="md-form">
                        <?= $this->Form->input('address_1',array('div' => false,'label' => 'Address 1','class' => 'form-control', 'placeholder' => 'Enter address 1', 'required'));?>
                         
                    </div>

                    <div class="md-form">
                        <?= $this->Form->input('address_2',array('div' => false,'label' => 'Address 2','class' => 'form-control', 'placeholder' => 'Enter address 2', 'required'));?>
                    </div>

                    <div class="md-form">
                        <?= $this->Form->input('landmark',array('div' => false,'label' => 'Landmark','class' => 'form-control', 'placeholder' => 'Any Specific Landmark?'));?>  
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
                <h6>Do You Want to start Online Booking?</h6>
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
    <label for="tickettype" >Ticket Type</label><span>Eg: Adult,children,above 60</span>
</div>
 <div class="md-form col-md-10">
    <input type="text" id="name"  name="name[]" class="form-control">
    <label for="name" >Ticket Name</label><span>Eg: earlybird,vip,couple entry</span>
</div>
<div class="md-form col-md-10">
    <input type="text" id="price" name="price[]" class="form-control">
    <label for="price" >Ticket Price</label>
</div>
 <div class="col-md-6">
     <select id="commission_per" name="commission_per[]" onchange = "myprice()" class="form-control">
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
    <label for="noofseats" >No.Of.Seats</label>
</div>
<div class="md-form col-md-6">
     <input type="text" id="startdate" name="startdate[]" class="form-control">
    <label for="startdate" >Start Date</label>
</div>
<div class="md-form col-md-6">
    <input type="text" id="enddate" name="enddate[]" class="form-control">
   <label for="'enddate" >End Date</label>
</div>

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
 
<div class="form-group">
    <?= $this->Form->button('Submit',array('id' => 'subbutton','class'=>'btn btn-secondary pull-centre sub-but')) ?>
</div>
<?= $this->Form->end() ?>
<script>

function myFunction() {
    var commission_per = document.getElementById("commission_per");
    var ticprice = document.getElementById("price").value;
     var x =commission_per.options[commission_per.selectedIndex].text/100 * (ticprice);
     var y = (ticprice) - (x);
    
    document.getElementById("commission_amt").value = x;
    document.getElementById("settamount").value = y;
}
function myprice() {
    var commission_per = document.getElementById("commission_per");
    var ticprice = document.getElementById("price").value;
     var x = commission_per.options[commission_per.selectedIndex].text/100 * (ticprice);
     var y = (ticprice) - (x);
    
    document.getElementById("commission_amt").value = x;
    document.getElementById("settamount").value = y;
    
}

</script>
<script>
function yesnoCheck() {
    if (document.getElementById('defaultInline1').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}</script>
<!------ Include the above in your HEAD tag ---------->
     
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

        function validateForm() {
    var x = document.forms["createEvent"]["title"].value;
    if (x == "") {
        //toastr.error('Have fun storming the castle!', 'Miracle Max Says')
        alert("Title must be filled out");
        return false;
    }
    var y = document.forms["createEvent"]["banner"].value;
    if (y == "") {
        alert("Banner image Needed");
        return false;
    }
    var z = document.forms["createEvent"]["display"].value;
    if (z == "") {
        alert("Display image Needed");
        return false;
    }
    // var a = document.forms["createEvent"]["date"].value;
    // if (a == "") {
    //     alert("Date must be filled out");
    //     return false;
    // }
    // var b = document.forms["createEvent"]["time"].value;
    // if (b == "") {
    //     alert("Time must be filled out");
    //     return false;
    // }
    var c = document.forms["createEvent"]["categories_id"].value;
    if (c == "") {
        alert("Categories must be filled out");
        return false;
    }
     var d = document.forms["createEvent"]["address_1"].value;
    if (d == "") {
        alert("Address must be filled out");
        return false;
    }
    var e = document.forms["createEvent"]["address_2"].value;
    if (e == "") {
        alert("Address must be filled out");
        return false;
    }
     var f = document.forms["createEvent"]["OrganizersName "].value;
    if (f == "") {
        alert("Organizer must be filled out");
        return false;
    }
     var g = document.forms["createEvent"]["descriptioin"].value;
    if (g == "") {
        alert("Event Details must be filled out");
        return false;
    }
     var h = document.forms["createEvent"]["areaname"].value;
    if (h == "") {
        alert("Areaname must be filled out");
        return false;
    }
}
    </script>
