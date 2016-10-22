<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Property'), ['controller' => 'Property', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Property', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="feature index large-9 medium-8 columns content">
    <h3><?= __('Feature') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('feat_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feat_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feature as $feature): ?>
            <tr>
                <td><?= $this->Number->format($feature->feat_id) ?></td>
                <td><?= h($feature->feat_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feature->feat_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feature->feat_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feature->feat_id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->feat_id)]) ?>
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
