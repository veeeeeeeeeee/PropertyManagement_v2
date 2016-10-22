<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feature'), ['action' => 'edit', $feature->feature_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feature'), ['action' => 'delete', $feature->feature_id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->feature_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Features'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feature'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Features'), ['controller' => 'Features', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Feature'), ['controller' => 'Features', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="features view large-9 medium-8 columns content">
    <h3><?= h($feature->feature_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parent Feature') ?></th>
            <td><?= $feature->has('parent_feature') ? $this->Html->link($feature->parent_feature->feature_id, ['controller' => 'Features', 'action' => 'view', $feature->parent_feature->feature_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feature Name') ?></th>
            <td><?= h($feature->feature_name) ?></td>
        </tr>
    </table>
</div>
