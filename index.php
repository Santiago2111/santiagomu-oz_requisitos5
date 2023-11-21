<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesmag App</title>
    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="js/mdb.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
              <button type="button" class="btn btn-primary" data-mdb-ripple-init>Principal</button>
            </li>
            <li class="nav-item">
            <div class="dropdown">
              <button
              class="btn btn-primary dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-mdb-dropdown-init
              data-mdb-ripple-init
              aria-expanded="false"
            >
              Zoologico
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Mamiferos</a></li>
              <li><a class="dropdown-item" href="#">Reptiles</a></li>
              <li><a class="dropdown-item" href="#">Anfibios</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="programa.php">Acerca de</a>
        </li>
      </ul>
      </div>
    </div>
    </nav>
</body>
</html>