<!DOCTYPE html>
<html>

<head>
  <title>Asset World</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css">

  <?php include 'core/lib.header.php'; ?>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="text-center">
          <img class="card-img-top" src="assets/img/asw-logo.jpg" alt="Card image cap" style="width: 250px; height: auto;">
        </div>
        <div class="card">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div> -->
              <a class="btn btn-primary" href="index.html" role="button">Login</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>