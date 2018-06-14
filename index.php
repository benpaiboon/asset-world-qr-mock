<!DOCTYPE html>
<html>

<head>
  <title>Asset World</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css">

  <?php 
    include 'core/lib.header.php';
    $list = []; 
  ?>

  <script>
    $(document).ready(function () {
      var exportList = <?php echo json_encode($list); ?>;

      $('#searchTable').on('click', 'button', function() {
        var empID = $(this).attr('ref');
        exportList.push(empID);
        console.log(exportList);
        $('#searchTable tr.'+ empID).remove();
        var markup = "<tr class='"+empID+"'><td><small>"+empID+"<small></td><td class='text-right'><button type='button' ref='"+empID+"' class='btn btn-outline-danger btn-sm'>&times;</button></td></tr>";
        $("#exportListTable tbody").append(markup);
      });
      
      $('#exportListTable').on('click', 'button', function() {
        var delID = $(this).attr('ref');
        $('#exportListTable tr.'+ delID).remove();
        var markup = "<tr class='"+delID+"'><td><small>"+delID+"<small></td><td class='text-right'><button type='button' ref='"+delID+"' class='btn btn-outline-danger btn-sm'>&times;</button></td></tr>";
        $("#searchTable tbody").append(markup);
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
              $employees = array(
                "hansak" => array(
                  "id" => "hansakID123",
                  "nameTH" => "หาญศักดิ์ อิสริยะทิพย์",
                  "nameEN" => "Hansak Aisariyatip",
                  "position" => "AVP - Portfolio Project Manager",
                  "department" => "Information Technology",
                  "mobile" => "+668 4024 5800",
                  "email" => "hansak.a@assetworld.co.th"
                ),
                "john" => array(
                  "id" => "johnID123",
                  "nameTH" => "จอร์น",
                  "nameEN" => "John Lenon",
                  "position" => "Sale Manager",
                  "department" => "Marketing",
                  "mobile" => "+668 4024 5800",
                  "email" => "john.l@assetworld.co.th"
                ),
                "peter" => array(
                  "id" => "peterID123",
                  "nameTH" => "ปีเตอร์",
                  "nameEN" => "Peter Parker",
                  "position" => "Project Co",
                  "department" => "Information Technology",
                  "mobile" => "+668 4024 5800",
                  "email" => "peter.p@assetworld.co.th"
                ),
              );
              foreach($employees as $e){ ?>
              <tr class="<?php echo $e['id']; ?>">
                <td>
                  <small><?php echo $e['nameTH']; ?></small>
                </td>
                <td>
                  <small><?php echo $e['nameEN']; ?></small>
                </td>
                <td>
                  <small><?php echo $e['position']; ?></small>
                </td>
                <td>
                  <small><?php echo $e['department']; ?></small>
                </td>
                <td>
                  <small><?php echo $e['mobile']; ?></small>
                </td>
                <td>
                  <small><?php echo $e['email']; ?></small>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-outline-success btn-sm addSearchBtn" ref="<?php echo $e['id']; ?>">Add</button>
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
                <tr class="<?php echo $flist; ?>">
                  <td><small><?php echo $flist; ?><small></td>
                  <td class='text-right'>
                    <button type='button' ref="<?php echo $flist; ?>" class='btn btn-outline-danger btn-sm'>&times;</button>
                </td></tr>
              <?php } ?>
            </tbody>
          </table>
          <div>
          </div>  
      </div>
      </div>
</body>

</html>