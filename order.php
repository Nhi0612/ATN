<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>  </title>
         <link rel="stylesheet" href="./assets/css/1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
    </head>
    <body>
        <header>
            <div class="row background1">
                <a href="file:///C:/Users/LENOVO/Documents/Projects/html-css/html/home/index1.html"><img src="./assets/img/logo.png" alt="logo" style="margin-left: 550px; margin-top:10px;"></a> 
                <img src="./assets/img/user.png" alt="user" class="icon"  >
                <img src="./assets/img/cart.png" alt="cart" class="icon1" >
            
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
                <h3 style="margin-left: 50px;"><b> Shopping cart</b></h3>
            </div>
            <div class="modal-body">
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">Product</span>
                    <span class="cart-price cart-header cart-column">Price</span>
                    <span class="cart-quantity cart-header cart-column">Amount</span>
                </div>
                <div class="cart-items">
                    <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img src="./assets/img/pro1.jpg" alt="im" width="100" height="100">
                        <span class="cart-item-title">Learning Resources Spike The Fine Motor Hedgehog</span>
                    </div>
                    <span class="cart-price cart-column">100.000đ</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="1">
                        <button class="btn btn-danger" type="button">Delete</button>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img src="./assets/img/pro5.jpg" alt="im"  width="100" height="100">
                        <span class="cart-item-title">Hape Pound & Tap Bench with Slide Out Xylophone </span>
                    </div>
                    <span class="cart-price cart-column">200.000đ</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="2">
                        <button class="btn btn-danger" type="button">Delete</button>
                    </div>
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title">Total:</strong>
                    <span class="cart-total-price">300.000 VND</span>
                </div>
            </div>

        </main>
        <footer class="background3 mt-5">
            <div class="container">
                <div class="row">
                  <div class="col text4">
                      <p><b>COMPANY INFO</b></p>
                      <h6>About ATN</h6>
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
        <script type="text/javascript" src="./assets/js/1.js"></script>
    </body>
</html>