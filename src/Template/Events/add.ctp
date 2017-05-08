<?php echo $this->Html->css(['form-basic']); ?>
<?php 
use Cake\Routing\Router;
?>


<style type="text/css">
body, .modal-open .page-container, .modal-open .page-container .navbar-fixed-top, .modal-open .modal-container {
    overflow-y: scroll;
}
@media (max-width: 979px) {
    .modal-open .page-container .navbar-fixed-top {
        overflow-y: visible;
    }
}
#map-canvas {
    height: 400px;
}
</style>

<style type="text/css">
    textarea {
       resize: none;
    }
    .float-label-control { position: relative; margin-bottom: 1.5em; }
    /*.float-label-control ::-webkit-input-placeholder { color: transparent; }
    .float-label-control :-moz-placeholder { color: transparent; }
    .float-label-control ::-moz-placeholder { color: transparent; }
    .float-label-control :-ms-input-placeholder { color: transparent; }*/
    .float-label-control input:-webkit-autofill,
    .float-label-control textarea:-webkit-autofill { background-color: transparent !important; -webkit-box-shadow: 0 0 0 1000px white inset !important; -moz-box-shadow: 0 0 0 1000px white inset !important; box-shadow: 0 0 0 1000px white inset !important; }
    .float-label-control input, .float-label-control textarea, .float-label-control label { font-size: 1.3em; box-shadow: none; -webkit-box-shadow: none; }
        .float-label-control input:focus,
        .float-label-control textarea:focus { box-shadow: none; -webkit-box-shadow: none; border-bottom-width: 2px; padding-bottom: 0; background: none; }
        .float-label-control textarea:focus { padding-bottom: 4px; }
    .float-label-control input, .float-label-control textarea { display: block; width: 100%; padding: 0.1em 0em 1px 0em; border: none; border-radius: 0px; border-bottom: 1px solid black; outline: none; margin: 0px; background: none; }
    .float-label-control textarea { padding: 0.1em 0em 5px 0em; }
    .float-label-control label { position: absolute; font-weight: normal; top: -1.0em; left: 0.08em; color: white; z-index: -1; font-size: 0.85em; -moz-animation: float-labels 300ms none ease-out; -webkit-animation: float-labels 300ms none ease-out; -o-animation: float-labels 300ms none ease-out; -ms-animation: float-labels 300ms none ease-out; -khtml-animation: float-labels 300ms none ease-out; animation: float-labels 300ms none ease-out; /* There is a bug sometimes pausing the animation. This avoids that.*/ animation-play-state: running !important; -webkit-animation-play-state: running !important; }
    .float-label-control input.empty + label,
    .float-label-control textarea.empty + label { top: 0.1em; font-size: 1.5em; animation: none; -webkit-animation: none; }
    .float-label-control input:not(.empty) + label,
    .float-label-control textarea:not(.empty) + label { z-index: 1; }
    .float-label-control input:not(.empty):focus + label,
    .float-label-control textarea:not(.empty):focus + label { color: white; }
    .float-label-control.label-bottom label { -moz-animation: float-labels-bottom 300ms none ease-out; -webkit-animation: float-labels-bottom 300ms none ease-out; -o-animation: float-labels-bottom 300ms none ease-out; -ms-animation: float-labels-bottom 300ms none ease-out; -khtml-animation: float-labels-bottom 300ms none ease-out; animation: float-labels-bottom 300ms none ease-out; }
    .float-label-control.label-bottom input:not(.empty) + label,
    .float-label-control.label-bottom textarea:not(.empty) + label { top: 3em; }


@keyframes float-labels {
    0% { opacity: 1; color: white; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: -1em; opacity: 1; }
}

@-webkit-keyframes float-labels {
    0% { opacity: 1; color: white; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: -1em; opacity: 1; }
}

@keyframes float-labels-bottom {
    0% { opacity: 1; color: white; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: 3em; opacity: 1; }
}

@-webkit-keyframes float-labels-bottom {
    0% { opacity: 1; color: white; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: 3em; opacity: 1; }
}
.wrapp{
    max-width: 640px;
    /*margin: 0 auto;*/
    padding: 55px;
    box-sizing: border-box;
    background-color:  #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    margin-bottom: 35px;
   /* font: bold 14px sans-serif;
    text-align: center;*/
}
.heigh{
    height: 35px !important;
}

label {
    font-weight: inherit !important;
}
.height{
    background-color: #474747;
    height:100px;
}
.card-container.card {
    max-width: 800px;
    padding: 40px 40px;
}

.formheigh{
  margin-top: -35px;
}

.card {
    background-color: #4ABAC6;
    color: white;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    /*margin: 30px auto 25px;*/
   /* margin: 30px 190px 25px;*/
    margin-top: 0px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    /*-moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);*/
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: white !important;
}
::-moz-placeholder { /* Firefox 19+ */
  color: white !important;
}
:-ms-input-placeholder { /* IE 10+ */
  color: white !important;
}
:-moz-placeholder { /* Firefox 18- */
  color: white !important;
}


input{
    color:white !important;
}

.form-control:focus{
    border-color: white !important;
}

.error-message{
    color: red !important;
    font-size: 11px;
    font-style: normal;
}
.help-block{
    color: red !important;
    font-size: 11px;
    font-style: normal;
}
.error{
    color: red !important;
    font-size: 11px;
    font-style: normal;

}
  .card-prof {
    background-color: #4ABAC6;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    /*margin: 30px auto 25px;*/
    margin-top: 60px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);
}

.card-container-prof.card-prof {
    max-width: 90px;
    padding: 40px 40px;

}
.date{
    background-color: #4ABAC6;
}
.date:focus{
    background-color: #4ABAC6;
}
.time-bg{
    background-color: #4ABAC6;
}
.time-bg:focus{
    background-color: #4ABAC6;
}
.map{
    background-color: #4ABAC6 !important;
}
.map:focus{
    background-color: #4ABAC6;
}
.city{
     background-color: #4ABAC6 !important;
}
.city:focus{
     background-color: #4ABAC6;
}
.state{
     background-color: #4ABAC6 !important;
}
.state:focus{
     background-color: #4ABAC6;
}
.country{
     background-color: #4ABAC6 !important;
}
.country:focus{
     background-color: #4ABAC6;
}
.subclass{
    overflow: overlay;
}
 .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
      }

      #display-preview{
        width: 280px;
        height: 185px;

      }

      #banner-preview{
        width: 285px;
        height: 185px;

      }

      #organizer-preview{
        width: 280px;
        height: 185px;
      }

      .cropit-preview-image-container {
        cursor: move;
      }
#display{
    display: none;
}
</style>
<div class="container-fluid height">
    <div class="col-md-offset-2">
        <div class="card-prof card-container-prof">

        </div>
    </div>
</div>

<div class="container content">
    <div class="row">
 <ul class="nav nav-tabs col-md-offset-2" style="margin-top:50px;" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                   Event Information
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                       Additional Details
                     </span> 
                    </a>
                 </li>
                     
                     </ul>

    <div class="card card-container col-md-offset-2">
    <!-- <div class="col-sm-8"> -->
    <div class="tab-content">
    <div class="tab-pane fade in active" id="home">
                 <?= $this->Form->create($event,array('id' => 'createEvent','type' => 'file','novalidate' => true)) ?>
                  <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
                <!-- <form role="form"> -->  <!-- <input type="text" class="form-control" placeholder="Event Title"> -->
                 
                    <div class="form-group float-label-control">
                        <label for="">Event Title</label>
         <?php echo $this->Form->input('title',array('div' => false,'id' => 'title', 'label' => false, 'class' => 'form-control form-element', 'placeholder' => 'Event Title')); ?>
            <span id="title_error" style="color: #FF0000;"></span>
                      
                    </div>

                    <div class="form-group float-label-control">
                        <label for="">Organizers Name</label>
                         <?=  $this->Form->input('OrganizersName',array('div' => false, 'label' => false, 'class' => 'form-control form-element','placeholder' => 'Organizer Name'));?>
                        <!-- <input type="text" class="form-control" placeholder="Organizers Name"> -->
                    </div>

            <?= $this->Form->hidden('active');?>

                    <div class="form-group">
                <label>
<?= $this->Form->input('categories_id',array('class' => 'form-control heigh','options' => $categories_list, 'onChange' => 'checkForOther(this);', 'empty' => '(Select Categories)','label' => false));?>
            </label>
            <span id="cate_error" style="color: #FF0000;"></span>
            </div>

            <div id="subdiv" class="form-group" style="display: none;">
                <label>
            <?=$this->Form->input('Eventsubcategories.sub_categories',array( 'subcategory_id'=>'', 'class' => 'form-control subclass','options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)','label' => false,'empty' => false));?>
            </label>
            <span id="subcate_error" style="color: #FF0000;"></span>
            </div>

            <div class="form-group">
                   <label for="">Description</label>
                  <?= $this->Form->input('descriptioin',array('div' => false, 'label' => false,'class' => 'form-control form-element','placeholder' => 'Description about your event','rows' => '4', 'cols' => '50', 'resize'=> 'none' ));?>
                  <span id="description_error" style="color: #FF0000;"></span>
                  <br/>
                  <!--  <textarea class="form-control" placeholder="Some Words about your event" rows="1"></textarea> -->
                  <input type="button" id="id_typemore" name="id_typemore" class="btn" style="float: right;background-color: #337AB7;" value="Type More Here..." />
            </div>

            <div class="form-group" style="display: none;" id="id_moredes">
                   <label for="">Description More..</label>
                  <?= $this->Form->input('descriptioin_more',array('div' => false, 'label' => false,'class' => 'form-control form-element','placeholder' => 'Type more description.','style' => 'color:black !important;', 'type' => 'textarea' ));?>
            </div>


            <div class="form-group float-label-control">
                    <label for="">Contact Number</label>
                  <?= $this->Form->input('contact_number',array('div' => false,'id' =>'contact_number', 'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter Contact Number'));?>
                  <span id="contact_error" style="color: #FF0000;"></span>
                  <!--  <textarea class="form-control" placeholder="Some Words about your event" rows="1"></textarea> -->
            </div>

            <div class="form-group float-label-control">
                   <label for="">Mobile Number</label>
                  <?= $this->Form->input('mobile_number',array('id' => 'mobile_number', 'div' => false,'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter Mobile Number'));?>
                  <span id="mobile_error" style="color: #FF0000;"></span>
                  <!--  <textarea class="form-control" placeholder="Some Words about your event" rows="1"></textarea> -->
            </div>

             <div class="form-group">
                <label>
           <?= $this->Form->input('date', array('type' => 'text','class' => 'form-control date','placeholder' => 'Date','label' => false));?>
           </label>
           <span id="date_error" style="color: #FF0000;"></span>
           </div>

             <!-- <div class="form-group float-label-control">
                  <label for="datepicker">date</label>
                 <input type="text" class="form-control" placeholder="Event Date">
             </div> -->

           <div class="form-group">
            <label>
           <?=$this->Form->input('time', array('type' => 'text','class' => 'form-control timepicker time-bg','label' => false,'placeholder' => 'Time'));?>
           </label>
           <span id="time_error" style="color: #FF0000;"></span>
           </div>
                     <!-- <div class="form-group float-label-control">
                        <label for="">Venue</label>
                        <?=  $this->Form->input('venue',array('div' => false, 'label' => false, 'class' => 'form-control form-element','placeholder' => 'Enter Venue'));?>
                    </div> -->

            <div class="form-group float-label-control">
                <label for="">Address 1</label>
            <?= $this->Form->input('address_1',array('div' => false,'label' => false,'class' => 'form-control form-element', 'placeholder' => 'Enter address 1'));?>
                      <!--   <input type="text" class="form-control" placeholder="Enter Address 1"> -->
            </div>

            <div class="form-group float-label-control">
                        <label for="">Address 2</label>
            <?= $this->Form->input('address_2',array('div' => false,'label' => false,'class' => 'form-control form-element', 'placeholder' => 'Enter address 2'));?>
                        <!-- <input type="text" class="form-control" placeholder="Enter Address 2"> -->
            </div>

            <div class="form-group float-label-control">
                        <label for="">Landmark</label>
               <?= $this->Form->input('landmark',array('div' => false,'label' => false,'class' => 'form-control form-element', 'placeholder' => 'Any Specific Landmark?'));?>
               <span id="landmark_error" style="color: #FF0000;"></span>
                       <!--  <input type="text" class="form-control" placeholder="Any Specific Landmarks?"> -->
            </div>

            <div class="form-group float-label-control">
                <div class="ui-widget">
                  <label for="Autocomplete"> Area Name</label>
                <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control form-element','label' => false,'placeholder' => 'Areaname'));?>
                  <span id="area_error" style="color: #FF0000;"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="">Add Map Location</label>                
                <input type="text" class="form-control map" id="googleMapID" name="google_map" placeholder="" readonly="" style="color: black !important;">
                <input type="button" class="btn launch-map" value="Launch Map" style="background-color: #337AB7"; />
            </div>

            <!-- <div class="form-group float-label-control">
                    <div class="ui-widget">
                        <label for="">Areaname</label>
                        <input for="Autocomplete" type="text" class="form-control">
                    </div>
            </div> -->

           <!--   <div class="form-group">
                <label>
            <div class="ui-widget">
            <label for="Autocomplete"></label>
            <?php //echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control'));?>
            </div>
            </label>
            </div> -->

                <div class="form-group">
                <label>
            <?=$this->Form->input('city', array('default' => 'CHENNAI', 'readonly','class' => 'form-control city'));?>
            </label>
            </div>

             <div class="form-group">
                <label>
            <?=$this->Form->input('state', array('default' => 'TAMILNADU', 'readonly','class' => 'form-control state'));?>
            </label>
            </div>

            <div class="form-group">
                <label>
            <?= $this->Form->input('country', array('default' => 'INDIA', 'readonly','class' => 'form-control country'));?>
            </label>
            </div>
            
            </div>
            

            <div class="tab-pane fade imagevalid" id="profile">
            
            <div class="form-group">
                <div class="image-editor">
                    <label>
                        <?=$this->Form->input('banner',['type' => 'file','accept' => 'image/*', 'class' => 'cropit-image-input']);?>
                        [Size: 1311 * 985px]
                    </label>
                    <div id="container-size" style="width:200px; height:200px; display: none;">
                    <div class="cropit-preview" id="banner-preview" style="display: none;"></div></div>
                      <div class="image-size-label">
                      </div>
                   
                      <input id="banner-zoom" type="range" class="cropit-image-zoom-input" style="display: none;">

                </div>
            </div>

             <div class="form-group">
                <div class="image-editor">
                   <label>
                <?=$this->Form->input('display',['type' => 'file','accept' => 'image/*','class' => 'cropit-image-input']);?>
                [Size: 280px * 185px]
                      <!-- <input type="file" id="imgsel" class="cropit-image-input" accept="images/*"> -->
                      <div class="cropit-preview" id="display-preview" style="display: none;"></div>
                      <div class="image-size-label">
                      </div>
                      <input id="display-zoom" type="range" class="cropit-image-zoom-input" style="display: none;">
          
                </div>
            </div>

             <div class="form-group">
                <div class="image-editor">
                    <label>
                            <?=$this->Form->input('OrganizersLogo',['type' => 'file','id' => 'org','accept' => 'image/*','class' => 'cropit-image-input']);?>
                            Size: 1311 * 985px]
                    </label>
                    <div class="cropit-preview" id="organizer-preview" style="display: none;"></div>
                    <div class="image-size-label"></div>
                    <input id="organizers-zoom" type="range" class="cropit-image-zoom-input" style="display: none;">
                </div>
            </div>

             <div class="form-group">
                    <label>
                        <?= $this->Form->input('Mediapartners[]',['type' => 'file', 'multiple' => 'true','label' => 'Mediapartners','accept' => 'image/*']);?>
                        [Size: 1311 * 985px]
                    </label>
            </div>

             <div class="form-group">
                <label>
            <?=$this->Form->input('Sponsors[]',['type' => 'file', 'multiple' => 'true', 'label' => 'Sponsors','accept' => 'image/*']);?>
            [Size: 1311 * 985px]
            </label>
            </div>


            <div class="form-group">
            <?= $this->Form->button('Submit',array('id' => 'subbutton')) ?>
            </div>
             <?= $this->Form->end() ?>
            </div>



            <!-- </div> -->


</div>
</div>
    </div>
</div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Map</h5>        
      </div>
      <div class="modal-body">
        <div id="mapPanel">            
            <input class="form-control text" id="city_country" type="textbox" value="Mylapore, Chennai" style="color: black !important;">
            <input class="btn btn-md btn-primary botton" type="button" value="save" onclick="codeAddress()">            
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <!--  <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button> -->
      </div>
    </div>
  </div>
</div>



        <script src="//code.jquery.com/jquery-1.9.1.js"></script>

 <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript">
function autoHeight() {
            $('.content').css('min-height', 0);
            $('.content').css('min-height', ($(document).height() - $('#header').height() - $('.footer').height()));
        }
        </script>

<!--   <script type="text/javascript">
$("#banner").change(function () {
       if ($(this).val() !== "") {
        var file = $('#banner')[0].files[0];
        console.log(file.size);
        //console.log(file.width);
        var reader = new FileReader();
        var img = new Image();
        
        reader.readAsDataURL(file);
        reader.onload = function(_file) {
            img.src= _file.target.result;
            console.log(img.width,img.height);
        } 
       }
});
  </script>
 -->



<script type="text/javascript">
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

<script type="text/javascript">
$(document ).ready( function () {

  /*$.validator.setDefaults({
      submitHandler: function (form) {

         if ($(form).valid()) {
             form.submit();
         }
      }
  });*/


  // $("#createEvent" ).validate( {
  //   rules: {
  //     title: "required",
  //     contact_number: {
  //                   required: true,
  //                   minlength: 7,
  //                   maxlength: 10,
  //                   number: true
  //               },
  //   mobile_number:  {
  //                   required: true,
  //                   minlength: 10,
  //                   number: true
  //           }
  //           },
  //   messages: {
  //     title: "Please enter your Event's Title",
  //    contact_number:"Please enter a number with at least 7 and max 10 characters!",
  //     mobile_number:"Please enter a number with at least 10 characters!"
  //   },
  //   errorElement: "em",
  //   errorPlacement: function ( error, element ) {
  //     // Add the `help-block` class to the error element
  //     error.addClass( "help-block" );

  //     if ( element.prop( "type" ) === "checkbox" ) {
  //       error.insertAfter( element.parent( "label" ) );
  //     } else {
  //       error.insertAfter( element );
  //     }
  //   },
  //   highlight: function ( element, errorClass, validClass ) {
  //     $( element ).parents( ".input" ).addClass( "has-error" ).removeClass( "has-success" );
  //   },
  //   unhighlight: function (element, errorClass, validClass) {
  //     $( element ).parents( ".input" ).addClass( "has-success" ).removeClass( "has-error" );
  //   }
  // });

});
</script>
<script type="text/javascript">

// $(document).ready(function() {
//         $(".imagevalid").validate();
//     });


$("#display").click(function(){
      $("#display-preview").css('display','block');
      $("#display-zoom").css('display', 'block');
    });

$("#banner").click(function(){
      $("#container-size").css('display','block');
      $("#banner-preview").css('display','block');
      $("#banner-zoom").css('display', 'block');
    });

$("#org").click(function(){
    console.log("1211");
      $("#organizer-preview").css('display','block');
      $("#organizers-zoom").css('display', 'block');
    });

      $(function() {
        $('.image-editor').cropit({
        });

      });

      // $("#id_typemore").click(function(){
      //   alert("asfd");
      //   console.log("asdfasdf");
      //   $("#id_moredes").show();
      // });

$('#id_typemore').on('click', function () {
        $("#id_moredes").show();
    });


      // function typemore(){
      //   alert("asfd");
      //   $("#id_moredes").show();
      // }

    $("#createEvent").submit(function(event){
        var status =true ;
        if ($('#title').val() == '') {
            status = false;
           $("#title_error").text("please enter your title");
        }else{
            $("#title_error").text("");
        }

        if ($('#contact_number').val() == '') {
            status = false;
           $("#contact_error").text("please enter your Contact Number");
        }else{
            $("#contact_error").text("");
        } 

        if($("#descriptioin").val().length<=250){
            status = false;
            $("#description_error").text("please enter descriptioin minimun height is 120");
        }else{
            $("#description_error").text("");
        }

        if($("#landmark").val() == ''){
            status = false;
            $("#landmark_error").text("please type landmark");
        }else{
            $("#landmark_error").text("");
        }

        if($("#date").val() == ''){
            status = false;
            $("#date_error").text("please Select event date");
        }else{
            $("#date_error").text("");
        }

        if($("#time").val() == ''){
            status = false;
            $("#time_error").text("please Select event time");
        }else{
            $("#time_error").text("");
        }

        if($("#categories_id option:selected").val() == ''){
            status = false;
            $("#cate_error").text("please Select event category");
        }else{
            $("#cate_error").text("");
        }

        if($("#Autocomplete").val() == ''){
            status = false;
            $("#area_error").text("please Select event Areaname");
        }else{
            $("#area_error").text("");
        }
        
        return status;
    });
</script>