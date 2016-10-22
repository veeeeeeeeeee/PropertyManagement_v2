<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->client_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="client view large-9 medium-8 columns content">
    <h3><?= h($client->client_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client Name') ?></th>
            <td><?= h($client->client_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Lname') ?></th>
            <td><?= h($client->client_lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Email') ?></th>
            <td><?= h($client->client_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Mobile') ?></th>
            <td><?= h($client->client_mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Street') ?></th>
            <td><?= h($client->client_street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Suburb') ?></th>
            <td><?= h($client->client_suburb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client State') ?></th>
            <td><?= h($client->client_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Pc') ?></th>
            <td><?= h($client->client_pc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Id') ?></th>
            <td><?= $this->Number->format($client->client_id) ?></td>
        </tr>
    </table>
</div>
