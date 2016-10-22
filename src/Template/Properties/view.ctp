<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Property'), ['action' => 'edit', $property->property_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property'), ['action' => 'delete', $property->property_id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->property_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="properties view large-9 medium-8 columns content">
    <h3><?= h($property->property_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Property') ?></th>
            <td><?= $property->has('property') ? $this->Html->link($property->property->property_id, ['controller' => 'Properties', 'action' => 'view', $property->property->property_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Street') ?></th>
            <td><?= h($property->property_street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Suburb') ?></th>
            <td><?= h($property->property_suburb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property State') ?></th>
            <td><?= h($property->property_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Pc') ?></th>
            <td><?= h($property->property_pc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Type') ?></th>
            <td><?= $this->Number->format($property->property_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Price') ?></th>
            <td><?= $this->Number->format($property->property_price) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Property Desc') ?></h4>
        <?= $this->Text->autoParagraph(h($property->property_desc)); ?>
    </div>
</div>
