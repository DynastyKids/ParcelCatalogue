<?php $this->layout=false;?>
<?php if($parcellist->count()>0){?>
    <table>
    <?php for($i=0;$i<$parcellist->count();$i++){?>
        <tr>
            <td colspan="2"><?= $parcellist->toArray()[$i]['street']?></td>
            <td><?= $parcellist->toArray()[$i]['driver']?></td>
        </tr>
    <?php }?>
    </table>
<?php } else {?>
    No Results
<?php }?>
