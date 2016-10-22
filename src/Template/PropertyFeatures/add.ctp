<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Property Features'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propertyFeatures form large-9 medium-8 columns content">
    <?= $this->Form->create($propertyFeature) ?>
    <fieldset>
        <legend><?= __('Add Property Feature') ?></legend>
        <?php
            echo $this->Form->input('property_id');
            echo $this->Form->input('feature_id', ['options' => $features]);
            echo $this->Form->input('property_feature_no');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
