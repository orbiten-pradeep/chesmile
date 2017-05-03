<?php echo $this->Html->css(['form-basic']); ?>
<?php 
use Cake\Routing\Router;
?>


<style type="text/css">
    /******************************************************PROFILE CSS ************************************/
/*/*.card-block{
    padding-left:3%;
    padding-top:3%;
}
.container{
    background:#f2f2f2;
}
.card h4{
    font-weight:700;
    font-size:40px;
    color:#1b8fca;
}
.card h6{
    font-weight:300;
    font-size:24px;
    color:#444545;
}
.card{
    margin-top:5%;
    margin-bottom:5%;
    border-radius:10px;
    background-color:#fdfdfd;
    
}
.about{
    font-size:20px;
}
hr { 
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));   
    opacity:0.2;
}
.cb2{
    font-weight:600;
    color:#444545;
    font-size:20px;
}
.card-link{
    color:#F38499;
}
.card-link a:hover{
    color:#1b8fca;
}

/****************************************************** EVENT CREATION FORM CSS ************************************/


/*body{
    background-color: #f2f2f2;
    font-family: 'Raleway', sans-serif;
}
#logo{
    max-width:80%;
    margin-top:-20px;
}
.main-content{
    margin-top:3%;
}

.form-basic{
    max-width: 640px;
    margin: 0 auto;
    padding: 55px;
    box-sizing: border-box;
    background-color:  #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    font: bold 14px sans-serif;
    text-align: center;
}
.form-group{
    font-family: 'Raleway', sans-serif;
}
.form-group span{
    font-size:18px;
    color:#1b8fca;
}
.form-basic .form-group{
    text-align: left;
    margin-bottom: 22px;
}
.form-basic .form-title-row{
    text-align: center;
    margin-bottom: 55px;
}

/* The form title */
/*.form-basic h1{
    display: inline-block;
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 0 10px 15px;
    border-bottom: 2px solid #6caee0;
    margin: 0;
}

.form-basic textarea{
    color: #444545;
    box-sizing: border-box;
    width: 240px;
    height: 80px;
    font: 'Raleway', sans serif;
    padding: 12px;
    border: 1px solid #d2d2d2;
    resize: vertical;
    font-size:12px;
}
.form-basic textarea:focus{
    border: 1px solid #1b8fca;
}
.form-basic .form-group > label span{
    display: inline-block;
    box-sizing: border-box;
    color: #444445;
    width: 180px;
    text-align: right;
    vertical-align: top;
    padding: 12px 25px;
    font-size:13px;
    font-weight:500;
}
.form-basic input{
    color:  #444545;
    box-sizing: border-box;
    width: 240px;
    font-size:14px;
    font-weight:400;
    padding: 12px;
    border: 1px solid #d2d2d2;
    height: auto !important;
}
.form-basic input:focus{
    border:1px solid #1b8fca;
}
.form-basic input[type=radio],
.form-basic input[type=checkbox]{
    box-shadow: none;
    width: auto;
}
.form-basic input[type=checkbox]{
    margin-top: 13px;
}
.form-basic select{
    background-color: #ffffff;
    color:  #5f5f5f;
    box-sizing: border-box;
    max-width: 240px;
    padding: 12px 8px;
    border: 1px solid #d2d2d2;
    font-family:'Raleway', sans serif;
    color:#444545;
    font-weight:400;
}
.form-basic select:active{
    border: 1px solid #1b8fca;
}
.form-basic .form-radio-buttons{
    display: inline-block;
    vertical-align: top;
}
.form-basic .form-radio-buttons > div{
    margin-top: 10px;
}
.form-basic .form-radio-buttons label span{
    margin-left: 8px;
    color: #5f5f5f;
    font-weight: normal;
    
}
.form-basic .form-radio-buttons input{
    width: auto;
}
#subbutton{
    font-family:'Raleway', sans serif;
    display: block;
    border-radius: 2px;
    background-color:  #1b8fca;
    color: #f2f2f2;
    font-weight: 800;
    font-size:18px;
    padding: 14px 22px;
    border: 0;
    margin: 40px 183px 0;
    transition:0.1s ease-out;
}

.form-basic input:focus{
    border: 1px solid #1b8fca;
}
#subbutton:hover{
    background:#f38499;
    cursor:pointer;
}
.form-basic .small input{
    font-size:13px;
    color: #f2f2f2;
    font-weight: 800;
    border: 0;
    transition:0.1s ease-out;
    font-family:'Raleway', sans serif;
    margin-top:10px;
    box-sizing: none;
    width: 75px;
    font-size:12px;
    font-weight:400;
    padding: 0;
    border: none;
}
@media (max-width: 600px) {
    .form-basic{
        padding: 30px;
        max-width: 480px;
    }
    .form-basic .form-group{
        max-width: 300px;
        margin: 25px auto;
        text-align: left;
    }
    .form-basic .form-title-row{
        margin-bottom: 50px;
    }
    .form-basic .form-group > label span{
        display: block;
        text-align: left;
        padding: 0 0 15px;
        font-weight:400;
    }
    .form-basic select{
        width: 240px;
    }
    .form-basic input[type=checkbox]{
        margin-top:0;
    }
    .form-basic .form-radio-buttons > div{
        margin: 0 0 10px;
    }
    .form-basic button{
        margin: 0;
    }*/
/*}*/

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
<!-- 
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js">

 -->

 <!-- <div class="main-content">
        <form class="form-basic" method="post" action="#">
            <div class="form-title-row">
                <img id="logo"src="Images/logo.png">
            </div>

            <div class="form-group">
          <?= $this->Form->input('title');?>
                <label>
                    <span>Event Title</span>
                    <input type="text" name="name">
                </label>
            </div>
            <div class="form-group">
            <?= $this->Form->input('description');?>
                <label>
                    <span>Description</span>
                    <textarea name="textarea"></textarea>
                </label>
            </div>
            
            <div class="form-group">
            <?= $this->Form->input('categories_id', ['options' => $categories, 'onChange' => 'checkForOther(this);', 'empty' => '(choose one)']);?>
                <label>
                    <span>Category</span>
                    <select name="dropdown">
                        <option>Arts & Crafts</option>
                        <option>Theatrical</option>
                        <option>Dance</option>
                        <option>Music</option>
                        <option>Day Events</option>
                        <option>Festivals</option>
                        <option>Business</option>
                        <option>Education</option>
                        <option>Adventure</option>
                        <option>Auditions</option>
                        <option>Exhibitions</option>
                        <option>Contests</option>
                        <option>Fund raising & Charity</option>
                        <option>Health & Wellness</option>
                        <option>Sports</option>
                        <option>Beauty & Fashion</option>
                        <option>Food & Dining</option>
                        <option>Road Shows</option>
                        <option>Spiritual Events</option>
                        <option>Fun & Entertainment</option>
                        <option>Kids</option>
                        <option>Party & Nightlife</option>
                    </select>
                </label>
            </div>
            <div class="form-group">

             <?= $this->Form->input('Eventsubcategories.sub_categories', ['options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)']);?>
                <label>
                    <span>Sub-Category</span>
                    <select name="dropdown">
                        <option>Arts & Crafts</option>
                        <option>Theatrical</option>
                        <option>Dance</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
          <?= $this->Form->input('Venue');?>
                <label>
                    <span>Event Venue</span>
                    <input type="text" name="name">
                </label>
            </div>
            <div class="form-group">
            <?=$this->Form->input('time', array('type' => 'text'), array('class' => 'timepicker'));?>
                <label>
                    <span>Event Time</span>
                    <input type="text" name="name">
                </label>
            </div>
            <div class="form-group">
            <?=$this->Form->input('date', array('type' => 'text'));?>
                <label>
                    <span>Event Date</span>
                    <input type="text" name="name" id="datepicker1">
                </label>
            </div>
            <div class="form-group small">
            <?=$this->Form->input('banner', ['type' => 'file']);?>
                <label>
                    <span>Upload Banner</span>
                    <input type="file" >
                
                </label>
            </div>
            <div class="form-group small">
           <?= $this->Form->input('display', ['type' => 'file']);?>
                <label>
                    <span>Upload Display Image</span>
                    <input type="file" >
                 
                </label>
            </div>
            <div class="form-group small">
           <?= $this->Form->input('Sponsors[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Sponsors']);?>
                <label>
                    <span>Sponsors logo</span>
                    <input type="file" id="Spons" name="img" multiple>
                </label>
            </div>
            <div class="form-group small">
            <?=$this->Form->input('Mediapartners[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Mediapartners']);?>
                <label>
                    <span>Media Partners</span>
                    <input type="file" >
                </label>
            </div>
            <div class="form-group">
            <?=$this->Form->input('OrganizersLogo', ['type' => 'file']);?>
                <label>
                    <span>Organisers </span>
                    <input type="text" name="name">
                </label>
            </div>
            <div class="form-group">
                <label>
                    <span>Thank you note </span>
                    <textarea name="textarea"></textarea>
                </label>
            </div>
            <div class="form-group">
            <?= $this->Form->button(__('Submit')) ?>
              <button id="subbutton" type="submit">Submit Form</button> -->
  <!--           </div>
        </form>
    </div>
 --> 
<!-- <div class="container">
    <div class="row"> -->
      <!-- left column -->
      
      <!-- edit form column -->
    <!-- <div class="main-content">
    <?= $this->Form->create($event,array('type' => 'file','class' => 'form-basic text-center')) ?> -->
       <!--  <form class="form-basic" method="post" action="#"> -->
<!--         <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
            <div class="form-group">
                <label> 
                   <?= $this->Form->input('title',array('class' => 'form-control','label' => false));?>
                </label>
            </div>
            <div class="form-group">
                <label>
                 <?=$this->Form->input('OrganizersName',array('class' => 'form-control'));?>
            </label>
            </div>
            <?= $this->Form->hidden('active');?>
            <div class="form-group">
                <label>

    <?= $this->Form->input('categories_id',array('class' => 'form-control','options' => $categories, 'onChange' => 'checkForOther(this);', 'empty' => '(choose one)'));?>
            </label>
            </div>
            <div class="form-group">
                <label>
            <?=$this->Form->input('Eventsubcategories.sub_categories',array('class' => 'form-control','options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)'));?>
            </label>
            </div>
            <div class="form-group">
                <label>
                   <?=$this->Form->input('descriptioin',array('class' => 'form-control'));?>
                </label>
            </div>
            <div class="form-group">
                <label>
           <?= $this->Form->input('date', array('type' => 'text','class' => 'form-control'));?>
           </label>
           </div>
            <div class="form-group">
                <label>
           <?=$this->Form->input('time', array('type' => 'text'), array('class' => 'form-control timepicker'));?>
           </label>
           </div>
            <div class="form-group">
                <label>
                   <?=$this->Form->input('Venue',array('class' => 'form-control'));?>
                </label>
            </div>
            <div class="form-group">
                <label>
            <?=$this->Form->input('banner',['type' => 'file']);?>
            </label>
            </div>
             <div class="form-group">
                <label>
            <?=$this->Form->input('display',['type' => 'file']);?>
            </label>
            </div>
            <div class="form-group">
                <label>
            <?=$this->Form->input('OrganizersLogo',['type' => 'file']);?>
            </label>
            </div> 
            <div class="form-group">
                <label>
           <?= $this->Form->input('Mediapartners[]',['type' => 'file', 'multiple' => 'true','label' => 'Mediapartners']);?>
            </label>
            </div>
            <div class="form-group">
                <label>
            <?=$this->Form->input('Sponsors[]',['type' => 'file', 'multiple' => 'true', 'label' => 'Sponsors']);?>
            </label>
            </div>
            <div class="form-group">
                <label>
            <?=$this->Form->input('address_1',array('class' => 'form-control'));?>
            </label>
            </div>
            <div class="form-group">
                <label>
            <?=$this->Form->input('address_2',array('class' => 'form-control'));?>
            </label>
            </div>
            <div class="form-group">
                <label>
            <?=$this->Form->input('landmark',array('class' => 'form-control'));?>
            </label>
            </div>
            <div class="form-group">
                <label>
            <div class="ui-widget">
            <label for="Autocomplete"></label>
            <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control'));?>
            </div>
            </label>
            </div>
              <div class="form-group">
                <label>
            <?=$this->Form->input('city', array('default' => 'CHENNAI', 'readonly','class' => 'form-control'));?>
            </label>
            </div>
             <div class="form-group">
                <label>
            <?=$this->Form->input('state', array('default' => 'TAMILNADU', 'readonly','class' => 'form-control'));?>
            </label>
            </div>
            <div class="form-group">
                <label>
            <?= $this->Form->input('country', array('default' => 'INDIA', 'readonly','class' => 'form-control'));?>
            </label>
            </div>
            <div class="form-group">
            <?= $this->Form->button('Submit',array('id' => 'subbutton')) ?>
            </div>
         <?= $this->Form->end() ?>
    </div>
    </div>
</div> -->

<!--  <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Events'), ['action' => 'index']) ?></li>

    </ul>
</nav> -->
<!-- <div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
            echo $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);
            echo $this->Form->input('title');
            echo $this->Form->input('OrganizersName');
            echo $this->Form->hidden('active');
            echo $this->Form->input('categories_id', ['options' => $categories, 'onChange' => 'checkForOther(this);', 'empty' => '(choose one)']);
            echo $this->Form->input('Eventsubcategories.sub_categories', ['options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)']);
            echo $this->Form->input('descriptioin');
            echo $this->Form->input('date', array('type' => 'text'));
            echo $this->Form->input('time', array('type' => 'text'), array('class' => 'timepicker'));
            echo $this->Form->input('Venue');
            echo $this->Form->input('banner', ['type' => 'file']);
            echo $this->Form->input('display', ['type' => 'file']);
            echo $this->Form->input('OrganizersLogo', ['type' => 'file']); 
            echo $this->Form->input('Mediapartners[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Mediapartners']);
            echo $this->Form->input('Sponsors[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Sponsors']);
            echo $this->Form->input('address_1');
            echo $this->Form->input('address_2');
            echo $this->Form->input('landmark');
            ?> 
            <div class="ui-widget">
            <label for="Autocomplete"></label>
            <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required')); ?>
            </div>
            <?php 
            echo $this->Form->input('city', array('default' => 'CHENNAI', 'readonly'));
            echo $this->Form->input('state', array('default' => 'TAMILNADU', 'readonly'));
            echo $this->Form->input('country', array('default' => 'INDIA', 'readonly'));
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
-->
<style type="text/css">
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
                 <?= $this->Form->create($event,array('id' => 'createEvent','type' => 'file')) ?>
                  <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
                <!-- <form role="form"> -->  <!-- <input type="text" class="form-control" placeholder="Event Title"> -->
                 
                    <div class="form-group float-label-control">
                        <label for="">Event Title</label>
         <?php echo $this->Form->input('title',array('div' => false,'id' => 'title', 'label' => false, 'class' => 'form-control form-element', 'placeholder' => 'Event Title','required' => true)); ?>
                      
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
            </div>

            <div class="form-group">
                <label>
            <?=$this->Form->input('Eventsubcategories.sub_categories',array('class' => 'form-control','options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)','label' => false,'empty' => false));?>
            </label>
            </div>

            <div class="form-group float-label-control">
                   <label for="">Description</label>
                  <?= $this->Form->input('descriptioin',array('div' => false, 'label' => false,'class' => 'form-control form-element','placeholder' => 'Description about your event','rows' => '1' ));?>
                  <!--  <textarea class="form-control" placeholder="Some Words about your event" rows="1"></textarea> -->
            </div>


            <div class="form-group float-label-control">
                   <label for="">Contact Number</label>
                  <?= $this->Form->input('contact_number',array('div' => false, 'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter Contact Number','required' => true));?>
                  <!--  <textarea class="form-control" placeholder="Some Words about your event" rows="1"></textarea> -->
            </div>

            <div class="form-group float-label-control">
                   <label for="">Mobile Number</label>
                  <?= $this->Form->input('mobile_number',array('div' => false,'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter Mobile Number', 'required' => true));?>
                  <!--  <textarea class="form-control" placeholder="Some Words about your event" rows="1"></textarea> -->
            </div>

             <div class="form-group">
                <label>
           <?= $this->Form->input('date', array('type' => 'text','class' => 'form-control date','placeholder' => 'Date','label' => false));?>
           </label>
           </div>

             <!-- <div class="form-group float-label-control">
                  <label for="datepicker">date</label>
                 <input type="text" class="form-control" placeholder="Event Date">
             </div> -->

           <div class="form-group">
            <label>
           <?=$this->Form->input('time', array('type' => 'text','class' => 'form-control timepicker time-bg','label' => false,'placeholder' => 'Time'));?>
           </label>
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
                       <!--  <input type="text" class="form-control" placeholder="Any Specific Landmarks?"> -->
            </div>

            <div class="form-group float-label-control">
                <div class="ui-widget">
                  <label for="Autocomplete"> Area Name</label>
                <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control form-element','label' => false,'placeholder' => 'Areaname'));?>
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
            <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control'));?>
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
            <!-- <?= $this->Form->end() ?> -->

            <div class="tab-pane fade imagevalid" id="profile">
            <!--  <?= $this->Form->create($event,array('id' => 'createEvent','type' => 'file', 'class' => 'imagevalid')) ?> -->
            <div class="form-group">
           <!--  <label>[Size: 1311 * 985px]</label> -->
                <label>
                    <?=$this->Form->input('banner',['type' => 'file','accept' => 'image/*']);?>
                    [Size: 1311 * 985px]
                    <span style="display: none;">Please upload an image with below 1mb </span>
                </label>
            </div>

             <div class="form-group">
                <label>
            <?=$this->Form->input('display',['type' => 'file','accept' => 'image/*']);?>
            [Size: 280px * 185px]
            </label>
            </div>

             <div class="form-group">
                <label>
            <?=$this->Form->input('OrganizersLogo',['type' => 'file','accept' => 'image/*']);?>
            [Size: 1311 * 985px]
            </label>
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
            <input class="btn btn-md btn-primary botton" type="button" value="Geocode" onclick="codeAddress()">            
        </div>  
        <div id="mapCanvas" style="width: 100%; height: 350px;"></div>
        <div id="infoPanel">
            <!--<b>Marker status:</b>
            <div id="markerStatus"><i>Click and drag the marker.</i></div>
            <b>Current position:</b>
            <div id="info"></div>-->
            <b>Closest matching address:</b>
            <div id="address"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
function autoHeight() {
            $('.content').css('min-height', 0);
            $('.content').css('min-height', ($(document).height() - $('#header').height() - $('.footer').height()));
        }
        </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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


  $("#createEvent" ).validate( {
    rules: {
      title: "required",
      contact_number: {
                    required: true,
                    minlength: 7,
                    maxlength: 10,
                    number: true
                },
    mobile_number:  {
                    required: true,
                    minlength: 10,
                    number: true
            }
            },
    messages: {
      title: "Please enter your Event's Title",
     contact_number:"Please enter a number with at least 7 and max 10 characters!",
      mobile_number:"Please enter a number with at least 10 characters!"
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `help-block` class to the error element
      error.addClass( "help-block" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.parent( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).parents( ".input" ).addClass( "has-error" ).removeClass( "has-success" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).parents( ".input" ).addClass( "has-success" ).removeClass( "has-error" );
    }
  });

});
</script>
<script type="text/javascript">

$(document).ready(function() {
        $(".imagevalid").validate();
    });

</script>