<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userProfile index large-9 medium-8 columns content">
    <h3><?= __('User Profile') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('City') ?></th>
                <th scope="col"><?= $this->Paginator->sort('State') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Zipcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Photo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userProfile as $userProfile): ?>
            <tr>
                <td><?= $this->Number->format($userProfile->id) ?></td>
                <td><?= $userProfile->has('user') ? $this->Html->link($userProfile->user->id, ['controller' => 'Users', 'action' => 'view', $userProfile->user->id]) : '' ?></td>
                <td><?= h($userProfile->Mobile) ?></td>
                <td><?= h($userProfile->Address_1) ?></td>
                <td><?= h($userProfile->Address_2) ?></td>
                <td><?= h($userProfile->City) ?></td>
                <td><?= h($userProfile->State) ?></td>
                <td><?= h($userProfile->Country) ?></td>
                <td><?= $this->Number->format($userProfile->Zipcode) ?></td>
                <td><?php if($userProfile->Photo) echo $this->Html->image('profile/'.$userProfile->Photo, array('width' => '200px','alt'=>'aswq')); ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userProfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userProfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?>
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
