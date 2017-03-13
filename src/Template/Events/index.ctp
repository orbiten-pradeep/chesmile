<?php 
use Cake\Routing\Router;
?>

 <style type="text/css">
   a:hover {
 cursor:pointer;
}

/*#footer{
   bottom:0;
   width:100%;
   height:120px;   
}*/

/*@media  only screen and (min-width: 1680px) {
  .footer{
     bottom:0 !important;
   width:100% !important;

  }
  }*/
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
    $('#time').timepicker({ timeFormat: 'H:mm' });
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

     $('#Autocomplete').autocomplete({
            source:'<?php echo Router::url(array("controller" => "events", "action" => "search")); ?>',
            minLength: 1
     });  
        
});

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

    <!--  <div class="content"> -->
    <!-- <div class="container-fluid content"> -->
     <div class="row" style="margin-left: 0px;">

                  <div class="col-sm-4 col-lg-2 col-md-4">
                    <div class="panel bs-example side_panel"> 
                        <div class="panel-heading"> 
                          <h3 class="panel-title">Sort By</h3> 
                        </div> 
                        <div class="panel-body"> 
                           <div class="list-group">
                            <form id="searchbyarea" class="sx_location"> 
                             <div class="ui-widget">
                              <label for="Autocomplete"></label>
                                 <?php echo $this->Form->input('areaname', array('id' => 'Autocomplete', 'required')); ?>
                            </div>
             <!-- <div class="form-group"> 

              <span class="twitter-typeahead" style="position: relative; display: inline-block;">
              <input class="tt-hint dropdown_hint" type="text" autocomplete="off" spellcheck="off" disabled style="">
              <input type="text" class="form-control tt-query dropdown_input" name="query" id="query" placeholder="Search by location/Area" autocomplete="off" spellcheck="false" dir="auto" style="">
              <span style="" class="dropdown_txt1"></span>
              <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span> 
             </div>  -->
           </form> 
                              <!-- <a href="#" class="list-group-item">Select Category</a> -->
                                  <?= $this->Html->link(__("Today's Events"), ['action' => 'index', '?' => ['query' => 'Today']], array('class' => 'list-group-item')) ?>
                                  <!-- <a href="#" id="today" class="list-group-item">Today's Events</a>
                                  <a href="#" class="list-group-item">Tomorrow's Events</a>
                                   <a href="#" class="list-group-item">This Weekend Events</a>
                                  
                                  <a href="#" class="list-group-item">This Month Events</a>
                                   -->
                                  
                                  <?= $this->Html->link(__("Tomorrow's Events"), ['action' => 'index', '?' => ['query' => 'Tomorrow']], array('class' => 'list-group-item')) ?>

                                  <?= $this->Html->link(__("This Weekend Events"), ['action' => 'index', '?' => ['query' => 'Weekend']], array('class' => 'list-group-item')) ?>

                                   <?= $this->Html->link(__("This Month Events"), ['action' => 'index', '?' => ['query' => 'Month']], array('class' => 'list-group-item')) ?>
                             
                              <p class="text-primary">Specific Date Events</p>
                              

           <div id="reportrange" class="pull-right"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i> <span></span> <b class="caret"></b></div>


                             
                          </div>                  
                        </div> 
                      </div>
                    
                  </div>

                  <div class="col-sm-8 col-lg-10 col-md-8 list_event">

                      <div class="row" style="margin-right: 0px;">
                      <?php foreach ($events as $event): ?>
                        
                          <div class="col-sm-6 col-lg-2 col-md-4">
                              <div class="thumbnail">
                              <p class="pull-left tag"><?= $event->has('category') ? $event->category->name : '' ?></p>
                              <p class="pull-right post"><!--<?= h($event->created) ?>--></p>
                                  <img src="img/photos/1.jpg" alt="">
                                  <div class="caption dance">
                                      <h4 class="event_txt"><a href="#"><?= $this->Html->link(h($event->title), ['action' => 'view', $event->id]) ?></a></h4>
                                      <p class="venue_txt"><?= h($event->OrganizersName) ?></p>
                                      <p class="date_txt"><?= h($event->date) ?>
                                      </p>
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
 <!--              </div> -->
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
          <ul class="side-nav">
              <li class="heading"><?= __('Actions') ?></li>
              <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?></li>
          </ul>
      </nav>
       -->

      <!-- <div class="events index large-9 medium-8 columns content">
          <h3><?= __('Events') ?></h3>
          <table cellpadding="0" cellspacing="0">
              <thead>
                  <tr>
                      <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('banner') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('display') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('OrganizersName') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('OrganizersLogo') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                      <th scope="col" class="actions"><?= __('Actions') ?></th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($events as $event): ?>
                  <tr>
                      <td><?= $this->Number->format($event->id) ?></td>
                      <td><?= $event->has('user') ? $this->Html->link($event->user->id, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
                      <td><?= h($event->title) ?></td>
                      <td><?= h($event->active) ?></td>
                      <td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
                      <td><?= h($event->date) ?></td>
                      <td><?= h($event->time) ?></td>
                      <td><?= h($event->banner) ?></td>
                      <td><?= h($event->display) ?></td>
                      <td><?= h($event->OrganizersName) ?></td>
                      <td><?= h($event->OrganizersLogo) ?></td>
                      <td><?= h($event->created) ?></td>
                      <td><?= h($event->modified) ?></td>
                      <td class="actions">
                          <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
          <div class="paginator">
              <ul class="pagination">
                  <?= $this->Paginator->prev('< ' . __('previous')) ?>
                  <?= $this->Paginator->numbers() ?>
                  <?= $this->Paginator->next(__('next') . ' >') ?>
              </ul>
              <p><?= $this->Paginator->counter() ?></p>
          </div>
      </div>
       -->