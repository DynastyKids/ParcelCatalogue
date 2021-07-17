<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist[]|\Cake\Collection\CollectionInterface $parcellist
 */
echo $this->Html->css("https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css");
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Sorting List - Offline Mode</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Online Mode</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/add">Add missing street</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">By Zone</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/zone/1">Radnwick 1</a></li>
                        <li><a class="dropdown-item" href="/zone/2">Randwick 2</a></li>
                        <li>
                            <hr class="dropdown-divider"/>
                        </li>
                        <li><a class="dropdown-item"
                               href=<?= $this->Url->build(['action' => 'manage', '0']) ?>>Unknown</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid" style="min-width: 100%">
    <small style="color:lightsteelblue">Randwick 1: Cesar, Leo, Danny, Ivan, Chris, <span style="color: #1cc7ff">Peter, Mark</span></small><br>
    <small style="color:lightsteelblue">Randwick 2: Louis, Subash, Pramesh, Sean, Saruul, <span style="color: #1cc7ff">Derek</span></small><br>
    <button onclick="clearall()" class="btn btn-primary" style="min-width: 100%">Clear input</button>
    <table class="table table-striped table-dark" id="myTable" style="background-color:black; min-width: 100%">
        <thead>
        <tr>
            <th scope="col">Street Name</th>
            <th scope="col">Driver</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($parcellist as $parcel): ?>
            <tr>
                <td><?= h($parcel->street) ?></td>
                <td><?= h($parcel->driver) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/datatables.min.js"></script>
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

    .form-control-sm{
        width: 100%;
        min-width:250px;
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
        for (var ii = 0; ii < elements.length; ii++) {
            if (elements[ii].type == "search") {
                elements[ii].value = "";
            }
        }
    }
</script>
