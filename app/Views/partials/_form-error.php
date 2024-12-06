<?php
if (session('validation')):
?>
    <div style="margin: 10px;">
        <?= session('validation')->listErrors() ?>
    </div>


<?php endif ?>