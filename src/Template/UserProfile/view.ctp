<style type="text/css">
  select.form-control:not([size]):not([multiple])
  {
    height: 3.5rem;
  }

.heigh{
    height: 35px !important;
}

float-label-control { position: relative; margin-bottom: 1.5em; }
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
    margin-top: 90px;
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
    margin-top: 15px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);
}

.card-container-prof.card-prof {
    max-width: 210px;
    padding: 10px 15px;

}
.email-bg{
  background-color: #4ABAC6 !important;
}

.category_btn{
    display: none !important;
}
.search-box-li{
    display: none !important;
}


</style>
<div class="container-fluid height">
    <div class="col-md-offset-2">
        <div class="card-prof card-container-prof">
        <div class="text-center">
         <?php if($userProfile->Photo) {
                echo $this->Html->image('profile/'.$userProfile->Photo, array('height' => '100px','width' => '100px','alt'=>'aswq'));
            }  else {
                echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-circle')); 
            }
            ?>
            <!-- <h6>Upload a different photo...</h6>
           <?= $this->Form->input('Photo', ['type' => 'file']);?> -->
        </div>
        </div>
    </div>
</div>

<div class="container content">
    <div class="row">

    <div class="card card-container col-md-offset-2">

                    <h3><?= h($userProfile->fullname) ?></h3>
    <table class="table borderless">
         <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($userProfile->Mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 1') ?></th>
            <td><?= h($userProfile->Address_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 2') ?></th>
            <td><?= h($userProfile->Address_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($userProfile->City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($userProfile->State) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($userProfile->Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= $this->Number->format($userProfile->Zipcode) ?></td>
        </tr>
    </table>

    <div class="pull-right">
    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')).'Edit', array('action' => 'edit', $userProfile->id), array('class' => 'btn btn-primary','escape' => false)) ?>
            </div>





</div>
</div>
</div>
<script type="text/javascript">
 // function to set the height on fly
 function autoHeight() {
   $('.content').css('min-height', 0);
   $('.content').css('min-height', (
     $(document).height() 
     - $('#header').height() 
     - $('.footer').height()
   ));
 }

 // onDocumentReady function bind
 $(document).ready(function() {
   autoHeight();
 });

 // onResize bind of the function
 $(window).resize(function() {
   autoHeight();
 });
 </script>

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
    <!-- <div class="col-sm-3 col-sm-offset-2 col-lg-3 col-md-3 col-lg-offset-1 content">

        <div class="form-group">
            <?=  $this->Form->input('fullname',array('default'=> $fullname,'class' => 'form-control','type' => 'text')); ?>
        </div>

        <div class="form-group">
            <?= h($user->email) ?>
        </div>

        <div class="form-group">
            <?=  $this->Form->input('group_id', array('options' => $groups,'class' => 'form-control size')); ?>
        </div>

        <div class="form-group">
            <?= $this->Form->input('Mobile',array('class' => 'form-control')); ?>
        </div>

        <div class="form-group">
            <?= $this->Form->input('Address_1',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <?= $this->Form->input('Address_2',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <?=$this->Form->input('City',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('State',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('Country',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('Zipcode',array('class' => 'form-control'));?>
        </div>

            <?= $this->Form->end() ?>


               <div class="form-group">
           <?= $this->Form->input('Country',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('Zipcode',array('class' => 'form-control'));?>
        </div>
        <div class="pull-right">
        <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary')); ?>
        </div>
            <?= $this->Form->end() ?>
         </div> -->
    </div>
</div>

<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Profile'), ['action' => 'edit', $userProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Profile'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?> </li>
    </ul>
</nav>
<div class="userProfile view large-9 medium-8 columns content">
    <h3><?= h($userProfile->fullname) ?></h3>
    <table class="vertical-table">
    	 <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
    	 <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($userProfile->Mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 1') ?></th>
            <td><?= h($userProfile->Address_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 2') ?></th>
            <td><?= h($userProfile->Address_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($userProfile->City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($userProfile->State) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($userProfile->Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?php if($userProfile->Photo) 
            {
            	echo $this->Html->image('profile/'.$userProfile->Photo, array('width' => '200px','alt'=>'aswq'));
            }  ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= $this->Number->format($userProfile->Zipcode) ?></td>
        </tr>
    </table>
</div>
 -->