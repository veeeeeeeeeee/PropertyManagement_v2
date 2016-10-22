<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feature'), ['controller' => 'Feature', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Feature', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="property index large-9 medium-8 columns content">
    <h3><?= __('Property') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('prop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prop_street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prop_suburb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prop_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prop_pc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prop_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($property as $property): ?>
            <tr>
                <td><?= $this->Number->format($property->prop_id) ?></td>
                <td><?= h($property->prop_street) ?></td>
                <td><?= h($property->prop_suburb) ?></td>
                <td><?= h($property->prop_state) ?></td>
                <td><?= h($property->prop_pc) ?></td>
                <td><?= $this->Number->format($property->prop_type) ?></td>
                <td><?= $this->Number->format($property->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $property->prop_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->prop_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->prop_id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->prop_id)]) ?>
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
