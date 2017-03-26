<nav class="large-3 medium-4 columns" id="actions-sidebar">
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
<div class="categories form large-9 medium-8 columns content">
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
