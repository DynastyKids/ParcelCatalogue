<?php
$this->layout=false;
?>
<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Mascot PDC - Randwick sorting list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="google" content="notranslate"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
<div id="contents">
    <div id="banner" class="bg-dark text-white" style="line-height: 16pt; padding-top: 0.5rem !important; padding-bottom: 0.5rem !important">
        <div class="col-sm-12"></div>
    </div>
    <div style="background: bisque; height: 60px; display: flex; flex-direction: row; padding: 0.5rem 1rem;">
        <input style="width: 70vw" type="text" autocorrect="off" autocomplete="off" id="searchKeyword"
               onkeyup="tableFilter()" onfocus="tableReset()" placeholder="Search...">
        <input style="margin-left: 0.5rem; width: 30vw" class="btn btn-outline-danger" type="reset" value="Reset"
               onclick="tableReset()">
    </div>
    <div style="background: beige; padding: 0.5rem 0.3rem;">
        <table id="catalog">
            <thead>
            <tr class="catalog-header">
                <th style="width: 70vw!important">Street Name</th>
                <th style="width: 28vw!important">Courier</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
<footer>
<!--    <div style="text-align: center;">-->
<!--        Scan to use WeChat Mini Program for StarTrack PRC Quick Scanning<br>-->
<!--        --><?//= $this->Html->image('xiaochengxu.jpg',['alt'=>'miniprogram','style'=>'width:200px;height:200px'])?><!--</div>-->
</footer>

<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top" style="padding-top:0.7rem!important; width: 60px!important;height: 60px!important;">
    ^
</button>
<style>
    body{height:100%;margin:0;padding:0;}
    #btn-back-to-top {position: fixed; bottom: 100px; right: 20px; display: none }
    #contents{min-height: 100%;padding-bottom:100px;}
    table, th, td { border: 1px solid darkgrey; text-align: left; vertical-align: center;}
    th, td {padding-left: 0.3rem!important}
    footer{margin-top:100px;height:100px;}
</style>

<script>
    document.getElementById("catalog").addEventListener("touchstart", tapHandler);
    document.getElementById("banner").addEventListener("touchstart", tapHandler);

    let tapedTwice = false;
    function tapHandler(event) {
        if(!tapedTwice) {
            tapedTwice = true;
            setTimeout( function() { tapedTwice = false; }, 300 );
            return false;
        }
        event.preventDefault();
    }

    function tableReset() {
        document.getElementById("searchKeyword").value = "";
        let table, tr, i;
        table = document.getElementById("catalog");
        tr = table.getElementsByTagName("tr");
        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "";
        }
        document.getElementById("searchKeyword").focus();
    }

    function tableFilter() {
        let input, filter, table, tr, td, i, j, txtValue, cell;
        input = document.getElementById("searchKeyword");
        filter = input.value.toUpperCase();
        table = document.getElementById("catalog");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                cell = tr[i].getElementsByTagName("td")[j];
                if (cell) {
                    txtValue = cell.textContent || cell.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        if (txtValue === "Carrington Rd" || txtValue === "Coogee Bay Rd" || txtValue === "Clovelly Rd") {
                            tr[i].style.fontWeight = "bold";
                        }
                        break;
                    }
                }
            }
        }
    }

    let mybutton = document.getElementById("btn-back-to-top");
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 ||document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        tableReset();
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        document.getElementById("searchKeyword").focus();
    }

    window.onload = function () {
        document.addEventListener('keydown', logKey);

        function logKey(e) {
            if (e.code === "Escape" || e.code === "Enter") {
                tableReset();
                document.getElementById("searchKeyword").focus();
            }
        }
    }
</script>
<script>
    $.ajax({
        type: 'GET',
        url: <?= env('HOSTING_API',null)?>,
        data: { get_param: 'Data' },
        dataType: 'json',
        success: function (data) {
            $('#pagestatus').html('Data uplinked')
            $.each(data, function(index, element) {
                for($ii=0;$ii<element.length;$ii++){
                    if(element[$ii]['street']!=undefined){
                        $('#catalog tbody').append('<tr><td>'+element[$ii]['street']+'</td><td>'+element[$ii]['driver']+'</td></tr>')
                    }
                }
            });
        }
    });
</script>
</body>
</html>
