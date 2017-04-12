<style type="text/css">
    .icon{
        height: 120px; 
        width: 45px;
    }

    #lightbox .modal-content {
    display: inline-block;
    text-align: center;   
}

#lightbox .close {
    opacity: 1;
    color: rgb(255, 255, 255);
    background-color: rgb(25, 25, 25);
    padding: 5px 8px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    position: absolute;
    top: -15px;
    right: -55px;
    z-index:1032;
}
</style>


<div class="cover-pic">
        <div class="container heading_txt">
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-tag"><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></button> <?php echo $this->Html->image('card/'.$event->category->card, array('width' => '100px', 'height' => '100px','alt'=>'Card')); ?>
                    <h1 class="tagline"><?= h($event->title) ?></h1>
                </div>
            </div>
        </div>
</div>

<div class="cover-detail">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-8 lft_container">
                <h2><img src="/chesmile/img/profile.png" class="img-thumbnail profile-img"><?= h($event->OrganizersName) ?></h2>
                <p><?= $this->Text->autoParagraph(h($event->descriptioin));?></p>
                <p class="margin25"><span class="glyphicon glyphicon-calendar calender_txt" aria-hidden="true"></span><?= h($event->date) ?></p>
                <p>
                    <span class="glyphicon glyphicon-time time_txt" aria-hidden="true"></span><?= h($event->time) ?>
                </p>
            </div>
            <?php
            //echo $event->google_map; exit;
            $geoCode = (!empty($event->google_map)) ? $event->google_map : '13.0595365,80.24247919999993';

            ?>
            <div class="col-sm-4 text-center rgt_container">
                <address>
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:630px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https:/disclaimergenerator.net">disclaimer example</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(<?=$geoCode;?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?=$geoCode;?>)});infowindow = new google.maps.InfoWindow({content:''});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </address>
                <address>
                <div class="text-center"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></div>
                   <!-- <strong>Kishore</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br> -->
                   <!--  <?= $this->Text->autoParagraph(h($event->Venue)); ?> -->
                </address>
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->

    </div>

</div>

                            <div class="event-detail">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-8 lft_container">
                                                <h3 class="heading margin25">Sponsors<span></span></h3>
                                                    <!-- Client 1 -->

                                                    <?php foreach ($sponsors as $sponsor): ?>
                                                    <div class="col-sm-6 col-xs-4 col-md-3" style="visibility: visible; ">
                                                        <a href="#">
                                                        <?php echo $this->Html->image('Sponsors/'.$sponsor->Sponsors, array('alt'=>'Sponsors','height' => '125px','width' => '125px')); ?>
                                                    </a>
                                                    </div>

                                                    <!-- Client 2 -->
                                                    <!-- <div class="col-sm-6 col-xs-4 col-md-3" style="visibility: visible; ">
                                                        <a href="#"><img src="img/logos/4.png" class="img-responsive clients-img" alt="Client 4"></a>
                                                    </div>

                                                    <!-- Client 3 -->
                                                    <!-- <div class="col-sm-6 col-xs-4 col-md-3" style="visibility: visible; ">
                                                        <a href="#"><img src="img/logos/5.png" class="img-responsive clients-img" alt="Client 5"></a>
                                                    </div>

                                                    <!-- Client 4 -->
                                                    <!-- <div class="col-sm-6 col-xs-4 col-md-3" style="visibility: visible; ">
                                                        <a href="#"><img src="img/logos/6.png" class="img-responsive clients-img" alt="Client 6"></a>
                                                    </div> -->
                                                    <?php endforeach; ?>
                                                    <div class="clearfix"></div>

                                                    <h3 class="heading margin25">Media Partners<span></span></h3>
                                                    <!-- Client 1 -->
                                                    <?php foreach ($mediapartners as $mediapartner): ?>
                                                    <div class="col-sm-6 col-xs-4 col-md-3" style="visibility: visible; ">
                                                        <a href="#">
                                                        <?php echo $this->Html->image('Mediapartners/'.$mediapartner->MediaPartners, array('alt'=>'Mediapartners','height' => '125px', 'width' => '125px')); ?>
                                                        </a>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <!-- Client 2 -->

                                                    <div class="clearfix"></div>

                                                     <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>


                                                     <!-- Modal -->
                                                  <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
                                                    <div class="modal-dialog">
                                                    
                                                      <!-- Modal content-->
                                                      <div class="modal-content">
                                                        <div class="modal-body">
                                                              <div class="clearfix"></div>

                                                    <h3 class="heading margin25">Gallery (Photos after the Events)<span></span></h3>

                                                        <div class='col-md-12'>
                                                          <div class="carousel slide media-carousel" id="media">
                                                          <div class="container">
                                                          <div class="row">
                                <div class="col-xs-6 col-sm-2 col-md-2">
                                    <a href="#" class="thumbnail" data-target="#lightbox"> 
                                        <img src="https://s3.amazonaws.com/ooomf-com-files/lqCNpAk3SCm0bdyd5aA0_IMG_4060_1%20copy.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-2">
                                    <a href="#" class="thumbnail" data-target="#lightbox"> 
                                        <img src="https://s3.amazonaws.com/ooomf-com-files/deYU3EyQP9cN23moYfLw_Dandelion.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-2">
                                    <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                                        <img src="https://s3.amazonaws.com/ooomf-com-files/8H0UdTsvRFqe03hZkNJr_New%20York%20-%20On%20the%20rock%20-%20Empire%20State%20Building.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-2">
                                    <a href="#" class="thumbnail" data-target="#lightbox"> 
                                        <img src="https://s3.amazonaws.com/ooomf-com-files/Z3LXxzFMRe65FC3Dmhnp_woody_unsplash_DSC0129.jpg" alt="...">
                                    </a>
                                </div>
                                </div>
                            </div>

                           <!--  <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="top:250px;">
                                    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                                <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                <a data-slide="next" href="#media" class="right carousel-control">›</a>
                              </div>                          
                            </div>

                        <div class="clearfix"></div>

                        <h3 class="heading margin25">Thank you note - Post Events<span></span></h3>
                            <textarea class="form-control" rows="3"></textarea>
                            <div class="form-group">
                                <div class="margin25">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </div> 
        </div>
      </div>
      
    </div>
  </div>
            </div>  

            <div class="col-sm-4 lft_container">
                        <div class="invite_email">
                            <form>
                              <div class="form-group">
                                <input type="email" class="form-control" id="invite" placeholder="Email address">
                              </div>
                              
                              <button type="submit" class="btn btn-primary form-control">Invite Friends</button>
                            </form>
                        </div>                          
                    <div class="clearfix"></div>

                    <p class="text-primary"><b>Interested in this Event</b></p>
                    <small><span class="glyphicon glyphicon-thumbs-up"></span> <?= h($number) ?> People are interested</small>
                    
                    <div class="panel bs-example side_panel margin25"> 
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Twitter Updates</h3> 
                        </div> 
                        <div class="panel-body"> 
                             <div class="list-group">
                                <p>Tweet updates coming here</p>
                            </div>                  
                        </div> 
                    </div>

            </div>      
                    </div>

            </div>
    </div>      



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!-- <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li> -->
        <?php if($u_id == $event->user_id){ ?>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <?php } ?>
        <!-- <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?> </li> -->
    </ul>
</nav>
<script type="text/javascript">
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
</script>
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