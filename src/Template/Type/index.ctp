<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="type index large-9 medium-8 columns content">
    <h3><?= __('Type') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($type as $type): ?>
            <tr>
                <td><?= $this->Number->format($type->type_id) ?></td>
                <td><?= h($type->type_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $type->type_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $type->type_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $type->type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->type_id)]) ?>
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
