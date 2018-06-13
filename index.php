<!DOCTYPE html>
<html>

<head>
  <title>Asset World</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css">

  <?php include 'core/lib.header.php'; ?>

  <script>
    $(document).ready(function () {
       $('#exportListTable').on('click', 'button', function() {
        var delID = $(this).attr('ref');
        // console.log(delID);
        $('#exportListTable tr#'+ delID).remove();
       });
    });
  </script>
</head>

<body>
  <?php include 'core/navbar.php'; ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mt-3">
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
                  <button class="btn btn-secondary" type="button">Search</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="table-responsive">
          <table id="searchTable" class="table table-striped table-hover">
            <thead>
              <tr>
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
              for($i=0; $i<5; $i++){ ?>
              <tr>
                <td>
                  <small>หาญศักดิ์ อิสริยะทิพย์</small>
                </td>
                <td>
                  <small>Hansak Aisariyatip</small>
                </td>
                <td>
                  <small>AVP - Portfolio Project Manager</small>
                </td>
                <td>
                  <small>Information Technology</small>
                </td>
                <td>
                  <small>+668 4024 5800</small>
                </td>
                <td>
                  <small>hansak.a@assetworld.co.th</small>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-outline-success btn-sm" id="addBtn">Add</button>
                  <a href="user.php?empID=123" class="btn btn-outline-info btn-sm" role="button">View</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        </div>
      <!-- Right List -->
      <div class="col-md-2 mt-3">
        <form>
          <div class="form-row justify-content-end">
            <div class="form-group">
              <button type="button" class="btn btn-secondary">Export</button>
            </div>
          </div>
        </form>
        <div class="table-responsive">
          <table id="exportListTable" class="table table-hover">
            <tbody>
              <?php 
              $fakeList = ['Hansak','John','Peter'];
              foreach($fakeList as $flist){ ?>
              <tr id="<?php echo $flist; ?>">
                <td>
                  <small><?php echo $flist; ?></small>
                </td>
                <td class="text-center">
                  <button type="button" ref="<?php echo $flist; ?>" class="btn btn-outline-danger btn-sm">&times;</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <div>
          </div>  
      </div>
      </div>
</body>

</html>