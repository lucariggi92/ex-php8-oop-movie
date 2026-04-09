<?php
require_once "./db.php";


$film1->getMovie();
$film2->getMovie();

var_dump($film1);
var_dump($film2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- HEADER ------------------------------------------->
    
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>

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