<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist $parcellist
 */
?>
<div class="parcellist form columns content">

    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $parcellist->street],
            ['confirm' => __('Are you sure you want to delete \' {0} \'?', $parcellist->street)]
        )
        ?></li>
    <li><?= $this->Html->link(__('Back to list'), ['action' => 'index']) ?></li>

    <?= $this->Form->create($parcellist) ?>
    <fieldset>
        <legend><?= __('Edit Street Details') ?></legend>
        <?= $this->Form->control('street',['label'=>'Street Name:','type'=>'text','class'=>'form-control']);?>
        <br>
        <?= $this->Form->control('driver',['label'=>'Driver Name:','type'=>'text','class'=>'form-control']);?>
        <br>
        <?= $this->Form->control('zone',['label'=>'Zone Name:','type'=>'text','class'=>'form-control']);?>
        <br>
        <?= $this->Form->control('note',['label'=>'Addition note:','type'=>'text','class'=>'form-control']);?>
        <br>
    </fieldset>
    <br>
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
