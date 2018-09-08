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
	<?php echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid static-banner')); ?>
	<div class="desk-container">
		<div class="container">
			<div class="cs-tag-title">
				<div class="d-inline-flex rounded pt-0 pr-2 pl-2 pb-2 tag tag-border z-depth-1">
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
		  <ul class="breadcrumb" style="background-color: transparent;">
    <li class="breadcrumb-item"><a href="http://www.chennaismile.com/events">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Category</a></li>
    <li class="breadcrumb-item"><a href="#">Events</a></li>
    <li class="breadcrumb-item active">Current</li>
  </ul>

			<div class="col-md-14 cs_banner_container mb-5">
				<?php $bgImage = $event->banner;
				if(!empty($bgImage)){
		 			echo $this->Html->image('banner/'.$bgImage,array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg')); 
				}
				else {
		 			echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner_bg')); 
				}	?>
				<!-- <div class="banner_image">
					<?php $bgImage = $event->banner;
					if(!empty($bgImage)){
			 			echo $this->Html->image('banner/'.$bgImage,array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner')); 
					}
					else {
			 			echo $this->Html->image('/cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded cs_banner')); 
					}	?>
				</div> -->
			</div>
			<div class="col-md-12 pr-0 pl-0">
				<div class="d-flex flex-column cs_right_details_mob">
				    <div class="p-4 mb-4 flex-cont rounded ">
				    	<div class="text-center">
					    	<h5>₹ 700</h5>
					    	<a href="javascript:;" class="btn buy-btn" data-toggle="modal" data-target="#get-ticket-modal">Get Tickets</a>
				    	</div>
				    	<div class="cs-details">
				    		<?php if(!empty($address) && isset($address->areaname)) { ?>
				    		<p>
				    			<i class="fa fa-map-marker"></i>
				    			<span class="rs-details-bold">
				    				<?php echo $address->areaname; ?>
				    			</span>
				    		</p>
				    		<?php } ?>
				    		<?php if(isset($event->date) && !empty($event->date)) { ?>
				    		<p><i class="fa fa-calendar" style="font-size:16px"></i>
				    		<!-- 	<?php echo $this->Html->image('cal.png')?> -->
				    			<span class="rs-details-bold">
				    				<?php echo date_format($event->date, "j M Y"); ?>
				    			</span>
				    		</p>
				    		<?php } ?>
				    		<?php if(isset($event->time) && !empty($event->time)) { ?>
				    		<p><i class="fa fa-clock-o" style="font-size:16px"></i>
				    			<!-- <?php echo $this->Html->image('clock-chennaismile.png')?> -->
				    			<span class="rs-details-bold">
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
					    <h6 class="event-details" "><?php echo $this->Text->autoParagraph(h($event->descriptioin),array('class' => 'event-details'));?></h6>
					</div>
					<?php } ?>
					<div class="p-4 mb-4 flex-cont rounded cs_details_block">
					    <h5 class="cs-title">Terms & Conditions</h5>
					    <p class="event-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a</p>
					</div>


						<div class="p-4 mb-4 flex-cont rounded z-depth-1">
						    <h5 class="cs-title">Mediapartner Logo</h5>
							<?php echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'thumb' )); ?>
							 <!-- <?= $this->Form->input('Mediapartners[]',['type' => 'file','name' =>'image_file_arr[]', 'label' => false,'multiple' => 'true','id'=>'files','accept' => 'image/*']);?><output id="list"></output> -->
						</div>

						<div class="p-4 mb-4 flex-cont rounded z-depth-1">
						    <h5 class="cs-title">Sponsors Logo</h5>
						    <?php echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'thumb' )); ?>
						    <!-- <?=$this->Form->input('Sponsors[]',['type' => 'file','label' => false, 'multiple' => 'true','id'=>'files1','accept' => 'image/*']);?> -->
						</div>

				</div>

			</div>
		</div>
		<div class="col-md-3 mb-4">
			<div class="d-flex flex-column cs_right_details_desk">
			    <div class="p-4 mb-4 flex-cont rounded cs_details_rightblock">
			    <div class="text-center">
					    	<h5>₹ 700</h5>
					    	<a href="javascript:;" class="btn buy-btn" data-toggle="modal" data-target="#get-ticket-modal">Get Tickets</a>
				    	</div>
		    		<?php if(!empty($address) && isset($address->areaname)) { ?>
		    		<p>
		    			<i class="fa fa-map-marker"></i>
		    			<span class="rs-details-bold">
		    				<?php echo $address->areaname; ?>
		    			</span>
		    		</p>
		    		<?php } ?>
		    		<?php if(isset($event->date) && !empty($event->date)) { ?>
		    		<p><i class="fa fa-calendar" style="font-size:16px"></i>
		    			<!-- <?php echo $this->Html->image('cal.png')?> -->
		    			<span class="rs-details-bold">
		    				<?php echo date_format($event->date, "j M Y"); ?>
		    			</span>
		    		</p>
		    		<?php } ?>
		    		<?php if(isset($event->time) && !empty($event->time)) { ?>
		    		<p> <i class="fa fa-clock-o" style="font-size:16px"></i>
		    			<!-- <?php echo $this->Html->image('clock-chennaismile.png')?> -->
		    			<span class="rs-details-bold">
		    				<?php echo h($event->time); ?>
		    			</span>
		    		</p>
		    		<?php } ?>
		    		<p><i class="fa fa-share-alt" aria-hidden="true"></i><span class="rs-details">1k shared</span></p>
		    		<p><i class="fa fa-heart-o" aria-hidden="true"></i><span class="rs-details">1k Liked</span></p>
		    		<p><i class="fa fa-eye" aria-hidden="true"></i><span class="rs-details">1k People Viewed</span></p>
		    	</div>
			</div>

	<div class="d-flex flex-column">
			    <div class="org-padd mb-4 flex-cont rounded cs_details_orgblock">
			    	
 <p style="font-weight: bold">Organizer Details</p>
 	<p class="event-details"><?php echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'org-img','id' => 'orgtarget' )); ?><br> Conducted By: <?php echo h($event->OrganizersName); ?></p>
			    	
				</div>
			</div>

			<?php if(isset($event->google_map) && !empty($event->google_map)) { $geoCode = $event->google_map; } else { $geoCode = '13.0595365, 80.24247919999993'; } ?>

			<div class="d-flex flex-column">
			   <!--  <div class="p-4 mb-4 flex-cont rounded cs_details_mapblock">-->
			      <div class="mb-4 flex-cont rounded cs_details_mapblock">
			   	<address>
						<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:330px;width:100%;'><div id='gmap_canvas2' style='height:330px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https:/disclaimergenerator.net">disclaimer example</a></small></div><style>#gmap_canvas2 img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map2(){var myOptions = {zoom:10,center:new google.maps.LatLng(<?=$geoCode;?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas2'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?=$geoCode;?>)});}google.maps.event.addDomListener(window, 'load', init_map2);</script>
					</address>
			    	<p>
						<?php echo (isset($address->address_1) && empty(!$address->address_1)) ? $address->address_1. ", " : ''; ?>
						<?php echo (isset($address->address_2) && empty(!$address->address_2)) ? $address->address_2. ", " : ''; ?>
						<?php echo (isset($address->landmark) && empty(!$address->landmark)) ? $address->landmark. ", " : ''; ?>
						<?php echo (isset($address->areaname) && empty(!$address->areaname)) ? $address->areaname : ''; ?>
						<?php echo h($event->contact_number); ?>
						<?php echo h($event->mobile_number); ?>
					</p>
				</div>
			</div>

			<div class="d-flex flex-column">
			    <div class="p-4 mb-4 flex-cont rounded cs_details_advertblock">
			    	<div style='overflow:hidden;height:330px;width:100%;'>
			    		<div  style='height:330px;width:700px;'> </div>
			    	</div>
			    	<p>
						
					</p>
				</div>
			</div>


		</div>
	</div>
</div>


<!-- Modal: Get Ticket Forms -->
<div class="modal modal-get-ticket fade" id="get-ticket-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            	<div class="e-full">
            		<div class="e-parent">
	            	<p class="e-title"><span><?= h($event->title) ?></span></p>
	            	<p class="e-details"><?php echo date_format($event->date, "j M Y"); ?> | <?php echo h($event->time); ?></p>
	            	</div>
            	</div>

            	<!-- Stepper -->
				<div class="steps-form-2">
				    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
				        <div class="steps-step-2">
				            <a href="#step-1" class="btn btn-active btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information">Tickets</i></a>
				        </div>
				        <div class="steps-step-2">
				            <a href="#step-2" class="btn btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data">Participants</a>
				        </div> 
				        <div class="steps-step-2">
				            <a href="#step-3" class="btn btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish">Payment</a>
				        </div>
				    </div>
				</div>

			    <div class="setup-content-2" id="step-1">
			    	<div class="ticket-head">
			    		<div class="row">
				    		<div class="col col-9 col-sm-6">Ticket Type</div>
						    <div class="col col-6 col-sm-4">Quantity</div>
						    <div class="col col-3 col-sm-2">Total</div>
				    	</div>
			    	</div>			    	
			    	<div class="ticket-body">
			    		<div class="row">
				    		<div class="col col-9 col-sm-6 type-box">
				    			<div class="info">For Single Person</div>
				    			<div class="rate-info">Rs <amount>1,000</amount><span>(15 tickets remaining)</span></div>
				    		</div>
						    <div class="col col-6 col-sm-4 quantity-box">
						    	<div class="inner-box">
						    		<span class="plus">+</span>
							    	<span class="qValue-txt">5</span>
							    	<span class="minus">-</span>
						    	</div>						    	
						    </div>
						    <div class="col col-3 col-sm-2 amt-box">15,000</div>
				    	</div>
				    	<div class="row">
				    		<div class="col col-9 col-sm-6 type-box">
				    			<div class="info">For Couples</div>
				    			<div class="rate-info">Rs <amount>10,000</amount><span>(10 tickets remaining)</span></div>
				    		</div>
						    <div class="col col-6 col-sm-4 quantity-box">
						    	<div class="inner-box">
						    		<span class="plus">+</span>
							    	<span class="qValue-txt">10</span>
							    	<span class="minus">-</span>
						    	</div>
						    </div>
						    <div class="col col-3 col-sm-2 amt-box">10,000</div>
				    	</div>
			    	</div>
			    	<div class="ticket-total">
			    		<div class="row">
				    		<div class="col col-9 col-sm-8 text-right">Quantity <span class="tot-qty-txt">15</span></div>
						    <div class="col col-6 col-sm-4 text-right">Grand Total <span class="tot-amt-txt">25,000</span></div>
				    	</div>
			    	</div>	
			    	<div class="ticket-footer">			    	
				    	<div class="row">  
					        <div class="steps-form-footer">
					        	<button class="btn nextBtn-2 float-right" type="button">Checkout</button>
					        	<a href="javascript:;" class="tic-close-btn" data-dismiss="modal">Cancel</a>
					    	</div>
				    	</div>
			    	</div>
			    </div>

			<!-- Second Step -->
			    <div class="setup-content-2" id="step-2">		    	
			    	<div class="participants-body">
			    		<div class="col-md-12">
				            <!-- <h5 class="font-weight-bold pl-0 my-4"><strong>Basic Information</strong></h5> -->
				            <div class="form-group md-form">
				                <label for="yourName" data-error="wrong" data-success="right">Name</label>
				                <input id="yourName" type="text" required="required" class="form-control validate">
				            </div>
				            <div class="form-group md-form">
				                <label for="yourEmail" data-error="wrong" data-success="right">Email</label>
				                <input id="yourEmail" type="email" required="required" class="form-control validate">
				            </div>				            
				            <div class="form-group md-form">
				                <label for="yourMobile" data-error="wrong" data-success="right">Mobile Number</label>
				                <input id="yourMobile" type="number" required="required" class="form-control validate">
				            </div>
				        </div>
			    	</div>

			    	<div class="ticket-total">
			    		<div class="row">
				    		<div class="col col-9 col-sm-8 text-right">Quantity: <span class="tot-qty-txt">15</span></div>
						    <div class="col col-6 col-sm-4 text-right">Grand Total <span class="tot-amt-txt">25,000</span></div>
				    	</div>
			    	</div>	
			    	<div class="ticket-footer">			    	
				    	<div class="row">  
					        <div class="steps-form-footer">
					        	<button class="btn btn-sm btn-back prevBtn-2 float-left" type="button">Back</button>
					        	<button class="btn nextBtn-2 float-right" type="button">Checkout</button>
					        	<a href="javascript:;" class="tic-close-btn" data-dismiss="modal">Cancel</a>
					    	</div>
				    	</div>
			    	</div>			        
			    </div> 

			    <!-- Third Step -->
			    <div class="setup-content-2" id="step-3">
			        <div class="payments-body">
			        	<div class="row">
				    		<div class="col col-6 col-sm-6 payment-left">
				    			<h5 class="pay-title"><strong>Choose your payment method</strong></h5>
				    			<span class="title-info">(Click one of the option below)</span>
				    			<ul class="payment-methods">
				    				<li class="active">Debit Card</li>
				    				<li class="selected">Credit Card</li>
				    				<li>Net Banking</li>
				    				<li>Wallet</li>
				    			</ul>
				    		</div>
						    <div class="col col-6 col-sm-6 payment-right order-summary">
							    <div class="row os-title">
							     	<div class="col col-6 col-sm-7">
							    		<h5 class="pay-title"><strong>Order Summary</strong></h5>
							    	</div>
								    <div class="col col-6 col-sm-5">
								    	<div class="order-number">Order No: XXXXXXX</div>
								    </div>
							    </div>		
							    <div class="row os-sub-title">
							     	<div class="col col-6 col-sm-7">
							    		Ticket Type
							    	</div>
								    <div class="col col-6 col-sm-5 text-center">
								    	Qty
								    </div>
							    </div>
							    <div class="ticket-details-final">
							    	<div class="row t-item">
								     	<div class="col col-6 col-sm-7 t-type">
								    		Single Person (1500)
								    	</div>
									    <div class="col col-6 col-sm-5 t-qty text-center">
									    	15
									    </div>
								    </div>
								    <div class="row t-item">
								     	<div class="col col-6 col-sm-7 t-type">
								    		Couples (1000)
								    	</div>
									    <div class="col col-6 col-sm-5 t-qty text-center">
									    	10
									    </div>
								    </div>
							    </div>
							    <div class="row coupon-box">
							     	<div class="col col-12">
							    		Have a Coupon Code?
							    	</div>
							    </div>
							    <div class="row total-final-box">
							     	<div class="col col-12 text-right">
							    		Total <span class="final-amt-txt">25,000</span>
							    	</div>
							    </div>
						    </div>
				    	</div>			    		
			    	</div>
			    	<div class="ticket-footer">			    	
				    	<div class="row">  
					        <div class="steps-form-footer">
					        	<button class="btn btn-sm btn-back prevBtn-2 float-left" type="button">Back</button>
					        	<button class="btn nextBtn-2 float-right" type="button">Checkout</button>
					        	<a href="javascript:;" class="tic-close-btn" data-dismiss="modal">Cancel</a>
					    	</div>
				    	</div>
			    	</div>	
			    </div>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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