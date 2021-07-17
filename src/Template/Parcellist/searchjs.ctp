<?php $this->layout=false;?>

<?php
if ($parcellist->count() > 0){
   echo json_encode($parcellist);
}?>
