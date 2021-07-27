<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/styles/main.css" />
    <link rel="stylesheet" href="../assets/styles/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon" />
    <title>E - Library | Online Library Management | Administration</title>
</head>

<body>
    <header class="main-header container-fluid">
        <p class="mb-0 covid_info text-uppercase text-center">
            Administration
        </p>
    </header>

    <main>
        <div class="container text-center my-5">
            <div class="row mx-auto">
                <div class="text-center">
                    <img src="../assets/images/adminuser.png" style="height: 100px; width:100px;">
                </div>
                <p class="mt-3 featured-text">Please fill the Admin authentication info</p>
                <div class="col-md-12 col-lg-4 mx-auto">
                    <div class="card-body">
                        <form action="authenticate.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" autocomplete="off" class="form-control" id="floatingInput" placeholder="eg RRI001">
                                <label for="floatingInput">Admin Id</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="btn btn-sm btn-primary mt-3">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "../components/_footer.php"; ?>

    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>