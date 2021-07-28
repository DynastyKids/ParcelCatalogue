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
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/manages">Manage records</a></li>
                <li class="nav-item"><a class="nav-link" href="/offline">Offline Mode</a></li>
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
        <?php $options=[]?>
        <?php for ($i=0;$i<$driverlist->count();$i++){
            array_push($options,$driverlist->toArray()[$i]['drivername']);
        }?>
        <?= $this->Form->select('driver', $options,['class'=>'form-control']);?>
        <br>
        <label for="suburb" class="col-form-label">Suburbs:</label>
        <?php $suburbs = ['Clovelly','Coogee','Daceyville','Kingsford','Randwick','South Coogee','St Pauls'];?>
        <?= $this->Form->select('suburb',$suburbs,['label'=>'Suburb Name','type'=>'text','class'=>'form-control']);?>
        <br>
        <label class="col-form-label">Odd Number Range:</label><br>
        <div class="row">
            <div class="col-3"><?= $this->Form->control('oddblimit',['label'=>'From','type'=>'number','class'=>'form-control','style'=>'max-width:100px','default'=>1])?></div>
            <div class="col-3"><?= $this->Form->control('oddulimit',['label'=>'To:','type'=>'number','class'=>'form-control','style'=>'max-width:100px','default'=>999])?></div>
        </div>
        <br>
        <div class="row">
        <label class="col-form-label">Even Number Range</label>
            <div class="col-3"><?= $this->Form->control('evenblimit',['label'=>'From:','type'=>'number','class'=>'form-control col-sm-2','style'=>'max-width:100px','default'=>2])?></div>
            <div class="col-3"><?= $this->Form->control('evenulimit',['label'=>'To:','type'=>'number','class'=>'form-control col-sm-2','style'=>'max-width:100px','default'=>998])?></div>
        </div>
        <?= $this->Form->hidden('zone',['type'=>'text','class'=>'form-control','value'=>'randwick']);?>
        <br>
    </fieldset>
    <br>
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
    <br><br>
</div>
