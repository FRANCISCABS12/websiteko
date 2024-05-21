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

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-2">
                <div class="container d-flex flex-column bg-body-tertiary">
                    <div class="categories align-self-center"><h2>Categories</h2></div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action text-wrap overflow-hidden">Motherboards</a>
                        <a href="#" class="list-group-item list-group-item-action text-wrap overflow-hidden">Cases</a>
                        <a href="#" class="list-group-item list-group-item-action text-wrap overflow-hidden">GPU's</a>
                        <a href="#" class="list-group-item list-group-item-action text-wrap overflow-hidden">CPU's</a>
                        <a href="#" class="list-group-item list-group-item-action text-wrap overflow-hidden">Monitors</a>
                        <a href="#" class="list-group-item list-group-item-action text-wrap overflow-hidden">Keyboards</a>
                        <a href="#" class="list-group-item list-group-item-action text-wrap overflow-hidden">Mouse</a>
                        <a href="#" class="list-group-item list-group-item-action text-wrap overflow-hidden">Accessories</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <!-- Products -->
                <div class="album bg-body-tertiary">
                    <div class="container">
                    <div class="d-flex justify-content-between">
                        <h2 class="mb-3">Shop</h2>
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
                                <li>MSI Radeon RX 6700xt</li>
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
                                <li>MSI TOMAHAWK GAMING</li>
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
                                <li>PRIME Z790-A</li>
                                <li>TUF RTX 3070ti</li>
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
                                <li>ASUS RTX 3060ti</li>
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
            </div>
        </div>
    </div>
    <?php
        include("footer.html");
    ?>
    <?php
        include("loginmodal.html");
        include("signupmodal.html");
        include("addtocartmodal.html");
    ?>>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>