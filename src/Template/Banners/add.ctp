<?php echo $this->Html->css(['form-basic']); ?>
<?php 
use Cake\Routing\Router;
?>

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
