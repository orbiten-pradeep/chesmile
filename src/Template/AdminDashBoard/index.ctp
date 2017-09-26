<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Group'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profile', 'action' => 'index']) ?></li>

        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Marathon Booking'), ['controller' => 'Marathonbooking', 'action' => 'index']) ?></li>
    </ul>
</nav>