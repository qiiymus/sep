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

      li a:hover {
        background-color: white;
      }

      .active {
        background-color: white;
      }
      
    </style>
  <link href="sidebars.css" rel="stylesheet">
  </head>
  
<div class="d-flex flex-column flex-shrink-0" style="width: 3.5rem; background-color: #9fb996; height: 100%; position: fixed;">
  <a href="/" class="d-block p-3 link-dark text-decoration-none text-center" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
    <img src="{{ asset('img/kafa logo.png') }}" width="30" height="30" alt="Logo">
    <span class="visually-hidden">Icon-only</span>
  </a>
  <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
    <li class="nav-item">
      <a href="#" class="nav-link py-3 border-bottom" title="Result" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="{{ asset('img/medal (g).png') }}" width="24" height="24" alt="Result">
      </a>
    </li>
    <li>
      <a href="{{ route('KAManageTT') }}" class="nav-link py-3 border-bottom" title="Timetable" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="{{ asset('img/timetable (g).png') }}" width="24" height="24" alt="Timetable">
      </a>
    </li>
    <li>
      <a href="{{ route('KAReport') }}" class="nav-link py-3 border-bottom" title="Report" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="{{ asset('img/report (g).png') }}" width="24" height="24" alt="Report">
      </a>
    </li>
    <li>
      <a href="{{ route('bulletin.index') }}" class="nav-link py-3 border-bottom" title="Bulletin" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="{{ asset('img/bulletin (g).png') }}" width="24" height="24" alt="Bulletin">
      </a>
    </li>
    <li>
      <a href="#" class="nav-link py-3 border-bottom" title="Profile" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="{{ asset('img/user (g).png') }}" width="24" height="24" alt="Profile">
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

<!-- JavaScript for Bootstrap Tooltips -->
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
</script>
</html>
