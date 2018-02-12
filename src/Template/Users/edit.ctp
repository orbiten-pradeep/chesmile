<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Events'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit User</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <!-- <div class="header" style="display: none;">
                            <h2>
                                VERTICAL LAYOUT
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
                        </div> -->
                        <div class="body">
                            <?= $this->Form->create($user) ?>
                                <label for="">User Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <?php echo $this->Form->input('email',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Enter Email'));?> 
                                    </div>
                                </div>

                                <label for="">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <?php echo $this->Form->input('password',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Enter Password'));?> 
                                    </div>
                                </div>

                                <label for="">Fullname</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <?php echo $this->Form->input('fullname',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Enter Fullname'));?> 
                                    </div>
                                </div>
                
                                <div class="form-group">
                                     <?php echo $this->Form->input('group_id',array('class' => 'form-control show-tick','label' => false,'empty' => '(Select Group)','div' => false,'options' => $groups));?>
                                </div>
                               <!--  <input type="checkbox" id="remember_me" class="filled-in"> -->
                               
                                <!-- <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button> -->
                                <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary m-t-15 waves-effect')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- <div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('fullname');
            echo $this->Form->input('group_id', ['options' => $groups]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
