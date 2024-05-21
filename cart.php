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
    include("header.html")
  ?>
  <!-- Nav Bar -->

  <!-- Content -->
  <div class="container my-5">
      <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
        <img src="./images/shopping-cart.png" alt="" height="100" width="100" class="mt-5">
        <h2 class="text-body-emphasis mt-3">Your cart is empty</h2>
        <div class="d-grid gap-2 col-6 mx-auto mt-5">
          <button class="btn btn-danger" type="button">Shop Now</button>
        </div>
      </div>
  </div>
  <!-- Content -->

  <?php
    include("footer.html")
  ?>

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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>