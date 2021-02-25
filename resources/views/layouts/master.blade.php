<!doctype html>
<html lang="en">

<head>
    @include('layouts.include.head')
    @yield('css')
    @livewireStyles
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        @include('layouts.include.sidebar')
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        @include('layouts.include.navbar')
      </nav>
      <!-- End Navbar -->
      <div class="content">
          @yield('content')
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
            @yield('js')
            @livewireScripts
            </nav>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{('assets/js/core/popper.min.js')}}"></script>
  <script src="{{('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{('assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{('assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script>
</body>

</html>
