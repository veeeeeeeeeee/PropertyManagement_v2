<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Property Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Property'), ['controller' => 'Property', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Property', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propertyImage index large-9 medium-8 columns content">
    <h3><?= __('Property Image') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('img_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img_path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prop_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propertyImage as $propertyImage): ?>
            <tr>
                <td><?= $this->Number->format($propertyImage->img_id) ?></td>
                <td><?= h($propertyImage->img_path) ?></td>
                <td><?= $propertyImage->has('property') ? $this->Html->link($propertyImage->property->prop_id, ['controller' => 'Property', 'action' => 'view', $propertyImage->property->prop_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $propertyImage->img_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $propertyImage->img_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $propertyImage->img_id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyImage->img_id)]) ?>
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
