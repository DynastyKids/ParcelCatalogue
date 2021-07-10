<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist[]|\Cake\Collection\CollectionInterface $parcellist
 */
?>
<div class="columns content">
    <?= $this->Html->link(__('New Street Details'), ['action' => 'add']) ?>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Street</th>
            <th scope="col">Driver</th>
            <th scope="col">Zone</th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($parcellist as $parcellist): ?>
            <tr>
                <td><?= h($parcellist->street) ?></td>
                <td><?= h($parcellist->driver) ?></td>
                <td><?= h($parcellist->zone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parcellist->id]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
