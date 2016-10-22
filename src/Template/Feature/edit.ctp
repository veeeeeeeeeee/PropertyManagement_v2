<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feature->feat_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feature->feat_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Feature'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Property'), ['controller' => 'Property', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Property', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="feature form large-9 medium-8 columns content">
    <?= $this->Form->create($feature) ?>
    <fieldset>
        <legend><?= __('Edit Feature') ?></legend>
        <?php
            echo $this->Form->input('feat_name');
            echo $this->Form->input('property._ids', ['options' => $property]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
