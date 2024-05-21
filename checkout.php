<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNic</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./images/flash.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Nav Bar -->
<?php
  include("header.html");
?>
  <!-- Nav Bar -->
  
  <!-- Checkout -->
  <div class="container mt-5">
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Intel Core i5-13600KF</h6>
              <small class="text-body-secondary">Expensive</small>
            </div>
            <span class="text-body-secondary">₱ 144,900,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Intel Core i7-13700K</h6>
              <small class="text-body-secondary">Second Expensive</small>
            </div>
            <span class="text-body-secondary">₱ 124,900,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">AMD Ryzen 7 5800X</h6>
              <small class="text-body-secondary">Third Expensive</small>
            </div>
            <span class="text-body-secondary">₱ 99,900,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>NICutine</small>
            </div>
            <span class="text-success">−₱ 15,000,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (PHP)</span>
            <strong>₱ 354,700,00</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo Code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Contact Number</label>
              <div class="input-group has-validation">
                <span class="input-group-text">+63</span>
                <input type="text" class="form-control" id="username" placeholder="Phone" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="@">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Main Address" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country/Region</label>
              <select class="form-select" id="country" required="">
                <option value="">Choose...</option>
                <option>Philippines</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">City</label>
              <select class="form-select" id="state" required="">
                <option value="">Choose...</option>
                <option>Iloilo City</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Postal Code</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
          <hr class="my-4">
          <a href="" class="w-100 btn btn-primary btn-lg" type="submit" data-bs-toggle="modal" data-bs-target="#modalCheck">Continue to checkout</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Checkout -->

  <!-- Subscription -->
  <div class="container px-4 mt-5 pt-5" id="hanging-icons">
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">
          <div class="col d-flex align-items-start">
              <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="./images/delivery.png" alt="" height="50" width="50">
              </div>
              <div>
              <h3 class="fs-2 text-body-emphasis">We Deliver Nationwide</h3>
              <p>Delivery to most of the Philippines</p>
              </div>
          </div>
          <div class="col d-flex align-items-start">
              <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="./images/low-price.png" alt="" height="50" width="50">
              </div>
              <div>
              <h3 class="fs-2 text-body-emphasis">Affordable</h3>
              <p>Extensive collection at the lowest price</p>
              </div>
          </div>
          <div class="col d-flex align-items-start">
              <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <img src="./images/support.png" alt="" height="50" width="50">
              </div>
              <div>
              <h3 class="fs-2 text-body-emphasis">Top-notch support</h3>
              <p>Contact us by messenger, email, phone</p>
              </div>
          </div>
          <div class="col d-flex align-items-start">
              <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <img src="./images/payment-protection.png" alt="" height="50" width="50">
              </div>
              <div>
              <h3 class="fs-2 text-body-emphasis">Secure payments</h3>
              <p>Visa, Mastercard, Amex, Paypal</p>
              </div>
          </div>
      </div>
  </div>
  <!-- Subscription -->

  <!-- Footer -->
  <div class="container border-top">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
        <div class="col-md-5 offset-md-1 mb-3">
        <form>
            <h4>DON'T MISS OUT</h4>
            <p>Get awesome exclusives and more deals when you subscribe!</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
        </form>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>© 2024 Company, Inc. All rights reserved.</p>
      </div>
    </footer>
  </div>
  <!-- Footer -->

  <!-- Modal Login-->
  <div class="modal fade" tabindex="-1" role="dialog" id="Login">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <h1 class="fw-bold mb-0 fs-2">Login to My Account</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-5 pt-0">
            <p>Enter your e-mail and password:</p>
            <form class="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login </button>
              <small class="text-body-secondary">New customer? <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#Signup">Create your account</a> </span></small>
              <br/>
              <small class="text-body-secondary">Lost password? <a href="./recover.html" class="text-danger">Recover password</a> </span></small>
              <hr class="my-4">
              <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
              <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit"
              onclick="window.open('https://twitter.com', '_blank')">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
              Login with Twitter
              </button>
              <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit"
              onclick="window.open('https://facebook.com', '_blank')">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
              Login with Facebook
              </button>
              <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit"
              onclick="window.open('https://github.com', '_blank')">
              <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
              Login with GitHub
              </button>
            </form>
          </div>
      </div>
    </div>
  </div>
  <!--Modal Login-->

 <!-- Modal Sign up -->
 <div class="modal fade" tabindex="-1" role="dialog" id="Signup">
  <div class="modal-dialog" role="document">
  <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
      <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
      <form class="">
          <div class="form-floating mb-3">
          <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
          <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
          <small class="text-body-secondary">Already have an account? <a href="" class="text-danger" data-bs-toggle="modal" data-bs-target="#Login">Login here</a></small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit"
          onclick="window.open('https://twitter.com', '_blank')">
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
          Sign up with Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit"
          onclick="window.open('https://facebook.com', '_blank')">
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
          Sign up with Facebook
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit"
          onclick="window.open('https://github.com', '_blank')">
          <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
          Sign up with GitHub
          </button>
      </form>
      </div>
  </div>
  </div>
</div>
<!-- Modal Sign up -->

<!-- Check Out Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalCheck">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0 d-flex justify-content-center align-items-center">
        <div><img src="./images/check.gif" alt="" width="200" height="200"></div>
      </div>
      <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
        <button type="button" class="btn btn-lg btn-primary">Purchase Successfully!</button>
      </div>
    </div>
  </div>
</div>
<!-- Check Out Modal -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>