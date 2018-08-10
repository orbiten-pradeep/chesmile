<style type="text/css">
	.cs-add-form{
		background-color: #4ABAC6;
	}
	.cs_add_form_col{
		margin: 0 auto;
	}
	.cs_add_form_col input.form-control{
		color: white !important;
	}
	/*.cs_add_form_col select.form-control{
		color: white !important;
	}*/

	.cs_add_form_col input::-webkit-input-placeholder {
	color: white !important;
	}
	 
	.cs_add_form_col input:-moz-placeholder { /* Firefox 18- */
	color: white !important;  
	}
	 
	.cs_add_form_col input::-moz-placeholder {  /* Firefox 19+ */
	color: white !important;  
	}
	 
	.cs_add_form_col input:-ms-input-placeholder {  
	color: white !important;  
	}

	.cs_add_form_col textarea::-webkit-input-placeholder {
	color: white !important;
	}
	 
	.cs_add_form_col textarea:-moz-placeholder { /* Firefox 18- */
	color: white !important;  
	}
	 
	.cs_add_form_col textarea::-moz-placeholder {  /* Firefox 19+ */
	color: white !important;  
	}
	 
	.cs_add_form_col textarea:-ms-input-placeholder {  
	color: white !important;  
	}
	.cs_add_form_col label{
		color: white;
	}
	.imgeff{
		width:1600px !important;
		height: 400px !important;
	}
	.imgdisp{
		width:500px !important;
		height: 300px !important;
	}
	.text-block {
    position: absolute;
    bottom: 20px;
    left: 20px;
    background-color: #80808005;
    color: white;
    padding-left: 20px;
    padding-right: 20px;

}
</style>


<script type="text/javascript">
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
</script>
 <?php 
use Cake\Routing\Router;
?>
<?= $this->Form->create($event,array('id' => 'createEvent','type' => 'file','novalidate' => true)) ?>
<?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>
<?= $this->Form->hidden('active');?>
<!-- <?= $this->Form->create($event,array('id' => 'createEvent','type' => 'file','novalidate' => true)) ?>
<?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);?>-->
 <div class="col-md-12 col-xs-12 mb-4 pr-0 pl-0">
	 <?php echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'imgeff img-fluid z-depth-1','id' => 'target')); ?>
	<div class="text-block">
    <?=$this->Form->input('banner',['type' => 'file','label' => false,'accept' => 'image/*','onchange' => 'putImage()', 'class' => 'cropit-image-input']);?>
	<p>Banner Image</p>
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 mb-4">
			<div class="md-form">
         		<?php echo $this->Form->input('title',array('label' => 'Event Title','div' => false,'id' => 'title', 'class' => 'form-control', 'placeholder' => 'Please enter your event title')); ?>
     		</div>
     		<div class="md-form">
		         				<?=  $this->Form->input('OrganizersName',array('label' => 'Organizers name','div' => false,'class' => 'form-control','placeholder' => 'Please enter Organizer Name'));?>
		     				</div>	
		     				<div class="md-form">
		         				<?=  $this->Form->input('categories_id',array('div' => false,'class' => 'form-control','options' => $categories_list, 'onChange' => 'checkForOther(this);', 'empty' => '(Select Categories)','label' => false));?>
		     				</div>
		     				<div class="md-form">
		     					<div id="subdiv" class="form-group" style="display: none;">
		         					<?=$this->Form->input('Eventsubcategories.sub_categories',array( 'subcategory_id'=>'', 'class' => 'form-control','options' => $subCategories, 'multiple' => 'true', 'empty' => '(choose one)','label' => false,'empty' => false));?>
		         				</div>
		     				</div>
<div class="md-form">
     		
<?php echo $this->Html->image('cs-static-banner.jpg',array('alt' => 'Cs-Static','class' => 'imgdisp img-fluid z-depth-1 rounded mb-4','id' => 'disptarget' )); ?>
	<div class="text-block">
		<?=$this->Form->input('display',['type' => 'file','label' => false,'accept' => 'image/*','id' =>'display','onchange' => 'putDispImage()', 'class' => 'cropit-image-input']);?>
   <p>Display Image</p>
</div>
</div>
			<!-- <?php $bgImage = $event->banner;
			if(!empty($bgImage)){
	 			echo $this->Html->image('banner/'.$bgImage,array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded mb-4')); 
			}
			else {
	 			echo $this->Html->image('cover_pic.jpg',array('alt' => 'Cs-Static','class' => 'img-fluid z-depth-1 rounded mb-4')); 
			}	?> -->
			<div class="md-form">
		     					<?= $this->Form->input('contact_number',array('div' => false, 'label' => 'Contact Number','class' => 'form-control','placeholder' => 'Enter Contact Number'));?>
		     				</div>
		     				<div class="md-form">
		     					<?= $this->Form->input('mobile_number',array('id' => 'mobile_number', 'div' => false,'label' => 'Mobile Number','class' => 'form-control','placeholder' => 'Enter Mobile Number'));?>
		     				</div>
		     				<div class="md-form">
				     			<span>Organizer Logo</span>
				     			<?=$this->Form->input('OrganizersLogo',['type' => 'file','label' => false,'id' => 'org','accept' => 'image/*','class' => 'cropit-image-input']);?>
				     		</div>
				     		<div class="md-form">
				     			<span>Mediapartner Logo</span>
				     			<?= $this->Form->input('Mediapartners[]',['type' => 'file', 'label' => false,'multiple' => 'true','id'=>'files','accept' => 'image/*']);?>
				     		</div>
				     		<div class="md-form">
				     			<span>Sponsors Logo</span>
				     			<?=$this->Form->input('Sponsors[]',['type' => 'file','label' => false, 'multiple' => 'true','id'=>'files1','accept' => 'image/*']);?>
				     		</div></br>
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex flex-column">
						<div class="p-4 mb-4 flex-cont cs-descr-box rounded z-depth-1">
						    <h5 class="cs-title">Event Details</h5>
						    <?= $this->Form->input('descriptioin',array('div' => false, 'label' => false,'class' => 'form-control md-textarea','placeholder' => 'Description about your event','rows' => '4', 'cols' => '50', 'resize'=> 'none','required' => true));?>
						</div>
						<div class="p-4 mb-4 flex-cont rounded z-depth-1">
						    <h5 class="cs-title">Terms & Conditions</h5>
						    <?= $this->Form->input('descriptioin',array('div' => false, 'label' => false,'class' => 'form-control md-textarea','placeholder' => 'Terms and conditions if any','rows' => '4', 'cols' => '50', 'resize'=> 'none' ));?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="d-flex flex-column">
			    <div class="p-4 mb-4 flex-cont rounded z-depth-1">
			    	<div class="text-center">
				    	<!-- <h5>₹ 699</h5> -->
				    	<button type="button" class="btn buy-btn">Get Tickets</button>
			    	</div>
			    	<div class="cs-details">
			    		<div class="md-form">
				    		<p><i class="fa fa-map-marker"></i><span class="rs-details"><?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'form-control','label' => false,'placeholder' => 'Areaname'));?></span></p>
				    		<p><?php echo $this->Html->image('cal.png')?><span class="rs-details"><?= $this->Form->input('date', array('type' => 'text','class' => 'form-control datepicker','placeholder' => 'Date','label' => false));?></span></p>
				    		<p><?php echo $this->Html->image('clock-chennaismile.png')?><span class="rs-details"><?=$this->Form->input('time', array('type' => 'text','class' => 'form-control timepicker time-bg','label' => false,'placeholder' => 'Time'));?></span></p>
				    	</div>
			    	</div>
			    </div>
			</div>

			<div class="d-flex flex-column">
			    <div class="p-4 mb-4 flex-cont rounded z-depth-1">
                	<div class="md-form">
		            	<?= $this->Form->input('address_1',array('div' => false,'label' => 'Address 1','class' => 'form-control', 'placeholder' => 'Enter address 1'));?>
     				</div>

     				<div class="md-form">
		            	<?= $this->Form->input('address_2',array('div' => false,'label' => 'Address 2','class' => 'form-control', 'placeholder' => 'Enter address 2'));?>
     				</div>

     				<div class="md-form">
               			<?= $this->Form->input('landmark',array('div' => false,'label' => 'Landmark','class' => 'form-control', 'placeholder' => 'Any Specific Landmark?'));?>	
     				</div>
     				<input type="text" class="form-control map" id="googleMapID" name="google_map" placeholder="" readonly="" style="color: black !important; display: none;">
                	<input type="button" data-toggle="modal" data-target="#myModal" class="btn launch-map" value="Launch Map" style="background-color: #337AB7;"/>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
    <?= $this->Form->button('Submit',array('id' => 'subbutton','class'=>'btn btn-secondary pull-centre')) ?>
</div>
<?= $this->Form->end() ?>
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
		        </div>
		    </div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #337AB7;color: white;">Close</button>
      		</div>
    	</div>
  	</div>
</div> 

<script type="text/javascript">
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
    </script>