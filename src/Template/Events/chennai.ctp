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
	<?php echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1')); ?>
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
			<?php $bgImage = $event->banner;
			if(!empty($bgImage)){
	 			echo $this->Html->image('banner/'.$bgImage,array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded mb-4')); 
			}
			else {
	 			echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded mb-4')); 
			}	?>
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex flex-column cs_right_details_mob">
					    <div class="p-4 mb-4 flex-cont rounded">
					    	<!-- <div class="text-center">
						    	<h5>₹ 699</h5>
						    	<button type="button" class="btn buy-btn">Get Tickets</button>
					    	</div> -->
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
					<div class="d-flex flex-column">
						<div class="p-4 mb-4 flex-cont cs-descr-box rounded">
						    <h5 class="cs-title">Event Details</h5>
						    <p><?=  $this->Text->autoParagraph(h($event->descriptioin));?></p>
						</div>
						<div class="p-4 mb-4 flex-cont rounded d-none">
						    <h5 class="cs-title">Terms & Conditions</h5>
						    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="d-flex flex-column cs_right_details_desk">
			    <div class="p-4 mb-4 flex-cont rounded">
			    	<!-- <div class="text-center">
				    	<h5>₹ 699</h5>
				    	<button type="button" class="btn buy-btn">Get Tickets</button>
			    	</div>
 -->			    	<div class="cs-details">
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
			    <div class="p-4 mb-4 flex-cont rounded">
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
