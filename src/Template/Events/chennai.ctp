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

<style type="text/css">
	.flex-cont{
		background-color: #f4f4f4;
	}
	.cs-descr-box{
		height: 250px; 
		overflow-y: scroll;
	}
	.cs-title{
		color: #4ABAC5;
	}
	.buy-btn{
		background-color: #FD7809;
	}
	.tag{
		background: linear-gradient(to top, rgba(0, 0, 0, 0.55) 50%, rgba(0, 0, 0, 0.63) 50%) !important;
	}
	.cs-tag-title{
		position: absolute;
		bottom: 0;
	}
	.mob-container{
		display: none;
	}
	.desk-container{
		display: block;
	}
	.rs-details{
		margin-left: 10px;
	}
	.cname-span{
		margin-top: 22px;
		color: #f4f4f4;
	}
	@media (max-width: 768px){
		.mob-container{
			display: block;
		}
		.desk-container{
		display: none;
	}
	}
</style>

<div class="col-md-12 col-xs-12 mb-4 pr-0 pl-0">
	<?php echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1')); ?>
	<div class="desk-container">
		<div class="container">
			<div class="cs-tag-title">
				<div class="d-inline-flex rounded pt-0 pr-2 pl-2 pb-2 tag border z-depth-1">
					<?php echo $this->Html->image('card/'.$event->category->card, array('width' => '50px', 'height' => '50px', 'class' => 'marg-card')); ?>
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
					<?php echo $this->Html->image('card/'.$event->category->card, array('width' => '50px', 'height' => '50px', 'class' => 'marg-card')); ?>
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
			<?php $bgImage = $event->banner;
			if(!empty($bgImage)){
	 			echo $this->Html->image('banner/'.$bgImage,array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded mb-4')); 
			}
			else {
	 			echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded mb-4')); 
			}	?>
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex flex-column">
						<div class="p-2 mb-4 flex-cont cs-descr-box rounded z-depth-1">
						    <h5 class="cs-title">Event Details</h5>
						    <p><?=  $this->Text->autoParagraph(h($event->descriptioin));?></p>
						</div>
						<div class="p-2 mb-4 flex-cont rounded z-depth-1">
						    <h5 class="cs-title">Terms & Conditions</h5>
						    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="d-flex flex-column">
			    <div class="p-2 mb-4 flex-cont rounded z-depth-1">
			    	<div class="text-center">
				    	<h5>₹ 699</h5>
				    	<button type="button" class="btn buy-btn">Get Tickets</button>
			    	</div>
			    	<div class="cs-details">
			    		<p><i class="fa fa-map-marker"></i><span class="rs-details"><?php echo empty(!$address->areaname) ? $address->areaname : ''; ?></span></p>
			    		<p><?php echo $this->Html->image('cal.png')?><span class="rs-details"><?= date_format($event->date, "j M Y") ?></span></p>
			    		<p><?php echo $this->Html->image('clock-chennaismile.png')?><span class="rs-details"><?= h($event->time) ?></span></p>
			    		<p><i class="fa fa-share-alt" aria-hidden="true"></i><span class="rs-details">1k shared</span></p>
			    		<p><i class="fa fa-heart-o" aria-hidden="true"></i><span class="rs-details">1k Liked</span></p>
			    		<p><i class="fa fa-eye" aria-hidden="true"></i><span class="rs-details">1k People Viewed</span></p>
			    	</div>
			    </div>
			</div>
			<?php $geoCode = (!empty($event->google_map)) ? $event->google_map : '13.0595365,80.24247919999993';?>
			<div class="d-flex flex-column">
			    <div class="p-2 mb-4 flex-cont rounded z-depth-1">
			    	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
			    	<div style='overflow:hidden;height:330px;width:100%;'>
			    		<div id='gmap_canvas' style='height:330px;width:700px;'>
			    		</div>
			    	</div>
			    	<p>
						<?php echo empty(!$address->address_1) ? $address->address_1. ", " : ''; ?>
						<?php echo empty(!$address->address_2) ? $address->address_2. ", " : ''; ?>
						<?php echo empty(!$address->landmark) ? $address->landmark. ", " : ''; ?>
						<?php echo empty(!$address->areaname) ? $address->areaname : ''; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script type='text/javascript'>
	function init_map(){
		var myOptions = {
			zoom:15,
			center:new google.maps.LatLng(<?=$geoCode;?>),
			mapTypeId: google.maps.MapTypeId.ROADMAP};
			map = new google.maps.Map(document.getElementById('gmap_canvas'), 
			myOptions);
			marker = new google.maps.Marker({
				map: map,position: new google.maps.LatLng(<?=$geoCode;?>)
			});
			}
		google.maps.event.addDomListener(window, 'load', init_map);
</script>




<!-- <div class="container">
	<div class="row">

	</div>
</div> -->
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		 <li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
		<?php if($u_id == $event->user_id){ ?>
		<li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
		<?php } ?>
	   <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?> </li> 
	</ul
</nav> -->
<!-- <script type="text/javascript">
	$(document).ready(function() {
	var $lightbox = $('#lightbox');
	
	$('[data-target="#lightbox"]').on('click', function(event) {
		var $img = $(this).find('img'), 
			src = $img.attr('src'),
			alt = $img.attr('alt'),
			css = {
				'maxWidth': $(window).width() - 100,
				'maxHeight': $(window).height() - 100
			};
	
		$lightbox.find('.close').addClass('hidden');
		$lightbox.find('img').attr('src', src);
		$lightbox.find('img').attr('alt', alt);
		$lightbox.find('img').css(css);
	});
	
	$lightbox.on('shown.bs.modal', function (e) {
		var $img = $lightbox.find('img');
			
		$lightbox.find('.modal-dialog').css({'width': $img.width()});
		$lightbox.find('.close').removeClass('hidden');
	});
});
</script> -->
<!-- <div class="events view large-9 medium-8 columns content">
	<h3><?= h($event->title) ?></h3>
	<table class="vertical-table">
		<tr>
			<th scope="row"><?= __('User') ?></th>
			<td><?= $event->has('user') ? $this->Html->link($event->user->id, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Title') ?></th>
			<td><?= h($event->title) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Category') ?></th>
			<td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Time') ?></th>
			<td><?= h($event->time) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Banner') ?></th>
			<td><?= h($event->banner) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Display') ?></th>
			<td><?= h($event->display) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('OrganizersName') ?></th>
			<td><?= h($event->OrganizersName) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('OrganizersLogo') ?></th>
			<td><?= h($event->OrganizersLogo) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Id') ?></th>
			<td><?= $this->Number->format($event->id) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Date') ?></th>
			<td><?= h($event->date) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Created') ?></th>
			<td><?= h($event->created) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Modified') ?></th>
			<td><?= h($event->modified) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Active') ?></th>
			<td><?= $event->active ? __('Yes') : __('No'); ?></td>
		</tr>
	</table>
	<div class="row">
		<h4><?= __('Descriptioin') ?></h4>
		<?= $this->Text->autoParagraph(h($event->descriptioin)); ?>
	</div>
	<div class="row">
		<h4><?= __('Venue') ?></h4>
		<?= $this->Text->autoParagraph(h($event->Venue)); ?>
	</div>
	<div class="related">
		<h4><?= __('Related Sub Categories') ?></h4>
		<?php if (!empty($event->sub_categories)): ?>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<th scope="col"><?= __('Id') ?></th>
				<th scope="col"><?= __('Categories Id') ?></th>
				<th scope="col"><?= __('Name') ?></th>
				<th scope="col"><?= __('Active') ?></th>
				<th scope="col"><?= __('Created') ?></th>
				<th scope="col"><?= __('Modified') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
			<?php foreach ($event->sub_categories as $subCategories): ?>
			<tr>
				<td><?= h($subCategories->id) ?></td>
				<td><?= h($subCategories->categories_id) ?></td>
				<td><?= h($subCategories->name) ?></td>
				<td><?= h($subCategories->active) ?></td>
				<td><?= h($subCategories->created) ?></td>
				<td><?= h($subCategories->modified) ?></td>
				<td class="actions">
					<?= $this->Html->link(__('View'), ['controller' => 'SubCategories', 'action' => 'view', $subCategories->id]) ?>
					<?= $this->Html->link(__('Edit'), ['controller' => 'SubCategories', 'action' => 'edit', $subCategories->id]) ?>
					<?= $this->Form->postLink(__('Delete'), ['controller' => 'SubCategories', 'action' => 'delete', $subCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategories->id)]) ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		<?php endif; ?>
	</div>
</div>
 -->