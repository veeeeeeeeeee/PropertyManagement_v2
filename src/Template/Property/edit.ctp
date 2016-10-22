<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $property->prop_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $property->prop_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Property'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Feature'), ['controller' => 'Feature', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Feature', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="property form large-9 medium-8 columns content">
    <?= $this->Form->create($property) ?>
    <fieldset>
        <legend><?= __('Edit Property') ?></legend>
        <?php
            echo $this->Form->input('prop_street');
            echo $this->Form->input('prop_suburb');
            echo $this->Form->input('prop_state');
            echo $this->Form->input('prop_pc');
            echo $this->Form->input('prop_type');
            echo $this->Form->input('price');
            echo $this->Form->input('prop_desc');
            echo $this->Form->input('feature._ids', ['options' => $feature]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
