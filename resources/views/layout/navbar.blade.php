<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  {{-- <link rel="stylesheet" href="{{asset('css/login2.css')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  {{-- ---- --}}

  
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  @yield('scripts')
</head>
<body class="body" style="background-image: linear-gradient(15deg, #faf7f4 0%, #ee8f63 100%);">
<nav class="navbar fixed-top navbar-expand-lg  p-md-3">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="me-auto ">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="../home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white " href="#" id="navbardrop" data-toggle="dropdown">Products</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../product/create">Create Product</a>
                <a class="dropdown-item" href="../product/index">Product List</a>
              </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Branches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white " href="#" id="navbardrop" data-toggle="dropdown">Employees</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../employee/create">Create Employee</a>
                <a class="dropdown-item" href="../employee/index">Employee List</a>
              </div>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white " href="#" id="navbardrop" data-toggle="dropdown">Designation</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../designation/create">Create Designation</a>
                <a class="dropdown-item" href="../designation/index">Designation List</a>
              </div>
          </li>
          
        </ul>
      </div>

      <div class="ms-auto">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link text-white" href="../login">Sign In</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add(style="background-image: linear-gradient(15deg, #d98c5d 0%, #e25311 100%);", 'shadow');
      } 
      else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
<br>
  
<div class="container" >
  <br><br><br>
    @yield('content')
</div>
</body>
@yield('footer')
</html>



