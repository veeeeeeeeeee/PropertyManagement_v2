<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Propertys'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="propertys form large-9 medium-8 columns content">
    <?= $this->Form->create($property) ?>
    <fieldset>
        <legend><?= __('Add Property') ?></legend>
        <?php
            echo $this->Form->input('property_id');
            echo $this->Form->input('property_street');
            echo $this->Form->input('property_suburb');
            echo $this->Form->input('property_state');
            echo $this->Form->input('property_pc');
            echo $this->Form->input('property_type');
            echo $this->Form->input('property_price');
            echo $this->Form->input('property_desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
