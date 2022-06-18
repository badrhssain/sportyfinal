<?php
include ("dbconnect.php");
$selectdata ="SELECT * FROM produit INNER JOIN gallerie ON produit.idProduit=gallerie.idProduit  LIMIT 4 ";
$rel= mysqli_query($db,$selectdata);
if($rel->num_rows>0){

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sporty</title>
    <link rel="icon" type="image/png" href="assets/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link href="style.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</head>
<body>
<!------------- header -------------->
    <header>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand"><img class="logo" src="assets/logo.png"><strong>Spor</strong>ty</a>
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
          </div>
        </div>
      </nav>
<div class="bigsection">
      <section class="colleft">
        <h1><strong>Sporty</strong> fait son mieux pour<br> etre a son meilleur</h1>
        <button type="button" class="btn btnyl">decouvrez</button><button type="button" class="btn btnbl">voir plus...</button>
        <hr class="headhr">
      </section>
      <section class="colright">
      </section>
    </section>
  </div>
</header>
<!------------- Main -------------->
<main>
  <!-- Firstsection -->
<div class="firstsc">
<h1>Welcome to the Best Online Store</h1>
<p class="bienp">Bienvenu à Sporty ,  le premier magasin 100% football au Maroc . Sur notre site vous trouverez de nombreux contenus en relation avec les nouveautés du monde du matériel sportif. Et bien évidemment, vous pourrez vous équiper, quelque soit votre position, avec tout le catalogue qui nous vous offrons : chaussures de football, chaussures de futsal, équipements officiels et -comme il ne pouvait en être autrement. Nous avons des nouveautés en chaussures de football haut de gamme jusqu’aux chaussures de futsal pas chères en passant par les chaussures de foot pour enfant pour nous adapter à ce que vous cherchez pour votre jeu.</p>
<div class="container">
  <div class="row">
    <div class="col">
      <img class="bd" src="assets/badge-2 1.png">
    </div>
    <div class="col">
      <img class="bd" src="assets/badge-1 1.png">
    </div>
    <div class="col">
      <img class="bd" src="assets/badge-3 1.png">
    </div>
  </div>
</div>
</div>
  <!-- second section -->
  <div class="bigsection">
    <section class="colleft2">
      <img class="prpic" src="assets/predator.png">
    </section>
    <section class="colright2">
      <h3>The story of</h3>
      <h1>Adidas Predator</h1>
      <p>Dapibus id interdum fusce sed odio massa tellus amet, faucibus nibh consequat justo mauris, donec nec tempus in volutpat iaculis pellentesque in urna.<br><br>Diam, urna, ornare leo facilisis suspendisse eu rutrum id augue cursus tincidunt nisl eget ornare pharetra ac pharetra, pulvinar ipsum sed amet diam morbi amet cursus blandit augue feugiat arcu aliquet egestas id diam rhoncus, mollis arcu pharetra quis duis morbi a nunc diam mauris ut tortor ipsum.</p>
      <a class="rmore" href="#">READ MORE --></a>
      <hr>
      <div class="bootdiv">
      <div class="bootdivlf ab"><h1></h1><h2>Boots<br> Published</h2></div>
      <div class="bootdivri ab"><h1></h1><h2>Best<br> selling boots</h2></div>
      </div>
      <hr>
    </section>
  </section>
</div>
  <!-- Thirdsection -->
  <h1 class="aaa">OUR PRODUCTS</h1>
  <div class="row">
    
          <?php 
            while($row= $rel ->fetch_assoc()){
            
          echo '
          <div class="col-sm-3">
      <div class="card card-img-top">
        <div class="card-body">
          <div class="d-flex" >
            <div class="vr"></div>
          </div>
            <div class="textcard">
          <h3 class="card-title">'.$row["libelle"].'</h3>
          <p class="card-text">'.$row["prix"].' DH</p>
            </div>
          <a href="#"><img class="boot" src="assets/'.$row["photo_1"].'"></a>
        </div>
      </div>
    </div>';
  }
    ?>

<!-- Empty -->


      <!-- Fourthdsection -->
      <div class="signdiv"><h2>“</h2>
        <h1>my way of getting through difficult times of<br> low confidence - hard work</h1>
      <img src="assets/signature.png"></div>
      <!-- fifth section -->
  <div class="bigsection2">
    <section class="colleft5">
      <h3>Don't miss it!</h3>
      <h1>Get a special boot<br> signed by me</h1>
      <p>Dapibus id interdum fusce sed odio massa tellus amet, faucibus nibh consequat justo mauris, donec nec tempus in volutpat iaculis pellentesque in urna.<br></p>
      <hr>
      <div class="bootdiv">
      <div class="bootdivlf2"><h1>18 Apr<br>2022</h1></div>
      <div class="bootdivri2"><h1>Location</h1><p>1234 N Rue fes, Tanger<br> 90000, Morocco.</p></div>
      </div>
      <hr>
    </section>
    <section class="colright5">
      <img class="clpic5" src="assets/footerpic.png">
    </section>
  </section>
</div>
    
</main>
</body>
</html>