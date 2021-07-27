<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/styles/main.css" />
    <link rel="stylesheet" href="./assets/styles/css/bootstrap.min.css" />
    <link
      rel="shortcut icon"
      href="./assets/images/logo.png"
      type="image/x-icon"
    />
    <title>E - Library | Online Library Management</title>
    <link rel="stylesheet" href="./datatables/jquery.dataTables.min.css" />
  </head>

  <body>
    <header class="main-header container-fluid">
      <p class="mb-0 covid_info text-uppercase text-center">
        Online library management
      </p>
    </header>
    <?php include "./components/_navbar.php"; ?>
    <main class="container">
      <table id="books" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>Id</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>bid001</strong></td>
                <td class="container">
                    <div class="row">
                        <div class="col-8">
                            publisher
                        </div>
                        <div class="col-4">
                            <img src="./assets/Books/bid001.jpg" height="200">
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
        <!-- Logic to be implemented -->
    </table>
    </main>
    <?php include "./components/_footer.php"; ?>

    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./datatables/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#books").DataTable();
      });
    </script>
  </body>
</html>
