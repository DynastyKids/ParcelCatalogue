<?php $this->layout= false?>


<?php for ($i=0;$i<$parcelcount;$i++){?>
    <?= $parcelarray[$i]['street'].';'.$parcelarray[$i]['driver']?>
    <br>
<?php }?>
