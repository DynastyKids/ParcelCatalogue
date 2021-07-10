<?php $this->layout=false;?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<?php if($parcellist->count()>0){?>
    <table class="table table-success table-striped table-sm">
        <thead style="font-weight: bold"><tr><td colspan="3">Street Name</td><td>Driver Name</td></tr></thead>
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
    No Results Found
<?php }?>
