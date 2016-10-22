<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Property Image'), ['action' => 'edit', $propertyImage->img_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property Image'), ['action' => 'delete', $propertyImage->img_id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyImage->img_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Property Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Propertys'), ['controller' => 'Propertys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Propertys', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propertyImages view large-9 medium-8 columns content">
    <h3><?= h($propertyImage->img_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Img Path') ?></th>
            <td><?= h($propertyImage->img_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property') ?></th>
            <td><?= $propertyImage->has('property') ? $this->Html->link($propertyImage->property->prop_id, ['controller' => 'Propertys', 'action' => 'view', $propertyImage->property->prop_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Id') ?></th>
            <td><?= $this->Number->format($propertyImage->img_id) ?></td>
        </tr>
    </table>
</div>
