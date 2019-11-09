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
        Logo
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
  <a class="nav-link" href="#">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span>
  </a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="herdmanagement1.php">
    <i class="fas fa-sitemap"></i>
    <span>Herd Management</span>
  </a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="docDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user-md"></i>
    <span>Feed and Feeding<br>Management</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="docDropdown">
    <a class="dropdown-item" href="#">List of Doctors</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Treatment History</a>
  </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="scheduleDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-calendar-check"></i>
      <span>Young stock Management</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="scheduleDropdown">
      <a class="dropdown-item" href="#">All schedules of the day</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Holidays</a>
    </div>
  </li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="patientsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user-injured"></i>
    <span>Milk production</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="patientsDropdown">
    <a class="dropdown-item" href="#">List of Patients</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Patient Cases</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Add Patients</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="appointmentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-stethoscope"></i>
    <span>Fertility management</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="appointmentsDropdown">
    <a class="dropdown-item" href="#">All Appointments</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Today's Appointments</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Upcoming Appointments</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Add Appointments</a>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-prescription"></i>
    <span>Health management</span></a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="labtestDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-notes-medical"></i>
    <span>Housing and manure management</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="labtestDropdown">
    <a class="dropdown-item" href="#">Lab Reports</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Add Lab Reports</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="medicineDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-briefcase-medical"></i>
    <span>Milk processing and <br>marketing</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="medicineDropdown">
    <a class="dropdown-item" href="#">Medicine List</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Add Medicine</a>
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="donorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user-friends"></i>
    <span>Diry farm record</span>
  </a>
  <div class="dropdown-menu" aria-labelledby="donorDropdown">
    <a class="dropdown-item" href="#">List of Donors</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Blood Bank</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Add Donors</a>
  </div>
</li>
</ul>
<div id="content-wrapper">
    <div class="jumbotron jumbotron-fluid">
        <div class ="container-fluid">
        <table>
    <tr>
        <th rowspan="2">Name<br>ID NO</th>
        <th rowspan="2">Date of birth<br>purchase</th>
        <th rowspan="2">Breed type</th>
        <th rowspan="2">Date of sales<br>/Death</th>
    </tr>
    <!-- <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr> -->
  <tr>
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
  </tr>
  <tr>
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
  </tr>
</table>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-outline-light btn-dark button"style="margin-left:16rem;margin-top:-39rem">
     Add New</button>
  </body>
</html>