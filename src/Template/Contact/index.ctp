<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contact index large-9 medium-8 columns content">
    <h3><?= __('Contact') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contact as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->ID) ?></td>
                <td><?= h($contact->Name) ?></td>
                <td><?= h($contact->email) ?></td>
                <td><?= h($contact->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->ID)]) ?>
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
