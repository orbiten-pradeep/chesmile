<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contact'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contact form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Contact') ?></legend>
        <?php
echo ($contact->Name); 
            echo $this->Form->input('Name');
            echo $this->Form->input('email');
            echo $this->Form->input('comments');
 echo $this->Form->input('reply');
         ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 -->

<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Contact Us</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                               <?= $this->Form->create($contact) ?>
     <label for="">User Name</label>
                                <div class="form-group">
                                    <div class="form-line">
           
                                        <?php echo $this->Form->input('Name',array('div' => false,'class' => 'form-control','label' => false,'readonly'=> true));?>
                                    </div>
                                </div>

                                <label for="">User Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php echo $this->Form->input('email',array('div' => false,'class' => 'form-control','label' => false,'placeholder' => 'Enter Category Name','readonly'=> true));?>
                                    </div>
                                </div>

                                <label for="">Comments</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php echo $this->Form->input('comments',array('div' => false,'class' => 'form-control','label' => false,'readonly'=> true));?>
                                    </div>
                                </div>
                        
                        <label for="">Reply</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php echo $this->Form->input('reply',array('div' => false,'class' => 'form-control','label' => false));?>
                                    </div>
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
