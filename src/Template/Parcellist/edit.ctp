<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist $parcellist
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Sorting List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/offline">Offline Mode</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="background-color: antiquewhite">
    <?= $this->Form->create($parcellist) ?>
    <fieldset>
        <legend><?= __('Edit Street Details') ?></legend>
        <?= $this->Form->control('streetname',['label'=>'Street Name:','type'=>'text','class'=>'form-control']);?>
        <br>
        <label for="driver">Driver Name:</label>
        <?php $options=[];
        array_push($options,"Current Driver: ".$parcellist->driver)?>
        <?php for ($i=0;$i<$driverlist->count();$i++){
           array_push($options,$driverlist->toArray()[$i]['drivername']);
        }?>
        <?php echo $this->Form->select('ndriver', $options,['class'=>'form-control']);?>
        <br>
        <?php
        $duplicatecount = \Cake\ORM\TableRegistry::getTableLocator()->get('parcellist')->find()->where(['streetname'=>$parcellist->streetname])->count();
        if($duplicatecount>0) {
            echo '<label class="col-form-label">Set Display Order:</label><br>';
            echo $this->Form->control('displayorder', ['label' => '', 'type' => 'number', 'class' => 'form-control', 'style' => 'max-width:100px']);
        }
        ?>
        <br>

        <label class="col-form-label">Odd Number Range:</label><br>
        <div class="row">
            <div class="col-3"><?= $this->Form->control('oddblimit',['label'=>'From','type'=>'number','id'=>'oddblimit','class'=>'form-control','style'=>'max-width:100px','default'=>1])?></div>
            <div class="col-3"><?= $this->Form->control('oddulimit',['label'=>'To:','type'=>'number','id'=>'oddulimit','class'=>'form-control','style'=>'max-width:100px','default'=>999])?></div>
            <button onclick="excludeodd()" type="button" class="col-3 btn btn-warning">Exclude Odd Numbers</button>
        </div>
        <br>
        <div class="row">
            <label class="col-form-label">Even Number Range</label>
            <div class="col-3"><?= $this->Form->control('evenblimit',['label'=>'From:','type'=>'number','id'=>'evenblimit','class'=>'form-control col-sm-2','style'=>'max-width:100px','default'=>2])?></div>
            <div class="col-3"><?= $this->Form->control('evenulimit',['label'=>'To:','type'=>'number','id'=>'evenulimit','class'=>'form-control col-sm-2','style'=>'max-width:100px','default'=>998])?></div>
            <button onclick="excludeeven()" type="button" class="col-3 btn btn-warning">Exclude Even Numbers</button>
        </div>
        <br>
        <?= $this->Form->hidden('zone',['label'=>'Zone Name:','type'=>'text','class'=>'form-control','value'=>'randwick']);?>
    </fieldset>
    <br>
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>


<script>
    function excludeodd() {
        document.getElementById("oddblimit").value = 0;
        document.getElementById("oddulimit").value = 0;
    }
</script>

<script>
    function excludeeven() {
        document.getElementById("evenblimit").value = 0;
        document.getElementById("evenulimit").value = 0;
    }
</script>
