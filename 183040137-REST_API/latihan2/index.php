<?php 
// mengambil data dari file json
$data = file_get_contents('data/pizza.json');
// menerjemahkan dari json ke array
$menu = json_decode($data, true);
$menu = $menu["menu"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Latihan 2</title>
  </head>
  
  <body>
  <h1>Latihan 2</h1>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home<a>
                </div>
            </div>
        </div>
   </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>
    

    <div class="row mt-3">
        <?php foreach ($menu as $m) : ?>
        <div class="col-md-4">
             <div class="card mb-3">
                <img src="img/menu/<?= $m["gambar"];  ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $m["nama"];  ?></h5>
                    <p class="card-text"><?= $m["deskripsi"];  ?></p>
                    <h5 class="card-title">Rp. <?= $m["harga"];  ?></h5>
                    <a href="#" class="btn btn-primary">Order!</a>
                </div>
            </div>
        </div>
         <?php endforeach; ?>
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html> 