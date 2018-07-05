<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Category</h2>
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
                            <?= $this->Form->create($category, array('type' => 'file')) ?>
                                <label for="">Category Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php echo $this->Form->input('name',array('div' => false,'class' => 'form-control jscolor','label' => false,'placeholder' => 'Enter Category Name'));?>
                                    </div>
                                </div>

                                <label for="">Category color</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php echo $this->Form->input('color',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Enter Category Name'));?>
                                    </div>
                                </div>

                                
                                <!-- <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <?php echo $this->Form->input('color', array('class' => 'jscolor form-control'));?>
                                </div>

                    <label for="">Category Litecolor</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <?php echo $this->Form->input('categorylitecolor',array('div' => false,'class' => 'form-control','label' => false));?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php echo $this->Form->input('categorylitecolor', array('class' => 'jscolor form-control'));?>
                                                    </div>

                                <div class="form-group">
                                   <?php  echo $this->Form->input('Card Image',['type' => 'file', 'accept' => 'image/*','class' => 'form-control']);?>
                                </div>
                               
                               <!-- <div class="form-group">
                                   <?php echo $this->Form->input('active');?>
                               </div> -->
                               <div class="form-group">
                                    <input type="checkbox" name="Active" id="basic_checkbox_2" value ="1" class="form-control filled-in">
                                    <label for="basic_checkbox_2">Active</label>
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
<!-- <div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category, array('type' => 'file')) ?>
    <fieldset>
        <legend><?= __('Edit Category') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('color', array('class' => 'jscolor'));
            if(isset($category->card))
            {
                echo $this->Html->image('card/'.$category->card, array('width' => '200px','alt'=>'Card'));
            } 
            
            echo $this->Form->input('card', ['type' => 'file', 'accept' => 'image/*']);
            
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 -->