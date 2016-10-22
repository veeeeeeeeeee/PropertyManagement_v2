<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feature'), ['action' => 'edit', $feature->feat_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feature'), ['action' => 'delete', $feature->feat_id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->feat_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Features'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feature'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="features view large-9 medium-8 columns content">
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
</div>
