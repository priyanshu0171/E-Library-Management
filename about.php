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
  </head>
  <body>
    <header class="main-header container-fluid">
      <p class="mb-0 covid_info text-uppercase text-center">
      Online library management
      </p>
    </header>
    <?php include "./components/_navbar.php"; ?>
    <main>
      <div class="bg-container">
        <img
          src="./assets/images/lib_0.jpg"
          class="hero-image"
          alt="Library Image"
          height="233"
          width="100%"
        />
        <h1 class="centered h1">About</h1>
      </div>

      <div class="container my-4">
        <div class="row">
          <div class="col-12">
            <p class="lead featured-text" style="font-weight: 500;">
              Online Library Management System is an Automated Library System
              that handles the various functions of the library. It provides a
              complete solution to the library management software. The online
              Library Management System is classified into two parts Bar Code
              System and RFID System.
              <br /><br />
              Library plays an important role in all schools and colleges, no
              educational institution can exist without Library Administration
              Software. It is an important part of every school and college and
              it helps the librarian to keep records of available books as well
              as issued books. Library Management System software helps in
              different ways by providing students the facility to learn, gather
              resources, promote group learning and improve knowledge and
              skills.
            </p>
            <strong class="featured-text"> <h3>Features of Online Library Management System</h3></strong>
            <ul class="featured-text">
                <li>Integration of all records of students</li>
                <li>Manage the records systematically</li>
                <li>It can track any information online</li>
                <li>One can generate the reports</li>
                <li>Manage all information online</li>
                <li>Easy to maintain records</li>
                <li>It leads to fast book entry</li>
           
            </ul>
          </div>
        </div>
      </div>
    </main>

    <?php include "./components/_footer.php"; ?>

    <script src="./assets/js/bootstrap.min.js"></script>
  </body>
</html>
