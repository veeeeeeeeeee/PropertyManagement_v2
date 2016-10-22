<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feature->feature_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feature->feature_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Features'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Features'), ['controller' => 'Features', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Feature'), ['controller' => 'Features', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="features form large-9 medium-8 columns content">
    <?= $this->Form->create($feature) ?>
    <fieldset>
        <legend><?= __('Edit Feature') ?></legend>
        <?php
            echo $this->Form->input('feature_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
