<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Property Image'), ['action' => 'edit', $propertyImage->property_image_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property Image'), ['action' => 'delete', $propertyImage->property_image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertyImage->property_image_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Property Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Property Images'), ['controller' => 'PropertyImages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Property Image'), ['controller' => 'PropertyImages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propertyImages view large-9 medium-8 columns content">
    <h3><?= h($propertyImage->property_image_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parent Property Image') ?></th>
            <td><?= $propertyImage->has('parent_property_image') ? $this->Html->link($propertyImage->parent_property_image->property_image_id, ['controller' => 'PropertyImages', 'action' => 'view', $propertyImage->parent_property_image->property_image_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Image Path') ?></th>
            <td><?= h($propertyImage->property_image_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Id') ?></th>
            <td><?= $this->Number->format($propertyImage->property_id) ?></td>
        </tr>
    </table>
</div>
