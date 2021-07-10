<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist $parcellist
 */
?>
<div class="parcellist form columns content">
    <?= $this->Form->create($parcellist) ?>
    <fieldset>
        <legend><?= __('Adding Street Details') ?></legend>
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
