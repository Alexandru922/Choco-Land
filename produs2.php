<?php
include('header.php');
?>
<div class="container">
<div class="row  center  mt-4">

<div class="col-6" >

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/5.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/trei.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/patru.jpg" class="d-block w-100" alt="...">
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

</div>

  <div class="col-5 align-self-center mx-0 my-auto">
    <div class="card-body card text-center my-auto mx-auto ">
      <h3 class="card-title ComicMS">CARAMEL </h3>
      <p class="card-text ComicMS"><i>$9.99</i></p>
        <h4 class="card-title ComicMS">Taste notes </h4>
        <img src="img/cinci.png" width="500" height="220" />
        <h4 class="card-title ComicMS">Ingredients </h4>
          <p class="card-text ComicMS"><i>Organic cocoa beans, organic cane sugar, cocoa butter, Icelandic milk powder, aromatic caramel (sugar, glucose syrup, water, butter, cream, salt, raising agent (sodium bicarbonate)), emulsifier (sunflower lecithin), colouring glazing agent.</i></p>
            <p class="card-text ComicMS"><i>Designed and made in Iceland, in a facility that handles gluten, nuts and dairy.</i></p>
    </div>
  </div>
 </div>
<div class="my-3"></div>









</div>
  <?php
  include('footer.php');
    ?>
