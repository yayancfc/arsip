<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/simple-sidebar.css') }}">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

  <!-- Bootstrap core JavaScript -->
  
  <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Logo </div>
      <div class="list-group list-group-flush">
        <a href="{{url('sekretariat')}}" class="list-group-item list-group-item-action bg-light">Surat</a>
        <a href="{{url('sekretariat/pegawai')}}" class="list-group-item list-group-item-action bg-light">Pegawai</a>
        <a href="{{url('sekretariat/laporan')}}" class="list-group-item list-group-item-action bg-light">Laporan</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Logout</a>
        <hr>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    @yield('content')

    
  </div>
  <!-- /#wrapper -->


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>