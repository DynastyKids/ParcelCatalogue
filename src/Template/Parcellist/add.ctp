<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist $parcellist
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Adding New Record</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/online">Online Mode</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="background-color: antiquewhite">
    <?= $this->Form->create($parcellist) ?>
    <fieldset>
        <legend><?= __('Adding Street Details') ?></legend>
        <?= $this->Form->control('street',['label'=>'(Required) Street Name:','type'=>'text','class'=>'form-control','required'=>true]);?>
        <br>
        <label for="driver" class="col-form-label">Driver Name:</label>
        <?= $this->Form->select('driver',
            ['Cesar'=>'Cesar','Ivan'=>'Ivan','Leo'=>'Leo','Danny'=>'Danny','Chris'=>'Chris','Mark'=>'Mark','Peter'=>'Peter','Louis'=>'Louis','Subash'=>'Subash','Pramesh'=>'Pramesh','Sean'=>'Sean','Saruul'=>'Saruul','Derek'=>'Derek']
            ,['class'=>'form-control']);?>
        <br>
        <?= $this->Form->control('suburb',['label'=>'Suburb Name','type'=>'text','class'=>'form-control']);?>
        <br>
        <?= $this->Form->hidden('zone',['type'=>'text','class'=>'form-control','value'=>'randwick']);?>
        <br>
    </fieldset>
    <br>
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
    <br><br>
</div>
