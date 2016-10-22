<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $propertyFeature->prop_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $propertyFeature->prop_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Property Feature'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Property'), ['controller' => 'Property', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Property', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feature'), ['controller' => 'Feature', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Feature', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propertyFeature form large-9 medium-8 columns content">
    <?= $this->Form->create($propertyFeature) ?>
    <fieldset>
        <legend><?= __('Edit Property Feature') ?></legend>
        <?php
            echo $this->Form->input('no_feat');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
