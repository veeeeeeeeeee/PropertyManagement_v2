<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Property Feature'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Property'), ['controller' => 'Property', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Property', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feature'), ['controller' => 'Feature', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Feature', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propertyFeature index large-9 medium-8 columns content">
    <h3><?= __('Property Feature') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('prop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feat_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no_feat') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propertyFeature as $propertyFeature): ?>
            <tr>
                <td><?= $propertyFeature->has('property') ? $this->Html->link($propertyFeature->property->prop_id, ['controller' => 'Property', 'action' => 'view', $propertyFeature->property->prop_id]) : '' ?></td>
                <td><?= $propertyFeature->has('feature') ? $this->Html->link($propertyFeature->feature->feat_id, ['controller' => 'Feature', 'action' => 'view', $propertyFeature->feature->feat_id]) : '' ?></td>
                <td><?= $this->Number->format($propertyFeature->no_feat) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $propertyFeature->prop_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $propertyFeature->prop_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $propertyFeature->prop_id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyFeature->prop_id)]) ?>
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
