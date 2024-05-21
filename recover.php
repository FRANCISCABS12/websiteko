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


<?php
  include("header.html");
?>

  <!-- Content -->
  <div class="container my-5">
      <div class="position-relative p-5 text-center text-muted">
        <h2 class="text-body-emphasis mt-3">Recover your password</h2>
        <p class="py-2 m-0">Enter your Email:</p>
        <input id="newsletter1" type="text" class="py-1 px-4" placeholder="Email">
        <button class="btn btn-danger" type="button">Recover</button>
      </div>
  </div>
  <!-- Content -->
<?php
  include("footer.html");
  include("loginmodal.html");
  include("signupmodal.html");
  include("addtocartmodal.html");
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>