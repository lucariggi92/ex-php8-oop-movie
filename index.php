<?php
require_once "./db.php";
require_once "./Traits/Disponibilità.php";
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <!-- HEADER ------------------------------------------->
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">MovieCatalog</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Serie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nuovi e popolari</a>
            </li>
     </ul>
    </div>

    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>



<!-- SEZIONE FILM -->
<section class="container my-5">
    <h2 class="mb-4 text-light">Catalogo Film</h2>
    <div class="row g-4">

        <?php foreach($movies as $movie) { ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100">
                    <img src="<?php echo $movie->cover; ?>" class="card-img-top" alt="<?php echo $movie->titolo; ?>"  style="height: 400px; object-fit: cover;">
    

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->titolo; ?></h5>
                        <p class="card-text small">
                            <?php 
                            $generi = [];
                            foreach($movie->genere as $g) {
                                $generi[] = $g->nome . " (" . $g->eta_minima . "+)";
                            } 
                            echo implode(", ", $generi);
                            ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Regista:</strong> <?php echo $movie->regista; ?></li>
                        <li class="list-group-item"><strong>Durata:</strong> <?php echo $movie->durata; ?> min</li>
                        <li class="list-group-item"><strong>Anno:</strong> <?php echo $movie->anno_di_uscita; ?></li>
                        <li class="list-group-item">
                            <span class="badge 
                            <?php echo $movie->disponibilità === 'A Pagamento' ? 'bg-warning' : 'bg-primary'; ?>">
                                <?php echo $movie->disponibilità; ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } ?>

    </div>
</section>


<!-- FOOTER -->
<footer class="bg-dark text-secondary py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="mb-1 text-white">MovieCatalog</p>
                <small>
                    &copy; <?php echo date("Y"); ?> - Catalogo Film. 
                    Tutti i dati sono gestiti tramite <code>db.php</code>
                </small>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>