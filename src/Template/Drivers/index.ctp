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
                <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= $this->Url->build(['action'=>'add'])?>">Add new driver</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/online">Online Mode</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="drivers index large-9 medium-8 columns content">
    <h3><?= __('Drivers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drivername') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zone') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drivers as $driver): ?>
            <tr>
                <td><?= $this->Number->format($driver->id) ?></td>
                <td><?= h($driver->drivername) ?></td>
                <td><?= h($driver->zone) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
