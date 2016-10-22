<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Property Feature'), ['action' => 'edit', $propertyFeature->prop_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property Feature'), ['action' => 'delete', $propertyFeature->prop_id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyFeature->prop_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Property Features'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property Feature'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propertyFeatures view large-9 medium-8 columns content">
    <h3><?= h($propertyFeature->prop_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Feature') ?></th>
            <td><?= $propertyFeature->has('feature') ? $this->Html->link($propertyFeature->feature->feature_id, ['controller' => 'Features', 'action' => 'view', $propertyFeature->feature->feature_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Id') ?></th>
            <td><?= $this->Number->format($propertyFeature->property_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Feature No') ?></th>
            <td><?= $this->Number->format($propertyFeature->property_feature_no) ?></td>
        </tr>
    </table>
</div>
