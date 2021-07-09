<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist[]|\Cake\Collection\CollectionInterface $parcellist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parcellist'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parcellist index large-9 medium-8 columns content">
    <h3><?= __('Parcellist') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('street') ?></th>
            <th scope="col"><?= $this->Paginator->sort('driver') ?></th>
            <th scope="col"><?= $this->Paginator->sort('zone') ?></th>
            <th scope="col"><?= $this->Paginator->sort('note') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($parcellist as $parcellist): ?>
            <tr>
                <td><?= $this->Number->format($parcellist->id) ?></td>
                <td><?= h($parcellist->street) ?></td>
                <td><?= h($parcellist->driver) ?></td>
                <td><?= h($parcellist->zone) ?></td>
                <td><?= h($parcellist->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parcellist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parcellist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parcellist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcellist->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
