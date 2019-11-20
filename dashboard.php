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
<li class="nav-item active"style="font-">
  <a class="nav-link" href="#">
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
    <span style="color:white;">calf<br>Management</span>
  </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="milk.php">
    <i class="fas fa-blender" style="color:red;"></i>
      <span style="color:white;">Milk production</span>
    </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="health.php">
  <i class="fas fa-stethoscope"style="color:red;"></i>
    <span style="color:white;">Health and Hygience<br> management</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="dairyfarm.php">
    <i class="fas fa-prescription"></i>
    <span style="color:white;">Dairy farm record</span>
  </a>
</li>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
<script>
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