<!doctype html>
<html lang="es">

<head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('ver_niveles')?>" aria-current="page" style="font-size: 150%;">
                                Niveles Académicos
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item border-start ps-0">
                            <a class="nav-link" href="<?= base_url('ver_ciudadanos')?>" aria-current="page" style="font-size: 150%;">
                                Ciudadanos
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item border-start ps-0">
                            <a class="nav-link" href="<?= base_url('ver_municipios')?>" aria-current="page" style="font-size: 150%;">
                                Municipios
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item border-start ps-0">
                            <a class="nav-link" href="<?= base_url('ver_departamentos')?>#" aria-current="page" style="font-size: 150%;">
                                Departamentos
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item border-start ps-0">
                            <a class="nav-link" href="<?= base_url('ver_regiones')?>" aria-current="page" style="font-size: 150%;">
                                Regiones
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



    </header>
    <main>

        <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/wall1.jpg" class="w-100 d-block" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/wall2.jpg" class="w-100 d-block" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/wall3.jpg" class="w-100 d-block" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
        </div>



    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>