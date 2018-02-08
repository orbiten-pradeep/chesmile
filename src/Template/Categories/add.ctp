<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Create Category</h2>
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
                                        <?php echo $this->Form->input('name',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Enter Category Name'));?>
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

                                <div class="form-group">
                                   <?php  echo $this->Form->input('Card Image',['type' => 'file', 'accept' => 'image/*','class' => 'form-control']);?>
                                </div>
                               
                               <div class="form-group">
                                    <?php  echo $this->Form->input('Active',['type' => 'checkbox','class' => 'form-control filled-in','id' => 'ig_checkbox']);?>
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
            <!-- #END# Vertical Layout -->
<!-- <div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category, array('type' => 'file')) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('color', array('class' => 'jscolor'));
            echo $this->Form->input('card',['type' => 'file', 'accept' => 'image/*']);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->