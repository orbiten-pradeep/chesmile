<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $banner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner) ?>
    <fieldset>
        <legend><?= __('Edit Banner') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('image');
            echo $this->Form->input('url');
            echo $this->Form->input('caption');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 -->
<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
         <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $banner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        </ul>
</nav>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Banner</h2>
            </div>
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                          <?= $this->Form->create($banner, array('type' => 'file')) ?>
                            <fieldset>
        <legend><?= __('Edit Banner') ?></legend>
   <div class="form-group">  <select onchange="Check(this);" id ="bannerstype" name="bannerstype">
   <option name="bannerstype" value="<?=($banner->bannerstype) ?>">
    <?= h($banner->bannerstype) ?> banner</option>
    <option id ="home" value="home" name="bannerstype">Home Banner</option>
    <option id = "category" value="category" name="bannerstype">Category</option>
    
    </select></div>
   <div id="cat" style="display: none;">
           <?php  echo $this->Form->input('categories_id', ['options' => $categories]);
        ?>   
         </div>
                                <div class="form-group">
                                         <?php  echo $this->Form->input('events_id', ['options' => $events]);
           ?> 
                                   </div>
<label for="">Banner Image</label>
                                <div class="form-group">
                                    <div class="form-line"><?php $this->Form->input('image');?><?php echo $this->Html->image('banners_hme/'.$banner->image, array('width' => '80px', 'height' => '80px','alt'=>'Banner Image')); ?>
                                    <?php  echo $this->Form->input('image',['type' => 'file', 'accept' => 'image/*','class' => 'form-control','label'=>false,'value'=> $banner->image]);?>
                                         </div>
                                </div>

                                <label for="">Banner Url</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <?php  echo $this->Form->input('url',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Event Url'));?> 
                                    </div>
                                </div>
                <label for="">Banner Caption</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <?php  echo $this->Form->input('caption',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Caption'));?> 
                                    </div>
                                </div>
                               <!--   <label for="">Action</label>
                                --> <div class="form-group">
                                    <div class="form-line">
                                         <?php  echo $this->Form->input('active');?> 
                                    </div>
                                </div>
                               <!--  <div class="form-group">
                                     <?php echo $this->Form->input('group_id',array('class' => 'form-control show-tick','label' => false,'empty' => '(Select Group)','div' => false,'options' => $groups));?>
                                </div> -->
                               </fieldset>
                                <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary m-t-15 waves-effect')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    function Check(that) {
        if (that.value == "category") {
         // alert("check");
            document.getElementById("cat").style.display = "block";
        } else {
            document.getElementById("cat").style.display = "none";
        }
    }
</script>