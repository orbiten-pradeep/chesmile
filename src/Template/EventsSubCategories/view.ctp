<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Events Sub Category'), ['action' => 'edit', $eventsSubCategory->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Events Sub Category'), ['action' => 'delete', $eventsSubCategory->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsSubCategory->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Events Sub Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Events Sub Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventsSubCategories view large-9 medium-8 columns content">
    <h3><?= h($eventsSubCategory->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $eventsSubCategory->has('event') ? $this->Html->link($eventsSubCategory->event->title, ['controller' => 'Events', 'action' => 'view', $eventsSubCategory->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub Category') ?></th>
            <td><?= $eventsSubCategory->has('sub_category') ? $this->Html->link($eventsSubCategory->sub_category->name, ['controller' => 'SubCategories', 'action' => 'view', $eventsSubCategory->sub_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($eventsSubCategory->ID) ?></td>
        </tr>
    </table>
</div>
