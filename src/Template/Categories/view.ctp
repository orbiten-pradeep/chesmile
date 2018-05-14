<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="block-header">
    <h2><?= h($category->name) ?></h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Categories List
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th scope="col"><?= __('Name') ?>
                            <th scope="col"><?= __('Color') ?></th>
                            <th scope="col"><?= __('Card') ?></th>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col"><?= __('Active') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><?= h($category->name) ?></td>
                                <td style="background-color: <?php echo "#".$category->color; ?>"><?= h($category->color) ?></td>
                                <td style="background-color: <?php echo "#".$category->categorylitecolor; ?>"><?= h($category->categorylitecolorcolor) ?></td>
                                <td><?php if($category->card) 
                                    {
                                        echo $this->Html->image('card/'.$category->card, array('width' => '100px', 'height' => '100px','alt'=>'Card'));
                                    }  
                                    ?>
                                </td>
                                <td><?= $this->Number->format($category->id) ?></td>
                                <td><?= h($category->created) ?></td>
                                <td><?= h($category->modified) ?></td>
                                <td><?= $category->active ? __('Yes') : __('No'); ?></td>
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
<!-- <div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td style="background-color: <?php echo "#".$category->color; ?>"><?= 
            h($category->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Card') ?></th>
            <td>
            <?php if($category->card) 
            {
                echo $this->Html->image('card/'.$category->card, array('width' => '200px', 'height' => '200px','alt'=>'Card'));
            }  
            ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $category->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div> -->
