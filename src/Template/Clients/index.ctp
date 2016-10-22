<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients index large-9 medium-8 columns content">
    <h3><?= __('Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_suburb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_pc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $client->has('client') ? $this->Html->link($client->client->client_id, ['controller' => 'Clients', 'action' => 'view', $client->client->client_id]) : '' ?></td>
                <td><?= h($client->client_name) ?></td>
                <td><?= h($client->client_lname) ?></td>
                <td><?= h($client->client_email) ?></td>
                <td><?= h($client->client_mobile) ?></td>
                <td><?= h($client->client_street) ?></td>
                <td><?= h($client->client_suburb) ?></td>
                <td><?= h($client->client_state) ?></td>
                <td><?= h($client->client_pc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $client->client_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->client_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->client_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
