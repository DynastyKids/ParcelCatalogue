<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist[]|\Cake\Collection\CollectionInterface $parcellist
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Sorting List - Online Mode</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<!--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>-->
                <li class="nav-item"><a class="nav-link" href="/offline">Offline Mode</a></li>
                <li class="nav-item"><a class="nav-link" href="/add">Add missing street</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">By Zone</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/zone/1">Radnwick 1</a></li>
                        <li><a class="dropdown-item" href="/zone/2">Randwick 2</a></li>
                        <li><hr class="dropdown-divider"/></li>
                        <li><a class="dropdown-item" href=<?= $this->Url->build(['action'=>'manage','0'])?>>Unknown</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid" style="min-width: 100%">
    <small style="color:lightsteelblue">Data updated : 14/07/21 2000 AEST</small><br>
    <small style="color:lightsteelblue">Randwick 1: Cesar, Leo, Danny, Ivan, Chris, <span style="color: #1cc7ff">Peter, Mark</span></small><br>
    <small style="color:lightsteelblue">Randwick 2: Louis, Subash, Pramesh, Sean, Saruul, <span style="color: #1cc7ff">Derek</span></small>
    <form>
        <div class="input-group">
            <input id="searchinput" type="text" class="form-control" placeholder="在线模式可带街号搜索" onkeyup="showResult(this.value)">
            <button type="button" class="btn bg-transparent" style="margin-left: -40px; z-index: 100;" onclick="clearInput()">
                <i class="fa fa-times"></i>
            </button>
            <button type="button" class="btn btn-warning" style="width: 100px" onclick="clearInput()">
                Clear
            </button>
        </div>

        <div id="livesearch"></div>
        <script>
            function showResult(str) {
                if (str.length==0) {
                    document.getElementById("livesearch").innerHTML="";
                    document.getElementById("livesearch").style.border="0px";
                    return;
                }
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                        document.getElementById("livesearch").innerHTML=this.responseText;
                        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                    }
                }
                xmlhttp.open("GET","/parcellist/search/"+str,true);
                xmlhttp.send();
            }
        </script>
<div class="mb-1" style="background-color:black; min-width: 100%">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="max-height: 120vh;overflow:auto;">
            <button class="nav-link active" id="v-pills-All-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">All</button>
            <button class="nav-link" id="v-pills-A-tab" data-bs-toggle="pill" data-bs-target="#v-pills-A" type="button" role="tab" aria-controls="v-pills-A" aria-selected="false">A</button>
            <button class="nav-link" id="v-pills-B-tab" data-bs-toggle="pill" data-bs-target="#v-pills-B" type="button" role="tab" aria-controls="v-pills-B" aria-selected="false">B</button>
            <button class="nav-link" id="v-pills-C-tab" data-bs-toggle="pill" data-bs-target="#v-pills-C" type="button" role="tab" aria-controls="v-pills-C" aria-selected="false">C</button>
            <button class="nav-link" id="v-pills-D-tab" data-bs-toggle="pill" data-bs-target="#v-pills-D" type="button" role="tab" aria-controls="v-pills-D" aria-selected="false">D</button>
            <button class="nav-link" id="v-pills-E-tab" data-bs-toggle="pill" data-bs-target="#v-pills-E" type="button" role="tab" aria-controls="v-pills-E" aria-selected="false">E</button>
            <button class="nav-link" id="v-pills-F-tab" data-bs-toggle="pill" data-bs-target="#v-pills-F" type="button" role="tab" aria-controls="v-pills-F" aria-selected="false">F</button>
            <button class="nav-link" id="v-pills-G-tab" data-bs-toggle="pill" data-bs-target="#v-pills-G" type="button" role="tab" aria-controls="v-pills-G" aria-selected="false">G</button>
            <button class="nav-link" id="v-pills-H-tab" data-bs-toggle="pill" data-bs-target="#v-pills-H" type="button" role="tab" aria-controls="v-pills-H" aria-selected="false">H</button>
            <button class="nav-link" id="v-pills-I-tab" data-bs-toggle="pill" data-bs-target="#v-pills-I" type="button" role="tab" aria-controls="v-pills-I" aria-selected="false">I</button>
            <button class="nav-link" id="v-pills-J-tab" data-bs-toggle="pill" data-bs-target="#v-pills-J" type="button" role="tab" aria-controls="v-pills-J" aria-selected="false">J</button>
            <button class="nav-link" id="v-pills-K-tab" data-bs-toggle="pill" data-bs-target="#v-pills-K" type="button" role="tab" aria-controls="v-pills-K" aria-selected="false">K</button>
            <button class="nav-link" id="v-pills-L-tab" data-bs-toggle="pill" data-bs-target="#v-pills-L" type="button" role="tab" aria-controls="v-pills-L" aria-selected="false">L</button>
            <button class="nav-link" id="v-pills-M-tab" data-bs-toggle="pill" data-bs-target="#v-pills-M" type="button" role="tab" aria-controls="v-pills-M" aria-selected="false">M</button>
            <button class="nav-link" id="v-pills-N-tab" data-bs-toggle="pill" data-bs-target="#v-pills-N" type="button" role="tab" aria-controls="v-pills-N" aria-selected="false">N</button>
            <button class="nav-link" id="v-pills-O-tab" data-bs-toggle="pill" data-bs-target="#v-pills-O" type="button" role="tab" aria-controls="v-pills-O" aria-selected="false">O</button>
            <button class="nav-link" id="v-pills-P-tab" data-bs-toggle="pill" data-bs-target="#v-pills-P" type="button" role="tab" aria-controls="v-pills-P" aria-selected="false">P</button>
            <button class="nav-link" id="v-pills-Q-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Q" type="button" role="tab" aria-controls="v-pills-Q" aria-selected="false">Q</button>
            <button class="nav-link" id="v-pills-R-tab" data-bs-toggle="pill" data-bs-target="#v-pills-R" type="button" role="tab" aria-controls="v-pills-R" aria-selected="false">R</button>
            <button class="nav-link" id="v-pills-S-tab" data-bs-toggle="pill" data-bs-target="#v-pills-S" type="button" role="tab" aria-controls="v-pills-S" aria-selected="false">S</button>
            <button class="nav-link" id="v-pills-T-tab" data-bs-toggle="pill" data-bs-target="#v-pills-T" type="button" role="tab" aria-controls="v-pills-T" aria-selected="false">T</button>
            <button class="nav-link" id="v-pills-U-tab" data-bs-toggle="pill" data-bs-target="#v-pills-U" type="button" role="tab" aria-controls="v-pills-U" aria-selected="false">U</button>
            <button class="nav-link" id="v-pills-V-tab" data-bs-toggle="pill" data-bs-target="#v-pills-V" type="button" role="tab" aria-controls="v-pills-V" aria-selected="false">V</button>
            <button class="nav-link" id="v-pills-W-tab" data-bs-toggle="pill" data-bs-target="#v-pills-W" type="button" role="tab" aria-controls="v-pills-W" aria-selected="false">W</button>
            <button class="nav-link" id="v-pills-X-tab" data-bs-toggle="pill" data-bs-target="#v-pills-X" type="button" role="tab" aria-controls="v-pills-X" aria-selected="false">X</button>
            <button class="nav-link" id="v-pills-Y-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Y" type="button" role="tab" aria-controls="v-pills-Y" aria-selected="false">Y</button>
            <button class="nav-link" id="v-pills-Z-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Z" type="button" role="tab" aria-controls="v-pills-Z" aria-selected="false">Z</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellist as $parcel): ?>
                        <tr>
                            <td colspan="3"><?= h($parcel->street) ?></td>
                            <td><?= h($parcel->driver) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-A" role="tabpanel" aria-labelledby="v-pills-A-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistA as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-B" role="tabpanel" aria-labelledby="v-pills-B-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistB as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-C" role="tabpanel" aria-labelledby="v-pills-C-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistC as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-D" role="tabpanel" aria-labelledby="v-pills-D-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistD as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-E" role="tabpanel" aria-labelledby="v-pills-E-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistE as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-F" role="tabpanel" aria-labelledby="v-pills-F-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistF as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-G" role="tabpanel" aria-labelledby="v-pills-G-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistG as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-H" role="tabpanel" aria-labelledby="v-pills-H-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistH as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-I" role="tabpanel" aria-labelledby="v-pills-I-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistI as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-J" role="tabpanel" aria-labelledby="v-pills-J-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistJ as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-K" role="tabpanel" aria-labelledby="v-pills-K-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistK as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-L" role="tabpanel" aria-labelledby="v-pills-L-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistL as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-M" role="tabpanel" aria-labelledby="v-pills-M-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistM as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-N" role="tabpanel" aria-labelledby="v-pills-N-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistN as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-O" role="tabpanel" aria-labelledby="v-pills-O-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistO as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-P" role="tabpanel" aria-labelledby="v-pills-P-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistP as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-Q" role="tabpanel" aria-labelledby="v-pills-Q-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistQ as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-R" role="tabpanel" aria-labelledby="v-pills-R-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistR as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-S" role="tabpanel" aria-labelledby="v-pills-S-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistS as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-T" role="tabpanel" aria-labelledby="v-pills-T-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistT as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-U" role="tabpanel" aria-labelledby="v-pills-U-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistU as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-V" role="tabpanel" aria-labelledby="v-pills-V-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistV as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-W" role="tabpanel" aria-labelledby="v-pills-W-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistW as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-X" role="tabpanel" aria-labelledby="v-pills-X-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistX as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-Y" role="tabpanel" aria-labelledby="v-pills-Y-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistY as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-Z" role="tabpanel" aria-labelledby="v-pills-Z-tab">
                <table class="table table-striped table-dark">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellistZ as $parcel): ?>
                        <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

<style>
    .nav-link{
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

    #v-pills-tabContent{
        width: 100% !important;
    }
</style>

<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
<script>
    function clearInput(){
        document.getElementById('searchinput').value='';
        document.getElementById('searchinput').focus();
    }
</script>
