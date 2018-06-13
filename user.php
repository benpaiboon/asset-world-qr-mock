<!DOCTYPE html>
<html>

<head>
  <title>Asset World</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css">

  <?php include 'core/lib.header.php'; ?>

  <style>
    #userCardContent .wrapUserImage img{
      width: 140px;
      height: auto;
    }
    #approveTable{
      margin-top: 50px;
    }
    #approveTable td{
      border-top: 0px;
    }
  </style>

  <script>
    function printCard() {
      window.print();
    }
  </script>
</head>

<body>
  <?php include 'core/navbar.php'; ?>

  <div class="container">
    <div class="card contentWrapper">
      <div class="card-body">
        <nav id="userDetailBreadcrumbBar" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">User Detail</li>
          </ol>
        </nav>
        <!-- <div class="row justify-content-center">
          <div class="col-md-2">
            <div class="card">
              <img class="card-img-top" src="assets/img/person.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img class="card-img-top" src="assets/img/qr.JPG" alt="Card image cap">
            </div>
          </div>
        </div> -->
        <div class="text-right">
          <button class="btn btn-info" onclick="printCard()" id="printBtn">Print</button>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="card">
              <div class="card-body text-center" id="userCardContent">
                <div class="wrapUserImage mb-4">
                  <div class="d-inline mr-1"><img src="assets/img/person.JPG" alt="Card image cap"></div>
                  <div class="d-inline ml-1"><img src="assets/img/qr.JPG" alt="Card image cap"></div>
                </div>
                <h5 class="card-title"><b>หาญศักดิ์ อิสริยะทิพย์</b></h5>
                <p class="card-text">Hansak Aisariyatip</p>
                <p class="card-text">AVP - Portfolio Project Manager</p>
                <p class="card-text">Information Technology</p>
                <p class="card-text">ASSET WORLD CORP CO., LTD</p>
                <p class="card-text">56th Fl, Empire Tower, 1 South Sathorn Road, Yannawa, Sathorn, Bangkok 10120 Thailand.</p>
                <p class="card-text">www.assetworld.co.th</p>                
                <p class="card-text"><b>M: </b>+668 4024 5800</p>                
                <p class="card-text"><b>T: </b>+66 2227 9444 Ext. 9999</p>                
                <p class="card-text"><b>F: </b>+66 2670 1888</p>
                <!-- <p class="card-text"><img style="width: 120px;" src="assets/img/qr.JPG" alt="Card image cap"></p> -->
                <p class="card-text">hansak.a@assetworld.co.th</p>                                
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- <div class="col-md-2">
            <p>test</p>
          </div>
          <div class="col-md-2">
            <p>test</p>
          </div> -->
          <div class="col-md-11">
            <table id="approveTable" class="table">
              <tr>
                <td>Requested by : </td>
                <td class="text-center">______________________</td>
                <td> </td>                
                <td>Approved by : </td>
                <td class="text-center">______________________</td>
                <td>( __________________ )</td>
              </tr>
              <tr>
                <td></td>
                <td class="text-center">( ______________________ )</td>
                <td> </td>                
                <td></td>
                <td class="text-center">( ______________________ )</td>
                <td></td>
              </tr>
              <tr>
                <td>Received by : </td>
                <td class="text-center">______________________</td>
                <td> </td>                
                <td>Approved by : </td>
                <td class="text-center">______________________</td>
                <td>( __________________ )</td>
              </tr>
              <tr>
                <td></td>
                <td class="text-center">( ______________________ )</td>
                <td> </td>                
                <td></td>
                <td class="text-center">( ______________________ )</td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>