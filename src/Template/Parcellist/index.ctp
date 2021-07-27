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
        <a class="navbar-brand" href="/">Sorting List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/online">Online Mode</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid" style="min-width: 100%">
    <?php
    $zone1=[];
    $zone2=[];
    for($ii=0;$ii<$driverlist->count();$ii++){
        if ($driverlist->toArray()[$ii]['zone'] == 1){
            array_push($zone1,$driverlist->toArray()[$ii]['drivername']);
        }
        if ($driverlist->toArray()[$ii]['zone'] == 2){
            array_push($zone2,$driverlist->toArray()[$ii]['drivername']);
        }
    }
    ?>
    <small style="color:lightsteelblue">Zone 1:
        <?php for($ii=0;$ii<sizeof($zone1);$ii++){echo $zone1[$ii].", ";}?>
    </small><br>
    <small style="color:lightsteelblue">Zone 2:
        <?php for($ii=0;$ii<sizeof($zone2);$ii++){echo $zone2[$ii].", ";}?>
    </small><br>
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
