<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="properties index large-9 medium-8 columns content">
    <h3><?= __('Properties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('property_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_suburb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_pc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($properties as $property): ?>
            <tr>
                <td><?= $property->has('property') ? $this->Html->link($property->property->property_id, ['controller' => 'Properties', 'action' => 'view', $property->property->property_id]) : '' ?></td>
                <td><?= h($property->property_street) ?></td>
                <td><?= h($property->property_suburb) ?></td>
                <td><?= h($property->property_state) ?></td>
                <td><?= h($property->property_pc) ?></td>
                <td><?= $this->Number->format($property->property_type) ?></td>
                <td><?= $this->Number->format($property->property_price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $property->property_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->property_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->property_id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->property_id)]) ?>
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
