<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="./assets/css/1.css">
    <link rel="stylesheet" href="../../styles/1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <header>
      <div class="row background1">
        <a href="home.php"><img src="./assets/img/logo.png" alt="logo" style="margin-left: 550px; margin-top:10px;"></a> 
        <div class="dropdown">
          <button class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="./assets/img/user.png" alt="user" class="icon"  >
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="signup.php">Sign Up</a>
            <a class="dropdown-item" href="login.php">Login</a>
          </div>
        </div>
        <a href="order.php"> <img src="./assets/img/cart.png" alt="cart" class="icon1" ></a>
        <div style="margin-top: 30px; margin-left: 40px;">
            <a href="product.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Product</button></a>
         </div>
    
        <div class="col-4 ">
          <nav class="navbar navbar-light">
            <form class="form-inline" style="margin-top: 20px;">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>
        </div>
      </div>
      

    </header>
    <main>
    <div class="row">
        <h3 style="margin-left: 50px;"><b> List Products</b></h3>
    </div>
      <div class="row border">
        <img src="./assets/img/pro1.jpg" alt="im" class="list" onclick="product.parentElement.getElementsByClassName('img-prd')">
        <div class="col ml-1 mt-5 ">
          <h3 onclick="product.getElementsByClassName('content-product-h3')">Learning Resources Spike The Fine Motor Hedgehog</h3>
          <h6 onclick="product.getElementsByClassName('price')">100.000đ</h6>
          <button onclick="document.getElementsByClassName('btn-cart').style.display = 'block'" type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
      </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro2.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5">
          <h3>Green Toys Ferry Boat with Mini Cars Bathtub Toy</h3>
          <h6>300.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="row border">
     <img src="./assets/img/pro3.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5 ">
          <h3>Vokodo 70 Piece Portable Dessert Stand with Rolling Wheels Includes Cake Candles</h3>
          <h6>600.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro4.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5">
          <h3>ETI Toys, 19 Piece Unique Educational Sorting & Matching Toy for Toddlers.</h3>
          <h6>200.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro5.jpg" alt="im" class="list">  
        <div class="col ml-1 mt-5">
          <h3> Hape Pound & Tap Bench with Slide Out Xylophone </h3>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
          <h6>300.000đ</h6>
        </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro6.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5">
          <h3>EverEarth - Giant Noah´s Ark with Animals & Figures</h3>
          <h6>500.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro7.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5">
          <h3>TECBOSS LCD Writing Tablet </h3>
          <h6>1.000.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro8.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5">
          <h3>Wooden Kids Baby Activity Cube - Boys Gift Set </h3>
          <h6>800.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro9.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5">
          <h3>HOMOFY Interactive Whack A Frog Game</h3>
          <h6>100.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro10.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5">
          <h3> ORWINE Inertia Toy Early Educational Toddler Baby Toy</h3>
          <h6>100.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="row border">
        <img src="./assets/img/pro11.jpg" alt="im" class="list">
        <div class="col ml-1 mt-5">
          <h3> LEO & FRIENDS Activity Cube Wooden Toys for 1,2 Year Old Boy Gifts</h3>
          <h6>700.000đ</h6>
          <button type="submit" style="width: 80px; height: 40px; background-color:salmon; ">Buy</button>
        </div>
      </div>
      <div class="btn-toolbar mt-5" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
          <button type="button" class="btn3 btn-secondary1 ml">1</button>
          <button type="button" class="btn3 btn-secondary1">2</button>
          <button type="button" class="btn3 btn-secondary1">3</button>
          <button type="button" class="btn3 btn-secondary1">4</button>
          <button type="button" class="btn3 btn-secondary1">5</button>
          <button type="button" class="btn3 btn-secondary1">6</button>
          <button type="button" class="btn3 btn-secondary1">7</button>
        </div>
        <div class="btn-group" role="group" aria-label="second group">
          <button type="button" class="btn3 btn-secondary1">...</button>
        </div>
      </div>
    </main>
    <footer class="background3 mt-5">
      <div class="container">
        <div class="row">
          <div class="col text4">
              <p><b>COMPANY INFO</b></p>
              <h6>About SAHARA</h6>
              <h6>Fashion Blogger</h6>
          </div>
          <div class="col text4">
            <p><b>HELP & SUPPORT</b></p>
            <h6>Shipping Info</h6>
            <h6>Returns</h6>
            <h6>How To Order</h6>
            <h6>How To Track</h6>
            <h6>Size Guide</h6>
          </div>
          <div class="col text4 ">
           <p><b>CUSTOMER CARE</b></p>
           <h6>Contact Us</h6>
           <h6>Payment Method</h6>
           <h6>Bonus Point</h6>
          </div>
          <div class="col text4">
            <p><b>FIND US ON</b></p>
            <img src="./assets/img/facebook.png" alt="facebook" class="image6">
            <img src="./assets/img/ima.png" alt="ima" class="image6">
            <img src="./assets/img/ima2.png" alt="ima2" class="image6">
            <img src="./assets/img/ima3.png" alt="ima3" class="image6">
            <img src="./assets/img/ima4.png" alt="ima4" class="image6">
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script type="text/javascript" src="./assets/js/1.js"></script>
    </body>
