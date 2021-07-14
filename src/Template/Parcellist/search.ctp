<?php $this->layout=false;?>
<?php if($parcellist->count()>0){?>
    <table class="table table-success table-striped table-sm">
        <thead style="font-weight: bold"><tr><td colspan="3">Street Name</td><td>Driver</td></tr></thead>
        <tbody>
            <?php for($i=0;$i<$parcellist->count() && $i<10;$i++){?>
                <tr>
                    <td colspan="3"><?= $parcellist->toArray()[$i]['street']?></td>
                    <td><?= $parcellist->toArray()[$i]['driver']?></td>
                </tr>
            <?php }?>
            <?php if($parcellist->count()>10){?>
                <tr>
                    <td colspan="4">Only showing first 10 records</td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<?php } else {?>
    <table class="table table-success table-striped table-sm">
        <tr><td>No Results Found</td></tr>
    </table>
<?php }?>
