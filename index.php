<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./images/flash.png">
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

  <!-- Hero -->
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
          <img src="./Image2/360_F_274382882_kygWBxnBYzrcNQ6FvsRaEvMWrqdiUB35.jpg" class="hero-image d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Welcome to TechNic: <h2>Carefully chosen by caring hands of Nic Angelo Ureta.</h2></h1>
        <p class="lead">At TechNic, we take pride in being your go-to computer parts and accessories site. Whether you’re a seasoned gamer or a passionate DIY enthusiast, 
            our mission is simple: <span class="fw-bold">keep your gaming experience smooth and  immersive.</span> With our meticulously curated selection of top-quality components,
            you’ll find precisely what you need for the best gaming experience.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" data-bs-toggle="modal" data-bs-target="#Login">Login</button>
          <a type="button" href="shop.php" class="btn btn-outline-secondary btn-lg px-4">Shop</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero -->

  <!-- Why TechNic -->
  <div class="container px-4 py-5" id="featured-3">
      <h2 class="pb-2 border-bottom">Our Commitment:</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <img src="./images/firstFeatures.png" alt="" height="40">
          </div>
          <h3 class="fs-2 text-body-emphasis">Wide Selection of Quality Parts</h3>
          <p>At TechNic, we curate an extensive range of genuine and high-quality computer parts. Whether it’s replacement components, performance upgrades, or accessories, our catalog covers it all. Customers can easily find the exact part they need for their specific make and model, saving them time and effort compared to traditional brick-and-mortar stores.</p>
          <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="./images/secondFeatures.png" alt="" height="40">
        </div>
        <h3 class="fs-2 text-body-emphasis">Convenience and Accessibility</h3>
        <p>Shopping online with TechNic offers unparalleled convenience. Customers can browse our website 24/7, from the comfort of their homes or while on the go. No more waiting in long queues or dealing with limited store hours. Plus, our user-friendly interface ensures a seamless shopping experience, with detailed product descriptions, compatibility information, and easy checkout options.</p>
        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="./images/thirdFeatures.png" alt="" height="40">
        </div>
        <h3 class="fs-2 text-body-emphasis">Expert Advice and Support</h3>
        <p>TechNic isn’t just about selling parts; it’s about building a community of car enthusiasts. Our team of experts is passionate about cars and understands the intricacies of each component. Customers can reach out to us for personalized advice, installation tips, and troubleshooting assistance. Whether they’re DIY mechanics or professional repair shops, we’re here to support them every step of the way.</p>
        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
      </div>
    </div>
  </div>
  <!-- Why TechNic -->

  <!-- Slides -->
  <div class="container mb-5">
    <div class="d-flex justify-content-between">
      <h2>Featured Products</h2>
      <a href="./shop.html" class="text-decoration-none text-danger"><h5>View all</h5></a>
    </div>
  </div>
  <div class="container w-75 mt-5 slides-images">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators pb-0 mb-0">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-flex align-items-center align-items-stretch row cover">
        <div class="first-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
            <img src="./image2/asus-tuf-rtx-4090-ph-btz.webp" alt="..." class="product-image mt-5 align-self-center" height="100" width="100">
          </div>
          <div>
            <p class="mt-5 slides-product-description ms-3">ASUS RTX 4090 OC</p>
            <p class="slides-product-price text-danger ms-3">₱ 60,800.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="mt-1" width="30" height="30"></a>
          </div>
        </div>
        <div class="second-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
            <img src="./Image2/Untitled design.png" alt="..." class="product-image mt-5 align-self-center" height="100" width="100">
          </div>
          <div class="text flex-fill">
            <p class="mt-5 slides-product-description ms-3">GTX 1080ti</p>
            <p class="slides-product-price text-danger ms-3">₱ 12,800.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="mt-1" width="30" height="30"></a>
          </div>
        </div>
        <div class="third-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
            <img src="./Image2/rx5700xt.png" alt="..." class="product-image mt-5 align-self-center" height="100" width="100">
          </div>
          <div>
            <p class="mt-5 slides-product-description ms-3">AMD RX5700XT</p>
            <p class="slides-product-price text-danger ms-3">₱ 9,000.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="mt-1" width="30" height="30"></a>
          </div>
        </div>
        <div class="fourth-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
            <img src="./Image2/3060ti.png" alt="..." class="product-image mt-5 align-self-center" height="100" width="100">
          </div>
          <div class="text flex-fill">
            <p class="mt-5 slides-product-description ms-3">RTX 3060ti</p>
            <p class="slides-product-price text-danger ms-3">₱ 30,800.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="mt-1" width="30" height="30"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="d-flex align-items-center align-items-stretch row cover">
        <div class="first-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
            <img src="./Image2/corei5.webp" alt="..." class="product-image mt-5" height="100" width="100">
          </div>
          <div class="text flex-fill">
            <p class="mt-5 slides-product-description ms-3">Intel corei5 10400f</p>
            <p class="slides-product-price text-danger ms-3">₱ 12,000.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" class="mt-1" alt="" width="30" height="30"></a>
          </div>
        </div>
        <div class="second-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
            <div class="img flex-fill align-self-center">
              <img src="./Image2/ryzen3.webp" alt="..." class="product-image mt-5" height="100" width="100">
            </div>
            <div class="text flex-fill">
              <p class="mt-5 slides-product-description ms-3">AMD ryzen 3 3200g</p>
              <p class="slides-product-price text-danger ms-3">₱ 4,200.00</p>
            </div>
            <div class="ms-1 mb-5 flex-fill">
              <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
              <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
              <a href="./favorite.html"><img src="./images/favorite.png" class="mt-1" alt="" width="30" height="30"></a>
            </div>
        </div>
        <div class="third-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
            <img src="./Image2/lianli1.jpg" alt="..." class="product-image mt-5" height="100" width="100">
          </div>
          <div class="text flex-fill">
            <p class="mt-5 slides-product-description ms-3">Lian li 011</p>
            <p class="slides-product-price text-danger ms-3">₱ 8,999.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" class="mt-1" alt="" width="30" height="30"></a>
          </div>
        </div>
        <div class="fourth-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
            <img src="./Image2/gamdias atlas.webp" alt="..." class="product-image mt-5" height="100" width="100">
          </div>
          <div class="text flex-fill">
            <p class="mt-5 slides-product-description ms-3">Gamdias atlas 26.6' 144hz monitor</p>
            <p class="slides-product-price text-danger ms-3">₱ 7,999.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" class="mt-1" alt="" width="30" height="30"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="d-flex align-items-center align-items-stretch row cover">
        <div class="first-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
             <img src="./Image2/gigamobo.png" alt="..." class="product-image mt-5 align-self-center" height="100" width="100">
          </div>
          <div class="text flex-fill">
            <p class="mt-5 slides-product-description ms-3">Gigabyte A520 AORUS ELITE</p>
            <p class="slides-product-price text-danger ms-3">₱ 7,499.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" class="mt-1" alt="" width="30" height="30"></a>
          </div>
        </div>
        <div class="second-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="text flex-fill align-self-center">
            <img src="./Image2/msitoma.jpg" alt="..." class="product-image mt-5 align-self-center" height="100" width="100">
          </div>
          <div class="text flex-fill">
            <p class="mt-5 slides-product-description">MSI TOMAHAWK B450</p>
            <p class="slides-product-price text-danger">₱ 9,999.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" class="mt-1" alt="" width="30" height="30"></a>
          </div>
        </div>
        <div class="third-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill alig-self-center">
            <img src="./Image2/asus-lc240-argb.webp" alt="..." class="product-image mt-5 align-self-center" height="100" width="100">
          </div>
          <div class="text">
            <p class="mt-5 slides-product-description ms-3">Asus lc240</p>
            <p class="slides-product-price text-danger ms-3">₱ 2,900.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" class="mt-1" alt="" width="30" height="30"></a>
          </div>
        </div>
        <div class="fourth-image col-sm-6 col-xl-3 d-flex flex-column align-items-start border border-dark">
          <div class="img flex-fill align-self-center">
            <img src="./Image2/ddr4ram.jpg" alt="..." class="product-image mt-5 align-self-center" height="100" width="100">
          </div>
          <div class="text flex-fill">
            <p class="mt-5 slides-product-description ms-3">Hyper X fury 8 gb ddr4 3200mhz</p>
            <p class="slides-product-price text-danger ms-3">₱ 1,250.00</p>
          </div>
          <div class="ms-1 mb-5 flex-fill">
            <a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to cart</a>
            <a class="btn btn-danger" href="checkout.html" role="button">Buy now</a>
            <a href="./favorite.html"><img src="./images/favorite.png" class="mt-1" alt="" width="30" height="30"></a>
          </div>
        </div>
      </div>
    </div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Slides -->

  <!-- Products -->
  <div class="album py-5 my-5 bg-body-tertiary">
    <div class="container">
      <div class="d-flex justify-content-between">
        <h2 class="mb-3">Shop</h2>
        <a href="./shop.html" class="text-decoration-none text-danger mb-3"><h5>View all</h5></a>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex align-items-stretch">
        <div class="col">
          <div class="card shadow-sm">
            <img src="./Image2/ryzne7.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <ul class="card-text">
                <li>AMD Ryzen 7 5800X</li>
                <li>MSI MPG B550 Gaming</li>
                <li>MSI RTX 3060ti</li>
                <li>32GB RAM 3.200MHz</li>
                <li>Corsair CV650</li>
              </ul>
              <p class="build-price">₱ 80,000,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                  <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                  <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./Image2/i7.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <ul class="card-text">
                <li>Intel Core i7-10700F</li>
                <li>H510</li>
                <li>Nvidia RTX 3060</li>
                <li>32GB RAM</li>
                <li>Corsair CV 650</li>
              </ul>
              <p class="build-price">₱ 47,900,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                  <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                  <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./Image2/i73.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <ul class="card-text">
                <li>Intel Core i7-11700F</li>
                <li>H510</li>
                <li>32GB RAM</li>
                <li>1TB NVMe SSD</li>
                <li>Corsair CV750</li>
              </ul>
              <p class="build-price">₱ 47,900,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                  <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                  <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
             <img src="./Image2/watercooling.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <div class="product-description overflow-auto" style="height: 10; width: 100%;">
                <ul class="card-text">
                  <li>AMD Ryzen 7 5700X</li>
                  <li>MSI MPG B550 Gaming</li>
                  <li>MSI Radeon RX 6700XT</li>
                  <li>16GB Corsair Vengeance</li>
                  <li>650W be quiet!</li>
                </ul>
              </div>
              <p class="build-price">₱ 89,900,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                    <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                    <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./Image2/r92.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <ul class="card-text">
                <li>AMD Ryzen 9 5900X</li>
                <li>Teamgroup 32GB</li>
                <li>MSI RTX 3070ti</li>
                <li>32GB RAM 3.600MHz</li>
                <li>850W Straight Power</li>
              </ul>
              <p class="build-price">₱ 60,900,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                    <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                    <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./Image2/i52.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <ul class="card-text">
                <li>Intel Core i5-13600KF</li>
                <li>PRIME Z790-A WIF</li>
                <li>TUF GAMING RTX 3070ti</li>
                <li>32GB Corsair Vengeance</li>
                <li>Corsair CV850</li>
              </ul>
              <p class="build-price">₱ 144,900,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                    <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                    <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./Image2/mamaw.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <ul class="card-text">
                <li>Intel Core i5-13400F</li>
                <li>B760</li>
                <li>ASUS GeForce RTX 3060oc</li>
                <li>32GB Corsair Vengeance</li>
                <li>Sesonic Focus 7000w</li>
              </ul>
              <p class="build-price">₱ 90,900,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                    <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                    <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./Image2/sleeperpc.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <ul class="card-text">
                <li>Intel Core i7-13700K</li>
                <li>PRIME Z790-A WIFI</li>
                <li>Geforce RTX 4070</li>
                <li>Fury Beast 32GB</li>
                <li>850W Seasonic Focus</li>
              </ul>
              <p class="build-price">₱ 124,900,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                  <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                  <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="./Image2/qe.webp" class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <ul class="card-text">
                <li>AMD Ryzen 7 5800X</li>
                <li>MSI MPG B550 Gaming</li>
                <li>MSI RTX 3070ti</li>
                <li>32GB RAM 3.600MHz</li>
                <li>850W Seasonic</li>
              </ul>
              <p class="build-price">₱ 99,900,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add to Cart</a>
                  <a href="./checkout.html" type="button" class="btn btn-sm btn-danger">Buy now</a>
                  <a href="./favorite.html"><img src="./images/favorite.png" alt="" class="ms-2 me-2" width="30" height="30"></a>
                </div>
                <small class="text-body-secondary">In Stock</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Products -->
  
<?php
  include("footer.html");
  include("loginmodal.html");
  include("signupmodal.html");
  include("addtocartmodal.html");
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>