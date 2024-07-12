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

        <div class="row m-5">
            <div class="col-md-6">
                <img src="https://cdn.pixabay.com/photo/2023/02/12/13/28/business-7785093_1280.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <table class="table caption-top">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">To Redirect</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Insert Products</td>
                            <td><button class="text-muted"><a href="./insert_products.php" class="text-muted text-decoration-none">Click Here</a></button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Insert Categories</td>
                            <td><button class="text-muted"><a href="index.php?insert_cat" class="text-muted text-decoration-none">Click Here</a></button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Insert Brands</td>
                            <td><button class="text-muted"><a href="index.php?insert_brand" class="text-muted text-decoration-none">Click Here</a></button></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>View Products</td>
                            <td><button class="text-muted">Click Here</button></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>View Categories</td>
                            <td><button class="text-muted">Click Here</button></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>View Brands</td>
                            <td><button class="text-muted">Click Here</button></td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>All Payments</td>
                            <td><button class="text-muted">Click Here</button></td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>All Orders</td>
                            <td><button class="text-muted">Click Here</button></td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>List of Users</td>
                            <td><button class="text-muted">Click Here</button></td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Logout</td>
                            <td><button class="text-muted" style="background-color: tomato;">Click Here</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 4th child -->
        <div class="container" id="scroll-target">
            <?php
            if (isset($_GET['insert_cat'])) {
                include('insert_categories.php');
            }
            if (isset($_GET['insert_brand'])) {
                include('insert_brands.php');
            }
            ?>
        </div>

        <!-- footer -->
        <div class="bg-dark">
            <p class="text-center text-light p-3">© 2022 Luxe. All rights reserved.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        window.onload = function() {
            // Check if the URL contains the parameter
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('insert_cat')) {
                // Scroll to the target element
                document.getElementById('scroll-target').scrollIntoView({
                    behavior: 'smooth'
                });
            }
            if (urlParams.has('insert_product')) {
                // Scroll to the target element
                document.getElementById('scroll-target').scrollIntoView({
                    behavior: 'smooth'
                });
            }
            if (urlParams.has('insert_brand')) {
                // Scroll to the target element
                document.getElementById('scroll-target').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        };
    </script>
</body>

</html>