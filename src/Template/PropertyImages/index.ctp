<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Property Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Propertys'), ['controller' => 'Propertys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Propertys', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propertyImages index large-9 medium-8 columns content">
    <h3><?= __('Property Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('property_image_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_image_path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propertyImages as $propertyImage): ?>
            <tr>
                <td><?= $propertyImage->has('property_image') ? $this->Html->link($propertyImage->property_image->property_image_id, ['controller' => 'PropertyImages', 'action' => 'view', $propertyImage->property_image->property_image_id]) : '' ?></td>
                <td><?= h($propertyImage->property_image_path) ?></td>
                <td><?= $propertyImage->has('property') ? $this->Html->link($propertyImage->property->prop_id, ['controller' => 'Propertys', 'action' => 'view', $propertyImage->property->prop_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $propertyImage->property_image_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $propertyImage->property_image_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $propertyImage->property_image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyImage->property_image_id)]) ?>
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
