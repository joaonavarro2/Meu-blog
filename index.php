<?php
        include "config/connection.php";
        include "nav.php";

        $stmt = $connect-> prepare("SELECT*FROM blog ORDER BY id DESC");
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font aw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/maior.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/daniis.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/drogo.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- Cards -->
<div class="">
        <h1>Pessoas Importantes</h1>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <?php foreach($results as $post): ?>
    <div class="col gy-5">
      <div class="card">
        <img src="<?=$post["image"]?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?=$post["title"]?>
          </h5>
          <p class="card-text">
            <?=$post["description"]?>
          </p>
          <a href="viewPost.php?id=<?=$post["id"]?>">
            <i class="fas fa-eye check-icon">Ver</i>
            </a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  <div class="col gy-5">
    <div class="card">
      <img src="imagens/missi.webp" class="card-img-top" alt="...">
      <div class="card-body">
          <a href="viewPost.php" target="_blank" rel="noopener noreferrer"><h3>Missandei</h3></a>
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="imagens/ty.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="viewPost.php" target="_blank" rel="noopener noreferrer"><h3 >Teyrion</h3></a>
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="imagens/drogo.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="viewPost.php" target="_blank" rel="noopener noreferrer"><h3>Drogon</h3></a>
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="imagens/visi.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="viewPost.php" target="_blank" rel="noopener noreferrer"><h3>Viserion</h3></a>
      </div>
    </div>
  </div>
</div>
</div>
    <?php include('footer.php')?>
</body>
</html>