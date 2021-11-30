<?php
include('header.php');
?>
<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-12">
      <div class="banner">
      <div class="blocks">
       <img src="img/2.png" alt="promovare" class="img-fluid w-100 rounded"  style="height:87vh;" ></img>  </div></div> 
    </div>
  </div>
  <div class="row mt-5 ">
    <div class="col-12 d-flex justify-content-center">
      <h1 class="fw-light"><strong>BESTSELLERS</strong></h1>
    </div>
    <div class="col-12 d-flex justify-content-center mt-1 ">
      <h5 class="lead text-muted">Made from a small amount of Manni’s extra-virgin organic olive oil, which gives the chocolate a smoother texture</h5>
    </div>
  </div>
  <div class="row g-2 mt-3 my-auto mx-auto">
    <div class="col my-auto mx-auto">
      <div class="shadow-sm cc2">
        <a href="produs1.php" onmouseclick="click();"><img class=" card-img-top img-thumbnail w-100  " src="img/1.png" usemap="#Map" ></img></a>
        <map name="Map" id="Map"><area shape="rect" coords="7,7,882,589" href="produs1.php" />
</map>
        <div class="overlay1" ></div>
        <div class="bottomright1 btn btn-outline-success" >Add to cart</div>
      </div>
      <div class="card-text text-center mt-3 ">
        <a href="produs1.php" style="color: black"> <p class="ComicMS">ALMONDS + SEA SALT</p></a>
      </div>
    </div>
    <div class="col my-auto mx-auto">
      <div class=" shadow-sm cc2">
        <img class=" card-img-top img-thumbnail w-100  "   src="img/5.png"></img>
        <div class="overlay2" ></div>
        <div class="bottomright1 btn btn-outline-success">Add to cart</div>
      </div>
      <div class="card-text text-center mt-3 ">
          <a href="produs2.php" style="color: black"> <p class="ComicMS">CARAMEL</p></a>
      </div>
    </div>
    <div class="col my-auto mx-auto">
      <div class=" shadow-sm cc2">
        <img class=" card-img-top img-thumbnail w-100  "   src="img/7.png"></img>
        <div class="overlay3" ></div>
        <div class="bottomright1 btn btn-outline-success">Add to cart</div>
      </div>
      <div class="card-text text-center mt-3 ">
          <a href="produs3.php" style="color: black"> <p class="ComicMS">COFFE + MILK</p></a>
      </div>
    </div>
    <div class="col my-auto mx-auto">
      <div class=" shadow-sm cc2">
        <img class=" card-img-top img-thumbnail w-100  "   src="img/9.png"></img>
        <div class="overlay4" ></div>
        <div class="bottomright1 btn btn-outline-success">Add to cart</div>
      </div>
      <div class="card-text text-center mt-3 ">
          <a href="produs4.php" style="color: black"> <p class="ComicMS">TOFFEE + SEA SALT</p></a>
      </div>
    </div>
  </div>

  <div class="row  center  mt-4">

<div class="col-6" >
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner ">
     <div class="carousel-item active ">
       <img src="img/15.png" class=" d-block w-50 rounded-circle ms-auto me-2 cc3" alt="First slide"></img>
     </div>
     <div class="carousel-item">
       <img src="img/13.png" class="d-block w-50 rounded-circle ms-auto me-2 cc3" alt="Second slide"></img>
     </div>
     <div class="carousel-item">
       <img src="img./12.png" class="d-block w-50 rounded-circle ms-auto me-2 cc3" alt="Third slide"></img>
     </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
   </div></div>
    <div class="col-5 align-self-center mx-0 my-auto">
      <div class="card-body card text-center my-auto mx-auto cc3">
        <h3 class="card-title">Special treatment <img src="img/cho1.png" width="60" height="60"/></h3>
        <p class="card-text"><i>Crunchy caramelized sugar is an ideal complement to creamy milk chocolate.</i></p>
      </div>
    </div>
   </div>
   <div class="mt-5">
   </div>
</div>


<?php
include('footer.php');
?>
