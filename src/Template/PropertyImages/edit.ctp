<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $propertyImage->property_image_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $propertyImage->property_image_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Property Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Property Images'), ['controller' => 'PropertyImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Property Image'), ['controller' => 'PropertyImages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propertyImages form large-9 medium-8 columns content">
    <?= $this->Form->create($propertyImage) ?>
    <fieldset>
        <legend><?= __('Edit Property Image') ?></legend>
        <?php
            echo $this->Form->input('property_image_path');
            echo $this->Form->input('property_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
