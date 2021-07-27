<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver[]|\Cake\Collection\CollectionInterface $drivers
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Drivers List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/add">Add missing street</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/drivers/add">Add new driver</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/offline">Offline Mode</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="columns container">
    <button onclick="clearall()" class="btn btn-primary" style="min-width: 100%">Clear input</button>
    <table class="table table-striped table-dark" id="myTable" style="background-color:black; min-width: 100%">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Driver</th>
            <th scope="col">Zone</th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($drivers as $driver): ?>
            <tr>
                <td><?= $this->Number->format($driver->id) ?></td>
                <td><?= h($driver->drivername) ?></td>
                <td><?= h($driver->zone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $driver->id]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
