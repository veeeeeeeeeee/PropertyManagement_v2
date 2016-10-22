<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $propertyFeature->prop_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $propertyFeature->prop_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Property Features'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Propertys'), ['controller' => 'Propertys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Propertys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propertyFeatures form large-9 medium-8 columns content">
    <?= $this->Form->create($propertyFeature) ?>
    <fieldset>
        <legend><?= __('Edit Property Feature') ?></legend>
        <?php
            echo $this->Form->input('property_id');
            echo $this->Form->input('feature_id');
            echo $this->Form->input('property_feature_no');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
