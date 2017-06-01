<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="marathon index large-9 medium-8 columns content">
    <h3><?= __('Marathon') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?php echo"Sl No"; ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TSHIRT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $cnt = 1;
            foreach ($marathon as $marathon): ?>
            <tr>
                <td><?php echo $cnt; ?></td>
                <td><?= h($marathon->firstname) ?></td>
                <td><?= h($marathon->lastname) ?></td>
                <td><?= h($marathon->amount) ?></td>
                <td><?= h($marathon->status) ?></td>
                <td><?= h($marathon->email) ?></td>
                <td><?= h($marathon->mobile_number) ?></td>
                <td><?= h($marathon->TSHIRT) ?></td>
                <td><?= h($marathon->Created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'details', $marathon->activation_key]) ?>
                </td>
            </tr>
            <?php
                $cnt++;
             endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">

        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
