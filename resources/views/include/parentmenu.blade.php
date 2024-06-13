<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .sidebar {
      width: 3.5rem;
      background-color: #fff6a0;
      height: 100vh;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="sidebars.css" rel="stylesheet">
</head>
<body>
<div class="sidebar d-flex flex-column flex-shrink-0">
  <a href="/" class="d-block p-3 link-dark text-decoration-none text-center" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
    <img src="img/kafa logo.png" width="30" height="30" alt="Logo">
    <span class="visually-hidden">Icon-only</span>
  </a>
  <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
    <li class="nav-item">
      <a href="#" class="nav-link active py-3 border-bottom" aria-current="page" title="Result" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="img/medal (y).png" width="24" height="24" alt="Result">
      </a>
    </li>
    <li>
      <a href="#" class="nav-link py-3 border-bottom" title="Timetable" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="img/timetable (y).png" width="24" height="24" alt="Timetable">
      </a>
    </li>
    <li>
      <a href="KAReport" class="nav-link py-3 border-bottom" title="Report" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="img/report (y).png" width="24" height="24" alt="Report">
      </a>
    </li>
    <li>
      <a href="#" class="nav-link py-3 border-bottom" title="Bulletin" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="img/bulletin (y).png" width="24" height="24" alt="Bulletin">
      </a>
    </li>
    <li>
      <a href="#" class="nav-link py-3 border-bottom" title="Profile" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="img/user (y).png" width="24" height="24" alt="Profile">
      </a>
    </li>
  </ul>
  <div class="dropdown border-top">
    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div>
</body>

<!-- Bootstrap core JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq6s6j6p3uT0Kk7RV4MdOW4HFX8d8C94qppk8KzFY6N5sk7vFb" crossorigin="anonymous"></script>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
</script>
</html>