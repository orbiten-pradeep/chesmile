
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Category</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <?= $this->Form->create($subCategory, array('type' => 'file')) ?>
                                <label for="">Category Name</label>
                                <div class="form-group">
                                    <?php echo $this->Form->input('categories_id', ['options' => $categories]); ?>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php echo $this->Form->input('name',array('div' => false,'class' => 'form-control jscolor','label' => false,'placeholder' => 'Enter Subcategory Name'));?>
                                    </div>
                                </div>
                               
                               <div class="form-group">
                                   <?php echo $this->Form->input('active');?>
                               </div>
                                <!-- <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button> -->
                                <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary m-t-15 waves-effect')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--  <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($subCategory) ?>
    <fieldset>
        <legend><?= __('Edit Sub Category') ?></legend>
        <?php
            echo $this->Form->input('categories_id', ['options' => $categories]);
            echo $this->Form->input('name');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
