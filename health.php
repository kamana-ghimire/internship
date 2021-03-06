<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <!-- navbar -->
<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark static-top">
<a class="navbar-brand" href="#">
        Farm House
</a>
<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto test">
    <li class="nav-item active imp">
      <a class="nav-link" href="#aboutme">Home</a>
    </li>
    &nbsp;
    &nbsp;
    <li class="nav-item">
      <a class="nav-link" href="#portfolio">About Us</a>
    </li>
    &nbsp;
    &nbsp;
    <li class="nav-item">
      <a class="nav-link" href="#hireme">Contact</a>
    </li> 
    &nbsp;
    &nbsp;
    <li class="nav-item">
      <a class="nav-link btn btn-primary" href="#">Logout</a>
    </li>  
  </ul>
</div>  
</nav>
</div>
<div id="wrapper">
<!-- Sidebar -->
<ul class="sidebar navbar-nav">
<li class="nav-item active">
  <a class="nav-link" href="dashboard.php">
  <i class="fas fa-fw fa-tachometer-alt" style="color:red;"></i>
    <span style="color:white;">Dashboard</span>
  </a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="herdmanagement1.php">
  <i class="fas fa-seedling" style="color:red;"></i>
    <span style="color:white;">Herd Management</span>
  </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="feed1.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span style="color:white;">Feed and Feeding<br>Management</span>
    </a>

</li>
<li class="nav-item active">
    <a class="nav-link" href="young1.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span style="color:white;">Calf<br>Management</span>
    </a>

</li>
<li class="nav-item active">
    <a class="nav-link" href="milk.php">
    <i class="fas fa-blender" style="color:red;"></i>
      <span style="color:white;">Milk Production</span>
    </a>

</li>
<li class="nav-item active">
    <a class="nav-link" href="health.php">
    <i class="fas fa-stethoscope"style="color:red;"></i>
      <span style="color:white;">Health and Hygence<br>Management</span>
    </a>

</li>
<li class="nav-item active">
    <a class="nav-link" href="dairyfarm.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span style="color:white;">Dairy Farm Record</span>
    </a>

</li>
</ul>
<div id="content-wrapper">
    <div class="jumbotron jumbotron-fluid">
        <div class ="container-fluid">

        <table>
  <tr>
    <th rowspan="1">Name<br>ID NO</th>
    <th colspan="1">Date</th>
    <th colspan="1">Medicene</th>
    <th colspan="1">Medicene cost</th>
    <th colspan="1">Doctor fee</th>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
</tr>
<tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
</tr>
<tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
</tr>
<tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
</tr>
<tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
</tr>
 


</table>
            </div>
          </div>
        </div>
      </div>
     <button type="button" class="btn btn-outline-light btn-dark button" style="margin-left:74rem;margin-top:-56rem" data-toggle="modal" data-target="#addanimalid">Add new</button>
     <div class="modal fade" id="addanimalid" tabindex="-1" role="dialog" aria-labelledby="deptModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deptModalLabel1">Animals identification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
              <form action="">
                <div class="form-group">
                  <label for="departtname">Date of birth/<br>purchase</label>
                  <input type="text" id="departtname1" name="dname" class="form-control">
                </div>
                <div class="form-group">
                  <label for="departtname">Date of sales/Death</label>
                  <input type="text" id="calving2" name="dname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="departtdesc">Type of breed</label>
                    <input type="text" id="calving1" name="dname" class="form-control">
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>

     
                <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
    <script>
      $(document).ready(function() {
    $('#model1').DataTable({     
      "scrollY": "200px",
      "scrollCollapse": true,
      "paging": false,
      "scrollX": true
                      });
                        } );
        (function($) {
      "use strict"; // Start of use strict
      // Toggle the side navigation
      $("#sidebarToggle").on('click', function(e) {
        e.preventDefault();
        $("body").toggleClass("sidebar-toggled");
        $(".sidebar").toggleClass("toggled");
      });
      // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
      $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
        if ($(window).width() > 768) {
          var e0 = e.originalEvent,
            delta = e0.wheelDelta || -e0.detail;
          this.scrollTop += (delta < 0 ? 1 : -1) * 30;
          e.preventDefault();
        }
        });
        })(jQuery); // End of use strict
      </script>
</body>
</html>