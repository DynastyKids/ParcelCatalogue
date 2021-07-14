<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist[]|\Cake\Collection\CollectionInterface $parcellist
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Manage Sorting List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/add">Add missing street</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">By Zone</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/zone1">Radnwick 1</a></li>
                        <li><a class="dropdown-item" href="/zone2">Randwick 2</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href=<?= $this->Url->build(['action'=>'manage','0'])?>>Unknown</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="columns container">
<!--    --><?php //echo $this->Html->link(__('New Street Details'), ['action' => 'add']) ?>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Street</th>
            <th scope="col">Driver</th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($parcellist as $parcellist): ?>
            <tr>
                <td><?= h($parcellist->id) ?></td>
                <td><?= h($parcellist->street) ?></td>
                <td><?= h($parcellist->driver) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parcellist->id]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
