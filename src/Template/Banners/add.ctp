<?php echo $this->Html->css(['form-basic']); ?>
<?php 
use Cake\Routing\Router;
?>
<!-- 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner, array('type' => 'file')) ?>
    <fieldset>
        <legend><?= __('Add Banner') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('url');
            echo $this->Form->input('image',['type' => 'file','accept' => 'image/*', 'class' => 'cropit-image-input']);
            echo $this->Form->input('caption');
            $options = [
                '0' => 'DeActivate',
                '1' =>  'Activate'
            ];
            echo $this->Form->radio('active', $options);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 -->

<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
               <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
 </ul>
</nav>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Create Banner</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                          <?= $this->Form->create($banner, array('type' => 'file')) ?>
    <legend><?= __('Add Banner') ?></legend>
                   <div class="form-group">
                                    <div class="form-line">
                                    <?php
            echo $this->Form->input('events_id', ['options' => $events]);
        ?>   
                                    </div>
                                </div>

                                <label for="">Event Url</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php   echo $this->Form->input('url',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Event Url')); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <div class="form-line">
                                          <?php echo $this->Form->input('caption',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Caption'));?>
              </div>
                                       </div>
                                <div class="form-group">
                                   <?php   echo $this->Form->input('image',['type' => 'file','accept' => 'image/*', 'class' => 'cropit-image-input']);
          ?>
                                </div>
                               
                              <!--  <div class="form-group">
                               <span class="input-group-addon">
                                    <?= $this->Form->radio('active', ['DeActivate','Activate'],array('class' => 'with-gap radio-select-list'));?>
                                    </span>
                               </div> -->
                               <span class="input-group-addon">
                  <input type="radio" name="active" id="active" value ="activate" class="with-gap radio-select-list">
                  <label for="active">
                  Activate
                  </label>

                    <input type="radio" name="deactive" id="deactive" value ="De-activate" class="with-gap radio-select-list">
                    <label for="deactive">
                  Deactivate
                  </label>
                </span>
                                <!-- <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button> -->
                                <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary m-t-15 waves-effect')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
          