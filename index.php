<!DOCTYPE html>
<html>
  <head>
    <title>Il mio sito web - Homepage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap"
      rel="stylesheet"
    />
    <?php require_once "./assets/bootstrap.php";?>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mio Sito</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">About me</a>
            <a class="nav-link" href="#">Contact</a>
            <a class="nav-link" href="#">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- MAIN -->

    <div
      id="carouselExampleInterval"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./assets/images/fabian-quintero-UWQP2mh5YJI-unsplash.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="./assets/images/fernando-meloni-j_gnGCDQRew-unsplash.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/images/j-balla-photography-6wmFPgnd__Q-unsplash.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <head></head>
  </body>
</html>
