<?php 
use Cake\Routing\Router;
?>

 <style type="text/css">
   a:hover {
 cursor:pointer;
}
.sizebox{
  padding-right: 110px;
  color: black;
}
 </style>
      <script type="text/javascript">
       function hide(eventid, userid)
       {
          $.ajax({
              type:"POST",
              data:{"eventid":eventid,"userid":userid},
              ContentType : 'application/json',
              dataType: 'json',
              url:"<?php echo $this->Url->build(['action' =>'likes']); ?>",
              async:true,
              success: function(data) {
                document.getElementById(eventid).textContent = data;
                  //$select.html('');
                  //iterate over the data and append a select option
              },
              error: function (tab) {
                  //$select.html('<option id="-1">none available</option>');
              }
        }); 
          return false;
       }
       

       
       $(document).ready(function(){

     $('#Autocomplete').autocomplete({
            source:'<?php echo Router::url(array("controller" => "events", "action" => "search")); ?>',
            minLength: 1
     });  
        
});

     </script>
     <div class="row" style="margin-left: 0px;">

                <!--   <div class="col-sm-4 col-lg-2 col-md-4">
                    <div class="panel bs-example side_panel"> 
                        <div class="panel-heading"> 
                          <h3 class="panel-title">Sort By</h3> 
                        </div> 
                        <div class="panel-body"> 
                           <div class="list-group">
                            <form id="searchbyarea" class="sx_location"> 
                             <div class="ui-widget">
                              <label for="Autocomplete"></label>
                                 <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required','class' => 'list-group-item sizebox','label' => false,'placeholder' => 'searchbyarea')); ?>
                            </div>
           </form> 
                              <!-- <a href="#" class="list-group-item">Select Category</a> -->
                         <!--          <?= $this->Html->link(__("Today's Events"), ['action' => 'index', '?' => ['query' => 'Today']], array('class' => 'list-group-item')) ?>
                                 
                                  <?= $this->Html->link(__("Tomorrow's Events"), ['action' => 'index', '?' => ['query' => 'Tomorrow']], array('class' => 'list-group-item')) ?>

                                  <?= $this->Html->link(__("This Weekend Events"), ['action' => 'index', '?' => ['query' => 'Weekend']], array('class' => 'list-group-item')) ?>

                                   <?= $this->Html->link(__("This Month Events"), ['action' => 'index', '?' => ['query' => 'Month']], array('class' => 'list-group-item')) ?>
                             
                              <p class="text-primary">Specific Date Events</p>
                              

           <div id="reportrange"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i> <span></span> <b class="caret"></b></div>


                             
                          </div>                  
                        </div> 
                      </div>
                    
                  </div>  -->

                  <div class="col-sm-8 col-lg-10 col-md-8 list_event content">

                      <div class="row" style="margin-right: 0px;">
                      <?php foreach ($events as $event): ?>
                        
                          <div class="col-sm-6 col-lg-2 col-md-4">
                              <div class="thumbnail">
                              <p class="pull-left tag"><?= $event->has('category') ? $event->category->name : '' ?></p>
                              <p class="pull-right post"><!--<?= h($event->created) ?>--></p>
                                  <img src="/chesmile/img/photos/1.jpg" alt="">
                                  <div class="caption dance" style="background-color:<?php echo "#".$event->category->color; ?>">
                                      <h4 class="event_txt"><a href="#"><?= $this->Html->link(h($event->title), ['action' => 'view', $event->id]) ?></a></h4>
                                      <p class="venue_txt"><?= h($event->OrganizersName) ?></p>
                                      <p class="date_txt"><?= h($event->date) ?>
                                      </p><p> <?php if($event->register_online == 0) {
                  ?>
                   <a id ="admin" href="">
            <button class="btn btn-primary waves-effect">Add Ticketing
            </button>
          </a>
          <?php
} else {
echo "Ticketing Enabled";
}
?></p>
                                       <div class="ratings clearfix">
                                        <p class="pull-right">
                                          <a onClick="hide('<?= $event->id; ?>', '<?= $event->user->id; ?>');"><span class="glyphicon glyphicon-thumbs-up"></span> </a><span class="count_txt" id="<?= $event->id; ?>">
                                            <?php foreach ($likes as $like):
                                            if($event->id == $like['events'])
                                              {
                                                echo $like['likes']; 
                                              } else
                                                continue;
                                              endforeach; 
                                            ?>

               
                                          </span>

                                        </p>
                                     </div>
                                  </div>
                                 
                              </div>
                          </div>
                            
                           <?php endforeach; ?>

                      </div>

                  </div>


              </div>
              <div class="row">
              &nbsp;
                  </div>

<script type="text/javascript">
  
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