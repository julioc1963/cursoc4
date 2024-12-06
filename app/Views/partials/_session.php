<?php 
    if(session('message')):
?>
<div style="margin: 10px;">
    <?= session('message') ?>
</div>


<?php endif ?>