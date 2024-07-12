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

        <!-- 1st child -->
        <div class="container ">
            <h4 class="text-center font-weight-bold">INSERT PRODUCT</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3 w-50 m-auto ">
                    <label for="exampleFormControlInput1" class="form-label ">Product Title</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Your Product Title">
                </div>
                <div class="mb-3 w-50 m-auto ">
                    <label for="exampleFormControlInput1" class="form-label ">Product Description</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Product Description">
                </div>
                <div class="mb-3 w-50 m-auto ">
                    <label for="exampleFormControlInput1" class="form-label ">Product Keyword</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Product Keyword">
                </div>
                <div class="mb-3 w-50 m-auto ">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select a category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 w-50 m-auto ">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select a Brand</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 w-50 m-auto">
                    <label for="formFile" class="form-label">Product Image 1</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3 w-50 m-auto">
                    <label for="formFile" class="form-label">Product Image 2</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3 w-50 m-auto">
                    <label for="formFile" class="form-label">Product Image 3</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3 w-50 m-auto ">
                    <label for="exampleFormControlInput1" class="form-label ">Product Price</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Product Price">
                </div>

                <div class="mb-3 w-50 m-auto ">
                    <button type="submit" name="submit" class="text-muted px-5 py-2" style="background-color: #1b1b1b; color:aliceblue;">Submit</button>
                </div>

            </form>
        </div>


        <!-- footer -->
        <div class="bg-dark">
            <p class="text-center text-light p-3">© 2022 Luxe. All rights reserved.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>