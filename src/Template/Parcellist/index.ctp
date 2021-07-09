<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parcellist[]|\Cake\Collection\CollectionInterface $parcellist
 */
?>
<div class="parcellist index large-9 medium-8 columns content">
    <form>
        <input type="text" size="30" placeholder="Type in street name for search" onkeyup="showResult(this.value)">
        <div id="livesearch"></div>
    </form>

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

    Ordered by Alphabets:<br>
    <?= $this->Html->link('A',['action'=>'index','a'])?>&nbsp&nbsp
    <?= $this->Html->link('B',['action'=>'index','b'])?>&nbsp&nbsp
    <?= $this->Html->link('C',['action'=>'index','c'])?>&nbsp&nbsp
    <?= $this->Html->link('D',['action'=>'index','d'])?>&nbsp&nbsp
    <?= $this->Html->link('E',['action'=>'index','e'])?>&nbsp&nbsp
    <?= $this->Html->link('F',['action'=>'index','f'])?>&nbsp&nbsp
    <?= $this->Html->link('G',['action'=>'index','g'])?>&nbsp&nbsp
    <?= $this->Html->link('H',['action'=>'index','h'])?>&nbsp&nbsp
    <?= $this->Html->link('I',['action'=>'index','i'])?>&nbsp&nbsp
    <?= $this->Html->link('J',['action'=>'index','j'])?>&nbsp&nbsp
    <?= $this->Html->link('K',['action'=>'index','k'])?>&nbsp&nbsp
    <?= $this->Html->link('L',['action'=>'index','l'])?>&nbsp&nbsp
    <?= $this->Html->link('M',['action'=>'index','m'])?>&nbsp&nbsp
    <?= $this->Html->link('N',['action'=>'index','n'])?>&nbsp&nbsp
    <?= $this->Html->link('O',['action'=>'index','o'])?>&nbsp&nbsp
    <?= $this->Html->link('P',['action'=>'index','p'])?>&nbsp&nbsp
    <?= $this->Html->link('Q',['action'=>'index','q'])?>&nbsp&nbsp
    <?= $this->Html->link('R',['action'=>'index','r'])?>&nbsp&nbsp
    <?= $this->Html->link('S',['action'=>'index','s'])?>&nbsp&nbsp
    <?= $this->Html->link('T',['action'=>'index','t'])?>&nbsp&nbsp
    <?= $this->Html->link('U',['action'=>'index','u'])?>&nbsp&nbsp
    <?= $this->Html->link('V',['action'=>'index','v'])?>&nbsp&nbsp
    <?= $this->Html->link('W',['action'=>'index','w'])?>&nbsp&nbsp
    <?= $this->Html->link('X',['action'=>'index','x'])?>&nbsp&nbsp
    <?= $this->Html->link('Y',['action'=>'index','y'])?>&nbsp&nbsp
    <?= $this->Html->link('Z',['action'=>'index','z'])?>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" colspan="2"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('driver') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parcellist as $parcellist): ?>
            <tr>
                <td colspan="2"><?= h($parcellist->street) ?></td>
                <td><?= h($parcellist->driver) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">

        </ul>
        <p></p>
    </div>
</div>
