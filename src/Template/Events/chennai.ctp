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

<div class="col-md-12 col-xs-12 mb-4 pr-0 pl-0">
	<?php echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid static-banner z-depth-1')); ?>
	<div class="desk-container">
		<div class="container">
			<div class="cs-tag-title">
				<div class="d-inline-flex rounded pt-0 pr-2 pl-2 pb-2 tag border z-depth-1">
					<?php echo $this->Html->image('card/'.$event->category->card, array('class' => 'marg-card')); ?>
					<span class="cname-span"><?= h($event->category->name) ?></span>
				</div>
				<h1 class="tagline" style="color: #FFFFFF;"><?= h($event->title) ?></h1>
			</div>
		</div>
	</div>
	<div class="mob-container">
		<div class="container">
			<div class="cs-tag-title">
				<div class="d-inline-flex rounded pt-0 pr-2 pl-2 pb-2 tag">
					<?php echo $this->Html->image('card/'.$event->category->card, array('class' => 'marg-card')); ?>
					<span class="cname-span"><?= h($event->category->name) ?></span>
				</div>
				<h1 class="tagline" style="color: #FFFFFF; font-size: 13px;"><?= h($event->title) ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 mb-4">
			<div class="col-md-12 cs_banner_container mb-5">
				<?php $bgImage = $event->banner;
				if(!empty($bgImage)){
		 			echo $this->Html->image('banner/'.$bgImage,array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg')); 
				}
				else {
		 			echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg')); 
				}	?>
				<div class="banner_image">
					<?php $bgImage = $event->banner;
					if(!empty($bgImage)){
			 			echo $this->Html->image('banner/'.$bgImage,array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner')); 
					}
					else {
			 			echo $this->Html->image('/cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner')); 
					}	?>
				</div>
			</div>
			<div class="col-md-12 pr-0 pl-0">
				<div class="d-flex flex-column cs_right_details_mob">
				    <div class="p-4 mb-4 flex-cont rounded cs_details_block">
				    	<!-- <div class="text-center">
					    	<h5>₹ 699</h5>
					    	<button type="button" class="btn buy-btn">Get Tickets</button>
				    	</div> -->
				    	<div class="cs-details">
				    		<?php if(!empty($address) && isset($address->areaname)) { ?>
				    		<p>
				    			<i class="fa fa-map-marker"></i>
				    			<span class="rs-details">
				    				<?php echo $address->areaname; ?>
				    			</span>
				    		</p>
				    		<?php } ?>
				    		<?php if(isset($event->date) && !empty($event->date)) { ?>
				    		<p>
				    			<?php echo $this->Html->image('cal.png')?>
				    			<span class="rs-details">
				    				<?php echo date_format($event->date, "j M Y"); ?>
				    			</span>
				    		</p>
				    		<?php } ?>
				    		<?php if(isset($event->time) && !empty($event->time)) { ?>
				    		<p>
				    			<?php echo $this->Html->image('clock-chennaismile.png')?>
				    			<span class="rs-details">
				    				<?php echo h($event->time); ?>
				    			</span>
				    		</p>
				    		<?php } ?>
				    		<p><i class="fa fa-share-alt" aria-hidden="true"></i><span class="rs-details">0 Shared</span></p>
				    		<p><i class="fa fa-heart-o" aria-hidden="true"></i><span class="rs-details">0 Liked</span></p>
				    		<p><i class="fa fa-eye" aria-hidden="true"></i><span class="rs-details">0 People Viewed</span></p>
				    	</div>
				    </div>
				</div>
				<div class="d-flex flex-column">
					<?php if(isset($event->descriptioin) && !empty($event->descriptioin)) { ?>
					<div class="p-4 mb-4 flex-cont rounded cs_details_block">
					    <h5 class="cs-title">Event Details</h5>
					    <p><?php echo $this->Text->autoParagraph(h($event->descriptioin));?></p>
					</div>
					<?php } ?>
					<!-- <div class="p-4 mb-4 flex-cont rounded d-none cs_details_block">
					    <h5 class="cs-title">Terms & Conditions</h5>
					    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a</p>
					</div> -->
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="d-flex flex-column cs_right_details_desk">
			    <div class="p-4 mb-4 flex-cont rounded cs_details_block">
		    		<?php if(!empty($address) && isset($address->areaname)) { ?>
		    		<p>
		    			<i class="fa fa-map-marker"></i>
		    			<span class="rs-details">
		    				<?php echo $address->areaname; ?>
		    			</span>
		    		</p>
		    		<?php } ?>
		    		<?php if(isset($event->date) && !empty($event->date)) { ?>
		    		<p>
		    			<?php echo $this->Html->image('cal.png')?>
		    			<span class="rs-details">
		    				<?php echo date_format($event->date, "j M Y"); ?>
		    			</span>
		    		</p>
		    		<?php } ?>
		    		<?php if(isset($event->time) && !empty($event->time)) { ?>
		    		<p>
		    			<?php echo $this->Html->image('clock-chennaismile.png')?>
		    			<span class="rs-details">
		    				<?php echo h($event->time); ?>
		    			</span>
		    		</p>
		    		<?php } ?>
		    		<p><i class="fa fa-share-alt" aria-hidden="true"></i><span class="rs-details">1k shared</span></p>
		    		<p><i class="fa fa-heart-o" aria-hidden="true"></i><span class="rs-details">1k Liked</span></p>
		    		<p><i class="fa fa-eye" aria-hidden="true"></i><span class="rs-details">1k People Viewed</span></p>
		    	</div>
			</div>
			<?php if(isset($event->google_map) && !empty($event->google_map)) { $geoCode = $event->google_map; ?>
			<div class="d-flex flex-column">
			    <div class="p-4 mb-4 flex-cont rounded cs_details_block">
			    	<div style='overflow:hidden;height:330px;width:100%;'>
			    		<div id='gmap_canvas' style='height:330px;width:700px;'> </div>
			    	</div>
			    	<p>
						<?php echo (isset($address->address_1) && empty(!$address->address_1)) ? $address->address_1. ", " : ''; ?>
						<?php echo (isset($address->address_2) && empty(!$address->address_2)) ? $address->address_2. ", " : ''; ?>
						<?php echo (isset($address->landmark) && empty(!$address->landmark)) ? $address->landmark. ", " : ''; ?>
						<?php echo (isset($address->areaname) && empty(!$address->areaname)) ? $address->areaname : ''; ?>
					</p>
				</div>
			</div>
			<?php } else { $geoCode = '13.0595365, 80.24247919999993'; } ?>
			<input type="hidden" name="geoCode" id="geoCode" value="<?php echo $geoCode; ?>">
		</div>
	</div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
	<?php if(isset($u_id)) { ?>
		<?php if($u_id == $event->user_id) { ?>
		<li>
			<?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
		</li>
		<?php } ?>
		<?php if($u_id == $event->user_id){ ?>
		<li>
			<?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li> 
		<!--<li><?= $this->Form->postLink(__('Edit Event'), ['action' => 'edit', $event->id], ['confirm' => __('Are you sure you want to edit ?', $event->id)]) ?>-->
		</li> 
		<?php } ?>
	<?php } ?>
	</ul>
</nav>
 
<?php if($groups == 6 || $groups == 5 || $groups == 4 ){ ?>
	 <!-- <p>Ticket Price: Rs. <?= h($event->price) ?>/-
	Commission Amount: Rs. <?= h($event->commamount) ?>/- 
	 Settlement Amount: Rs.<?= h($event->settamount) ?>/-</p>
	 --><?= $this->Form->create('',array('url' => ['controller' => 'Events', 'action' => 'activate',$event->id]));?>
	<?= $this->Form->radio('active', ['DeActivate','Activate']);?>
	<?= $this->Form->button(__('Submit')); ?>
	<?= $this->Form->end() ?>
<?php } ?>