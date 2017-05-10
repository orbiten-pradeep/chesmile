<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Marathon'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marathon form large-9 medium-8 columns content">
    <?= $this->Form->create($marathon) ?>
    <fieldset>
        <legend><?= __('Add Marathon') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('date');
            $sex = ['Male' => 'Male', 'Female' => 'Female'];
            echo $this->Form->select('sex', $sex, ['default' => 'Male']);
            echo $this->Form->input('email');
            echo $this->Form->input('mobile_number');
            $km = ['2 KM' => '2 KM', '5 KM' => '5 KM'];
            echo $this->Form->select('KM', $km, ['default' => '2 KM']);
            $tshirt = ['S' => 'S', 'M' => 'M', 'L' => 'L', 'XL' => 'XL', 'XXL' => 'XXL', 'XXXL' => 'XXXL'];
            echo $this->Form->select('TSHIRT', $tshirt, ['default' => 'S']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
