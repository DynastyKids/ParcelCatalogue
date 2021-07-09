<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist $parcellist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parcellist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parcellist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Parcellist'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="parcellist form large-9 medium-8 columns content">
    <?= $this->Form->create($parcellist) ?>
    <fieldset>
        <legend><?= __('Edit Parcellist') ?></legend>
        <?php
            echo $this->Form->control('street');
            echo $this->Form->control('driver');
            echo $this->Form->control('zone');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
