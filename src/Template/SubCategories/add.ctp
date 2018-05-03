<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Create Subcategory</h2>
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
                            <?= $this->Form->create($subCategory) ?>
                                <label for="">Category</label>
                                <div class="form-group">
                                     <?php echo $this->Form->input('Category',array('class' => 'form-control show-tick','label' => false,'empty' => '(Select Category)','div' => false,'options' => $categories));?>
                                </div>

                                <label for="">Subcategory Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php echo $this->Form->input('name',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Enter Subcategory Name'));?>
                                    </div>
                                </div>
                               <div class="form-group">
                                    <div class="form-line">
                                         <?php  echo $this->Form->input('active');?> 
                                    </div>
                                </div>
                               <!-- <div class="form-group">
                                    <?php  echo $this->Form->input('Active',['type' => 'checkbox','class' => 'form-control filled-in','id' => 'ig_checkbox']);?>
                               </div> -->
                                <!-- <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button> -->
                                <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary m-t-15 waves-effect')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- <div class="subCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($subCategory) ?>
    <fieldset>
        <legend><?= __('Add Sub Category') ?></legend>
        <?php
            echo $this->Form->input('categories_id', ['options' => $categories]);
            echo $this->Form->input('name');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
