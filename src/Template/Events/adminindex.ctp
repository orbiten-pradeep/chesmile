<div class="block-header">
    <h2><?= __('Events') ?></h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Listing
                    <small>All Events Listing</small>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr> <th scope="col"><?= $this->Paginator->sort('Select') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Serial No') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('register_online') ?></th>
                           <!--  <th scope="col" class="actions"><?= __('Actions') ?></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n=0;
                         foreach ($eventss as $event): $n++; ?>
                        <tr><td> <!-- <div class="form-check mb-4">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    
</div>
                       <?php echo $this->Form->input('condition_access', [
    'type' => 'radio',
    'options' => [
        ['value' => 1, 'text' => __('Free Access')],
        ['value' => 2, 'text' => __('Payment Access')],
        ['value' => 3, 'text' => __('Reduce price')]
    ],
    'templates' => [
        'nestingLabel' => '{{hidden}}<label{{attrs}}>{{text}}</label>{{input}}',
        'radioWrapper' => '<div class="radio">{{label}}</div>'
    ]
]);?> -->
                                        <span class="input-group-addon">
                                            <input type="radio" class="with-gap" id="ig_radio">
                                            <label for="ig_radio"></label>
                                        </span>
                                      
      </td>
                            <td><?= $this->Number->format($n) ?></td>
                            <td><?= h($event->title) ?></td>
                            <td>
                            <?php 
                                if($event->active == 1)
                                    { echo "Enabled"; } 
                                else if($event->active == 0)
                                    { echo "Waiting for Admin Review.."; } 
                                elseif ($event->active == 2) {
                                    echo "Deleted";
                                }
                                //echo $event;
                            ?>  
                            </td>
                            <td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
                            <td><?= h($event->date) ?></td>
                            <td><?= h($event->time) ?></td>
                            <td>
                            <?php if($event->register_online == 0) {
                            echo "Disabled";
                            } else {
                            echo "Enabled";
                            }
                            ?></td>
                          <!--   <td class="actions">
                                <?php
                                    echo $this->Html->link( $this->Html->tag('i', 'remove_red_eye', array('class' => 'material-icons', 'title'=>'View Event')), ['action' => 'view', $event->id], array('escape'=>false)); ?>
                                    <?php 
                                    if($event->active == 1) {
                                        echo $this->Html->link( $this->Html->tag('i', 'remove_circle', array('class' => 'material-icons', 'title'=>'De-Activate')), ['action' => 'activate', $event->id], array('escape'=>false));
                                    }
                                    else {
                                        echo $this->Html->link( $this->Html->tag('i', 'add_circle', array('class' => 'material-icons', 'title'=>'Activate')), ['action' => 'activate', $event->id], array('escape'=>false));
                                    }
                                ?>

                              <?= $this->Html->link( $this->Html->tag('i', 'mode_edit', array('class' => 'material-icons', 'title'=>'Admin Edit')), ['action' => 'adminedit', $event->id], array('escape'=>false)); ?>

                              <?= $this->Html->link( $this->Html->tag('i', 'edit', array('class' => 'material-icons', 'title'=>'Edit')), ['action' => 'edit', $event->id], array('escape'=>false)); ?>

                              <!-- <?= $this->Form->postLink($this->Html->tag('i', 'delete', array('class' => 'material-icons', 'title'=>'Delete Event')), ['action' => 'delete', $event->id], ['escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> 
                            </td> -->
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table> <div class="pull-right"> <button type="button" class="btn btn-primary waves-effect">Add</button>
     <button type="button" class="btn btn-primary waves-effect">View</button>
      <button type="button" class="btn btn-primary waves-effect">Edit</button>
       <button type="button" class="btn btn-primary waves-effect">Activate</button>
        <button type="button" class="btn btn-primary waves-effect">Deactivate</button>
    </div><br>
                <div class="paginator">
                    <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div>
        </div>
    </div>
</div>