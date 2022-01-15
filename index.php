<?php
//generate random 3 images  from directory


$echoQuotes= "";
$echoAutor = "";

    $dir="images/";
    $imgArray=glob($dir.'slika*.jpg');    
    $randomImg=array_rand($imgArray,3);

//motivation.txt

    $fileMotivation="quotes/motivation.txt";
    $motivationArray=file($fileMotivation);    
    $randomMotivation=array_rand($motivationArray);
    $randMot=$motivationArray[$randomMotivation];
    $split=explode('~',$randMot);
    $autorMot=$split[1];
    $quotesMot=$split[0];

// love.txt

    $fileLove="quotes/love.txt";
    $loveArray=file($fileLove);
    $randomLove=array_rand($loveArray);
    $randLov=$loveArray[$randomLove];
    $splitLove=explode('~',$randLov);
    $autorLov=$splitLove[1];
    $quotesLove=$splitLove[0];
    // var_dump($autorLov);
    // var_dump($quotesLove);

// bussines.txt

  $fileBusiness="quotes/business.txt";
  $businessArray=file($fileBusiness);
  $randomBusiness=array_rand($businessArray);
  $randBusiness=$businessArray[$randomBusiness];
  $splitBusiness=explode('~',$randBusiness);
  $quotesBusiness=$splitBusiness[0];
  $autorBusiness=$splitBusiness[1];
  // var_dump($quotesBusiness);
  // var_dump($autorBusiness);

//health.txt

  $fileHealth="quotes/health.txt";
  $healthArray=file($fileHealth);
  $randomHealth=array_rand($healthArray);
  $randHealth=$healthArray[$randomHealth];
  $splitHealth=explode('~',$randHealth);
  $quotesHealh=$splitHealth[0];
  $autorHealth=$splitHealth[1]; 

// merge all category in one array
$allArrays=array_merge($healthArray,$businessArray,$motivationArray,$loveArray);
$randomAll=array_rand($allArrays);
$randAll=$allArrays[$randomAll];
$splitAll=explode('~',$randAll);
$quotesAll=$splitAll[0];
$autorAll=$splitAll[1];
  
//condition for pick category
  if(isset($_GET['motivation']))
  {
    $echoAutor=$autorMot;
    $echoQuotes=$quotesMot;
  }elseif(isset($_GET['love']))
  {
    $echoQuotes=$quotesLove;
    $echoAutor=$autorLov;
  }elseif(isset($_GET['business']))
  {
    $echoAutor=$autorBusiness;
    $echoQuotes=$quotesBusiness;
  }elseif(isset($_GET['health']))
  {
    $echoQuotes=$quotesHealh;
    $echoAutor=$autorHealth;
  }elseif(isset($_GET['randomCat']))
  {
    $echoQuotes=$quotesAll;
    $echoAutor=$autorAll;
  }else //welcome page random pick from all category
  {
    $echoQuotes=$quotesAll;
    $echoAutor=$autorAll;
  }
  


  //test


    ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  

  
  <!-- slider  -->

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $imgArray[$randomImg[0]]?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $imgArray[$randomImg[1]]?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $imgArray[$randomImg[2]]?>" class="d-block w-100" alt="...">
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



<!-- nav bar  -->
<div class="container-fluid">
 <div class="row">
  
<nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon  bg-primary"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav ">
      <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?radnomCat=true">All category random pick</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?motivation=true">Motivation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?love=true">Love</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?business=true">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?health=true">Health</a>
          </li>  
        
      </ul>
    </div>
  
</nav>
 </div>
</div>






<?php


?>


    <div class="col-12  text-center  pt-4">
    <figure class="text-center mb-0 fs-4 ">
              <blockquote class="blockquote">
                <p class="pb-3">
                  <i class="fas fa-quote-left fa-xs text-primary"></i>                  
                  <span class="lead font-italic text-light">  <?php echo $echoQuotes;?></span>
                  <i class="fas fa-quote-right fa-xs text-primary"></i>
                </p>
              </blockquote>
              <figcaption class="blockquote-footer mb-0 text-success lead">
                <?php 
                 echo $echoAutor;  
                ?>
              </figcaption>
            </figure>
  </div>

  <!-- footer -->
  <footer class="container text-center text-primary pt-4">
            <p>
                <?php                          
                    setlocale(LC_TIME, 'SR');
                    $dan = strftime('%A');
                    $datum = date("d.m.Y.");
                    echo "<p> $dan, $datum</p>";
                ?>
            </p>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>