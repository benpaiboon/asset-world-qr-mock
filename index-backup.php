<!DOCTYPE html>
<html>

<head>
  <title>Asset World</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css">

  <?php include 'core/lib.header.php'; ?>

  <script>
    $(document).ready(function () {
      // $('#myTable').DataTable();
    });
  </script>
</head>

<body>
  <?php include 'core/navbar.php'; ?>

  
  <div class="card contentWrapper">

    <div class="card-body"> 
        <!-- Form Row -->
        <form>
          <div class="form-row justify-content-end">
            <div class="form-group col-md-2">
              <select class="form-control">
                <option>Select Field</option>
                <option>NameTH</option>
                <option>NameEN</option>
                <option>Position</option>
                <option>Department</option>
                <option>Mobile</option>
                <option>Email</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter keyword...">
                  <div class="input-group-append">
                    <button class="btn btn-info" type="button">Search</button>
                  </div>
              </div>
            </div>
          </div>
        </form>
        <!-- Export Btn -->
        <!-- <div class="text-right" id="groupBtn">
          <button type="button" class="btn btn-info btn-sm">Export Zip</button>
        </div> -->

        <!-- Table Search-->
        <div class="table-responsive">
          <table id="myTable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>              
                <th scope="col">NameTH</th>
                <th scope="col">NameEN</th>
                <th scope="col">Position</th>
                <th scope="col">Department</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              for($i=0; $i<=0; $i++){ ?>
              <tr>
                <td><input type="checkbox" name="staffID" value="staffID"></td>
                <td><small>หาญศักดิ์ อิสริยะทิพย์</small></td>
                <td><small>Hansak Aisariyatip</small></td>
                <td><small>AVP - Portfolio Project Manager</small></td>
                <td><small>Information Technology</small></td>
                <td><small>+668 4024 5800</small></td>
                <td><small>hansak.a@assetworld.co.th</small></td>
                <td class="text-center">
                  <a href="user.php?empID=123" class="btn btn-outline-info btn-sm" role="button">View</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        <div>
        <hr>
        <!-- Table Export -->
        <div class="table-responsive">
          <table id="myTable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>              
                <th scope="col">NameTH</th>
                <th scope="col">NameEN</th>
                <th scope="col">Position</th>
                <th scope="col">Department</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              for($i=0; $i<=0; $i++){ ?>
              <tr>
                <td><input type="checkbox" name="staffID" value="staffID"></td>
                <td><small>หาญศักดิ์ อิสริยะทิพย์</small></td>
                <td><small>Hansak Aisariyatip</small></td>
                <td><small>AVP - Portfolio Project Manager</small></td>
                <td><small>Information Technology</small></td>
                <td><small>+668 4024 5800</small></td>
                <td><small>hansak.a@assetworld.co.th</small></td>
                <td class="text-center">
                  <a href="user.php?empID=123" class="btn btn-outline-info btn-sm" role="button">View</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        <div>
    </div>
  </div>
  
</body>

</html>
