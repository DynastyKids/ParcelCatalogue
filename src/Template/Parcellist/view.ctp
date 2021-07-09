<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist $parcellist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Parcellist'), ['action' => 'edit', $parcellist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Parcellist'), ['action' => 'delete', $parcellist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcellist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Parcellist'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parcellist'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parcellist view large-9 medium-8 columns content">
    <h3><?= h($parcellist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($parcellist->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Driver') ?></th>
            <td><?= h($parcellist->driver) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zone') ?></th>
            <td><?= h($parcellist->zone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($parcellist->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($parcellist->id) ?></td>
        </tr>
    </table>
</div>
