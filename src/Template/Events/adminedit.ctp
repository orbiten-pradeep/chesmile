<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);
            $options = ['0' => 'Disabled', '1' => 'Enabled'];
            echo $this->Form->select('register_online', $options);
            echo $this->Form->input('price', array('type' => 'text'));
            echo $this->Form->input('google_map', array('type' => 'text'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
