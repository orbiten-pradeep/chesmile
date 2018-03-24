<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Events Sub Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventsSubCategories index large-9 medium-8 columns content">
    <h3><?= __('Events Sub Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub_categories_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventsSubCategories as $eventsSubCategory): ?>
            <tr>
                <td><?= $this->Number->format($eventsSubCategory->ID) ?></td>
                <td><?= $eventsSubCategory->has('event') ? $this->Html->link($eventsSubCategory->event->title, ['controller' => 'Events', 'action' => 'view', $eventsSubCategory->event->id]) : '' ?></td>
                <td><?= $eventsSubCategory->has('sub_category') ? $this->Html->link($eventsSubCategory->sub_category->name, ['controller' => 'SubCategories', 'action' => 'view', $eventsSubCategory->sub_category->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $eventsSubCategory->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventsSubCategory->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventsSubCategory->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsSubCategory->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(function(){
  $('input:radio').change(function(){
$('a#deactivate').attr('href', '/chesmile%2816%29/groups/deactivate/'+$(this).val()); // better if you add an id to anchor & then
     $('a#activate').attr('href', '/chesmile%2816%29/groups/activate/'+$(this).val()); // better if you add an id to anchor & then
     $('a#view').attr('href', '/chesmile%2816%29/groups/view/'+$(this).val()); // better if you add an id to anchor & then
      $('a#edit').attr('href', '/chesmile%2816%29/groups/edit/'+$(this).val()); // better if you add an id to anchor & then 
    $('a#add').attr('href', '/chesmile%2816%29/groups/add/'+$(this).val()); // better if you add an id to anchor & then $('a#idofAnchor')
});

});</script>