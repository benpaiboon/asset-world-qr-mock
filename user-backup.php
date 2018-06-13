<!DOCTYPE html>
<html>

<head>
  <title>Asset World</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css">

  <?php include 'core/lib.header.php'; ?>

</head>

<body>
  <?php include 'core/navbar.php'; ?>
  <?php include 'assets/lib/phpqrcode/qrlib.php'; ?>
  <?php include 'core/functions.php'; ?>
  
  <div class="container">
    <div class="card contentWrapper">
      <div class="card-body">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">User Detail</li>
          </ol>
        </nav>
        <div class="row justify-content-center">
          <div class="col-md-2">
            <div class="">
              <img class="card-img-top" src="assets/img/person.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-md-2">
            <div class="">
              <img class="card-img-top" src="assets/img/qr.jpg" alt="Card image cap">
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>หาญศักดิ์ อิสริยะทิพย์</b></h5>
                <p class="card-text">Tel : 0212345678</p>
                <p class="card-text">Mobile : 0912345678</p>
                <p class="card-text">Email : john.c@assetworld.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>