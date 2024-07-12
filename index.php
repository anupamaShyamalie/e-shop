<?php
include('includes/connect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container-fluid p-0 m-0">
        <!-- header -->
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LUXE.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">REGISTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TOTAL PRICE:100/=</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" style="border-radius: none;" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- main -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid bg-dark text-light">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="navbar-brand" href="#">Welcome to Luxe</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="#">Login.</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- title -->
        <div class="bg-transparent">
            <h1 class="text-center">LUXE.</h1>
            <p class="text-center">The ultimate luxury destination</p>
        </div>

        <!-- products & sidenav -->
        <div class="row  mx-1 ">
            <div class="col-md-10">
                <!-- products -->
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://i.ibb.co/wM50jsy/photo-1467043237213-65f2da53396f-removebg-preview.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><button class="add-to-cart">Add to cart</button></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://i.ibb.co/CJMKMg0/photo-1434389677669-e08b4cac3105-removebg-preview.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><button class="add-to-cart">Add to cart</button></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://i.ibb.co/jLdM2C2/photo-1515555230216-82228b88ea98-removebg-preview.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><button class="add-to-cart">Add to cart</button></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://i.ibb.co/PTrG3QX/flower.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><button class="add-to-cart">Add to cart</button></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://i.ibb.co/K5yzT96/cake-2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><button class="add-to-cart">Add to cart</button></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://i.ibb.co/5MHSwB6/cake-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><button class="add-to-cart">Add to cart</button></small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2 bg-dark p-0">
                <!-- sidenav  -->
                <!-- brands to be displayed  -->
                <ul class="navbar-nav me-auto text-light text-center">
                    <li class="nav-item listGroupItem ">
                        <a href="" class="nav-link bg-secondary ">
                            <h5>Delivery Brands</h5>
                        </a>
                    </li>
                    <?php
                    $sql = "SELECT * FROM `brands`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];
                        echo '<li class="nav-item ">
                        <a href="index.php?brand=' . $brand_id . '" class="nav-link ">' . $brand_title . '</a>
                    </li>';
                    }
                    ?>
                </ul>

                <!-- category to be displayed  -->
                <ul class="navbar-nav me-auto text-light text-center">
                    <li class="nav-item listGroupItem ">
                        <a href="" class="nav-link bg-secondary ">
                            <h5>Categories</h5>
                        </a>
                    </li>
                    <?php
                    $sql = "SELECT * FROM `categories`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $category_title = $row['cat-title'];
                        $category_id = $row['cat_id'];
                        echo '<li class="nav-item ">
                        <a href="index.php?category=' . $category_id . '" class="nav-link ">' . $category_title . '</a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>




        <!-- footer -->
        <div class="bg-dark">
            <p class="text-center text-light p-3">© 2022 Luxe. All rights reserved.</p>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>