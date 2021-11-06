<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH DAB</title>
    <link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
           <h2>DA System</h2>
          </a>
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Doctors</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Patients</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Contact</a></li>
          </ul>
          <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Register</button>
          </div>
        </header>
      </div>
    


    <!--
        extending content
    -->
    @yield('content')
  
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">Copyright &copy; 2021.</span>
      <span class="text-muted ml-auto">All Rights Reserved.</span>
    </div>
  </footer>
  

    <script src="{{ asset ('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>