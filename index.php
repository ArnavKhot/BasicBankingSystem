


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Banking System</title>
  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <!-- CSS Link -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="container-fluid">
    <!-- Nav Bar -->
    <!-- Page 1 -->
    <section id="page1">
      <div class="overlay">
        <nav class="navbar  navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/" target="_blank" style="color:#f5b120">The Sparks Foundation</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="create_user.php">Create User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#page2">Transaction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#page3">Contact</a>
              </li>
            </ul>
          </div>
        </nav>


        <h1 class="heading">Bank Management System</h1>
        <p style="color: beige; font-size: large;">Earn more, save more, get more.</p>
        <a href="#page2"><button class="btn btn-outline-light btn-lg getstarted">Get Started</button></a>


      </div>
    </section>


    <!-- Page 2 -->
    <section id="page2">
    <div class="overlay">
      <h2>Services</h2>
      <div class="page2buttons">


        <div class="row">

          <div class="col-lg-4">
            <a href="getdetail.php">
            <button class="btn btn-outline-info btn-lg dynamic-button add" type="button" data-toggle="modal" data-target="#myModal">
              <img src="images/customer.png" class="button-img" alt="add-customer" height="60px" width="60px">
              <h3>VIEW CUSTOMER</h3>
              <p class="button-para">View all the customers having account in the bank.</p>
            </button>
            </a>
          </div>

          <div class="col-lg-4">
            <a href="transfer.php">
            <button class="btn btn-outline-info btn-lg dynamic-button transfer">
              <img src="images/transfer.png" class="button-img" alt="transfer-money" height="60px" width="60px">
              <h3>TRANSFER MONEY</h3>
              <p class="button-para">Transfer money between multiple accounts.</p>
            </button>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="transaction.php">
            <button class="btn btn-outline-info btn-lg dynamic-button view">
              <img src="images/search.png" class="button-img" alt="search-image" height="60px" width="60px">
              <h3>TRANSACTION HISTORY</h3>
              <p class="button-para">View transaction between multiple account.</p>
            </button>
              </a>
          </div>
        </div>
      </div>
      </div>
    </section>


    <!-- Page 3 -->
    <section id="page3">
      <div class="bottom-container">
        <div class="link">
          <a class="footer-link linkedin" href="https://www.linkedin.com/" target="_blank"><img src='images/linkedin.png' alt="linkedin" class="linkedin" height="30px" width="30px"></a>
          <a class="footer-link twitter" href="https://twitter.com/" target="_blank"><img src='images/twitter.png' alt="twitter" class="twitter" height="30px" width="30px"></a>
          <a class="footer-link github" href="https://github.com/" target="_blank"><img src='images/globe.png' alt="website" class="website" height="30px" width="30px"></a>

          <p class="copyright">© 2021 Arnav Khot.</p>
        </div>
    </section>





  </div>
</body>

</html>
