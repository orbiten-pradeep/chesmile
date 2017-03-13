<script type="text/javascript">
function checkForOther(id)
{
	var e = document.getElementById("categories-id");
	var strUser = e.options[e.selectedIndex].value;
	$select = $('#eventsubcategories-sub-categories');
	$.ajax({
        type:"POST",
        data:strUser,
        data:{"id":strUser},
        ContentType : 'application/json',
        dataType: 'json',
        url:"<?php echo $this->Url->build(['action' =>'viewresult']);?>",
        async:true,
        success: function(data) {
        	$select.html('');
            //iterate over the data and append a select option
            $.each(data, function(key, val){
				//alert(val);
                $select.append('<option value="' + key + '">' + val + '</option>');
            })
        },
        error: function (tab) {
            $select.html('<option id="-1">none available</option>');
        }
    });	
}

$( function() {
    $('#date').datepicker({
    	changeMonth: true,
        changeYear: true,
        minDate: new Date()
        });
  } );
$(document).ready(function(){
    $('#time').timepicker({ timeFormat: 'H:mm' });
});

$(document).ready(function(){
	var e = document.getElementById("categories-id");
	var strUser = e.options[e.selectedIndex].value;
	$select = $('#eventsubcategories-sub-categories');
	$.ajax({
        type:"POST",
        data:strUser,
        data:{"id":strUser},
        ContentType : 'application/json',
        dataType: 'json',
        url:"<?php echo $this->Url->build(['action' =>'viewresult']);?>",
        async:true,
        success: function(data) {
        	$select.html('');
            //iterate over the data and append a select option
            $.each(data, function(key, val){
				//alert(val);
                $select.append('<option value="' + key + '">' + val + '</option>');
            })
        },
        error: function (tab) {
            $select.html('<option id="-1">none available</option>');
        }
    });	
});

</script>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
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
        <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
        //echo $selected;
            echo $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);
            echo $this->Form->input('title');
            echo $this->Form->input('OrganizersName');
            echo $this->Form->hidden('active');
            echo $this->Form->input('categories_id', ['options' => $categories, 'onChange' => 'checkForOther(this);', 'empty' => '(choose one)']);
            echo $this->Form->input('Eventsubcategories.sub_categories', ['options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)','selected' => $selected]);
            echo $this->Form->input('descriptioin');
            echo $this->Form->input('date', array('type' => 'text'));
            echo $this->Form->input('time', array('type' => 'text'), array('class' => 'timepicker'));
            echo $this->Form->input('Venue');
            
            ////////////////////////////////////////////////////////////////////////////////////////////////////////
            if($event->banner) 
            {
            	echo $this->Html->image('banner/'.$event->banner, array('width' => '200px','alt'=>'aswq'));
            } 
            echo $this->Form->input('banner', ['type' => 'file']);
            if($event->display) 
            {
            	echo $this->Html->image('display/'.$event->display, array('width' => '200px','alt'=>'aswq'));
            } 
            echo $this->Form->input('display', ['type' => 'file']);
            
            if($event->OrganizersLogo) 
            {
            	echo $this->Html->image('OrganizersLogo/'.$event->OrganizersLogo, array('width' => '200px','alt'=>'aswq'));
            } 
            echo $this->Form->input('OrganizersLogo', ['type' => 'file']);
            echo $this->Form->hidden('active');
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
