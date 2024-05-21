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

  <!-- Content -->
  <div class="container my-5">
      <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
        <img src="./images/favorite.png" alt="" height="100" width="100" class="mt-5">
        <h2 class="text-body-emphasis mt-3">Favorite is empty</h2>
        <div class="d-grid gap-2 col-6 mx-auto mt-5">
          <a href="shop.html" class="btn btn-danger" type="button">Shop Now</a>
        </div>
      </div>
  </div>
  <!-- Content -->
<?php
  include("footer.html");
  
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>