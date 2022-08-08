<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Petabyte</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php require "nav.php" ?>

    <section id="destaques">
        <div class="container">
            <div class="d-flex justify-content-center titulo-sessao">
                <h2 class="display-6">Destaques</h2>
            </div>

            <div class="envelope-carousel">
                <div class="d-flex" id="carousel" style="position: relative;">
                    <div class="ps-0 align-self-center arrows arrow1">
                        <button class="btn ps-0" onclick="carousel('esquerda')"><i class="fas fa-arrow-left"></i></button>
                    </div>

                    <div class="d-flex items" id="items">
                        <div id="carrosel" class="d-flex" style="position: relative;">
                            <?php require "destaques.php" ?>
                        </div>
                    </div>

                    <div class="pe-0 align-self-center arrows arrow2">
                        <button class="btn pe-0" onclick="carousel('direita')"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="recentes">
        <div class="container">
            <div class="row banner-sessao">
                <div class="col-xl-6 col-12 p-0 d-flex justify-content-xl-start justify-content-center">
                    <img src="img/capa.png" width="600px" height="150px">
                </div>
                <div class="col-lg-6 p-0 justify-content-end d-none d-xl-flex">
                    <img src="img/capa.png" width="600px" height="150px">
                </div>
            </div>

            <div class="d-flex justify-content-center titulo-sessao">
                <h2 class="display-6">Mais recentes</h2>
            </div>

            <div class="d-flex justify-content-center">
                <div class="d-flex flex-wrap recentes">
                    <?php require "recentes.php" ?>
                </div>
            </div>
        </div>
    </section>

    <section id="marcas">
        <div class="container">
            <div class="banner-sessao">
                <img src="img/capa.png" width="100%" height="150px">
            </div>

            <div class="d-flex justify-content-center titulo-sessao">
                <h2 class="display-6">Marcas</h2>
            </div>

            <div class="row d-flex justify-content-center">
                <?php require "marcas.php" ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-6 p-0 mb-3 mb-sm-0 map">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14625.886142665544!2d-46.6576336!3d-23.5874162!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb936109af9ce541!2sParque%20Ibirapuera!5e0!3m2!1spt-BR!2sbr!4v1640546755545!5m2!1spt-BR!2sbr" height="80%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        <p class="fw-light" style="font-size: 0.8rem;">Rua tal, 999 - Bairro tal - Cidade tal - SP</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 p-0 d-flex justify-content-center">
                    <div>
                        <h2>Departamentos</h2>

                        <ul class="navbar-nav text-center" id="nav-footer">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Pcs montados</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Hardware</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Video games</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Games</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Periféricos</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Celulares</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-flex flex-column login">
                    <input type="text" placeholder="E-mail" class="form-control mb-3">
                    <input type="password" placeholder="Senha" class="form-control mb-3">
                    <button class="btn text-white align-self-center">Login</button>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>