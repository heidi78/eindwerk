<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eindwerk</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('/css/sb-admin.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/mijncss.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{url('/')}}">Perfect Balance</a>
    <div class="navigatie">
      <ul class="lijst d-flex justify content">
        <li class="inner-lijst">
          <a class="navbar-brand" href="#" role="button">
           {{ Auth::user()->name }} <span class="caret"></span>
         </a>
       </li>
       <li class="inner-lijst"> 
        <a class="navbar-brand" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>
</div>
</nav>

<div id="wrapper">
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  <a href="{{ url('/admin') }}"><i class="fa fa-btn fa-sign-out"></i>Admin Dashboard</a>
</div>
<!-- Sidebar -->

<ul class="sidebar navbar-nav webshop">
  <li class="nav-item">
   <h5 class="nav-link"><i class="fas fa-bolt"></i> Brands</h5>
   <ul class="nav nav-second-level">
    <li>
      <a href="{{route('brands.index')}}" class="nav-link">All Brands</a>
    </li>
    <li>
      <a href="{{route('brands.create')}}" class="nav-link lijntje">Create Brands</a>
    </li>
  </ul>
</li>
<li class="nav-item">
  <a href="{{url('#')}}" class="nav-link"><i class="fas fa-tags"></i> Categories</a>
  <ul class="nav nav-second-level">
    <li>
      <a href="{{route('categories.index')}}" class="nav-link">All Categories</a>
    </li>
    <li>
      <a href="{{route('categories.create')}}" class="nav-link lijntje">Create Category</a>
    </li>

  </ul>
</li>
<li class="nav-item">
  <a href="{{url('#')}}" class="nav-link"><i class="fas fa-box-open"></i> Products</a>
  <ul class="nav nav-second-level">
    <li>
      <a href="{{route('products.index')}}" class="nav-link">All Products</a>
    </li>
    <li>
      <a href="{{route('products.create')}}" class="nav-link lijntje">Create Product</a>
    </li>
  </ul>
</li>
<li class="nav-item">
  <a href="{{url('#')}}" class="nav-link"><i class="far fa-user"></i> Users</a>
  <ul class="nav nav-second-level">
    <li>
      <a href="{{route('users.index')}}" class="nav-link">All Users</a>
    </li>
    <li>
      <a href="{{route('users.create')}}" class="nav-link lijntje">Create User</a>
    </li>
  </ul>
  <p><i class="fas fa-angle-double-down arrow" style="color: #006064;"></i></p>
</li>
<li class="nav-item">
  <a href="{{url('#')}}" class="nav-link"><i class="fas fa-user-tag"></i> Roles</a>
  <ul class="nav nav-second-level">
    <li>
      <a href="{{route('roles.index')}}" class="nav-link">All Roles</a>
    </li>
    <li>
      <a href="{{route('roles.create')}}" class="nav-link lijntje">Create Role</a>
    </li>
  </ul>
</li>
<li class="nav-item">
  <a href="{{url('#')}}" class="nav-link"><i class="fab fa-slideshare"></i> Slider</a>
  <ul class="nav nav-second-level">
    <li>
      <a href="{{route('sliders.index')}}" class="nav-link">All Slider</a>
    </li>
    <li>
      <a href="{{route('sliders.create')}}" class="nav-link lijntje">Create Slider</a>
    </li>
  </ul>
</li>
</ul>

<div id="content-wrapper">
  <!-- /.container-fluid -->

  <!-- Sticky Footer -->
  <footer class="sticky-footer copy">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <i class="far fa-heart"></i> By Heidi Vanhoutte
      </div>
    </div>
  </footer>
  @yield('content')
</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{asset('/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/js/sb-admin.min.js')}}"></script>

<!-- Demo scripts for this page-->
<script src="{{asset('/js/demo/datatables-demo.js')}}"></script>
<script src="{{asset('/js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
