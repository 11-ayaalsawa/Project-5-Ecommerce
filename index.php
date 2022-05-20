<?php
include_once "./connection.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- fontawesome link  -->
    <script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>


</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            
              </div>  
            </div>
          </nav>
          <nav>
          <nav class="navbar navbar-expand-lg bg-ligth">

          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Dress.php">Dress</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Accessories.php">Accessories</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Men_shoes.php">Men Shoes</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Suit.php">Suit</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Women_shoes.php">Women Shoes</a>

            </ul>
          
          </nav>
        
    </header>
<!-- ******************************************************************************** -->

    <main > 
      <!-- style=" margin-left: 41%" -->


<!-- <div style="width:800px;height:200px;">



<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://pbs.twimg.com/profile_images/883859744498176000/pjEHfbdn_400x400.jpg "style="width:800px;height:400px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://pbs.twimg.com/profile_images/883859744498176000/pjEHfbdn_400x400.jpg"style="width:800px;height:400px;" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://pbs.twimg.com/profile_images/883859744498176000/pjEHfbdn_400x400.jpg"style="width:800px;height:400px;" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div> -->
    </main>



<!-- ******************************************************************************** -->

    <footer>
      
    </footer>

</body>
</html>