<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feature'), ['action' => 'edit', $feature->feat_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feature'), ['action' => 'delete', $feature->feat_id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->feat_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Feature'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feature'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Property'), ['controller' => 'Property', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Property', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="feature view large-9 medium-8 columns content">
    <h3><?= h($feature->feat_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Feat Name') ?></th>
            <td><?= h($feature->feat_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feat Id') ?></th>
            <td><?= $this->Number->format($feature->feat_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Property') ?></h4>
        <?php if (!empty($feature->property)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Prop Id') ?></th>
                <th scope="col"><?= __('Prop Street') ?></th>
                <th scope="col"><?= __('Prop Suburb') ?></th>
                <th scope="col"><?= __('Prop State') ?></th>
                <th scope="col"><?= __('Prop Pc') ?></th>
                <th scope="col"><?= __('Prop Type') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Prop Desc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($feature->property as $property): ?>
            <tr>
                <td><?= h($property->prop_id) ?></td>
                <td><?= h($property->prop_street) ?></td>
                <td><?= h($property->prop_suburb) ?></td>
                <td><?= h($property->prop_state) ?></td>
                <td><?= h($property->prop_pc) ?></td>
                <td><?= h($property->prop_type) ?></td>
                <td><?= h($property->price) ?></td>
                <td><?= h($property->prop_desc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Property', 'action' => 'view', $property->prop_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Property', 'action' => 'edit', $property->prop_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Property', 'action' => 'delete', $property->prop_id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->prop_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
