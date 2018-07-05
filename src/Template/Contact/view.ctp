<div class="block-header">
    <h2></h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Contact Query
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered table-striped table-hover ">
                    <thead>
                        <tr> <th scope="col"><?= __('ID') ?></th>
                            <th scope="col"><?= __('Name') ?>
                            <th scope="col"><?= __('Email') ?></th>
                            <th scope="col"><?= __('Comments') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr> <td><?= $this->Number->format($contact->ID) ?></td>
                                <td><?= h($contact->Name) ?></td>
                                <td><?= h($contact->email) ?></td>
                                <td><?= $this->Text->autoParagraph(h($contact->comments)); ?></td>
                                <td><?= h($contact->created) ?></td>
                            </tr>
                    </tbody>
                </table>
                <!-- <div class="paginator">
                    <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contact view large-9 medium-8 columns content">
    <h3><?= h($contact->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contact->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contact->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($contact->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contact->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comments') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->comments)); ?>
    </div>
</div>
 -->