<?php
$destaques = array(
    array('nome' => 'playstation', 'titulo' => 'Playstation 5 slim 1 tera', 'preco' => 'R$ 5.000,00'),
    array('nome' => 'pc', 'titulo' => 'Pc gamer i7 16gb ram', 'preco' => 'R$ 3.000,00'),
    array('nome' => 'headset', 'titulo' => 'Headset com led azul', 'preco' => 'R$ 400,00'),
    array('nome' => 'note', 'titulo' => 'Notebook gamer predator 8gb ram', 'preco' => 'R$ 4.000,00'),
    array('nome' => 'ram', 'titulo' => 'Memória ram 32gb (2x16gb)', 'preco' => 'R$ 820,00'),
    array('nome' => 'note', 'titulo' => 'Notebook gamer predator 8gb ram', 'preco' => 'R$ 4.000,00'),
    array('nome' => 'ram', 'titulo' => 'Memória ram 32gb (2x16gb)', 'preco' => 'R$ 820,00'),
    array('nome' => 'pc', 'titulo' => 'Pc gamer i7 16gb ram', 'preco' => 'R$ 3.000,00'),
    array('nome' => 'headset', 'titulo' => 'Headset com led azul', 'preco' => 'R$ 400,00')
);

foreach ($destaques as $destaque) {
?>
    <div class="p-0 item">
        <div class="card d-flex">
            <div class="align-self-center d-flex align-items-center">
                <img src="img/<?= $destaque['nome'] ?>.jpg" width="178px" height="150px">
            </div>

            <div class="card-body">
                <div class="card-titulo">
                    <h6><?= $destaque['titulo'] ?></h6>
                </div>
                <div>
                    <h5><?= $destaque['preco'] ?></h5>
                </div>
            </div>

            <div class="d-grid gap-0">
                <button>
                    Comprar
                </button>
            </div>
        </div>
    </div>
<?php } ?>

