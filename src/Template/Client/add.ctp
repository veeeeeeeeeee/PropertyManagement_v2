<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Client'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="client form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Add Client') ?></legend>
        <?php
            echo $this->Form->input('client_name');
            echo $this->Form->input('client_lname');
            echo $this->Form->input('client_email');
            echo $this->Form->input('client_mobile');
            echo $this->Form->input('client_street');
            echo $this->Form->input('client_suburb');
            echo $this->Form->input('client_state');
            echo $this->Form->input('client_pc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
