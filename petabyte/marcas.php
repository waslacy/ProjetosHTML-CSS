<?php
    $marcas = array(
        'Corsair',
        'Amd',
        'Intel',
        'Playstation',
        'Xbox',
        'Acer',
        'Asus',
        'Xiaomi'
    );

    foreach($marcas as $marca){
?>
<div class="col-md-1 p-0" style="width: 120px; margin-right: 20px">
    <img src="img/<?= $marca ?>.png" class="logo-marca" width="100%" height="120px">
    <p class="text-center"><?= $marca ?></p>
</div>
<?php
    }
?>