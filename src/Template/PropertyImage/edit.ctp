<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $propertyImage->img_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $propertyImage->img_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Property Image'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Property'), ['controller' => 'Property', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Property', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propertyImage form large-9 medium-8 columns content">
    <?= $this->Form->create($propertyImage) ?>
    <fieldset>
        <legend><?= __('Edit Property Image') ?></legend>
        <?php
            echo $this->Form->input('img_path');
            echo $this->Form->input('prop_id', ['options' => $property]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
