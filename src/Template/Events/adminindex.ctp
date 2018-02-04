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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('register_online') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($eventss as $event): ?>
                        <tr>
                            <td><?= $this->Number->format($event->id) ?></td>
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
                            <td class="actions">
                                <?php
                                    echo $this->Html->link( $this->Html->tag('i', 'remove_red_eye', array('class' => 'material-icons', 'title'=>'View Event')), ['action' => 'view', $event->id], array('escape'=>false)); ?>
                                    <?php 
                                    if($event->active == 1) {
                                        echo $this->Html->link( $this->Html->tag('i', 'add_circle', array('class' => 'material-icons', 'title'=>'De-Activate')), ['action' => 'activate', $event->id], array('escape'=>false));
                                    }
                                    else {
                                        echo $this->Html->link( $this->Html->tag('i', 'remove_circle', array('class' => 'material-icons', 'title'=>'Activate')), ['action' => 'activate', $event->id], array('escape'=>false));
                                    }
                                ?>

                              <?= $this->Html->link( $this->Html->tag('i', 'mode_edit', array('class' => 'material-icons', 'title'=>'Admin Edit')), ['action' => 'adminedit', $event->id], array('escape'=>false)); ?>

                              <?= $this->Html->link( $this->Html->tag('i', 'edit', array('class' => 'material-icons', 'title'=>'Edit')), ['action' => 'edit', $event->id], array('escape'=>false)); ?>

                              <?= $this->Form->postLink($this->Html->tag('i', 'delete', array('class' => 'material-icons', 'title'=>'View Event')), ['action' => 'delete', $event->id], ['escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
        </div>
    </div>
</div>