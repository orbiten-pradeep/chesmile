

  <div class="events index large-9 medium-8 columns content">
      <h3><?= __('Events') ?></h3>
      <table cellpadding="0" cellspacing="0">
          <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('contact_number') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('mobile_number') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('OrganizersName') ?></th>
                  
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($eventss as $event): ?>
              <tr>
                  <td><?= $this->Number->format($event->id) ?></td>
                  <td><?= h($event->title) ?></td>
                  <td>
                    <?php 
                        if($event->active == 1)
                            { echo "Enabled"; } 
                        else if($event->active == 0)
                            { echo "Waiting for Admin Review.."; } 
                        elseif ($event->active == 2) {
                            echo "Deleted";
                        }
                        //echo $event;
                    ?>  
                  </td>
                  <td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
                  <td><?= h($event->date) ?></td>
                  <td><?= h($event->time) ?></td>
                  <td><?= h($event->contact_number) ?></td>
                  <td><?= h($event->mobile_number) ?></td>
                  <td><?= h($event['Address']['areaname']) ?></td>
                  <td><?= h($event->OrganizersName) ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                      <?php 
                            if($event->active == 1)
                            {
                                echo $this->Html->link(__('De-Activate'), ['action' => 'activate', $event->id]);
                            } else {
                                echo $this->Html->link(__('Activate'), ['action' => 'activate', $event->id]) ;
                            }
                       ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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