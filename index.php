<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/styles/main.css" />
    <link rel="stylesheet" href="./assets/styles/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <title>E - Library | Online Library Management</title>
</head>

<body>
    <header class="main-header container-fluid">
        <p class="mb-0 covid_info text-uppercase text-center">
            for covid updates visit : <a class="link-text" href="#"> this</a>
        </p>
    </header>
    <?php include "./components/_navbar.php"; ?>
    <main>
        <div class="bg-container">
            <img src="./assets/images/lib_0.jpg" class="hero-image" alt="Library Image" height="233" width="100%" />
            <h1 class="centered h1">Online Library Management</h1>
        </div>
        <center>
            <div class="container mt-lg-5 mt-md-4 mt-sm-3">
                <h3 class="text-uppercase text-center font-weight-bold mt-3">
                    <strong> Our 3 primary features </strong>
                </h3>
                <div class="row mx-auto mt-5">
                    <div class="col-lg-4 col-md-6 py-3">
                        <img src="./assets/images/inventory.png" alt="Featured Images" height="123px" />
                        <h5 class="mt-5 text-uppercase"> <strong>Digital book inventory</strong></h5>
                        <p class="featured-text text-muted mt-3">
                            Well organised digital book inventory <br>with handy search feature
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <img src="./assets/images/search.png" alt="Featured Images" height="123px" />
                        <h5 class="mt-5 text-uppercase"> <strong>Search Books</strong></h5>
                        <p class="featured-text text-muted mt-3">
                            Easy to use search feature to easily <br>find your books
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <img src="./assets/images/defaulter.png" alt="Featured Images" height="123px" />
                        <h5 class="mt-5 text-uppercase"> <strong>defaulter list</strong></h5>
                        <p class="featured-text text-muted mt-3">
                            If you think you can steal the book <br>here is the defaulter’s list
                        </p>
                    </div>
                </div>
            </div>
        </center>

        <img class="mt-4 lib-image" src="./assets/images/lib_1.jpg" width="100%" alt="Library" height="180">
        <div class="text-center">
            <a href="./admin/admin_login.php" class="btn btn-sm btn-primary my-4">
                Admin Login
            </a>
        </div>
    </main>
    <?php include "./components/_footer.php"; ?>

    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>