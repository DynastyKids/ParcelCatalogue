<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist[]|\Cake\Collection\CollectionInterface $parcellist
 */

echo $this->Html->css('jquery.dataTables.min.css');
//echo $this->Html->css("https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css");
echo $this->Html->script("https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js");
echo $this->Html->script("datatables.min.js")
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Manage Sorting List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/offline">Offline Mode</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/add">Add new street</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/drivers/add">Add new driver</a></li>
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
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parcellist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcellist->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<style>
    .nav-link {
        max-width: 100%;
        padding: .1rem .3rem !important;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 10px;
        z-index: 999;
        border: none;
        outline: none;
        background-color: cadetblue;
        color: white;
        cursor: pointer;
        padding: 5px;
        border-radius: 10px;
        font-size: 18px;
        height: 75px !important;
        width: 75px !important;
        opacity: 0.5;
    }

    #v-pills-tabContent {
        width: 100% !important;
    }

    .dataTables_wrapper .dataTables_filter{
        float: none !important;
    }

    .form-control{
        width: 100% !important;
        min-width:250px !important;
    }
</style>

<script>    // Scroll to top
    mybutton = document.getElementById("myBtn");
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            "lengthMenu": [1000],
            "lengthChange": false,
            paging: false,
            language: { search: '', searchPlaceholder: "Type Street Name for search..." },
        })
    });
</script>
<style>
    input[type="search"]::-webkit-search-cancel-button {
        -webkit-appearance: searchfield-cancel-button;
    }

    label{
        display: block !important;
    }

    input {
        background-color: whitesmoke!important;
    }
</style>
<script>
    function clearall() {
        var elements = document.getElementsByTagName("input");
        elements[0].value = "";
        elements[0].focus();
    }
</script>
