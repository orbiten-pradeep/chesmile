
<?php 
use Cake\Routing\Router;
use Cake\I18n\Time;
?>

<?= $this->Form->create($event,array('id' => 'createEvent','name' => 'createEvent','type' => 'file', 'method' =>'post','novalidate' => true)) ?>
<?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
<?= $this->Form->hidden('active');?>

<div class="col-md-12 col-xs-12 mb-4 pr-0 pl-0 contain top-contain-add">
    <?php 
    //echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'imgeff img-fluid static-banner','id' => 'target')); 
    ?>
    <div class="text-block">
        <div class="middle-image">
            <p class="head">Banner Image *</p>
            <label class="btn btn-outline-info-2 waves-effect btn-lg ">Upload Banner Image
                <i class="fa fa-upload ml-3" aria-hidden="true"></i>
                <?=$this->Form->input('banner',['type' => 'file','style'=>'display:none;','label' => false,'accept' => 'image/*','onchange' => 'putImage()', 'required']);?>
            </label>
            <p id="p3" style="color: #FF0000; font-size: 11px;"></p>
        </div>
    </div>
    <div class="container">
        <div class="md-form form-lg event-add-title">
            <input type="text" id="titleId" class="form-control form-control-lg" name="title">
            <label for="form1">Event Title*</label>
        </div>
    </div> 
</div>

<div class="container add-event-container">
    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="col-md-14 cs_banner_container mb-5 contain">
                <?php 
                echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid  rounded cs_banner_bg','id' => 'disptarget' )); 
                ?>
                <div class="dispmiddle">
                    <p>Display Image *</p>
                    <label class="btn btn-outline-info btn-outline-info-3 waves-effect btn-lg ">Upload Display Image
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
                            <!-- <h5>₹ 699</h5> -->
                            <a href="" class="btn buy-btn btn-md btn-rounded" data-toggle="modal" data-target="#modalSubscriptionForm">Start Ticketing</a>
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form rs-details-bold">
                                    <i class="fa fa-map-marker prefix"></i>
                                    <input type="text" id="Autocomplete" class="form-control area-name-class" name="areaname">
                                    <label for="Autocomplete">Locality*</label>
                                    <p id="p10" class="error-txt"></p>
                                </div>
                            </div>
                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form rs-details-bold">
                                    <i class="fa fa-calendar prefix"></i>
                                    <input type="text" id="date" class="form-control datepicker date-input-class" name="date">
                                    <label for="date">From Date - To Date*</label>
                                    <p id="p101" class="error-txt"></p>
                                </div>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-md-12 col-lg-6">
                                <div class="md-form rs-details-bold">
                                    <i class="fa fa-clock-o prefix"></i>
                                    <input type="text" id="fromTime2" class="form-control datepicker time-input" name="time">
                                    <label for="fromTime2">Start Time*</label>
                                    <p id="p102" class="error-txt"></p>
                                </div>
                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-md-12 col-lg-6">
                                <div class="md-form rs-details-bold">
                                    <i class="fa fa-clock-o prefix"></i>
                                    <input type="text" id="toTime2" class="form-control datepicker time-input" name="totime">
                                    <label for="toTime2">End Time*</label>
                                    <p id="p103" class="error-txt"></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="d-flex flex-column">
                    <div class="p-4 mb-4 flex-cont rounded ">
                        <h5 class="widget-header text-left">Category *</h5>
                        <div class="md-form category-form"> 
                            <?=  $this->Form->input('categories_id',array('div' => false,'class' => 'add-category', 'id'=> 'categories_id', 'options' => $categories_list, 'onChange' => 'checkForOther(this);', 'empty' => 'Choose Category','label' => false, 'required'));?>
                            <p id="p5" style="color: #FF0000; font-size: 11px;"></p>
                        </div>
                    </div>
                </div>
                <div id="subdiv" class="d-flex flex-column" style="display: none !important;">
                    <div class="p-4 mb-4 flex-cont rounded ">
                        <h5 class="widget-header text-left">Sub Categories *</h5>
                        <div class="md-form category-form">
                            <select class="subcategory-id" id="subcategory_id" name="Eventsubcategories[sub_categories]" multiple="">
                                <option value="" selected="">Choose Sub Categories</option> 
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <div class="p-4 mb-4 flex-cont cs-descr-box rounded ">
                        <h5 class="widget-header text-left">Event Details *</h5>
                        <?= $this->Form->input('descriptioin',array('div' => false, 'label' => false,'class' => 'form-control md-textarea no-radius','placeholder' => 'Description about your event','rows' => '4', 'cols' => '50', 'resize'=> 'none','required' => true));?>
                        <p id="p8" style="color: #FF0000; font-size: 11px;"></p>
                    </div>
                    <div class="p-4 mb-4 flex-cont rounded ">
                        <h5 class="widget-header text-left">Terms & Conditions</h5>
                        <?= $this->Form->input('descriptioin_more',array('div' => false, 'label' => false,'class' => 'form-control md-textarea no-radius','placeholder' => 'Terms and conditions if any','rows' => '4', 'cols' => '50', 'resize'=> 'none' ));?>
                    </div>
                    <div class="p-4 mb-4 flex-cont rounded ">
                        <h5 class="widget-header text-left">Mediapartner Logo</h5> 
                        <?= $this->Form->input('Mediapartners[]',['type' => 'file','label' => false,'multiple' => 'true','id'=>'filesmedia','accept' => 'image/*']);?>
                        <div id="filesMediaDisplay"></div>
                    </div>
                    <div class="p-4 mb-4 flex-cont rounded ">
                        <h5 class="widget-header text-left">Sponsors Logo</h5> 
                        <?=$this->Form->input('Sponsors[]',['type' => 'file','label' => false, 'multiple' => 'true','id'=>'filessponser','accept' => 'image/*']);?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 right-side">
            <div class="d-flex flex-column cs_right_details_desk">
                <div class="p-4 mb-4 flex-cont rounded cs_details_rightblock-add">
                    <div class="text-center">
                        <!-- <h5>₹ 699</h5> -->
                        <a href="" class="btn buy-btn btn-md btn-rounded" data-toggle="modal" data-target="#modalSubscriptionForm">Start Ticketing</a>
                    </div>
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form rs-details-bold">
                                <i class="fa fa-map-marker prefix"></i>
                                <input type="text" id="Autocomplete2" class="form-control area-name-class" name="areaname">
                                <label for="areanameId">Locality*</label>
                                <p id="p10" class="error-txt"></p>
                            </div>
                        </div>
                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form rs-details-bold">
                                <i class="fa fa-calendar prefix"></i>
                                <input type="text" id="date2" class="form-control datepicker date-input-class" name="date">
                                <label for="date2">From Date - To Date*</label>
                                <p id="p101" class="error-txt"></p>
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-12 col-lg-6">
                            <div class="md-form rs-details-bold">
                                <i class="fa fa-clock-o prefix"></i>
                                <input type="text" id="fromTime" class="form-control datepicker time-input" name="time">
                                <label for="fromTime">Start Time*</label>
                                <p id="p102" class="error-txt"></p>
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-12 col-lg-6">
                            <div class="md-form rs-details-bold">
                                <i class="fa fa-clock-o prefix"></i>
                                <input type="text" id="toTime" class="form-control datepicker time-input" name="totime">
                                <label for="toTime">End Time*</label>
                                <p id="p103" class="error-txt"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="p-4 mb-4 flex-cont rounded cs_details_orgblock">
                    <h3 class="widget-header">Organizer Details</h3>
                    <!--Modal: Login with Avatar Form-->
                    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                        <!--Content-->
                        <!--Header-->
                        <div class="modal-header">
                            <?php echo $this->Html->image('org-logo.png',array('alt' => 'avatar','class' => 'rounded-circle img-responsive','id' => 'orgtarget', 'style'=>'height:130px;' )); ?>
                        </div>
                    </div>
                    <!--Body-->
                    <div class="md-form">
                        <div class="logo-upload-div">
                            <div class="btn btn-outline-info waves-effect btn-sm">Organizer Logo
                                <i class="fa fa-upload ml-3" aria-hidden="true"></i>
                                <?=$this->Form->input('OrganizersLogo',['type' => 'file','style'=>'display:none;','label' => false,'onchange' => 'putorgImage()','id' => 'org','accept' => 'image/*']);?>
                            </div>
                        </div>
                    </div> 
                    <div class="md-form">
                        <?=  $this->Form->input('OrganizersName',array('label' => 'Organizers name*', 'id'=>'OrganizersName', 'div' => false,'class' => 'form-control' , 'required'));?>
                        <p id="p7" style="color: #FF0000; font-size: 11px;"></p>
                    </div>
                </div>
                <!--/.Content-->
            </div>
            <div class="d-flex flex-column">
                <div class="p-4 mb-4 flex-cont rounded ">
                    <h3 class="widget-header">Location Details</h3>

                    <div class="md-form">
                        <?= $this->Form->input('address_1',array('div' => false,'id'=>'address_1','label' => 'Address 1 *','class' => 'form-control', 'required'));?>
                        <p id="p6" style="color: #FF0000; font-size: 11px;"></p>
                    </div>
                    <div class="md-form">
                        <?= $this->Form->input('address_2',array('div' => false,'label' => 'Address 2','class' => 'form-control', 'required'));?>
                    </div>
                    <div class="md-form">
                        <?= $this->Form->input('landmark',array('div' => false,'label' => 'Landmark','class' => 'form-control'));?>
                        <p id="p11" style="color: #FF0000; font-size: 11px;"></p>
                    </div>
                    <div class="md-form">
                        <?= $this->Form->input('contact_number',array('div' => false, 'id'=>'contact_number','label' => 'Contact Number *','class' => 'form-control'));?>
                        <p id="p12" style="color: #FF0000; font-size: 11px;"></p>
                    </div>
                    <div class="md-form">
                        <?= $this->Form->input('mobile_number',array('id' => 'mobile_number', 'div' => false,'label' => 'Mobile Number','class' => 'form-control'));?>
                    </div>
                    <input type="text" class="form-control map" id="googleMapID" name="google_map" placeholder="" readonly="" style="color: black !important; display: none;">
                        <input type="button" data-toggle="modal" data-target="#myModal" class="btn btn-md launch-map" value="Launch Map" style="background-color: #337AB7;"/>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="p-4 mb-4 flex-cont rounded cs_details_advertblock">
                    <div class="block">
                        <h3 class="widget-header">Advertisement</h3>
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
                    <!--<b>Marker status:</b><div id="markerStatus"><i>Click and drag the marker.</i></div><b>Current position:</b><div id="info"></div>-->
                    <!-- <b>Closest matching address:</b><div id="address"></div> -->
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
        <div class="modal-content ticket-modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100">Ticketing Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <h5 class="ask-head">Do you want to start Online Booking?</h5>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input start-ticket" value="yes" id="startTicketYes" name="startTicket">
                    <label class="custom-control-label" for="startTicketYes">Yes</label>
                </div>
                <!-- Default inline 2-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input start-ticket" value="no" id="startTicketNo" name="startTicket">
                    <label class="custom-control-label" for="startTicketNo">No</label>
                </div>

                <div id="ticketTabs" style="display:none">
                    <div class="ticket-add-container">
                        <ul class="nav nav-ticketing-tabs nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#type_1" class="nav-link active" data-toggle="tab">Type 1</a><span>x</span>
                            </li> 
                            <li class="nav-item">
                                <a href="#" class="add-ticket-type nav-link"> + Add new</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="type_1">
                                <div class="form-group dynamic-element">
                                    <div class="row">
                                        <!-- Replace these fields -->
                                        <div class="md-form col-md-6">
                                            <input type="text" id="tickettype"  name="tickettype[]" class="form-control">
                                            <label for="tickettype" >Ticket Type *</label>
                                            <span class="help-text">Eg: Adult,children,above 60</span>
                                        </div>
                                        <div class="md-form col-md-6">
                                            <input type="text" id="name" name="name[]" class="form-control">
                                            <label for="name" >Ticket Name *</label>
                                            <span class="help-text">Eg: earlybird,vip,couple entry</span>
                                        </div>
                                        <div class="md-form col-md-6">
                                            <input type="text" id="price" name="price[]" class="form-control">
                                            <label for="price" >Ticket Price *</label>
                                        </div>
                                        <div class="md-form col-md-6">
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
                                        <div class="md-form col-md-6">
                                            <input type="text" id="commission_amt" name="commission_amt[]" class="form-control" readonly>
                                            <label for="commission_amt" >Commission Amount</label>
                                        </div>
                                        <div class="md-form col-md-6">
                                            <input type="text" id="noofseats" name="noofseats[]" class="form-control">
                                            <label for="noofseats" >No.Of.Seats *</label>
                                        </div>
                                        <div class="md-form col-md-6">
                                            <input type="text" id="ticketBookingDate" name="startdate[]" class="form-control">
                                            <label for="ticketBookingDate">Booking Start & End Date *</label>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex  pb-2 pt-2 justify-content-center modal-foot">
                <button type="button" class=" btn btn-sm btn-deep-orange" data-dismiss="modal"> Close & Submit</button>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript"> 
    //mediapartners
    $(document).ready(function() {
        $("#modalSubscriptionForm").on("change", ".my-price", function(e) {
            var commission_per = $(this).val();
            var ticPrice = $(this).parent().parent().find('#price').val();
            var x = commission_per / 100 * (ticPrice);
            $(this).parent().parent().find("#commission_amt").val(x);
            $(this).parent().parent().find("#commission_amt").focus();
        });

        if (window.File && window.FileList && window.FileReader) {
            $("#filesmedia").on("change", function(e) {
                var files = Array.from(e.target.files),
                    filesLength = files.length;
                $("#filesMediaDisplay").html('');
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {

                        var file = e.target;
                        $("<span class=\"pip\"> &nbsp;&nbsp;" +
                            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                            "<br/><span class=\"remove\" value=\"" + i + "\"></span>" +
                            "</span>").appendTo("#filesMediaDisplay");

                        $(".remove").click(function() {
                            $(this).parent(".pip").remove();
                            files.splice($(this).attr('value'), 1);
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
    var count = 0;
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
                        $(".remove").click(function() {
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

        fr.onload = function() {
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

        fro.onload = function() {
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

        f.onload = function() {
            target2.src = f.result;
        }
        f.readAsDataURL(src2.files[0]);
    }

    function putorgImage() {
        var src2 = document.getElementById("org");
        var target2 = document.getElementById("orgtarget");
        showImage(src2, target2);
    }

    $("#createEvent").submit(function(event) {
        var status = true;
        var x1 = document.getElementById("snackbar");
        if ($('#title').val() == '') {
            status = false;
            $("#title").focus();
            $('#p1').text("* Please Enter Your Event Title *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }

        if ($('#banner').val() == '') {
            status = false;
            $("#banner").focus();
            $('#p3').text("* Please Select Your Banner Image   [Image Size: 1311px * 985px] *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }
        if ($('#display').val() == '') {
            status = false;
            $("#display").focus();
            $('#p4').text("* Please Select Your Display Image [Size: 280px * 185px] *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }
        if ($("#categories_id option:selected").val() == '') {
            status = false;
            $("#categories_id").focus();
            $('#p5').text("* please Select event category *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }
        if ($('#address_1').val() == '') {
            status = false;
            $("#address_1").focus();
            $('#p6').text("* Please Enter Address *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }

        if ($('#OrganizersName').val() == '') {
            status = false;
            $("#OrganizersName").focus();
            $('#p7').text("* Please Enter Organizer Name *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }
        if ($("#descriptioin").val().length <= 250) {
            status = false;
            $("#descriptioin").focus();
            $('#p8').text("* please enter a description with minimum 120 characters *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }
        if ($('#contact_number').val() == '') {
            status = false;
            $("#contact_number").focus();
            $('#p12').text("* please Enter Contact Number *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }
        if ($('#Autocomplete2').val() == '') {
            status = false;
            $("#Autocomplete2").focus();
            $('#p10').text("* please Select event Areaname *");
            x1.className = "show";
            setTimeout(function() {
                x1.className = x1.className.replace("show", "");
            }, 3000);
        }

        return status;
    });
</script>
