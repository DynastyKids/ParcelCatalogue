<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist[]|\Cake\Collection\CollectionInterface $parcellist
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/manages">Sorting List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/manages">Management Home</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Sorting List</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/Parcellist/add">Add new street</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid" style="min-width: 100%">
    <small>Drivers:
        <?php for($ii=0;$ii<sizeof($drivers);$ii++){
            echo $this->Html->link($drivers[$ii]['driver'],['controller'=>'Parcellist','action'=>'drivers',$ii])."&nbsp&nbsp";
        }?>
    </small><br>
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
<div class="mb-1" style="min-width: 100%">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="max-height: 120vh;overflow:auto;">
            <button class="nav-link active" id="v-pills-All-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">All</button>
            <?php $textarr="ABCDEFGHIJKLMNOPQRSTUVWXYZ"?>
            <?php for ($i=0;$i<strlen($textarr);$i++){?>
                <button class="nav-link" id="v-pills-<?= $textarr[$i]?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $textarr[$i]?>" type="button" role="tab" aria-controls="v-pills-<?= $textarr[$i]?>" aria-selected="false"><?= $textarr[$i]?></button>
            <?php }?>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <table class="table table-striped">
                    <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th><th>Actions</th></tr></thead>
                    <tbody>
                    <?php foreach ($parcellist as $parcel): ?>
                        <tr>
                            <td colspan="3"><?= h($parcel->street) ?></td>
                            <td><?= h($parcel->driver) ?></td>
                            <?php if($parcel->id !=1 ){?>
                            <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parcel->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parcel->id], ['confirm' => __('Are you sure you want to delete " {0}" ? ', $parcel->streetname)])  ?>
                            </td>
                            <?php } else { echo "<td></td>"; }?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?php for ($j=0;$j<strlen($textarr);$j++){?>
                <div class="tab-pane fade" id="v-pills-<?= $textarr[$j]?>" role="tabpanel" aria-labelledby="v-pills-<?= $textarr[$j]?>-tab">
                    <table class="table table-striped table-dark">
                        <thead><tr><th scope="col" colspan="3">Street Name</th><th scope="col">Driver</th><th>Actions</th></tr></thead>
                        <tbody>
                        <?php foreach ($parcellistArr[$j] as $parcel): ?>
                            <tr><td colspan="3"><?= h($parcel->street) ?></td><td><?= h($parcel->driver) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parcel->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parcel->id], ['confirm' => __('Are you sure you want to delete "{0}"?', $parcel->streetname)]) ?>
                                </td></tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php }?>
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
