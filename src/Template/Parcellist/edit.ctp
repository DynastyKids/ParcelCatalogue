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
                <!--                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>-->
                <!--                <li class="nav-item dropdown">-->
                <!--                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>-->
                <!--                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">-->
                <!--                        <li><a class="dropdown-item" href="#">Action</a></li>-->
                <!--                        <li><a class="dropdown-item" href="#">Another action</a></li>-->
                <!--                        <li><hr class="dropdown-divider" /></li>-->
                <!--                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
            </ul>
        </div>
    </div>
</nav>
<div class="container">

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
        <label for="driver">Driver Name:</label>
        <?= $this->Form->select('driver',
            ['Cesar'=>'Cesar','Ivan'=>'Ivan','Leo'=>'Leo','Danny'=>'Danny','Chris'=>'Chris','Mark'=>'Mark','Peter'=>'Peter','Louis'=>'Louis','Subash'=>'Subash','Pramesh'=>'Pramesh','Sean'=>'Sean','Saruul'=>'Saruul','Derek'=>'Derek']
            ,['class'=>'form-control']);?>
        <br>
        <?= $this->Form->control('suburb',['label'=>'Suburb Name:','type'=>'text','class'=>'form-control']);?>
        <br>
        <?= $this->Form->hidden('zone',['label'=>'Zone Name:','type'=>'text','class'=>'form-control','value'=>'randwick']);?>
    </fieldset>
    <br>
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
