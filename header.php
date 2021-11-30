<!Doctype HTML>
<html lang="RO_rou">
  <head>
    <title>CHOCO LAND</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>

    <style>
    .banner9
    {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    overflow:hidden;
    display:flex;
    flex-wrap: wrap;

    }

    .banner9 .blocks9
    {
    position:relative;
    display:block;
    width:5vw;
    height:5vh;
    animation: animate 2s ease-in-out foewards;
    }


    @keyframes animate
    {
    0%{transform: translateZ(2000px);}
    100%{transform: translateZ(0px);}

    }







    .overlay1 {  position: absolute;top: 0;  bottom: 0;  left: 0;  right: 0;  height: 100%;  width: 100%;  opacity: 0;  transition: .5s ease;  background-image:url("img/4a.jpg");}
    .overlay2 {  position: absolute;top: 0;  bottom: 0;  left: 0;  right: 0;  height: 100%;  width: 100%;  opacity: 0;  transition: .5s ease;  background-image:url("img/6a.jpg");}
    .overlay3 {  position: absolute;top: 0;  bottom: 0;  left: 0;  right: 0;  height: 100%;  width: 100%;  opacity: 0;  transition: .5s ease;  background-image:url("img/8a.jpg");}
    .overlay4 {  position: absolute;top: 0;  bottom: 0;  left: 0;  right: 0;  height: 100%;  width: 100%;  opacity: 0;  transition: .5s ease;  background-image:url("img/10a.jpg");}
    .overlay5 {  position: absolute;top: 0;  bottom: 0;  left: 0;  right: 0;  height: 100%;  width: 100%;  opacity: 0;  transition: .5s ease;  background-image:url("img/300.png");}

.cc2 {  position: relative;}
.cc3 {  position: relative;}
.cc2:hover .overlay1 {  opacity: 1;}
.cc2:hover .overlay2 {  opacity: 1;}
.cc2:hover .overlay3 {  opacity: 1;}
.cc2:hover .overlay4 {  opacity: 1;}
.cc3:hover {
  animation: shake 1s;
  animation-iteration-count: 10s;
}
.cc2:hover .overlay5 {  opacity: 1;}

@keyframes shake {
  0% { transform: translate(2px, 2px) rotate(0deg); }
  10% { transform: translate(-2px, -3px) rotate(-5deg); }
  20% { transform: translate(-4px, 2px) rotate(5deg); }
  30% { transform: translate(5px, 4px) rotate(0deg); }
  40% { transform: translate(3px, -3px) rotate(5deg); }
  50% { transform: translate(-3px, 5px) rotate(-5deg); }
  60% { transform: translate(-5px, 3px) rotate(0deg); }
  70% { transform: translate(5px, 3px) rotate(-5deg); }
  80% { transform: translate(-3px, -3px) rotate(5deg); }
  90% { transform: translate(3px, 5px) rotate(0deg); }
  100% { transform: translate(3px, -4px) rotate(-5deg); }
}

    .bottomright1 {  position: absolute;  bottom: 8px;  right: 16px;  font-size: 18px;}
    .bottomright2 {  position: absolute;  bottom: 60px;  right: 7px;  font-size: 18px;}
    .auch {  width: 600px;  height: 400px;}
  .auch:hover{box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);}
    </style>
  </head>
  <body style="overflow-x: hidden; ">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" >
        <a class="navbar-brand  mx-auto" href="index.php">&nbsp;HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SHOP
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="all products.php">All Products</a></li>
                <li><hr class="dropdown-divider"/></li>
                <li><a class="dropdown-item" href="dark.php">Dark</a></li>
                <li><a class="dropdown-item" href="milk.php"></a></li>
                <li><a class="dropdown-item" href="white.php">White</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ABOUT US
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="our.story.php">Our Story</a></li>
                <li><a class="dropdown-item" href="our.ingredients.php">Our Ingredients</a></li>
                <li><a class="dropdown-item" href="our.method.php">Our Methods</a></li>
                <li><a class="dropdown-item" href="contact.php">Contact</a></li>
              </ul>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="login.php">LOGIN</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="cart.php" tabindex="-1" >CART</a>
            </li>
          </ul>


<div style="margin-right:auto; ">
              <a class="navbar-brand " href="index.php">
                <img src="https://cdn.shopify.com/s/files/1/0306/1913/files/Logo-wolf-only_400x.png?v=1604500120"   width="60" height="60"/>
              </a>
            </div>


          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
